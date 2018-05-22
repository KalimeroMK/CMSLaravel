@extends('layouts.main')
@include('layouts.menu')
@section('slider')
<!-- header-container end -->
<!-- banner start -->
<!-- ================ -->
<div class="banner">
    <div class="container clearfix">

      <!-- slideshow start -->
      <!-- ================ -->
      <div class="slideshow">

        <!-- slider revolution start -->
        <!-- ================ -->
        <div class="slider-revolution-5-container">
          <div id="slider-banner-fullwidth-big-height" class="slider-banner-fullwidth-big-height rev_slider" data-version="5.0">
            <ul class="slides">
              <!-- slide 1 start -->
              <!-- ================ -->
              @foreach($slides as $slide)
              <li data-transition="random" data-slotamount="default" data-masterspeed="default" data-title="Next Generation Template">

                  <!-- main image -->
                  <img src="/assets/img/slider/{{ $slide->image }}" alt="{{ $slide->title }}" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover"  class="rev-slidebg">

                  <!-- Transparent Background -->
                  <div class="tp-caption dark-translucent-bg"
                  data-x="center"
                  data-y="center"
                  data-start="0"
                  data-transform_idle="o:1;"
                  data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                  data-transform_out="o:0;s:600;"
                  data-width="5000"
                  data-height="5000">
              </div>

              <!-- LAYER NR. 1 -->
              <div class="tp-caption large_white"
              data-x="left"
              data-y="215"
              data-start="1000"
              data-width="650"
              data-transform_idle="o:1;"
              data-transform_in="y:[100%];sX:1;sY:1;o:0;s:1150;e:Power4.easeInOut;"
              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
              data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
              <a href="#">{!!  $slide->title !!}</a>
          </div>

          <!-- LAYER NR. 2 -->
          <div class="tp-caption large_white"
          data-x="left"
          data-y="270"
          data-start="1100"
          data-width="500"
          data-transform_idle="o:1;"
          data-transform_in="o:0;s:2000;e:Power4.easeInOut;">
          <div class="separator-2 light"></div>
      </div>

      <!-- LAYER NR. 3 -->
      <div class="tp-caption white small_white"
      data-x="left"
      data-y="280"
      data-start="1100"
      data-width="650"
      data-transform_idle="o:1;"
      data-transform_in="y:[100%];sX:1;sY:1;s:1000;e:Power4.easeInOut;"
      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
      data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
      <div class="post-info">
        <span class="post-date">
          <i class="fa fa-calendar-o pr-1"></i>
          <span class="date">{!!  $slide->created_at !!}</span>

      </span>
  </div>
</div>

<!-- LAYER NR. 4 -->
<div class="tp-caption white small_white"
data-x="left"
data-y="320"
data-start="1100"
data-width="650"
data-whitespace="normal"
data-transform_idle="o:1;"
data-transform_in="y:[100%];sX:1;sY:1;s:1000;e:Power4.easeInOut;"
data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
<p>{!!  $slide->description !!}</p>
</div>

<!-- LAYER NR. 5 -->
<div class="tp-caption small_white"
data-x="left"
data-y="380"
data-start="1200"
data-width="650"
data-transform_idle="o:1;"
data-transform_in="y:[100%];sX:1;sY:1;s:800;e:Power4.easeInOut;"
data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
<a href="{{ $slide->link }}" class="btn-md-link padding-hor-clear">Read More <i class="fa fa-arrow-right"></i></a>
</div>

</li>
@endforeach
<!-- slide 1 end -->


</ul>
</div>
</div>
<!-- slider revolution end -->

</div>
<!-- slideshow end -->

</div>
</div>
<!-- banner end -->
@endsection

<div id="page-start"></div>
@section('content')
<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

    <div class="container">
      <div class="row">

        <!-- main start -->
        <!-- ================ -->
        <div class="main col-lg-8">


            <!-- blogpost start -->
            @foreach($products as $product)
            <article class="blogpost">
                <div class="overlay-container">
                  <img src="/assets/img/products/{{ $product->image }}" alt="{{ $product->title }}">
                  <a class="overlay-link" href="/product/{{ $product->slug }}"><i class="fa fa-link"></i></a>
              </div>
              <header>
                  <h2><a href="/product/{{ $product->slug }}">{{ $product->title }}n</a></h2>
                  <div class="post-info">
                    <span class="post-date">
                      <i class="fa fa-calendar-o pr-1"></i>
                      <span class="date">{{ $product->created_at }}</span>
                  </span>

              </div>
          </header>
          <div class="blogpost-content">

              <p>{{ str_limit(strip_tags($product->description),400, $end = '...' ) }}</p>
          </div>
          <footer class="clearfix">
              <div class="tags pull-left"><i class="fa fa-tags pr-1"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
              <div class="link pull-right"><i class="fa fa-link pr-1"></i><a href="/product/{{ $product->slug }}">Read More</a></div>
          </footer>
      </article>
      @endforeach
      <!-- blogpost end -->

      <!-- pagination start -->
      {{ $products->links() }}

      <!-- pagination end -->
  </div>
  <!-- main end -->

  <!-- sidebar start -->
  <!-- ================ -->
  <aside class="col-lg-4 col-xl-3 ml-xl-auto">
      <div class="sidebar">
        <div class="block clearfix">
          <h3 class="title">Sidebar menu</h3>
          <div class="separator-2"></div>
          <nav>
            <ul class="nav flex-column">
              <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
              <li class="nav-item"><a class="nav-link active" href="blog-large-image-right-sidebar.html">Blog</a></li>
              <li class="nav-item"><a class="nav-link" href="portfolio-grid-2-3-col.html">Portfolio</a></li>
              <li class="nav-item"><a class="nav-link" href="page-about.html">About</a></li>
              <li class="nav-item"><a class="nav-link" href="page-contact.html">Contact</a></li>
          </ul>
      </nav>
  </div>
  <div class="block clearfix">
      <h3 class="title">Featured Project</h3>
      <div class="separator-2"></div>
      <div id="carousel-portfolio-sidebar" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-portfolio-sidebar" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-portfolio-sidebar" data-slide-to="1"></li>
          <li data-target="#carousel-portfolio-sidebar" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="image-box shadow bordered text-center mb-20">
              <div class="overlay-container">
                <img src="images/portfolio-4.jpg" alt="">
                <a href="portfolio-item.html" class="overlay-link">
                  <i class="fa fa-link"></i>
              </a>
          </div>
      </div>
  </div>
  <div class="carousel-item">
    <div class="image-box shadow bordered text-center mb-20">
      <div class="overlay-container">
        <img src="images/portfolio-1-2.jpg" alt="">
        <a href="portfolio-item.html" class="overlay-link">
          <i class="fa fa-link"></i>
      </a>
  </div>
</div>
</div>
<div class="carousel-item">
    <div class="image-box shadow bordered text-center mb-20">
      <div class="overlay-container">
        <img src="images/portfolio-1-3.jpg" alt="">
        <a href="portfolio-item.html" class="overlay-link">
          <i class="fa fa-link"></i>
      </a>
  </div>
</div>
</div>
</div>
</div>
</div>
<div class="block clearfix">
  <h3 class="title">Latest tweets</h3>
  <div class="separator-2"></div>
  <ul class="tweets">
    <li>
      <i class="fa fa-twitter"></i>
      <p><a href="#">@lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aliquid, et molestias nesciunt <a href="#">http://b.sa/adsfasfasd</a>.</p><span>16 hours ago</span>
  </li>
  <li>
      <i class="fa fa-twitter"></i>
      <p><a href="#">@lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aliquid, et molestias nesciunt <a href="#">http://b.sa/adsfasfasd</a>.</p><span>16 hours ago</span>
  </li>
</ul>
</div>
<div class="block clearfix">
  <h3 class="title">Popular Tags</h3>
  <div class="separator-2"></div>
  <div class="tags-cloud">
    <div class="tag">
      <a href="#">energy</a>
  </div>
  <div class="tag">
      <a href="#">business</a>
  </div>
  <div class="tag">
      <a href="#">food</a>
  </div>
  <div class="tag">
      <a href="#">fashion</a>
  </div>
  <div class="tag">
      <a href="#">finance</a>
  </div>
  <div class="tag">
      <a href="#">culture</a>
  </div>
  <div class="tag">
      <a href="#">health</a>
  </div>
  <div class="tag">
      <a href="#">sports</a>
  </div>
  <div class="tag">
      <a href="#">life style</a>
  </div>
  <div class="tag">
      <a href="#">books</a>
  </div>
  <div class="tag">
      <a href="#">lorem</a>
  </div>
  <div class="tag">
      <a href="#">ipsum</a>
  </div>
  <div class="tag">
      <a href="#">responsive</a>
  </div>
  <div class="tag">
      <a href="#">style</a>
  </div>
  <div class="tag">
      <a href="#">finance</a>
  </div>
  <div class="tag">
      <a href="#">sports</a>
  </div>
  <div class="tag">
      <a href="#">technology</a>
  </div>
  <div class="tag">
      <a href="#">support</a>
  </div>
  <div class="tag">
      <a href="#">life style</a>
  </div>
  <div class="tag">
      <a href="#">books</a>
  </div>
</div>
</div>
<div class="block clearfix">
  <h3 class="title">Testimonial</h3>
  <div class="separator-2"></div>
  <blockquote class="margin-clear">
    <p>Reprehenderit, nihil magni odit ducimus, ab animi eaque vel excepturi, incidunt.</p>
    <footer><cite title="Source Title">Someone Famous </cite></footer>
</blockquote>
<blockquote class="margin-clear">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolorem.</p>
    <footer><cite title="Source Title">Steve Doe </cite></footer>
</blockquote>
</div>
<div class="block clearfix">
  <h3 class="title">Latest News</h3>
  <div class="separator-2"></div>
  <div class="media margin-clear">
    <div class="d-flex pr-2">
      <div class="overlay-container">
        <img class="media-object" src="images/blog-thumb-1.jpg" alt="blog-thumb">
        <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
    </div>
</div>
<div class="media-body">
  <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
  <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 23, 2017</p>
</div>
</div>
<hr>
<div class="media margin-clear">
    <div class="d-flex pr-2">
      <div class="overlay-container">
        <img class="media-object" src="images/blog-thumb-2.jpg" alt="blog-thumb">
        <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
    </div>
</div>
<div class="media-body">
  <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
  <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 22, 2017</p>
</div>
</div>
<hr>
<div class="media margin-clear">
    <div class="d-flex pr-2">
      <div class="overlay-container">
        <img class="media-object" src="images/blog-thumb-3.jpg" alt="blog-thumb">
        <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
    </div>
</div>
<div class="media-body">
  <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
  <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2017</p>
</div>
</div>
<hr>
<div class="media margin-clear">
    <div class="d-flex pr-2">
      <div class="overlay-container">
        <img class="media-object" src="images/blog-thumb-4.jpg" alt="blog-thumb">
        <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
    </div>
</div>
<div class="media-body">
  <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
  <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2017</p>
</div>
</div>
<div class="text-right space-top">
    <a href="blog-large-image-right-sidebar.html" class="link-dark"><i class="fa fa-plus-circle pl-1 pr-1"></i>More</a>
</div>
</div>
<div class="block clearfix">
  <h3 class="title">Text Sample</h3>
  <div class="separator-2"></div>
  <p class="margin-clear">Debitis eaque officia illo impedit ipsa earum <a href="#">cupiditate repellendus</a> corrupti nisi nemo, perspiciatis optio harum, hic laudantium nulla maiores rem sit magni neque nihil sequi temporibus. Laboriosam ipsum reiciendis iste, nobis obcaecati, a autem voluptatum odio? Recusandae officiis dicta quod qui eligendi.</p>
</div>
<div class="block clearfix">
  <form role="search">
    <div class="form-group has-feedback">
      <input type="text" class="form-control" placeholder="Search">
      <i class="fa fa-search form-control-feedback"></i>
  </div>
</form>
</div>
</div>
</aside>
<!-- sidebar end -->

</div>
</div>
</section>
<!-- main-container end -->

<!-- footer top start -->
<!-- ================ -->
<div class="dark-bg default-hovered footer-top animated-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="call-to-action text-center">
            <div class="row">
              <div class="col-md-8">

              </div>
              <div class="col-md-4">
                <p class="mt-3"><a href="#"></a></p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- footer top end -->

<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
<!-- ================ -->
<footer id="footer" class="clearfix ">

    <!-- .footer start -->
    <!-- ================ -->
    <div class="footer">
      <div class="container">
        <div class="footer-inner">
          <div class="row">
            <div class="col-lg-3">
              <div class="footer-content">
                <div class="logo-footer"><img id="logo-footer" src="images/logo_light_blue.png" alt=""></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus illo vel dolorum soluta consectetur doloribus sit. Delectus non tenetur odit dicta vitae debitis suscipit doloribus. Ipsa, aut voluptas quaerat... <a href="page-about.html">Learn More<i class="fa fa-long-arrow-right pl-1"></i></a></p>
                <div class="separator-2"></div>
                <nav>
                  <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Lorem</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                    <li class="nav-item"><a class="nav-link" href="page-about.html">About</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="col-lg-3">
      <div class="footer-content">
        <h2 class="title">Latest From Blog</h2>
        <div class="separator-2"></div>
        <div class="media margin-clear">
          <div class="d-flex pr-2">
            <div class="overlay-container">
              <img class="media-object" src="images/blog-thumb-1.jpg" alt="blog-thumb">
              <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
          </div>
      </div>
      <div class="media-body">
        <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
        <p class="small margin-clear"><i class="fa fa-calendar pr-2"></i>Mar 23, 2017</p>
    </div>
</div>
<hr>
<div class="media margin-clear">
  <div class="d-flex pr-2">
    <div class="overlay-container">
      <img class="media-object" src="images/blog-thumb-2.jpg" alt="blog-thumb">
      <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
  </div>
</div>
<div class="media-body">
    <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
    <p class="small margin-clear"><i class="fa fa-calendar pr-2"></i>Mar 22, 2017</p>
</div>
</div>
<hr>
<div class="media margin-clear">
  <div class="d-flex pr-2">
    <div class="overlay-container">
      <img class="media-object" src="images/blog-thumb-3.jpg" alt="blog-thumb">
      <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
  </div>
</div>
<div class="media-body">
    <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
    <p class="small margin-clear"><i class="fa fa-calendar pr-2"></i>Mar 21, 2017</p>
</div>
</div>
<hr>
<div class="media margin-clear">
  <div class="d-flex pr-2">
    <div class="overlay-container">
      <img class="media-object" src="images/blog-thumb-4.jpg" alt="blog-thumb">
      <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
  </div>
</div>
<div class="media-body">
    <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
    <p class="small margin-clear"><i class="fa fa-calendar pr-2"></i>Mar 21, 2017</p>
</div>
</div>
<div class="text-right space-top">
  <a href="blog-large-image-right-sidebar.html" class="link-dark"><i class="fa fa-plus-circle pl-1 pr-1"></i>More</a>
</div>
</div>
</div>
<div class="col-lg-3">
  <div class="footer-content">
    <h2 class="title">Portfolio Gallery</h2>
    <div class="separator-2"></div>
    <div class="row grid-space-10">
      <div class="col-4 col-lg-6">
        <div class="overlay-container mb-10">
          <img src="images/gallery-1.jpg" alt="">
          <a href="portfolio-item.html" class="overlay-link small">
            <i class="fa fa-link"></i>
        </a>
    </div>
</div>
<div class="col-4 col-lg-6">
    <div class="overlay-container mb-10">
      <img src="images/gallery-2.jpg" alt="">
      <a href="portfolio-item.html" class="overlay-link small">
        <i class="fa fa-link"></i>
    </a>
</div>
</div>
<div class="col-4 col-lg-6">
    <div class="overlay-container mb-10">
      <img src="images/gallery-3.jpg" alt="">
      <a href="portfolio-item.html" class="overlay-link small">
        <i class="fa fa-link"></i>
    </a>
</div>
</div>
<div class="col-4 col-lg-6">
    <div class="overlay-container mb-10">
      <img src="images/gallery-4.jpg" alt="">
      <a href="portfolio-item.html" class="overlay-link small">
        <i class="fa fa-link"></i>
    </a>
</div>
</div>
<div class="col-4 col-lg-6">
    <div class="overlay-container mb-10">
      <img src="images/gallery-5.jpg" alt="">
      <a href="portfolio-item.html" class="overlay-link small">
        <i class="fa fa-link"></i>
    </a>
</div>
</div>
<div class="col-4 col-lg-6">
    <div class="overlay-container mb-10">
      <img src="images/gallery-6.jpg" alt="">
      <a href="portfolio-item.html" class="overlay-link small">
        <i class="fa fa-link"></i>
    </a>
</div>
</div>
</div>
<div class="text-right space-top">
  <a href="portfolio-grid-2-3-col.html" class="link-dark"><i class="fa fa-plus-circle pl-1 pr-1"></i>More</a>
</div>
</div>
</div>
<div class="col-lg-3">
  <div class="footer-content">
    <h2 class="title">Find Us</h2>
    <div class="separator-2"></div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odio voluptatem necessitatibus illo vel dolorum soluta.</p>
    <ul class="social-links circle animated-effect-1">
      <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
      <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
      <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
      <li class="xing"><a href="#"><i class="fa fa-xing"></i></a></li>
  </ul>
  <div class="separator-2"></div>
  <ul class="list-icons">
      <li><i class="fa fa-map-marker pr-2 text-default"></i> One infinity loop, 54100</li>
      <li><i class="fa fa-phone pr-2 text-default"></i> +00 1234567890</li>
      <li><a href="mailto:email@domain.com"><i class="fa fa-envelope-o pr-2"></i>email@domain.com</a></li>
  </ul>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- .footer end -->

<!-- .subfooter start -->
<!-- ================ -->
<div class="subfooter">
  <div class="container">
    <div class="subfooter-inner">
      <div class="row">
        <div class="col-md-12">
          <p class="text-center">Copyright © 2018 The Project. All rights reserved.</p>
      </div>
  </div>
</div>
</div>
</div>
<!-- .subfooter end -->

</footer>
<!-- footer end -->
</div>
<!-- page-wrapper end -->

@endsection

