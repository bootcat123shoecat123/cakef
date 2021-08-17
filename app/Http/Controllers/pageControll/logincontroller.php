<?php

namespace App\Http\Controllers\pageControll;

use Illuminate\Routing\Route;
use App\Models\signModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\Nullable;

class logincontroller extends Controller
{
    public function logout(){
        Session::forget('user');
        return redirect('/msg/have_logged_out');
    }
    public function getPostLogin(Request $r){
        //$main=new mainPage;
        $con=$r->validate([
            "user"=>"required",
            "password"=>"required|min:12"
        ]);
             
             $signed=signModel::select('Account')->where("Password",$r->password)->where("Account",$r->user)->first();
             if($signed!=null){
                Session::put('user',$r->user);
                return redirect('/msg/success_login');
             }else{
                  return redirect('/page/login');
             }
            
    }
    public function show(){
        $images=(Object)[
            'cssMain'=>asset('css/MainPage.css'),
            'css'=>asset('css/login.css'),
            'Title'=>asset('images/聽說.jpg'),
            'IG'=>asset('images/IG.png'),
            'FB'=>asset('images/FB.png'),
        ]; 
        if(!Session::has('user')){
            return view('page.login',[
                "img"=> $images
            ]);
        }else{
            return redirect('/msg/have_logined');
        }
         
    }
    //
}
