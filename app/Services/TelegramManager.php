<?php

namespace App\Services;

class TelegramManager
{
    public function sendCallbackMessage(array $params)
    {
        $message = '📞📞📞 *ОБРАТНЫЙ ЗВОНОК!*' . PHP_EOL .
            '*Телефон:* ' . $params['callback_phone'];

        $this->sendMessage($message);
    }

    protected function sendMessage($text)
    {
        \Telegram::sendMessage([
            'chat_id' => config('telegram.channel'),
            'text' => $text,
            'parse_mode' => 'Markdown'
        ]);
    }
}