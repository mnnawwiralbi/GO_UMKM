@extends('layouts.template')

@section('judul')
UMKM
@endsection

@section('umkm')

<!-- ======= Menu Section ======= -->
<section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <br>
        <h2>UMKM</h2>
        <p>List <span>UMKM </span></p>
      </div>

      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
            <h4>Kemiling</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
            <h4>Kedaton</h4>
          </a><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
            <h4>Tanjung Karang</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
            <h4>hoho</h4>
          </a>
        </li><!-- End tab nav item -->

      </ul>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

        <div class="tab-pane fade active show" id="menu-starters">

          <div class="tab-header text-center">
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/kemiling/sbb/sibintangbuah.png')}}" class="glightbox"><img src="{{asset('tema/img/kemiling/sbb/sibintangbuah.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4 style="color:black;"><a href="{{url('/sbb')}}">Si Bintang Buah</a></h4>
              <p class="ingredients">
                "Menjual olahan keripik-keripik khas Bandar Lampung"
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-2.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-2.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Aut Luia</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-3.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-3.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Est Eligendi</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-4.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-4.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-5.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-5.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-6.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-6.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Laboriosam Direva</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Starter Menu Content -->

        <div class="tab-pane fade" id="menu-breakfast">

          <div class="tab-header text-center">
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-1.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-1.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Magnam Tiste</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-2.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-2.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Aut Luia</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-3.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-3.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Est Eligendi</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-4.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-4.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-5.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-5.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-6.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-6.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Laboriosam Direva</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Breakfast Menu Content -->

        <div class="tab-pane fade" id="menu-lunch">

          <div class="tab-header text-center">
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-1.png')}}" class="glightbox"><img src="{{asset('tema/img/tanjungkarang/ktf/kaintapisfitri.jpeg')}}" class="menu-img img-fluid" alt=""></a>
              <h4 style="color:black;"><a href="{{url('/ktf')}}">Kain Tapis Fitri</a></h4>
              <p class="ingredients">
                "Menyediakan berbagai jenis kerajinan kain tapis khas Bandar Lampung"
              </p>
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-2.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-2.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Aut Luia</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-3.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-3.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Est Eligendi</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-4.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-4.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-5.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-5.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-6.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-6.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Laboriosam Direva</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Lunch Menu Content -->

        <div class="tab-pane fade" id="menu-dinner">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Dinner</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-1.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-1.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Magnam Tiste</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $5.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-2.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-2.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Aut Luia</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $14.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-3.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-3.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Est Eligendi</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $8.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-4.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-4.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-5.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-5.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="{{asset('tema/img/menu/menu-item-6.png')}}" class="glightbox"><img src="{{asset('tema/img/menu/menu-item-6.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Laboriosam Direva</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $9.95
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Dinner Menu Content -->

      </div>

    </div>
  </section><!-- End Menu Section -->

@endsection