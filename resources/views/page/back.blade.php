<!doctype html>
<html class="easy-sidebar-active">
<head>
<meta charset="utf-8">
<title>後台管理系統</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/easy-sidebar.css')}}" type="text/css">

<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script> 
<script src="{{asset('js/bootstrap.min.js')}}"></script> 

<script src="{{asset('js/flotr2.js')}}"></script> 
<script src="{{asset('js/flotr2.min.js')}}"></script> 
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
      <li ><a href="/back/member_list_show">會員管理</a></li>
      <li><a href="/back/product_ins_form">商品管理</a></li>
      <li><a href="/back/back_delete">商品下架</a></li>
      <li class="active"><a href="/back">顧客分析</a></li>
    </ul>
  </div>
  <!-- /.container-fluid --> 
</nav>

<div class="container">
  <!--easy-sidebar-toggle-right -->
  <h1>聽說後台管理系統</h1>
  <h1><button class="btn btn-danger easy-sidebar-toggle"><strong>≡</strong></button>銷售分析</h1>
  
</div><div style="display: inline">
<div class="container"><strong><h3>本年各項產品銷售量圓餅圖</h3></strong></div>
<div id="editor-render-0" style="width: 700px;height: 500px;margin: 24px auto;"></div>
</div>
<div style="display: inline">
<div class="container"><strong><h3>本月各項產品銷售量圓餅圖</h3></strong></div>
<div id="editor-render-1" style="width: 700px;height: 500px;margin: 24px auto;"></div>
</div>
<div style="display: inline">
<div class="container"><strong><h3>月銷售額走勢折線圖</h3></strong></div>
<div id="editor-render-2" style="width: 700px;height: 500px;margin: 24px auto;"></div> 
</div>
<div style="display: inline">
<div class="container"><strong><h3>月成交量走勢折線圖</h3></strong></div>
<div id="editor-render-3" style="width: 700px;height: 500px;margin: 24px auto;"></div> 
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

    


<script type="text/javascript">
  $(function () {
(function basic_pie (container) {
  var
    d1 = [],
    da=[],
    graph;

  graph = Flotr.draw(container, [
  @foreach ($product as $collection)
    { data : [[0,{{$collection->Total}}]], label : "{{$collection->PName}}" },
    @endforeach
    
  ], {
    HtmlText : false,
    grid : {
      verticalLines : false,
      horizontalLines : false
    },
    xaxis : { showLabels : false },
    yaxis : { showLabels : false },
    pie : {
      show : true, 
      explode : 6
    },
    mouse : { track : true },
    legend : {
      position : 'se',
      backgroundColor : '#D2E8FF'
    }
  });
})(document.getElementById("editor-render-0"));
});
///
 $(function () {
(function basic_pie (container) {
  var
    d1 = [],
    da=[],
    graph;

  graph = Flotr.draw(container, [
  @foreach ($product2 as $collection)
    { data : [[0,{{$collection->Total}}]], label : "{{$collection->PName}}" },
    @endforeach
  ], {
    HtmlText : false,
    grid : {
      verticalLines : false,
      horizontalLines : false
    },
    xaxis : { showLabels : false },
    yaxis : { showLabels : false },
    pie : {
      show : true, 
      explode : 6
    },
    mouse : { track : true },
    legend : {
      position : 'se',
      backgroundColor : '#D2E8FF'
    }
  });
})(document.getElementById("editor-render-1"));
});
///

(function basic (container) {
 
 var
    // First data series
   d2 = [],                                // Second data series
   i, graph;
   
   @foreach ($Pm as $key=>$col)
   {{$col->Ttl}}
 // Generate first data set
   d2.push([{{$key+1}},{{$col->Ttl}}]);
@endforeach
 // Draw Graph
 graph = Flotr.draw(container, [
  d2
  ], {
   xaxis: {
     minorTickFreq: 2
   }, 
   grid: {
     minorVerticalLines: true
   }
 });
})(document.getElementById("editor-render-2"));
////

(function basic (container) {
 
 var
    // First data series
   d2 = [],                                // Second data series
   i, graph;
   
   @foreach ($Po as $key=>$col)
   {{$col->Ttl}}
 // Generate first data set
   d2.push([{{$key+1}},{{$col->all}}]);
@endforeach
 // Draw Graph
 graph = Flotr.draw(container, [
  d2
  ], {
   xaxis: {
     minorTickFreq: 2
   }, 
   grid: {
     minorVerticalLines: true
   }
 });
})(document.getElementById("editor-render-3"));
////
</script>
</body>
</html>
