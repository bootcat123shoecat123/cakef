<?php

namespace App\Http\Controllers\pageControll;

use App\Http\Controllers\Controller;
use App\Models\memberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class memberInforContrller extends Controller
{
    public function show()
    {

        $user=Session::get('user');
        $mem=memberModel::select('IDProof')->where('Account',$user)->first();
         if($mem->IDProof==0){
        $backer="1";    
        }
        $images=(Object)[
            'cssMain'=>asset('css/MainPage.css'),
            'css'=>asset('css/all.css'),
            'Title'=>asset('images/聽說.jpg'),
            'IG'=>asset('images/IG.png'),
            'FB'=>asset('images/FB.png'),
        ];
        $member=memberModel::find($user);
        if(isset($backer)){
        return view('page.memberInfor',[ 
            "img"=> $images,
            "member"=>$member,
            "user"=>$user,
            "back"=>"tingshuoo"
         ]);
        }else{
            return view('page.memberInfor',[ 
            "img"=> $images,
            "member"=>$member,
            "user"=>$user

         ]);
        }
    }
    //
}
