<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\ConsultMail;

class SenderController extends Controller
{
    public function send_consultation(Request $request) {
        $data = $request->validate([
            "name" => [],
            "phone" => ['required','string'],
            "review" => []
        ]);


        Mail::to(explode(",",config('contacts.adres_to_send')))->send(new ConsultMail($data));

        return ["Сообщение отправлено"];
    }


    public function show_thencs() {
        return view('thencs');
    }
}
