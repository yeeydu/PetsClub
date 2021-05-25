@extends('layout.base')

@section('title')
Adoption
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


<div class="content">
  <div class="container_12">

        
    
    <div class="grid_12">
      <div class="grid_4">
        <h2 class="ic1" >Adoption</h2>
      </div>
        <div class="clear"></div>
         <div class="grid_4">
            @foreach ($adoptions as $adoptions)
              <div class="pad2"> <img src="/images/{{$adoptions->image}}" alt="" class="img_inner fleft i2">
                <div class="extra_wrapper">
                <div class="text2 col2"><a href="#">{{$adoptions->name}}</a></div>
                 {{$adoptions->description}} </div>     
            </div>
             @endforeach
          
       </div> 
    </div>
  </div>
</div>

</body>
</html>
@endsection


    