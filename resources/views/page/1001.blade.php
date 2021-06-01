<!doctype html>
<html lang="en">
 <head>
  <meta charset="utf-8">
<link rel="stylesheet" href="{{$img->cssMain}}">
  <link rel="stylesheet" href="{{$img->css}}">
  <title>{{$productInfo->PName}}</title>
  @include('piece.titlePiece')
  @yield('head')
  
     <article>
        <div id="background"></div>
        <div class="all">
        <div class="m1"><img class="m2" src="/images/{{$productInfo->Pic}}.jpg" ></div>
        <div class="m3">
            <div class="m4">聽說：《{{$productInfo->PName}}》</div><br>
            {!!$productInfo->Introduction!!}
            <br><br>
            <div class="m5">成分：</div>
            {{$productInfo->Ingredient}}<br><br>
            <script>document.getElementById("background").style.backgroundImage="url('/images/{{$productInfo->Pic}}.jpg')"</script>
            <div class="m5">過敏原資訊：</div><br>「本產品含有牛奶及蛋製品。」<br><br>
            <div class="m5">
                @if (isset($user))
                訂購表單： 
                <form name="post_cart" action = "post" method="post">
                   <table border = "1">
                       <tr><td>訂購品項  </td>
                           <td>{{$productInfo->PName}}</td>
       
                       </tr><td>訂購數量 </td><br>
                       <td>
                           <select name="number">
                           <option selected="True">1</option>
                            @for ($i = 2; $i <= 20; $i++)
                            <option>{{$i}}</option>
                            @endfor
                           </select>
                       </td>
                       <br>
                   <tr><td>取貨日期  </td>
                       <td><input type = "date" name = "takedate" size = "10" /></td>
                   </tr>
                   <tr><td>取貨時間  </td>
                       <td><input type = "time" name = "taketime" size = "10" /></td>
                   </td></tr>
               </table><hr/>
               <input type = "submit"  value = "送出訂單"/>
           </form>
               
      
            @else
            <div>請先行登入方能訂購</div>
            @endif
            </div>
        </div>
        <br>
</article>

 <div class='dialog' style='display:none'>

@if (isset($user))
    <input type='button' value='logout'/>
@else
    <span class='m'></span>
    <a href="/page/sign"><input type='button' value='sign'/></a>
    <a href="/page/login"><input type='button' value='login' /></a>
@endif
</div>

<!--
php
    
if (isset($_POST["number"]) && isset($_POST["takedate"]) && isset($_POST["taketime"])){
if(isset($_SESSION["name"])){
    $item=$row[1];
    $member=$_SESSION["name"];
    $num=$_POST["number"];
    if($result){
        $sql = "INSERT INTO cart VALUES($member,$name,$num,$phonenumber,$item)";
    }
}else{
?>
<div class='dialog' style='display:block'>
    <span class='m'></span>
    <input type='button' value='sign' onclick="window.location.href='../page/sign.php'"/>
<input type='button' value='login' onclick="window.location.href='../page/login.php'"/>
</div>


php

}

}

    //$sql = "INSERT INTO cart VALUES('".$item."','".$number."','".$name."','".$phonenumber."','".$takedate."','".$taketime."')";
    
mysqli_close($link);
?>
 
-->
<footer>
       <hr>
       <br>
       <div class="u1">隱私政策&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;關於聽說&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;常見問題</div>
  
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