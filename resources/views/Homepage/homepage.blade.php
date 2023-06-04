@extends('layouts.template')

@section('judul')
Home
@endsection

@section('hero')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Sistem Informasi Geografis<br>UMKM Bandar Lampung</h2>
          <p data-aos="fade-up" data-aos-delay="100">Sistem informasi ini merupakan aplikasi pemetaan UMKM di wilayah Bandar Lampung. Aplikasi ini memuat informasi dan lokasi dari tempat UMKM di Bandar Lampung.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-book-a-table">Lihat Detail</a>
            <a href="https://www.youtube.com/watch?v=xwoogMkmmdk&t=112s" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="{{asset('tema/img/umkmtoko.png')}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <br>
          <h2>About</h2>
          <p>Learn More <span>About</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative logoumkm-img" style="background-image: url(tema/img/logoumkm.png) ;" data-aos="fade-up" data-aos-delay="150">
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <br><br>
                <hr>
              <h4 align="center" class="fst-italic">
                "Berbelanja dengan hati dan memberi kehidupan pada komunitas UMKM lokal. Kunjungi situs web kami dan temukan berbagai pilihan produk unik yang dibuat dengan keahlian dan dedikasi oleh pengusaha lokal. Dengan setiap pembelian, Anda ikut berkontribusi dalam memajukan perekonomian lokal. Jadi, tunggu apa lagi? Mulailah berbelanja sekarang dan rasakan kebaikan yang Anda hasilkan!"
                <hr>
              </h4>
              <br><br>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

@endsection