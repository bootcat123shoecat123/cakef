<?php

namespace App\Http\Controllers\pageControll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function show(){
        $images=(Object)[
            'cssMain'=>asset('css/MainPage.css'),
            'css'=>asset('css/about.css'),
            'home'=>asset('images/home.png'),
            'aboutTitle'=>asset('images/聽說2.jpg'),
            'Title'=>asset('images/聽說.jpg'),
            'IG'=>asset('images/IG.png'),
            'FB'=>asset('images/FB.png'),
        ];
        
        return view('page.about',[
            "img"=> $images
        ]);
    }
    //
}
