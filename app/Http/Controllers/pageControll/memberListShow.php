<?php

namespace App\Http\Controllers\pageControll;

use App\Http\Controllers\Controller;
use App\Models\memberModel;
use App\Models\signModel;
use Illuminate\Http\Request;

class memberListShow extends Controller
{
    public function delete()
    {
    }

    public function show()
    {
        //$member=signModel::all();
        return view('page.member_list_show',[
            //"member"=>$member
            ]);
    }
    //
}
