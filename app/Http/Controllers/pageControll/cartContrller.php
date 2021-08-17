<?php

namespace App\Http\Controllers\pageControll;

use App\Http\Controllers\Controller;
use App\Models\cartModel;
use App\Models\cartSendModel;
use App\Models\orderform_mainInput;
use App\Models\orderformInput;
use App\Models\pruductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class cartContrller extends Controller
{
    public function submit(Request $r){        
        $user=Session::get('user');
        $id=orderform_mainInput::insertGetId([
            "Account"=>$user
        ]);
        foreach($r->num as $key=>$var){
            $pn=$r->PName[$key];
            $p=pruductModel::select("Price")->where("PName",$pn)->first();
            $totle=$var*$p->Price;
            orderformInput::insert([
            "order_ID"=>$id,
            "PName"=>$pn,
            "Num"=>$var,
            "Price"=>$totle
        ]);  
        }
        cartModel::where("Account",$user)->delete();
            return redirect('/');
    }
    public function delete($id){        
        $user=Session::get('user');
        cartSendModel::where('Account',$user)->where('PName',$id)->delete();    
       return redirect('/page/cart');
    }
    public function show(){
        $user=Session::get('user');
        
        $carts=cartSendModel::where('Account',$user)->join('product', 'cart.PName', '=', 'product.PName')->get();
      
        $images=(Object)[
            'cssMain'=>asset('css/MainPage.css'),
            'css'=>asset('css/style.css'),
            'Title'=>asset('images/聽說.jpg'),
            'IG'=>asset('images/IG.png'),
            'FB'=>asset('images/FB.png')
        ];
            return view('page.cart',[
               "cart"=>$carts,
               "user"=>$user,
               "img"=> $images,
               "all"=>0
            ]);
    }
    //
}
