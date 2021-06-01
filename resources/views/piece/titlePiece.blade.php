@section('head')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.js"></script>
<script src="https://www.w3schools.com/lib/w3.js"></script>
</head>
<body>
     <header>
    <span class="home"><img src="{{$img->home}}" id="ls"></span>
    <span class="center" ><a href="/"><img src="{{$img->Title}}" ></a></span>
    <span class="png" ><a href="https://www.instagram.com/tingshuoo" target="_blank"><img src="{{$img->IG}}" ></a></span>
    <span class="pnge" ><a href="https://www.facebook.com/tingshuoo" target="_blank"> <img src="{{$img->FB}}"></a></span>
</header>
@stop

@section('title')

@stop