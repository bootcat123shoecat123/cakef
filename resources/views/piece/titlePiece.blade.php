@section('head')
<LINK REL="SHORTCUT ICON" href="{{asset('images/Icon.png')}}">
<link rel="stylesheet" href="{{$img->cssMain}}">
  <link rel="stylesheet" href="{{$img->css}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.js"></script>

<script src="https://www.w3schools.com/lib/w3.js"></script>

</head>
<body>
     <header>
    <span class="home">
        <br>
        @if (isset($user))
        <a href="/page/logout"><input type='button' value='logout' style="color:black;background: none;border:none;"/></a>
    
        @else
            
            <a href="/page/sign"><input type='button' value='sign' style='color:black;background: none;'/></a>
            <a href="/page/login"><input type='button' value='login' style='color:black;background: none;'/></a>
        @endif
        </span>
    <span class="center" ><a href="/"><img src="{{$img->Title}}" ></a></span>
    @if (isset($user))
        <span class="cart" ><a href="/page/cart"><img src="{{asset('images/cart.png')}}" ></a></span>
        <span class="member" ><a href="/page/memberInfor"><img src="{{asset('images/member.png')}}" ></a></span>
    @endif
    
    <span class="png" ><a href="https://www.instagram.com/tingshuoo" target="_blank"><img src="{{$img->IG}}" ></a></span>
    <span class="pnge" ><a href="https://www.facebook.com/tingshuoo" target="_blank"> <img src="{{$img->FB}}"></a></span>
</header>
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
        $('#ls').click(function(){ 
            $('#dialogB').css("display","inline");
        });
        $('#dialogB').click(function(){ 
            $('#dialogB').css("display","none");
            $('.dialog').css("display","none");
        });
    });
    </script>
<div style="height:101%;width:101%;position:fixed;top:0%;left:0%; background-color:black;opacity:0.6;z-index: 9999; display:none;" id="dialogB"></div>
<div class='dialog' style='display:none;color:black;'>

   
    </div>
@stop

@section('home')
    
    <br>
    <br>
    <br>
    <footer>
           <hr>
           <br>
           <div class="u1">隱私政策&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="/page/about">關於聽說</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;常見問題</div>
      
           <div class="u1">Copyright&nbsp;&copy;&nbsp;2021 tingshuoo. All Right Reserved</div>
           
           <br>
           <button type="button" id="BackTop" class="theToTop-arrowA" ></button>
                
          
        </footer>
@stop