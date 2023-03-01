@extends('layouts.main')


@section('content')
<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(image/gambar\ 10.jpg) no-repeat">
            <div class="content">
               <span>Keindahan Kota Di Indonesia</span>
               <h3>SURABAYA, JAWA TIMUR</h3>
               <a href="/package" class="btn">Petualangan Berikutnya</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(image/gambar\ 11.jpg) no-repeat">
            <div class="content">
               <span>Keindahan Kota Di Indonesia</span>
               <h3>KOTA JAKARTA, INDONESIA</h3>
               <a href="/package" class="btn">Petualangan Berikutnya</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(image/gambar\ 12.jpg) no-repeat">
            <div class="content">
               <span>Keindahan Kota Di Indonesia</span>
               <h3>MANADO, SULAWESI UTARA</h3>
               <a href="/package" class="btn">Petualangan Berikutnya</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(image/gambar\ 4.jpg) no-repeat">
            <div class="content">
               <span>Keindahan Kota Di Indonesia</span>
               <h3>PULAU NIAS, SUMATERA UTARA</h3>
               <a href="/package" class="btn">Petualangan Berikutnya</a>
            </div>
         </div>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!--Mulai home packages  -->

<section class="home-packages">

   <h1 class="heading-title"> PESONA INDONESIA</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="image/gambar 1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Raja Ampat Papua</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 14.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pantai Sumba, NTT</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bunaken, Sulawesi Utara</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="/package" class="btn">Lihat Berikutnya</a> </div>

</section>

<!--  Mulai home  -->

<section class="home-offer">
   <div class="content">
      <h3>Tunggu Apalagi</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
      <a href="/book" class="btn">Pesan Sekarang</a>
   </div>
</section>
@endsection