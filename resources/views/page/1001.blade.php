<!doctype html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <title>{{$productInfo->PName}}</title>
  @include('piece.titlePiece')
  @yield('head')
  
     <article>
        <div id="background"></div>
        <div class="all"><br>
            <div style="top: 4%;"><img class="m2" src="{{ asset('storage/' . $productInfo->Pic)}}" ></div>
        <div class="m3">
            <div class="m4">聽說：《{{$productInfo->PName}}》</div><br>
            <div class="m4" style="font-size: 2rem">${{$productInfo->Price}}</div><br>
            {!!nl2br($productInfo->Introduction)!!}
            <br><br>
            <div class="m5">成分：</div>
            {{$productInfo->Ingredient}}<br><br>
            <script>document.getElementById("background").style.backgroundImage="url('{{ asset('storage/' . $productInfo->Pic)}}')"</script>
            <div class="m5">過敏原資訊：</div>
            <br>
            <samp id="info">「本產品含有牛奶及蛋製品。」</samp><br><br>
            <div class="m5">
                @if (isset($user))
                訂購表單： 
                @if(@isset($messsage))
                <div class="alert alert-danger">{{$message}}</div>
                @endif
                
                <form action = "{{url("/cart")}}" method="post">
                    {{ csrf_field() }}
                   <table border = "1">
                       <tr><td>訂購品項  </td>
                        <input name="PName" type=hidden value="{{$productInfo->PName}}">
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
               </table>
               <br>
               <input type = "submit"  value = "送出訂單"/>
           </form>
               
      
            @else
            <div>請先行登入方能訂購</div>
            @endif
            </div>
        </div>
        <br>
</article>
<script>
function d(){
   let Ing="{{$productInfo->Ingredient}}";
   let IngSplit=Ing.split("、");
   let Instring=[];
   let ans="";
   IngSplit.forEach(element => {
       switch(element){
           case "牛奶":
           Instring.push("牛奶");
           break;
           case "奶油":
           Instring.push("奶製品");
           break;
           case "雞蛋":
           Instring.push("蛋製品");
           break;
           case "蛋":
           Instring.push("蛋製品");
           break;
           case "麵粉":
           Instring.push("麩質");
           break;
           
       }
   });
   if (Instring!=[]){
   ans="「本產品含有"+Instring.join("、")+"。」";
   }
  document.getElementById('info').innerHTML=ans;
   };
   d();
</script>
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
</body>
</html>