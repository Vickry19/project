@extends('layouts.main')


@section('content')
<section class="home">

   <div class="swiper home-slider">


         <div class="swiper-slide slide" style="background:url(image/hotel\ 4.jpg) no-repeat">
      
      </div>

   </div>

</section>

<!--Mulai home packages  -->

<section class="home-packages">

   <h1 class="heading-title"> Building Rent</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="image/gedung serbaguna_1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Gedung Serba Guna</h3>
            <p>Berbagai Gedung indah dan mewah </p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/hotel 1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Hotel </h3>
            <p>Bermacam macam hotel bintang lima </p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gedung makasar.jpg" alt="">
         </div>
         <div class="content">
            <h3>Gedung Pernikahan</h3>
            <p>Berbagai macam gedung pernikahan </p>
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
      <p>Ayo Sewa di Building Rent kami</p>
      <a href="/book" class="btn">Pesan Sekarang</a>
   </div>
</section>
@endsection