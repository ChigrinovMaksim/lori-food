<?php

namespace App\Http\Controllers;

use App\Services\TelegramManager;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getMainPage()
    {
        return view('pages.main');
    }

    public function getPizzaCity()
    {
        return view('pages.pizza-city');
    }

    public function getFountain()
    {
        return view('pages.fountain');
    }

    public function postAjaxCallback(Request $request)
    {
        $request->validate([
            'callback_phone' => 'required'
        ]);

        (new TelegramManager())->sendCallbackMessage($request->all());

        return response()->success();
    }
}
