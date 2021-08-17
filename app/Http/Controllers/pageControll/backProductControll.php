<?php

namespace App\Http\Controllers\pageControll;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\backProduct;
use App\Models\pruductModel;
use Illuminate\Support\Facades\Storage;

class backProductControll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productP=pruductModel::all();
        
        /*return
        [
            "product"=>$productP
        ];*/ 
        
        return view('page.product_ins_form',[ 
            "product"=>$productP
         ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 

        
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name=$request->product_name;
        $price=$request->product_price;        
        $ingredient=$request->product_ingredient;        
        $stock=$request->product_stock;         
        $instroduction=$request->product_instroduction;
        $type=$request->product_type;
        $path = $request->file('product_pic')->store('images', 'public');
        $signed=backProduct::find($name);
             
             if(isset($signed)){
             }else{
                 
                backProduct::insert([                    
                    "PName"=>  $name, 
                    "Price"=> $price,
                    "Ingredient"=> $ingredient,               
                    "Stock"=> $stock,
                    "Introduction"=>$instroduction,
                    "Pic"=>$path,
                    "Type"=>$type
                 ]);
                  return redirect('/back/product_ins_form');
             }
        $productP=pruductModel::all();
        return view('page.product_ins_form',[ 
            "product"=>$productP
         ]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    
    public function show($id)
    {
        $images=(object)[
           
        ];
       
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $productP=pruductModel::all();
        $Pname=pruductModel::find($id);
        
        return view('page.product_ins_form',[ 
            "product"=>$productP,
            "Pname"=>$Pname
         ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $instroduction=  $request->product_instroduction;
        $price=$request->product_price;
        $ingredient=$request->product_ingredient;        
        $stock=$request->product_stock;        
        if($request->file('product_pic')!=null){

        $path = $request->file('product_pic')->store('images', 'public');
        }
                 if(isset($path)){
        $signed=backProduct::find($id);
        $p="public/".$signed->Pic;
        Storage::delete($p);   
                     backProduct::where('PName',$id)->update([
                    "Price"=> $price,
                    "Ingredient"=> $ingredient,               
                    "Stock"=> $stock,
                    "Introduction"=>$instroduction,
                    "Pic"=>$path
                 ]);
                 }else{
                    backProduct::where('PName',$id)->update([
                        "Price"=> $price,
                        "Ingredient"=> $ingredient,               
                        "Stock"=> $stock,
                        "Introduction"=>$instroduction                        
                    ]);
                
                
                  return redirect('/back/product_ins_form');
             }
        $productP=backProduct::all();
        return view('page.product_ins_form',[ 
            "product"=>$productP
         ]);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        //
    }
}
