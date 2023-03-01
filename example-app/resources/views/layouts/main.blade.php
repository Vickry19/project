<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sewa Gedung</title>
   @include ('partials.website_icon')

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- link font awesome cdn   -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


   <link rel="stylesheet" href="style.css">

</head>
<body>

    <!-- Mulai header  -->
    @include('partials.navbar')
    {{-- Akhir header --}}

    @yield('content')

    <!-- Mulai  Footer -->
    @include ('partials.footer')
    {{-- Akhir Footer --}}

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="/js/script.js"></script>

</body>
</html>
