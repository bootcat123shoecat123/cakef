<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class product_infor extends Controller
{
    //
    public function productReader(Request $request,$name){
        $value=$request->input('Pid');
        $presult=DB::select('select * from product where pno = '.$value,[1]);
        return view('/page.'.$name,['product'=>$presult]);
    }
}
