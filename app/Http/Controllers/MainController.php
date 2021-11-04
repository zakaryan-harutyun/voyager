<?php

namespace App\Http\Controllers;

use App\Models\Decision;
use App\Models\Mail;
use App\Models\MailSetting;
use App\Models\Slider;
use App\Models\Vacantion;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        $sliders = Slider::all();

        $coordinates = setting('site.coordinates');
        $coordinates = explode(',', $coordinates);
        $vacantions = Vacantion::get();
        $decisions = Decision::get()->toArray();
        $decisions = array_chunk($decisions, 3);


        return view('welcome', compact('sliders','coordinates','vacantions','decisions'));
    }

    public function send(Request $request){

        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'tel' => 'required'
        ]);

        $data = Mail::create([
            'title' => $request->title,
            'name' => $request->name,
            'tel' => $request->tel
        ]);

        $mails = MailSetting::get();

        foreach ($mails as $mail){
            \Mail::to($mail->mail)->send(new \App\Mail\MainMail($data));
        }


        return response()->json(true);
    }
}
