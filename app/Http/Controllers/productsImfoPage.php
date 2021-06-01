<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\pruductModel;
class productsImfoPage extends Controller
{
    public function login(){
        
    }
    /**
     * Display the specified resource.
     *
     */
    public function show($PName)
    {
        $productInfo=pruductModel::find($PName);
        //$user=;
        $images=(Object)[
            'cssMain'=>asset('css/tingshuoo.css'),
            'css'=>asset('css/聽說.css'),
            'home'=>asset('images/home.png'),
            'Title'=>asset('images/聽說.jpg'),
            'IG'=>asset('images/IG.png'),
            'FB'=>asset('images/FB.png')
        ];
        
        return view('page.1001',[
            "img"=> $images,
            "productInfo"=>$productInfo
        ]);
        //
    }
    //
}
