<?php
// gallery.php
?>
<!DOCTYPE html>
<html lang="si">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thinulaka Dambadiva Pilgrimage Gallery</title>

  <!-- Tailwind & Fonts -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: {50:'#f5f3ff',100:'#ede9fe',200:'#ddd6fe',300:'#c4b5fd',400:'#a78bfa',500:'#8b5cf6',600:'#7c3aed',700:'#6d28d9',800:'#5b21b6',900:'#4c1d95'},
            secondary: {50:'#fefce8',100:'#fef9c3',200:'#fef08a',300:'#fde047',400:'#facc15',500:'#eab308',600:'#ca8a04',700:'#a16207',800:'#854d0e',900:'#713f12'}
          }
        }
      }
    }
  </script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Swiper Slider CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <style>
    body { font-family: "Inter", sans-serif; background: linear-gradient(135deg,#0f0a23 0%,#1e1b4b 50%,#2d1b69 100%); color: #f5f3ff; overflow-x: hidden; }
    .premium-font { font-family: "Cinzel", serif; }
    .text-gradient { background: linear-gradient(135deg,#facc15 0%,#8b5cf6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    .glass-effect { background: rgba(255,255,255,0.08); backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.1); border-radius: 16px; padding: 20px; }
    .swiper { width: 100%; max-width: 900px; height: 500px; }
    .swiper-slide { display:flex; justify-content:center; align-items:center; border-radius: 16px; overflow:hidden; }
    .swiper-slide img { width:100%; height:100%; object-fit:cover; border-radius:16px; }
	.btn-royal { background: linear-gradient(135deg,#6d28d9 0%,#8b5cf6 50%,#facc15 100%); color:#fff; padding:16px 32px; border-radius:9999px; font-size:1.25rem; font-weight:600; text-decoration:none; transition:all 0.3s ease; display:inline-block; }
    .btn-royal:hover { transform: translateY(-4px); }

  </style>
</head>
<body>

  <!-- Hero -->
  <section class="hero section text-center">
    <h1 class="premium-font text-gradient text-4xl mb-4">Thinulaka Dambadiva Pilgrimage Gallery</h1>
    </section>
	
  <!-- Call to Action -->
<section class="section text-center">
  <div class="flex justify-center gap-6 mt-6">
    <a href="index.php" 
       class="btn-royal px-6 py-3 text-lg font-bold shadow-xl hover:scale-105 transition-transform duration-300">
      <i class="fas fa-arrow-left mr-2"></i> Back
    </a>

    <a href="https://www.facebook.com/people/Thinulaka-Tours-%E0%B6%AD%E0%B7%92%E0%B6%B1%E0%B7%94%E0%B6%BD%E0%B6%9A-%E0%B6%AF%E0%B6%B9%E0%B6%AF%E0%B7%92%E0%B7%80-%E0%B7%80%E0%B6%B1%E0%B7%8A%E0%B6%AF%E0%B6%B1%E0%B7%8F-%E0%B7%83%E0%B6%82%E0%B7%80%E0%B7%92%E0%B6%B0%E0%B7%8F%E0%B6%B1%E0%B6%BA/100091792071250/?locale=en_GB#" 
       class="btn-royal px-6 py-3 text-lg font-bold shadow-xl hover:scale-105 transition-transform duration-300">
      <i class="fas fa-eye mr-2"></i> View More
    </a>
  </div>
</section>
<br>
  <!-- Slider Section -->
  <section class="section flex justify-center py-8">
    <div class="swiper w-full max-w-6xl">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="images/1.jpg"></div>
        <div class="swiper-slide"><img src="images/2.jpg" ></div>
        <div class="swiper-slide"><img src="images/3.jpg" ></div>
        <div class="swiper-slide"><img src="images/4.jpg" ></div>
        <div class="swiper-slide"><img src="images/5.jpg" ></div>
        <div class="swiper-slide"><img src="images/6.png" ></div>
        <div class="swiper-slide"><img src="images/7.jpg" ></div>
		<div class="swiper-slide"><img src="images/8.jpeg" ></div>
		<div class="swiper-slide"><img src="images/9.jpg" ></div>
		<div class="swiper-slide"><img src="images/10.jpg" ></div>
		<div class="swiper-slide"><img src="images/11.jpg" ></div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Navigation buttons -->
      <div class="swiper-button-prev text-white"></div>
      <div class="swiper-button-next text-white"></div>
    </div>
  </section>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper('.swiper', {
      loop: true,
      autoHeight:true,
	  pagination: { el: '.swiper-pagination', clickable: true },
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
      autoplay: { delay: 2000, disableOnInteraction: false },
      effect: 'fade',
      fadeEffect: { crossFade: true }
    });


  </script>
</body>
</html>
