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

    public function getPizzaCity2()
    {
        return view('pages.pizza-city-2');
    }

    public function getKnjagaVtiha()
    {
        return view('pages.knjaga-vtiha');
    }

    public function getFountain()
    {
        return view('pages.fountain');
    }

    public function getGallery()
    {
        return view('pages.gallery');
    }

    public function getDelivery()
    {
        return view('pages.delivery');
    }

    public function getAbout()
    {
        return view('pages.about');
    }

    public function postAjaxCallback(Request $request)
    {
        $request->validate([
            'callback_name' => 'required',
            'callback_phone' => 'required'
        ]);

        (new TelegramManager())->sendCallbackMessage($request->all());

        return response()->json(['code' => 200]);
    }
}
