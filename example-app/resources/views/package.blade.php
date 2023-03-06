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

<div class="heading" style="background:url(image/gambar\ 10.jpg) no-repeat">
   <h1>WISATA INDONESIA</h1>
</div>

<!-- Mulai Paket  -->

<section class="packages">

   <h1 class="heading-title">TEMPAT POPULER</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="image/gambar 13.png" alt="">
         </div>
         <div class="content">
            <h3> Pantai Lombok, Nusa Tenggara Barat </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 14.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pantai Sumba, Nusa Tenggara Timur</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 9.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pantai Kendari, Sulawesi Tenggara</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 15.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pantai Sulawesi, Sulawesi Tengah</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 16.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pantai Losari, Sulawesi Selatan</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 17.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pantai Sanur, Bali</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bunaken, Sulawesi Utara</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 5.jpg" alt="">
         </div>
         <div class="content">
            <h3>Tana Toraja, Sulawesi Selatan</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 18.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pantai Mentawai, Sumatera Barat</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 19.png" alt="">
         </div>
         <div class="content">
            <h3>Pantai Nias, Sumatera Utara</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 20.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pulau Cinta, Gorontalo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="/book" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Raja Ampat, Papua Barat</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
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
