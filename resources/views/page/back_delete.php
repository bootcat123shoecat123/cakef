<!doctype html>
<html class="easy-sidebar-active">
<head>
<meta charset="utf-8">
<title>商品下架</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/easy-sidebar.css" type="text/css">
</head>

<body>
  <button class="btn btn-danger easy-sidebar-toggle">≡</button>
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
      <a class="navbar-brand" href="#">ting-shuoo</a> 
    </div>
    <ul class="nav navbar-nav">
      <li  class="active"><a href="back_search.php">訂單查詢</a></li>
      <li><a href="member_list_show.php">會員管理</a></li>
      <li><a href="product_ins_form.php">商品上架</a></li>
      <li><a href="back_delete.php">商品下架</a></li>
      <li><a href="">顧客分析</a></li>
    </ul>
  </div>
  <!-- /.container-fluid --> 
</nav>

<div class="container">
  
</div>
<h2>商品下架</h2>
<table>
  <tr>
    <th>商品名稱 </th>
    <th> 刪除該商品</th>
  </tr>
  <tr>
    <td>data</td>
    <td><button type="button">刪除</button></td>
  </tr>
 
   <tr>
    <td>data</td>
    <td><button type="button">刪除</button></td>
  </tr>
  
   <tr>
    <td>data</td>
    <td><button type="button">刪除</button></td>
  </tr>
  
   <tr>
    <td>data</td>
    <td><button type="button">刪除</button></td>
  </tr>
  
 <tr>
    <td>data</td>
    <td><button type="button">刪除</button></td>
  </tr>
 
   <tr>
    <td>data</td>
    <td><button type="button">刪除</button></td>
  </tr>
  
   <tr>
    <td>data</td>
    <td><button type="button">刪除</button></td>
  </tr>
  
   <tr>
    <td>data</td>
    <td><button type="button">刪除</button></td>
  </tr>
</table>

<script src="js/jquery-1.11.0.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
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
