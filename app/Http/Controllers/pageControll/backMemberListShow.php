<?php

namespace App\Http\Controllers\pageControll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\signModel;
class backMemberListShow extends Controller
{
    public function delete()
    {
    }
    public function show()
    {
        $member=signModel::select('Account','Name','Email','Tel')->where('IDProof',1)->get();
        return view('page.member_list_show',[
            "member"=>$member
            ]);
    }
    //
}
