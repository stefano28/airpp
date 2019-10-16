<?php

namespace App\Http\Controllers;

use App\Mail\TextUsSecEmail;
use App\Mail\TextUsEmail;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Redirect;

class TextUsController extends Controller
{
    public function send(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'surname' => 'required',
                'email' => 'required|email',
                'msg' => 'required',
                'privacy' => 'accepted'
            ],
            [
                'name.required' => 'Devi inserire il nome',
                'surname.required' => 'Devi inserire il cognome',
                'email.required' => 'Devi inserire l\'email',
                'email.email' => 'Devi inserire una email valida',
                'msg.required' => 'Devi inserire il messaggio',
                'privacy.accepted' => 'Devi accettare la privacy policy'
            ]);
            DB::table('emails')->insert(
                [
                    'name' => $request->name, 
                    'surname' => $request->surname,
                    'email' => $request->email,
                    'msg' => $request->msg,
                    'date' => Carbon::now()
                ]
            );
            Mail::to(env('MAIL_SEC'))->send(new TextUsSecEmail($request));
            Mail::to($request->email)->send(new TextUsEmail($request));
            \Session::put('success', 'Messaggio inviato con successo');
            return Redirect::to('/contatti');
    }
}
