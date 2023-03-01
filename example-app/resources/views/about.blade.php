@extends('layouts.main')

@section('content')
<div class="heading" style="background:url(image/gambar\ 3.jpg) no-repeat">
   <h1>Pulau Komodo</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="image/gambar 21.jpg" alt="">
   </div>

   <div class="content">
      <h3>Mari Berpetualang Bersama kami</h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure numquam nulla iusto corporis dolor commodi libero, vitae obcaecati optio rerum ab culpa nesciunt, earum mollitia quasi ipsam non. Aliquid, iure.</p>

      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>Tempat Terbaik</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Daftar harga</span>
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
            <h3>Susan Lee</h3>
            <span>Akuntan</span>
            <img src="image/foto.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Pelayanannya Mantap ?</p>
            <h3>Susan Lee</h3>
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
            <p>Senang Sekali!</p>
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
            <img src="image/foto.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
            </div>
            <p>Senang Bisa Berkunjung?</p>
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
            <p>Bagus Pelayanannya?</p>
            <h3>Susan Lee</h3>
            <span>Akuntan</span>
            <img src="image/foto 2.jpg" alt="">
         </div>

      </div>

   </div>

</section>
@endsection