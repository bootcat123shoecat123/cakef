<?php

namespace App\Http\Controllers\pageControll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;
use stdClass;
use App\Models\pruductModel;
class mainPage extends Controller
{
   
    public function show(){
        $productP=pruductModel::where('Type','當季熱賣')->select('PName','Pic')->get();
        $productH=pruductModel::where('Type','情人節必備')->select('PName','Pic')->get();
        $images=new stdClass;
        $images=(Object)[
            'cssMain'=>asset('css/MainPage.css'),
            'home'=>asset('images/home.png'),
            'Title'=>asset('images/聽說.jpg'),
            'IG'=>asset('images/IG.png'),
            'FB'=>asset('images/FB.png'),
        ];
        
        return view('tingshuoo',[
            "count"=>1,
            "img"=> $images,
            "productP"=>$productP,
            "productH"=>$productH
        ]);
    }
    //
}
