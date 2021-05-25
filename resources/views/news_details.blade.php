@extends('layout.base')

@section('title')
	New_details
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
      <h2>{{$news->title}}</h2>
      <br>
      <img src="/images/{{$news->image}}" alt="">

      <div class="blog spacing-new">

          <ul class="list"><li><span><time datetime="{{$news->date}}">{{ \Carbon\Carbon::parse($news->date)->day }}<span>{{ \Carbon\Carbon::parse($news->date)->month }}</span></time></span></li></ul>
          <p>

          </p>          
          {{$news->content}}
        </p>
    </div>
  </div>
</div>
</body>

@endsection