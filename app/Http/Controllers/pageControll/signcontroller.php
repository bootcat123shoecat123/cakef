<?php

namespace App\Http\Controllers\pageControll;
use App\Http\Controllers\pageControll\mainPage;
use App\Http\Controllers\Controller;
use App\Models\memberModel;
use App\Models\signModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use ValidatesRequests;
class signcontroller extends Controller
{
    public function getPostSign(Request $r){
        $con=$r->validate([
            "user"=>"required|max:30",
            "password"=>"required|min:12|max:30",
            "pwcheck"=>"required|same:password",
            "name"=>"required|max:20",
            "phone"=>"required|digits:10|numeric",
            "email"=>"required|email|max:64"
        ]);
        $signed=signModel::find($r->user);
             
             if(isset($signed)){
                return $this->show();
             }else{
                 signModel::insert([                    
                    "Account"=> $r->user, 
                    "Password"=> $r->password,
                    "Name"=> $r->name,               
                    "Tel"=> $r->phone,
                    "Email"=>$r->email
                 ]);
                Session::put('user',$r->user);
                  return redirect('/msg/success_sign');
             }
            
    }
    public function show(){
        $images=(Object)[
            'cssMain'=>asset('css/MainPage.css'),
            'css'=>asset('css/sign.css'),
            'Title'=>asset('images/聽說.jpg'),
            'IG'=>asset('images/IG.png'),
            'FB'=>asset('images/FB.png'),
        ]; 
        if(Session::has('user')){
            
            return redirect('/msg/have_logined');
        }else{ 
            return view('page.sign',[
                "img"=> $images
            ]);
           
        }
            
         
    }
    //
}
