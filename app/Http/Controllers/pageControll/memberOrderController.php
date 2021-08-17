<?php

namespace App\Http\Controllers\pageControll;

use App\Http\Controllers\Controller;
use App\Models\memberModel;
use App\Models\orderMemberCanSee;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class memberOrderController extends Controller
{
   
    public function show(){
         $id=Session::get('user');
         $mem=memberModel::select('IDProof')->where('Account',$id)->first();
        
         if($mem->IDProof=='0'){
        $backer="1";    
        }
    $images=(Object)[
        'cssMain'=>asset('css/MainPage.css'),
        'css'=>asset('css/all.css'),
        'Title'=>asset('images/聽說.jpg'),
        'IG'=>asset('images/IG.png'),
        'FB'=>asset('images/FB.png'),
    ];


        $order=orderMemberCanSee::join("order_main","orderform.order_ID","=","order_main.order_ID")
        ->where('Account',$id)
        ->paginate(10);
        if(isset($backer)){
            return view('page.memberOrder',[
                "orders"=>$order,
                "img"=> $images,
                "user"=>$id,
                "back"=>"tingshuoo"
             ]);
        }else{
        return view('page.memberOrder',[
               "orders"=>$order,
               "img"=> $images,
               "user"=>$id
            ]);
        }
    }
    //
}
