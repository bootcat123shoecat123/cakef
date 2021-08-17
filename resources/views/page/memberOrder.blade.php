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
        <li><a href="/page/memberInfor">會員資訊</a></li>
        <li ><a href="/page/member">會員資料</a></li>
        <li class="active"><a href="/page/memberOrder">訂單查詢</a></li>
        @if (isset($back))
        <li><a href="/back">後臺控制</a></li>
        @endif
      </ul>
    </div>
    <!-- /.container-fluid --> 
  </nav>
  <div class="container" style="position:relative;top:12%;color:rgb(46, 184, 142);">
    <h1><button class="btn btn-outline-info btn-success active easy-sidebar-toggle"><strong>≡</strong></button>過去訂單</h1></div>
         
         <div class="container topBlock" style="position:relative;top:12%;">
          <div style="color:black;">{{$orders->render()}}</div>
          <table border="3" style="width: 100%;border-style: solid;position:relative;">
            <tr>
              <th>下訂日期</th>
               <th>商品名稱 </th>
              <th>訂購數量</th>
              <th>總價</th>
            </tr>
          @foreach ($orders as $item)
            <tr>
              <th>{{$item->Time}}</th>
              <th>{{$item->PName}} </th>
              <th>{{$item->Num}}</th>
              <th>${{$item->Price}}</th>
            </tr>
          @endforeach
          </table> 
                 
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