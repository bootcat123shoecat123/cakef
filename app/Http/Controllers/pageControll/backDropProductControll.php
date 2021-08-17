<?php

namespace App\Http\Controllers\pageControll;

use App\Http\Controllers\Controller;
use App\Models\backProduct;
use Illuminate\Http\Request;

use App\Models\pruductModel;
class backDropProductControll extends Controller
{
    public function delete($id){
        backProduct::where('PName',$id)->delete();
        return redirect('/back/back_delete');
    }

    public function show()
    {
        $productP=pruductModel::all();
        
        /*return
        [
            "product"=>$productP
        ];*/ 
        return view('page.back_delete',[ 
            "product"=>$productP
         ]);
        //
    }
    //
}
