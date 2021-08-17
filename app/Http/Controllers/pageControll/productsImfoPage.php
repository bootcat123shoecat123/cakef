<?php

namespace App\Http\Controllers\pageControll;

use App\Http\Controllers\Controller;
use App\Models\cartModel;
use App\Models\memberModel;
use Illuminate\Http\Request;
use App\Models\pruductModel;
use Illuminate\Support\Facades\Session;

class productsImfoPage extends Controller
{
    public function cart(Request $r){
        $con=$r->validate([
            "PName"=>"required",
            "number"=>"required"
        ]);
        $user=Session::get('user');
        $pn=$r->PName;
        $num=$r->number;
        $carted=cartModel::select('Account')->where('Account',$user)->where('PName',$pn)->first();
        if($carted!=null){
            return redirect("/page/cart");
        }else{
            $productPrice=pruductModel::select("Price")->where("PName",$pn)->first();
        $productTotle=(int)($productPrice->Price)*(int)$num;
        cartModel::insert([
            'Account'=>$user,
            'PName'=>$pn,
            'Num'=>$num,
            'Total'=>$productTotle
        ]);
        return redirect("/page/product/$pn");
        }
        
    }
    /**
     * Display the specified resource.
     *
     */
    public function show($PName)
    {
        $productInfo=pruductModel::find($PName);
        if(Session::has('user')){
            $user=Session::get('user');
        }
        //$user=;
        $images=(Object)[
            'cssMain'=>asset('css/MainPage.css'),
            'css'=>asset('css/ProductInfo.css'),
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
