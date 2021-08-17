<?php

namespace App\Http\Controllers\pageControll;

use App\Http\Controllers\Controller;
use App\Models\memberModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class memberContrller extends Controller
{
    public function changer(Request $request)
    {
        $con=$request->validate([
            "Password"=>"required|min:12|max:30",
            "Name"=>"required|max:20",
            "Tel"=>"required|digits:10|numeric",
            "Email"=>"required|email|max:64"
        ]);
        $id=Session::get('user');
        
        $Password=  $request->Password;
        $Email=$request->Email;
        $Tel=$request->Tel;        
        $Name=$request->Name;
        $rw=(Object)[];
        $memberN=memberModel::find($id);

        if($Password!=$memberN->Password){
            $rw->Password=$Password;
        }if($Email!=$memberN->Email){
            $rw->Email=$Email;
        }if($Tel!=$memberN->Tel){
            $rw->Tel=$Tel;
        }if($Name!=$memberN->Name){
            $rw->Name=$Name;
        }
            memberModel::where('Account',$id)->update((array)$rw);
              
        return redirect('/page/memberInfor');
        //
    }
    public function show()
    {
        $user=Session::get('user');
        $mem=memberModel::select('IDProof')->where('Account',$user)->first();
        
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
        $member=memberModel::find($user);
        if(isset($backer)){
            return view('page.memberUpdate',[ 
                "img"=> $images,
                "member"=>$member,
                "user"=>$user,
                "back"=>"tingshuoo"
             ]);
        }else{
            return view('page.memberUpdate',[ 
            "img"=> $images,
            "member"=>$member,
            "user"=>$user
         ]);
        }
       
        //
    }
    //
}
