<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">

<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script> 
<script src="{{asset('js/bootstrap.min.js')}}"></script> 
</head>
<body>
    <div class="container">
        <div class="row">
         <div class="col-md-6 col-md-offset-3" >
           <div class="panel panel-primary">
             <div class="panel-heading">
               <b><h2>Login</h2></b>
             </div>
             <div class="panel-body">
               <form class="form-signin" role="form" action="{{url("/login")}}" method="post">
                {{ csrf_field() }}
                 <label for="inputEmail" class="sr-only">Account</label>
                 <input type="text" id="inputEmail" class="form-control" placeholder="Account" required="" autofocus=""  name="user">
                 <label for="inputPassword" class="sr-only">Password</label>
                 <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
                 <br>
                 <div class="list-group">
                   <a href="/page/sign" class="list-group-item list-group-item-info">新會員註冊</a>
                 </div>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
              </form>
             </div>
           </div>
         </div>
        </div>
     </div>
    @if(@isset($messsage))
<div class="alert alert-danger">{{$message}}</div>
@endif
    
</body>
</html>