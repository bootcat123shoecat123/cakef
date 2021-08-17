<?php

namespace App\Http\Controllers\pageControll;

use App\Http\Controllers\Controller;
use App\Models\orderform_mainInput;
use App\Models\orderformInput;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class backContrller extends Controller
{
    
    public function show()
    { 
        $td=date("Y-m");
        $product2=orderformInput::join("order_main","order_main.order_ID","=","orderform.order_ID")->
        select('PName',DB::raw('SUM(orderform.Num) AS Total'))->
        where('Time', 'like', $td.'-%')->
        groupBy('PName')->
        get();

        $td=date("Y-");
        $productP=orderformInput::join("order_main","order_main.order_ID","=","orderform.order_ID")->
        select('PName',DB::raw('SUM(orderform.Num) AS Total'))->
        where('Time', 'like', $td.'%')->
        groupBy('PName')->
        get();
       
       for($i=0; $i < 12; $i++) { 
        $day=$i;   
        if($i<10){
               $day='0'.($day+1);
           }
           $Pm[$i]=orderformInput::join("order_main","order_main.order_ID","=","orderform.order_ID")->
           select(DB::raw('SUM(Price) AS Ttl'))->
           where('Time', 'like', $td."$day".'-%')->
           first();
           # code...
       }
       for($i=0; $i < 12; $i++) { 
        $day=$i;   
        if($i<10){
               $day='0'.($day+1);
           }
           $Po[$i]=orderform_mainInput::
           select(DB::raw('COUNT(order_ID) AS "all"'))->
           where('Time', 'like', $td."$day".'-%')->
           first();
           # code...
       }

        /*return
        [
            "product"=>$productP
        ];*/ 
        return view('page.back',[ 
            "product"=>$productP,
            "product2"=>$product2,
            "Pm"=>$Pm,
            "Po"=>$Po
         ]);
        //
    }
    //
}
