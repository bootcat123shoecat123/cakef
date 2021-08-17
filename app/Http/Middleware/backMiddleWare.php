<?php

namespace App\Http\Middleware;

use App\Models\memberModel;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class backMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Session::has('user')){
            $user=Session::get('user');
            $re=memberModel::select('IDProof')->where('Account',$user)->first();
            if($re->IDProof=='0'){
               return $next($request);
            }
        }
        return redirect('/');
    }
}
