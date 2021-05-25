@extends('layout.base')

@section('title')
	News
@endsection


@section('content')


<script>
jQuery(document).ready(function () {
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>

<div class="content pt1">
  <div class="container_12">
    <div class="grid_12">
      <h2>News</h2>
      <br>
      @foreach ($news as $news)      
       <div class="blog"> <img src="images/{{$news->image}}" alt="" class="img_inner fleft i1">
          <ul class="list"><li><span><time datetime="{{$news->date}}">{{ \Carbon\Carbon::parse($news->date)->day }}<span>{{ \Carbon\Carbon::parse($news->date)->month }}</span></time></span></li></ul>
          <h3 class="text2 col2"><a href="/news/{{$news->id}}">{{$news->title}}</a></h3>
          <p>                
            {{$news->exert}}
          </p>
        <div class="clear spacing-news"></div>
      @endforeach
        </div>
    </div>
  </div>
</div>  

</body>
</html>
@endsection