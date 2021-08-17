<!doctype html>
<html class="easy-sidebar-active">
<head>
<meta charset="utf-8">
<title>商品上架</title>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.js"></script>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/easy-sidebar.css')}}" type="text/css">

<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script> 
<script src="{{asset('js/bootstrap.min.js')}}"></script> 
</head>

<body >
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
      <li class="active"><a href="/back/product_ins_form">商品管理</a></li>
      <li><a href="/back/back_delete">商品下架</a></li>
      <li><a href="/back">顧客分析</a></li>
    </ul>
  </div>
  <!-- /.container-fluid --> 
</nav>

<div class="container">
  <h2><button class="btn btn-danger easy-sidebar-toggle">≡</button>商品管理</h2>
  <div id="ls"><br><input style="" value="新增"></div> 
  <table border="2"> 
    <tr>
  <td>Pname</td>
  <td>Price</td>
  <td>Ingredient</td>
  <td>Introduction</td>
  <td>Pic</td>
  <td>Type</td>
  <td>Stock</td>
</tr>
  @foreach($product as $item)

    <tr>
      <td>{{$item->PName}}</td>
      <td>{{$item->Price}}</td>
      <td>{{$item->Ingredient}}</td>
      <td>{!!nl2br($item->Introduction)!!}</td>
      <td><img src="{{ asset('storage/' . $item->Pic)}}" width="200px" height="200px"></td>
      <td>{{$item->Type}}</td>
      <td>{{$item->Stock}}</td>
      <td><div id="up">
        <a href="/back/update/{{$item->PName}}">
          <input type="button" value="更改" >
        </a>
      </td>
    </tr>
@endforeach
</table>

@if (isset($Pname))
<div style="height:101%;width:101%;position:fixed;top:0%;left:0%; background-color:black;opacity:0.6;z-index: 9999; " id="dialogB"></div>
    <form name='Product_upd' method="post" enctype="multipart/form-data" action="/back/updateData/{{$Pname->PName}}" class="dialog2"  style="top:25%;left:25%;width:50%;height:50%;position:fixed; display:inline;z-index:10000;background-color:white;">
      {{ csrf_field() }}
      商品名稱：{{$Pname->PName}}<br/>

  商品價格：<input type="number" name="product_price" size="5" value="{{$Pname->Price}}"/><br/>
  商品成分：<input type="text" name="product_ingredient" size="100" value="{{$Pname->Ingredient}}"/><br/>
  商品庫存：<input type="number" name="product_stock" size="5" value="{{$Pname->Stock}}"/><br/>
  商品圖片：<img src="{{ asset('storage/' . $Pname->Pic)}}" width="100px" height="100px"><br>
  更新圖片:<input type="file" id="product_pic" name="product_pic"  accept=".jpg"><br>
  商品介紹：<br/><textarea name="product_instroduction" rows="15" style="width: 400px;height: 120px;" >{{$Pname->Introduction}}</textarea><br/>
  商品類型：<select name="product_type">
    <option value="{{$Pname->Type}}" selected="True">{{$Pname->Type}}</option>
      <option value="當季熱賣" >當季熱賣</option>
      <option value="情人節必備">情人節必備</option>
  </select><br/>
  <input type="submit" value="確定修改"/>
</form>
@endif
</div>
<div style="height:101%;width:101%;position:fixed;top:0%;left:0%; background-color:black;opacity:0.6;z-index: 9999; display:none;" id="dialogB"></div>




<form name='Product_ins' method="post" action="/back/create" enctype="multipart/form-data" class="dialog" style="top:25%;left:25%;width:50%;height:50%; display: none;z-index:10000;background-color:white;position:fixed;">
  {{csrf_field()}}  
  商品名稱：<input type="text" name="product_name" size="10"/><br/>
    商品價格：<input type="number" name="product_price" size="5"/><br/>
    商品成分：<input type="text" name="product_ingredient" size="100"/><br/>
    商品庫存：<input type="number" name="product_stock" size="5"/><br/>
    商品圖片：<input type="file" id="product_pic" name="product_pic" accept=".jpg"><br>
    商品介紹：<br/><textarea name="product_instroduction" rows="15" style="width: 400px;height: 120px;"></textarea><br/>
    商品類型：<select name="product_type">
        <option value="當季熱賣" selected="True">當季熱賣</option>
        <option value="情人節必備">情人節必備</option>
    </select><br/>
    <input type="submit" value="上架商品"/>
</form>



<script>
//easy-sidebar-toggle-right
$('.easy-sidebar-toggle').click(function(e) {
    e.preventDefault();
   //$('body').toggleClass('toggled-right');
    $('body').toggleClass('toggled');
   //$('.navbar.easy-sidebar-right').removeClass('toggled-right');
    $('.navbar.easy-sidebar').removeClass('toggled');
});
$(function(){
                    $('#ls').click(function(){ 
                        $('.dialog').css("display","inline");
                    });
                    $('#ls').click(function(){ 
                        $('#dialogB').css("display","inline");
                    });
                    $('#dialogB').click(function(){ 
                        $('#dialogB').css("display","none");
                        
                        $('.dialog2').css("display","none");
                        $('.dialog').css("display","none");
                    });
                });
</script>
</body>
</html>
