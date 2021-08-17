<!doctype html>
<html class="easy-sidebar-active">
<head>
<meta charset="utf-8">
<title>訂單查詢</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/easy-sidebar.css')}}" type="text/css">

<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script> 
<script src="{{asset('js/bootstrap.min.js')}}"></script> 
<script type="text/javascript" src="http://www.humblesoftware.com/static/js/flotr2.min.js"></script>
   
</head>

<body>
  
  
<!--easy-sidebar-right -->
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
      <li  class="active"><a href="/back/back_search">訂單查詢</a></li>
      <li><a href="/back/member_list_show">會員管理</a></li>
      <li><a href="/back/product_ins_form">商品管理</a></li>
      <li><a href="/back/back_delete">商品下架</a></li>
      <li><a href="/back">顧客分析</a></li>
    </ul>
  </div>
  <!-- /.container-fluid --> 
</nav>

<br>
<div class="container">
<h2><button class="btn btn-danger easy-sidebar-toggle"><strong>≡</strong></button>訂單查詢</h2>

  <!--easy-sidebar-toggle-right -->
  <form method="post"  enctype="multipart/form-data" action="/back/order/search">
    {{ csrf_field() }}
  商品名稱：<input type="text" name="Pname">
  訂單編號：<input type="text" name="Oid">
  訂單日期：<input type="date" name="date">
  <input type="submit" value="查詢" style="border-color: red; background: none;">
  </form>
<table border="3" style="width: 100%;border-style: solid;">
  <tr>
    <th>訂單編號</th>
     <th>商品名稱 </th>
    <th>訂購數量</th>
    <th>會員名稱</th>
  </tr>
@foreach ($orders as $item)
  <tr>
    <th>{{$item->order_ID}}</th>
    <th>{{$item->PName}} </th>
    <th>{{$item->Num}}</th>
    <th>{{$item->Account}}</th>
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


<?php

?>

</body>
</html>




