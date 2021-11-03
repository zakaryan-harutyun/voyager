<?php

namespace App\Http\Controllers;

use App\Models\MainSetting;
use App\Models\Slider;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        $sliders = Slider::all();
        $main_settings = MainSetting::first();

        return view('welcome', compact('sliders','main_settings'));
    }
}
