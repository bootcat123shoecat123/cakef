<!doctype html>
<html class="easy-sidebar-active">
<head>
<meta charset="utf-8">
<title>後台管理系統</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/easy-sidebar.css')}}" type="text/css">

<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script> 
<script src="{{asset('js/bootstrap.min.js')}}"></script> 
</head>

<body>
  <br>
  
  
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
      <a class="navbar-brand" href="/">ting-shuoo</a> 
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="/back/back_search">訂單查詢</a></li>
      <li><a href="/back/member_list_show">會員管理</a></li>
      <li><a href="/back/product_ins_form">商品管理</a></li>
      <li  class="active"><a href="/back/back_delete">商品下架</a></li>
      <li><a href="/back">顧客分析</a></li>
    </ul>
  </div>
  <!-- /.container-fluid --> 
</nav>

<div class="container">
  
<h2><button class="btn btn-danger easy-sidebar-toggle">≡</button>商品下架</h2>

<table border="1">
  
    <br>
  <tr>
    <th>商品名稱 </th>
    <th>　　價格　　</th>
    <th> 刪除該商品</th>
  </tr>
  @foreach ($product as $item)
  <tr>
    <td>{{$item->PName}}</td>
    <td>{{$item->Price}}</td>
    <td><a href="/back/product/delete/{{$item->PName}}"><input type="button" value="刪除" style="height: 100%;width:100%;"></a></td>

  </tr>
@endforeach
</table>
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
