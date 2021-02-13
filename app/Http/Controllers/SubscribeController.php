<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Subscription;
use Illuminate\Http\Request;
use App\Rules\Captcha;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'tel' => 'required|numeric',
            'photo' => 'nullable|image',
            'captcha' => 'required|captcha',
        ]);   

        $sub = Subscription::create($request->all());
        $sub->addText($request->get('text'));
        $sub->uploadAvatar($request->file('photo'));
        $client = new Client();
        $message = 'Имя: ' . $request->get('name') . PHP_EOL;
        $message .= 'Номер телефона: ' . $request->get('tel') . PHP_EOL;
        $message .= 'Текст: ' . $request->get('text');
        $res = $client->request('POST', 'http://bot.roadhelper.ru/api/sendMessage', [
            'form_params' => ['message' => $message]
        ]);
        // dd($res->getBody());

        return redirect()->back();
    }

    public function refresh()
    {
        return captcha_img('math');
    }
    
}
