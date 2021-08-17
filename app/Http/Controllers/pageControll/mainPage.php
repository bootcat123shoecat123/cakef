<?php

namespace App\Http\Controllers\pageControll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;
use stdClass;
use App\Models\pruductModel;
use Illuminate\Support\Facades\Session;

class mainPage extends Controller
{
    public function image($msg){
        $productP=pruductModel::where('Type','當季熱賣')->select('PName','Pic')->get();
        $productH=pruductModel::where('Type','情人節必備')->select('PName','Pic')->get();
        if(Session::has('user')){
            $user=Session::get('user');
        }
         $images=(Object)[
            'cssMain'=>asset('css/MainPage.css'),
            'css'=>asset('css/home.css'),
            'Title'=>asset('images/聽說.jpg'),
            'IG'=>asset('images/IG.png'),
            'FB'=>asset('images/FB.png'),
        ];
        if(isset($user)){ 
            return [
                "count"=>1,
                "img"=> $images,
                "productP"=>$productP,
                "productH"=>$productH,
                "msg"=>$msg,
                "user"=>$user
            ];   
        }else{
            return [
                "count"=>1,
                "img"=> $images,
                "productP"=>$productP,
                "productH"=>$productH,
                "msg"=>$msg
            ];  
        }
    }
    public function success($msg){
        return view('tingshuoo',$this->image($msg));
    }
    public function show(){
        
        return view('tingshuoo',$this->image(null));
    }
    //
}
