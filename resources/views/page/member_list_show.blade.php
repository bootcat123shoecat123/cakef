<!doctype html>
<html class="easy-sidebar-active">
<head>
<meta charset="utf-8">
<title>會員管理</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/easy-sidebar.css')}}" type="text/css">

<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script> 
<script src="{{asset('js/bootstrap.min.js')}}"></script> 
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
      <a class="navbar-brand" href="/">Ting-shuoo</a> 
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/back/back_search">訂單查詢</a></li>
      <li class="active"><a href="/back/member_list_show">會員管理</a></li>
      <li><a href="/back/product_ins_form">商品管理</a></li>
      <li><a href="/back/back_delete">商品下架</a></li>
      <li><a href="/back">顧客分析</a></li>
    </ul>
  </div>
  <!-- /.container-fluid --> 
</nav>
<br>
<div class="container">
  <!--easy-sidebar-toggle-right -->
<h2><button class="btn btn-danger easy-sidebar-toggle"><strong>≡</strong></button>會員管理</h2>
資料表：會員名單<br>
會員數： {{count($member)}} 個<br/><br/>
<table border=1>
  <tr>
    <th>Account</th>
    <th>Name</th>
    <th>Email</th>
    <th>Tel</th>
  </tr>
  @foreach ($member as $item)
  <tr>
  <td>{{$item->Account}}</td>
  
  <td>{{$item->Name}}</td>
  
  <td>{{$item->Email}}</td>
  
  <td>{{$item->Tel}}</td>
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


<!--php
$link = mysqli_connect("localhost","root","","tingshuoo")
            or die("無法開啟 MySQL 資料庫連接!<br>");
$sql = "SELECT Account,Name,Email,Tel FROM member WHERE IDProof=0";
if( $result = mysqli_query($link, $sql)){
    echo "資料表：會員名單<br/>";
    $total_members = mysqli_num_rows($result);
    echo "會員數： $total_members 個<br/><br/>";
    echo "<table border=1><tr>";
    while ( $meta = mysqli_fetch_field($result))
        echo "<td>" . $meta->name . "</td>";
    echo "</tr>";   
    $total_fields = mysqli_num_fields($result);
    while ($row = mysqli_fetch_row($result)){
        echo "<tr>";
        for( $i = 0; $i <= $total_fields-1; $i++)
            echo "<td>" . $row[$i] . "</td>";
            echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
}

-->

</body>
</html>




