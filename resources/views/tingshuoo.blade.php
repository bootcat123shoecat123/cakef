
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
  <meta charset="UTF-8">
  <title>聽說tingshuoo</title>
  @include('piece.titlePiece')
  @yield('head')
     <article>
        <br>
        <!-- 當季熱賣區塊-->
        <div class="fontsize2">當季熱賣</div>
        <br>
        <div id="BlockV">
            
            @foreach($productP as $name)
            
            <div class="big">
            <a href="/page/product/{{$name->PName}}">
                <img  src="{{ asset('storage/' . $name->Pic)}}" width="400px" height="400px">
            </a>
            <br>
                <div class="movie1"><a href="/page/product/{{$name->PName}}>">{{$name->PName}}</a>
                </div>
            </div>
            
            @if($count%4==0&& $count!=count($productP))
                </div>
                <div id="BlockV">
                <br>
            @endif 
            
           <input type="hidden" value="{{$count++}}" class="display:none">
            
           @endforeach
            </div>

        <span class="fontsize2">情人節必備</span>
        <br>
            <input type="hidden" value="{{$count=1}}" class="display:none">
        <div id="BlockV">
            @foreach($productH as $name)
            
            <div class="big">
            <a href="/page/product/{{$name->PName}}">
                <img  src="{{ asset('storage/' . $name->Pic)}}" width="400px" height="400px">
            </a>
            <br>
                <div class="movie1"><a href="/page/product/{{$name->PName}}">{{$name->PName}}</a>
                </div>
            </div>
            
            @if($count%4==0&& $count!=count($productH))
                </div>
                <div id="BlockV">
                <br>
            @endif 
            <input type="hidden" value="{{$count++}}" class="display:none">
            
           @endforeach
            </div>
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
?> --> </div> 

@if(@isset($msg))
<div class="alert alert-danger">{{$msg}}</div>
            @endif
</article>
@yield('home')
      
   
 </body>
</html>