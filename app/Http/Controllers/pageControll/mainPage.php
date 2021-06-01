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
        $productList=pruductModel::all();
        $images=new stdClass;
        $images=(Object)[
            'cssMain'=>asset('css/tingshuoo.css'),
            'home'=>asset('images/home.png'),
            'Title'=>asset('images/聽說.jpg'),
            'IG'=>asset('images/IG.png'),
            'FB'=>asset('images/FB.png'),
        ];
        
        return view('tingshuoo',[
            "count"=>1,
            "img"=> $images,
            "product"=>$productList
        ]);
    }
    //
}
