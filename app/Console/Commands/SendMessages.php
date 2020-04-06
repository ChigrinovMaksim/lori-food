<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendMessages extends Command
{
    protected $signature = 'send-messages';
    protected $user;
    protected $password;

    protected $text = 'SMS TEXT';
    protected $textDescription = 'SMS DESCRIPTION';

    protected $customPhones = [
        '+380631843067',
    ];

    protected $exceptPhones = [];

    public function __construct()
    {
        parent::__construct();

        $this->user = env('SMS_SEND_USER');
        $this->password = env('SMS_SEND_PASSWORD');
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */

    public function handle()
    {
        if (mb_strlen($this->text) > 70) {
            $this->error('More then 70 symbols!');
        }

        $phones = $this->getPhones(0, 1000);

        $this->checkBalance(count($phones));

        if ($this->confirm('Count phones: ' . count($phones) . ' Start sending messages?')) {
            $this->sendMessages($phones);
            $this->info('done');
        }
    }

    private function getPhones($offset, $limit)
    {
        $phones = \DB::table('phones')
            ->offset($offset)
            ->limit($limit)
            ->pluck('phone')
            ->toArray();

        $phones = array_merge($phones, $this->customPhones);

        return array_diff($phones, $this->exceptPhones);
    }

    protected function sendMessages($recipients)
    {
        $recipientsXML = '';

        foreach ($recipients as $recipient) {
            $recipientsXML .= "<recipient>".$recipient."</recipient>";
        }

        $start_time = 'AUTO';
        $end_time = 'AUTO';
        $rate = 120;
        $lifetime = 4;
        $source = 'LoriFood';

        $myXML 	 = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
        $myXML 	.= "<request>";
        $myXML 	.= "<operation>SENDSMS</operation>";
        $myXML 	.= '		<message start_time="'.$start_time.'" end_time="'.$end_time.'" lifetime="'.$lifetime.'" rate="'.$rate.'" desc="'.$this->textDescription.'" source="'.$source.'">'."\n";
        $myXML 	.= "		<body>".$this->text."</body>";
        $myXML 	.= $recipientsXML;
        $myXML 	.=  "</message>";
        $myXML 	.= "</request>";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_USERPWD , $this->user.':'.$this->password);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_URL, 'http://sms-fly.com/api/api.php');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/xml", "Accept: text/xml"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $myXML);
        curl_exec($ch);
        curl_close($ch);
    }

    protected function checkBalance($countPhones)
    {
        $myXML 	 = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
        $myXML 	.= "<request>";
        $myXML 	.= "<operation>GETBALANCE</operation>";
        $myXML 	.= "</request>";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_USERPWD , $this->user.':'.$this->password);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_URL, 'http://sms-fly.com/api/api.php');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/xml", "Accept: text/xml"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $myXML);
        $response = curl_exec($ch);
        curl_close($ch);

        $response = stristr($response, '<balance>');
        $response = str_replace('<balance>', '', $response);

        if ((int)$response / 0.247 <= $countPhones) {
            $this->error('Too small balance!');
            exit();
        }
    }
}
