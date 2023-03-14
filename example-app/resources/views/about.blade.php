@extends('layouts.main')

@section('content')


<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="image/gambar 21.jpg" alt="">
   </div>

   <div class="content">
      <h3>Mari Sewa Gedung di kami</h3>
      <p>Ada berbagai gedung mewah dan indah yang kami sajikan</p>

      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>Tempat Terbaik</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Harga Murah</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>Customer service</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> Komentar Pelanggan </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Senang sekali Pesan disini, Ramah.</p>
            <h3>Susan</h3>
            <span>Pegawai Kantor</span>
            <img src="image/foto.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Pelayanannya Mantap </p>
            <h3>susanti</h3>
            <span>Sekretaris</span>
            <img src="image/foto 2.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Senang Sekali !, sangat baik pelayanannya</p>
            <h3>Soo Min </h3>
            <span>Artis</span>
            <img src="image/foto 3.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Senang bisa pesan disini</p>
            <h3>Lisa Wang</h3>
            <span>Desain</span>
            <img src="image/foto 5.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
            </div>
            <p>pelayanannya ramah dan baik</p>
            <h3>Miryam Chung</h3>
            <span>Sekretaris</span>
            <img src="image/foto1.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Bagus Pelayanannya</p>
            <h3>Amira</h3>
            <span>Ibu Rumah Tangga</span>
            <img src="image/foto 6.jpg" alt="">
         </div>

      </div>

   </div>

</section>
@endsection