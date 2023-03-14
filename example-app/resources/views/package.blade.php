<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Paket</title>
   @include ('partials.website_icon')


   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- link font awesome cdn  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- link  css file   -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- Mulai header   -->

@include('partials.navbar')

<!-- Mulai Heading-->

<!-- Mulai Paket  -->

<section class="packages">

   <h1 class="heading-title">GEDUNG FAVORIT</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="image/gedung serbaguna_2.jpg" alt="">
         </div>
         <div class="content">
            <h3> Gedung Serbaguna  </h3>
            <p>Gedung dengan harga murah tapi mewah</p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gedung mewah.jpg" alt="">
         </div>
         <div class="content">
            <h3>Gedung Serbaguna  </h3>
            <p>Gedung serbaguna mewah, elegan dan indah</p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gedung makasar.jpg" alt="">
         </div>
         <div class="content">
            <h3>Gedung Pernikahan </h3>
            <p>Gedung meriah dan mewah</p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gedung-pernikahan.jpg" alt="">
         </div>
         <div class="content">
            <h3>Gedung Pernikahan </h3>
            <p>murah meriah dan mewah</p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gedung 1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Hotel </h3>
            <p>Hotel bintang 4 dengan pelayana ramah dan harga yang terjangkau </p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/HI.jpg" alt="">
         </div>
         <div class="content">
            <h3>Hotel Indonesia </h3>
            <p>Hotel bintang 5 dengan fasilitas terbaik dan pelayanan ramah </p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

   </div>



</section>

<!-- Mulai footer   -->

@include ('partials.footer')

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<script src="script.js"></script>

</body>
</html>
