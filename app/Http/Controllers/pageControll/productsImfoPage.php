<?php

namespace App\Http\Controllers\pageControll;

use App\Http\Controllers\Controller;
use App\Models\memberModel;
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
        if(isset($_SESSION["user"])){
            $user=memberModel::find($_SESSION["user"]);
        }
        //$user=;
        $images=(Object)[
            'cssMain'=>asset('css/MainPage.css'),
            'css'=>asset('css/ProductInfo.css'),
            'home'=>asset('images/home.png'),
            'Title'=>asset('images/聽說.jpg'),
            'IG'=>asset('images/IG.png'),
            'FB'=>asset('images/FB.png')
        ];
        if(isset($user)){
            return  view('page.1001',[
                "img"=> $images,
                "productInfo"=>$productInfo,
            "user"=>$user
            ]);
        }else{
            return view('page.1001',[
            "img"=> $images,
            "productInfo"=>$productInfo
        ]);
        }
        //
    }
    //
}
