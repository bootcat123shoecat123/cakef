<?php

namespace App\Http\Controllers\pageControll;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\orderform;
use App\Models\orderformInput;

class backMainPageControll extends Controller
{
    
    public function search(Request $r)
    {        
        $order=orderformInput::join("order_main","orderform.order_ID","=","order_main.order_ID")->paginate(10);
        if($r->Pname!=null){
            $order=orderformInput::join("order_main","orderform.order_ID","=","order_main.order_ID")->where("PName",$r->Pname)->paginate(10);
        }
        elseif($r->Oid!=null){
            $order=orderformInput::join("order_main","orderform.order_ID","=","order_main.order_ID")->where("order_ID",$r->Oid)->paginate(10);
        }
        elseif($r->date!=null){
            $order=orderformInput::join("order_main","orderform.order_ID","=","order_main.order_ID")->where('Time', 'like', date("Y-m-d",strtotime($r->date)).'%')->paginate(10);
        }
         return view('page.back_search',[
               "orders"=>$order
            ]);
    }
    public function show(){
        $order=orderformInput::join("order_main","orderform.order_ID","=","order_main.order_ID")->paginate(15);
            return view('page.back_search',[
               "orders"=>$order
            ]);
    }
    //
}
