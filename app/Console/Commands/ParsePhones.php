<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ParsePhones extends Command
{
    protected $signature = 'parse:phones {input}';

    protected  $supportedOperators = [
        '039', '067', '068', '096', '097', '098', '050', '066', '095', '099', '063', '093', '091', '092', '094'
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $clients = \FastExcel::import(storage_path($this->argument('input')));

        foreach ($clients as $client) {
            $phone = $this->parsePhone($client['Телефон']);
            $this->info($phone);
            $this->savePhone($client['Фамилия'], $phone);
        }
    }

    private function parsePhone($phone)
    {
        $phone = str_replace(['-', ' ', '(', ')', '+'], '', $phone);

        if (strpos($phone, '380') === 0 && strlen($phone) === 12) {
            $phone = '+' . $phone;
        }

        if (strlen($phone) >= 9) {
            $phone = '+380' . substr($phone, -9);
        }

        return $phone;
    }

    private function savePhone($name, $phone)
    {
        if (strlen($phone) === 13 && $this->isSupportedOperator($phone)) {
            \DB::enableQueryLog();

            try {
                \DB::table('phones')->insert([
                    'id' => \DB::table('phones')->max('id') + 1,
                    'name' => $name,
                    'phone' => $phone
                ]);
            } catch (\Exception $e) {
                $this->info('Duplicate: ' . $phone);
            }

            \DB::commit();
        }
    }

    private function isSupportedOperator($phone)
    {
        $operator = substr($phone, 3, 3);

        return in_array($operator, $this->supportedOperators);
    }
}
