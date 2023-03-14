<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pesanan</title>
   @include ('partials.website_icon')

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!--  css file  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- Mulai header   -->

@include('partials.navbar')

<!-- Mulai Heading -->

<!-- Mulai Pesanan  -->

<section class="booking">

   <h1 class="heading-title">CEPAT PESAN SEKARANG!</h1>

   <form action="" method="post" class="book-form">
      @csrf
      <div class="flex">
         <div class="inputBox">
            <span>Nama:</span>
            <input type="text" placeholder="Masukan  Nama Anda" name="name">
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="Masukan Email Anda" name="email">
         </div>
         <div class="inputBox">
            <span>Handphone :</span>
            <input type="tel" placeholder="Masukan Nomor Anda" name="phone">
         </div>
         <div class="inputBox">
            <span>Jenis Geudng:</span>
            <input type="text" placeholder="Masukan Jenis Gedung" name="address">
         </div>
         <div class="inputBox">
            <span>Check in:</span>
            <input type="date" name="arrivals">
         </div>
      </div>

      <input type="submit" value="Kirim" class="btn" name="send">

   </form>

</section>



















<!--Mulai footer   -->

@include ('partials.footer')

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<script src="script.js"></script>

</body>
</html>
