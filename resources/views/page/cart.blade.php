<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>購物車</title>
    
  @include('piece.titlePiece')
  @yield('head')
    <div id="app">
        <div class="container">
                <form action="/order/submit" method="POST">
                    {{ csrf_field() }}
            <div class="item_header">
                <div class="item_detail">商品</div>
                <div class="price">單價</div>
                <div class="count">數量</div> 
                <div class="amount">總計</div>
                <div class="operate">操作</div>
            </div>
            
            <div class="item_container">
                    @foreach ($cart as $col)
                    <div class="item_header item_body">
                            <div class="item_detail">
                                <img src="{{ asset('storage/' . $col->Pic)}}" alt="">
                                <input type="hidden" value="{{$col->PName}}" name="PName[]"> 
                                <div class="name">{{$col->PName}}</div>
                            </div>
                            <div class="price"><span>$</span><span id="{{$col->PName}}price">{{$col->Price}}</span></div>
                            <div class="count">
                                <input onclick="sub('{{$col->PName}}','-')" value="-" type="button" style="display: inline;">
                                <input type="hidden" value="{{$col->Num}}" name="num[]" id="hidden{{$col->PName}}num">
                            <div id="{{$col->PName}}num" style="display: inline;">{{$col->Num}}</div>
                                <input onclick="sub('{{$col->PName}}','+')" value="+" type="button">
                               
                            </div> 
                            
                            
                            <div class="amount" ><span>$</span><span id="{{$col->PName}}totle">{{$col->Total}}</span></div>
                            <div class="operate">
                                <a href="/cart/delete/{{$col->PName}}"><input type="button" value="刪除"></a>
                            </div>
                    </div>
                     <input type="hidden" value="{{$all+=$col->Total}}">
                     @endforeach
            </div>
            <div class="item_header item_body" style="justify-content: space-between;background: none;">
            
            <div class="item_detail"></div>
            <div class="price">
            </div>
            <div class="count"></div>
            <div class="amount" style="font-size:150%;">
                <samp style="color:midnightblue;font-weight: bolder;">totle：</samp>
               <samp style="background-color: aliceblue"> $
                <samp id="allTotle">{{$all}}</samp></samp></div>

            <div class="operate" >
                    <input type="submit" value="送出訂單" style="padding: 1%;width:100%;">
                </div>
                    </div>
            </form>
<script>
    sub=(name,fun)=>{
            let a=0;
        switch (fun){
            case '-':
                a=parseInt(document.getElementById((name+'num')).innerHTML)-1;
                
        document.getElementById("allTotle").innerHTML=parseInt(document.getElementById("allTotle").innerHTML)-parseInt(document.getElementById((name+'price')).innerHTML);
                break;
            case '+':
                 a=parseInt(document.getElementById((name+'num')).innerHTML)+1;
            document.getElementById("allTotle").innerHTML=parseInt(document.getElementById("allTotle").innerHTML)+parseInt(document.getElementById((name+'price')).innerHTML);
               
            break;
        }
        document.getElementById((name+'num')).innerHTML=a;
        document.getElementById(('hidden'+name+'num')).value=a;
        let totle= a*parseInt(document.getElementById((name+'price')).innerHTML);
        document.getElementById((name+'totle')).innerHTML=totle;
    }
</script>
        </div>
    </div>
</body>

</html>