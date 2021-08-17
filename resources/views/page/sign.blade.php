<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign-UP</title>
    
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script> 
<script src="{{asset('js/bootstrap.min.js')}}"></script> 
    <!--php session_start();
    include("../sc/connect.php");
    -->
</head>
<body>
    
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-6 col-md-offset-3" >
        <div class="panel panel-default">
          <div class="panel-body">
            <form class="" action="{{url("/sign")}}" method="post">
                
        {{ csrf_field() }}
              <div class="input-group">
                <span class="glyphicon glyphicon-user btn-sm" aria-hidden = "ture"></span>
                <input type="text" name="user" value="" placeholder="輸入帳號">
              </div>
              <div class="input-group">
                <span class="glyphicon glyphicon-envelope btn-sm"></span>
                <input type="mail" name="email" value="" placeholder="輸入註冊信箱">
              </div>
              <div class="input-group">
                <span class="glyphicon glyphicon-lock btn-sm" aria-hidden = "ture"></span>
                
                <input type="password" name="password" value=""panel placeholder="輸入密碼">
              </div>
              <div class="input-group">                  
                <span class="glyphicon glyphicon-check btn-sm" aria-hidden = "ture"></span>
                <input type="password" name="pwcheck" value=""panel placeholder="再次輸入密碼">
              </div>
              <div class="input-group">
                <span class="glyphicon glyphicon-font btn-sm" aria-hidden = "ture"></span>
                <input type="text" name="name" value="" placeholder="輸入姓名">
              </div>
              <div class="input-group">
                <span class="glyphicon glyphicon-phone btn-sm" aria-hidden = "ture"></span>
                <input type="text" name="phone" value="" onkeyup="value=value.replace(/[^\d]/g,'') "  placeholder="輸入電話">
              </div>
              <br>
               <button type="submit" class = "btn btn-primary " name="button" >註冊</button>
               
            </form>
            <br>
                 <div class="list-group">
                   <a href="/page/login" class="list-group-item list-group-item-info">已有帳號?</a>
                 </div>
          </div>
        </div>
    </div>
        </div>
      </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <ul>{{ $error }}</ul>
            @endforeach
        </ul>
    </div>
@endif
@if(@isset($messsage))
<div class="alert alert-danger">{{$message}}</div>
@endif
    <!--php
    if(isset($_POST["sign"])&& $_POST["user"]!=""&&$_POST["password"]!=""&&$_POST["name"]!=""&&$_POST["email"]!=""&&$_POST["phone"]!=""){
        
        $account=$_POST["user"];
        $password=$_POST["password"];
        $name=$_POST["name"];
        $email=$_POST["email"];
        $tel=$_POST["phone"];

        $sql="select account where account=$account";
        $result=mysqli_query($link,$sql);
        if($result){
            
            echo("帳號重複");
        }else{
            $sql="INSERT INTO member VALUES('$account',$password,'$name','$email','$tel')";
            $result=mysqli_query($link,$sql);
            $_SESSION["account"]=$account;
            echo("註冊成功");
            sleep(1);
            echo("<script>window.location.href='../page/tingshuoo.php'</script>");
        }
    }
-->
</body>
</html>