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
        <li class="active"><a href="/page/memberInfor">會員資訊</a></li>
        <li ><a href="/page/member">會員資料</a></li>
        <li><a href="/page/memberOrder">訂單查詢</a></li>
        @if (isset($back))
        <li><a href="/back">後臺控制</a></li>
        @endif
      </ul>
    </div>
    <!-- /.container-fluid --> 
  </nav>
  <div class="container" style="position:relative;top:12%; color:rgb(46, 184, 142);">
    <h1><button class="btn btn-outline-info btn-success active easy-sidebar-toggle"><strong>≡</strong></button>會員管理</h1></div>
        <div class="container topBlock">
            
                <div class="UPform">
                    {{ csrf_field() }}
                    <h3>帳號:</h3>
                    <h4>{{$user}}</h4>
                    <h3>取貨名稱:</h3>
                    <h4>{{$member->Name}}</h4>
            <h3>電子信箱:</h3> 
            <h4>{{$member->Email}}</h4>
            <h3>電話:</h3>
            <h4>{{$member->Tel}}</h4><br>
            
                   
            </div>
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