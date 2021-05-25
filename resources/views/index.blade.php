<!DOCTYPE html>
<html lang="en">
<head>
<title>Pet Club</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/slider.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: true,
        waitBannerAnimation: false,
        progressBar: false
    })
});
$(window).load(function () {
    $('.carousel1').carouFredSel({
        auto: false,
        prev: '.prev',
        next: '.next',
        width: 960,
        items: {
            visible: {
                min: 3,
                max: 3
            },
            height: 'auto',
            width: 300,
        },
        responsive: true,
        scroll: 1,
        mousewheel: false,
        swipe: {
            onMouse: true,
            onTouch: true
        }
    });
});
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
@extends('layout.base')

@section('title')
	Homepage
@endsection


@section('content')

<div class="top_block">
  <div class="slider-relative">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
          <li><img src="images/slide.jpg" alt="">
            <div class="banner">They Need Your <span>Love</span> and <i>Care</i>
              <p>It is so easy to make them happy</p>
            </div>
          </li>
          <li><img src="images/slide1.jpg" alt="">
            <div class="banner">They Need Your <span>Love</span> and <i>Care</i>
              <p>It is so easy to make them happy</p>
            </div>
          </li>
          <li><img src="images/slide2.jpg" alt="">
            <div class="banner">They Need Your <span>Love</span> and <i>Care</i>
              <p>It is so easy to make them happy</p>
            </div>
          </li>
          <li><img src="images/slide3.jpg" alt="">
            <div class="banner">They Need Your <span>Love</span> and <i>Care</i>
              <p>It is so easy to make them happy</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="page1_block">
  <div class="container_12">
    <div class="grid_6">
      <h2>Welcome to Our Site</h2>
      <br>
      <img src="images/page1_img5.jpg" alt="" class="img_inner fleft">
      <div class="extra_wrapper style1">
        <p class="text1"><a href="#">Click here</a> for more info about this free website template created by TemplateMonster.com </p>
        Hibh ullamcorper accumsan sem lectus ut sapien. Donec venenatis . </div>
      <div class="clear"></div>
      Praesent quis orci eget diam viverra consequat. Fusce sagittis quam in pulvinar sollicitudin velit velit cursus nibh ullamcorper accumsan sem lectus ut sapien. Donec venenatis posuere velit aty convallis neque ullamcorper quis. Integer posuere ipsum eu risus sollicitudin nec varius eratylo luctus. Fusce fringilla erat ac urna pe llentesque congue. Nunc fringilla diam sit amet adipi scing bibendum turpis velit feugiat urna et pharetra neque nisi ac nunc. Vivamus est quam dapibuslok. ..ullamco rper imperdiet nec euismod ut arcu. Nulla facilisi. Etiam mauris lorem pulvinar vel con sequat ut pretium ac erat. Morbi facilisis elit eu nisl blandit ac blandit enim faucibu. Praesent quis orci eget diam viverra consequat. Fusce sagittis.<br>
      <a href="#" class="btn">More</a> </div>
      <!----NEWS---->
    <div class="grid_5 prefix_1">
      <h2 class="ic1">Latest News</h2>
      <ul class="list">
        @foreach ($news as $news)
        <li> <span>              
          <time datetime="{{\Carbon\Carbon::now()}}">{{ \Carbon\Carbon::parse($news->date)->day }}<span>{{ Carbon\Carbon::parse($news->date)->month }}</span></time>
          </span>
          <div class="extra_wrapper">
            <div class="col1"><a href="#">{{$news->title}}</a>
            </div> {{$news->exert}}</div>          
        </li>
        @endforeach       
      </ul>
    </div>
  </div>
</div>
<div class="content page1">
  <div class="container_12">
    <div class="grid_12"> <a href="#" class="next"></a><a href="#" class="prev"></a>
      <h2>Pets for Adoption</h2>
    </div>
    <div class="clear"></div>
    <ul class="carousel1">
      @foreach ($adoptions as $adoptions)
                
      <li class="grid_4"> <img src="/{{$adoptions->image}}" alt="" class="img_inner fleft">
        <div class="extra_wrapper pad1">
          <p class="col2"><a href="#">{{$adoptions->name}}</a></p>
          {{$adoptions->description}} </div>
      </li>
      
      @endforeach
    </ul>
  </div>
</div>
<div class="bottom_block">
  <div class="container_12">
    <div class="grid_6">
      <h2>Pet Care Tips </h2>
      <br>
      Praesent quis orci eget diam viverra consequat. Fusce sagittis quam in pulvinar sollicitudin velit velit cursus nibh ullamcorper accumsan sem lectus ut sapien. Donec venenatis posuere velit a convallis neque ullamcorper quis. Integer posuere ipsum eu risus sollicitudin nec varius erat luctus. Fusce fringilla erat ac urna pe llentesque congue. Nunc fringilla, diam sit amet adipi scing bibendum turpis velit feugiat urna, et pharetra neque nisi ac nunc. Vivamus est quam dapibus ullamco rper imperdiet nec, euismod ut arcu. Nulla facilisi. Etiam mauris lorem pulvinar vel con sequat ut pretium ac erat. Morbi facilisis elit eu nisl blandit ac blandit enim faucibus. Praesent quis orci eget diam viverra consequat. Fusce sagittis. </div>
    <div class="grid_4 prefix_2">
      <h2 class="ic1">Any Question?</h2>
      <img src="/images/page1_img4.jpg" alt="" class="fleft img_inner">
      <div class="extra_wrapper">
        <div class="cont"> Call Us Free: <span>+1 800 559 6580</span> </div>
      </div>
      <div class="clear"></div>
      Nunc fringilla, diam sit amet adipi scing bibendum turpis velit feugiat urna, et pharetra neque nisi ac nunc. Viv amus est quam dapibus ullamco rper imperdiet nec euismod ut arcu. Nulla facilisi. Etiam mauris. </div>
  </div>
</div>

</body>
</html>

@endsection