@extends('layouts.template')

@section('judul')
Kain Tapis Fitri
@endsection

@section('ktf')

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <br>
        <p>Toko <span>Kain Tapis Fitri</span></p>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('tema/img/tanjungkarang/ktf/ktf1.jpeg')}}"><img src="{{asset('tema/img/tanjungkarang/ktf/ktf1.jpeg')}}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('tema/img/tanjungkarang/ktf/ktf2.jpeg')}}"><img src="{{asset('tema/img/tanjungkarang/ktf/ktf2.jpeg')}}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('tema/img/tanjungkarang/ktf/ktf3.jpeg')}}"><img src="{{asset('tema/img/tanjungkarang/ktf/ktf3.jpeg')}}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('tema/img/tanjungkarang/ktf/ktf4.jpeg')}}"><img src="{{asset('tema/img/tanjungkarang/ktf/ktf4.jpeg')}}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('tema/img/tanjungkarang/ktf/ktf5.jpeg')}}"><img src="{{asset('tema/img/tanjungkarang/ktf/ktf5.jpeg')}}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('tema/img/tanjungkarang/ktf/ktf6.jpeg')}}"><img src="{{asset('tema/img/tanjungkarang/ktf/ktf6.jpeg')}}" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Gallery Section -->

@endsection