
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
  <meta charset="UTF-8">
  <title>聽說tingshuoo</title>
  <link rel="stylesheet" href="{{$img->cssMain}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.js"></script>
  <script src="https://www.w3schools.com/lib/w3.js"></script>
  
 </head>
 <body>
  
    <header>
        <span class="home"><img src="{{$img->home}}" id="ls"></span>
        <span class="center" ><a href=""><img src="{{$img->Title}}" ></a></span>
        <span class="png" ><a href="https://www.instagram.com/tingshuoo" target="_blank"><img src="{{$img->IG}}" ></a></span>
        <span class="pnge" ><a href="https://www.facebook.com/tingshuoo" target="_blank"> <img src="{{$img->FB}}"></a></span>
    </header>
    
     <article>
        <br>
        <!-- 當季熱賣區塊-->
        <span class="fontsize2">當季熱賣</span>
        <br>
        <div id="BlockV">
            
            @foreach($product as $name)
            
            <div class="big">
            <a href="/page/product/{{$name->PName}}">
                <img  src="/images/{{$name->Pic}}.jpg" width="400px" height="400px">
            </a>
            <br>
                <div class="movie1"><a href="/page/product/{{$name->PName}}>">{{$name->PName}}</a>
                </div>
            </div>
            
            @if($count%4==0&& $count!=count($product))
                </div>
                <div id="BlockV">
                <br>
            @endif 
            
           <input type="hidden" value="{{$count++}}">
            
           @endforeach
            </div>
        <span class="fontsize2">情人節必備</span>
<!-- 產品的呈現模板
        
    
    ?php
if(isset($_SESSION["account"])){?>
<input type='button' value='logout'/>
    ?php
}else{
?><span class='m'></span>
<div class='dialog' style='display:none'>
    <input type='button' value='sign'/>
<input type='button' value='login' />
?php
}
?> --> 
</article>
  </div> 
     <br>
     <br>
     <br>
    <footer>
       <hr>
       <br>
       <div class="u1"><a href="https://zh.wikipedia.org/wiki/HTTP_404">隱私政策</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
        <a href="https://zh.wikipedia.org/wiki/HTTP_404">關於聽說</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
        <a href="https://zh.wikipedia.org/wiki/HTTP_404">訂單查詢</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
        <a href="https://zh.wikipedia.org/wiki/HTTP_404">常見問題</a></div>
  
       <div class="u1">Copyright&nbsp;&copy;&nbsp;2021 tingshuoo. All Right Reserved</div>
       
       <br>
       <button type="button" id="BackTop" class="toTop-arrow" ></button>
            <script>
            $(function(){
                $('#BackTop').click(function(){ 
                    $('html,body').animate({scrollTop:0}, 333);
                });
                $(window).scroll(function() {
                    if ( $(this).scrollTop() > 300 ){
                        $('#BackTop').fadeIn(222);
                    } else {
                        $('#BackTop').stop().fadeOut(222);
                    }
                }).scroll();
            });
            $(function(){
                $('#ls').click(function(){ 
                    $('.dialog').css("display","inline");
                });
            
            });
            </script>
      
    </footer>
     
 </body>
</html>