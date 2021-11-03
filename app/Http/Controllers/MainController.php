<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Models\MainSetting;
use App\Models\Slider;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        $sliders = Slider::all();
        $main_settings = MainSetting::first();

        $coordinates = setting('site.coordinates');
        $coordinates = explode(',', $coordinates);

        return view('welcome', compact('sliders','main_settings','coordinates'));
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

        Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MainMail($data));

        dd(1);
        return redirect()->back();
    }
}
