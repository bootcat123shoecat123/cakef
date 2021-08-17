<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
<title>會員資料
</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/easy-sidebar.css')}}" type="text/css">

<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script> 
<script src="{{asset('js/bootstrap.min.js')}}"></script> 

  @include('piece.titlePiece')
  @yield('head')
  <nav class="navbar navbar-inverse easy-sidebar">
    <div class="container-fluid"> 
      <div class="navbar-header">
         <!--easy-sidebar-toggle-right -->
        <button type="button" class="navbar-toggle easy-sidebar-toggle" aria-expanded="false"> 
          <span class="sr-only">Toggle navigation</span> 
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Ting-shuoo</a> 
      </div>
      <ul class="nav navbar-nav">
        <li ><a href="/page/memberInfor">會員資訊</a></li>
        <li class="active"><a href="/page/member">會員管理</a></li>
        <li><a href="/page/memberOrder">訂單查詢</a></li>
        @if (isset($back))
        <li><a href="/back">後臺控制</a></li>
        @endif
      </ul>
    </div>
    <!-- /.container-fluid --> 
  </nav>
  <div class="container" style="position:relative;top:12%;color:rgb(46, 184, 142);">
    <h1><button class="btn btn-outline-info btn-success active easy-sidebar-toggle"><strong>≡</strong></button>會員管理</h1></div>
        <div class="container topBlock">
            
                <form class="UPform" action="/change/infor" method="POST">
                    {{ csrf_field() }}
                    
                    <h3>帳號:</h3>
                    <h4>{{$user}}</h4>
                    <div class="form-group">
                      <label for="exampleInputPassword1">密碼:</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="Password" value="{{$member->Password}}" placeholder="Password">
                    </div>                    
            <div class="form-group">
              <label for="exampleInputName">取貨名稱:</label>
              <input type="text" name="Name" value="{{$member->Name}}" class="form-control" id="exampleInputName" aria-describedby="NameHelp" placeholder="Enter Name">
              
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">電子信箱:</label>
              <input type="email" name="Email" value="{{$member->Email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>       
            <div class="form-group">
              <label for="exampleInputTel">電話:</label>
              <input type="phone" name="Tel" value="{{$member->Tel}}" class="form-control" id="exampleInputTel" aria-describedby="phone number Help" placeholder="Enter phone number">
              
            </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">確認修改</label>
                    </div>
                   <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <script>
            //easy-sidebar-toggle-right
            $('.easy-sidebar-toggle').click(function(e) {
                e.preventDefault();
               //$('body').toggleClass('toggled-right');
                $('body').toggleClass('toggled');
               //$('.navbar.easy-sidebar-right').removeClass('toggled-right');
                $('.navbar.easy-sidebar').removeClass('toggled');
            });
            </script>
        
</body>

</html>