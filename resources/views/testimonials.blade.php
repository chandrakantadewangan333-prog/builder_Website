<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('images/img.webp') }}" rel="icon">

    <title>Ojas Builder - Building Dreams, Crafting Futures</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- FontAwesome Latest -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Swiper CSS + JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

     <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- main js -->
    <script src="{{ asset('js/main.js') }}"></script>
</head>
<body>
    <div class="relative group bg-cover bg-center xl:h-[700px] h-[500px] ">
  <img src="{{ asset('images/test1.avif') }}" alt="bg-image" class="absolute inset-0 w-full h-full object-cover" data-animate="slide-down">

  <!-- Navbar -->
  <nav class="fixed flex bg-white/40 top-0 left-0 w-full z-50 md:px-20 px-6 py-3 items-center justify-between backdrop-blur-sm box-shadow slide-down transition-all duration-500" id="navbar" data-animate="slide-down">
    <!-- Logo -->
    <a href="{{ route('home') }}">
      <div class="flex items-center">
        <img src="{{ asset('images/logo1.png') }}" alt="Logo" class="rounded-xl h-16 object-contain">  
        <h1 class="flex-col flex self-center text-blue-900  whitespace-nowrap ml-2">
          <p class="font-extrabold drop-shadow-[0_0_2px_pink] md:text-4xl text-2xl">Ojas Builder</p>
          <p class="text-sm">Building Dreams, Crafting Futures</p>
        </h1>
      </div>
    </a>

    <!-- Desktop Menu -->
    <div class="hidden md:flex items-center gap-8 border rounded-full bg-slate-300 shadow-md">
      <ul class="flex items-center space-x-6">
       <a href="{{ route('home') }}"> <li class="font-semibold text-gray-700 hover:bg-slate-400 hover:text-white px-6 py-2 cursor-pointer rounded-l-full">Home</li></a>
       <a href="{{ route('about') }}"> <li class="font-semibold text-gray-700 hover:bg-slate-400 hover:text-white px-6 py-2 cursor-pointer">About</li></a>
       <a href="{{ route('services') }}"> <li class="font-semibold text-gray-700 hover:bg-slate-400 hover:text-white px-6 py-2 cursor-pointer">Services</li></a>
       <a href="{{ route('projects') }}"> <li class="font-semibold text-gray-700 hover:bg-slate-400 hover:text-white px-6 py-2 cursor-pointer">Projects</li></a>
       <a href="{{ route('testimonials') }}"> <li class="font-semibold text-gray-700 hover:bg-slate-400 hover:text-white px-6 py-2 cursor-pointer">Testimonials</li></a>
       <a href="{{ route('contact') }}"> <li class="font-semibold text-gray-700 hover:bg-slate-400 hover:text-white px-6 py-2 cursor-pointer rounded-r-full">Contact</li></a>
      </ul>
    </div>

    <!-- Mobile Hamburger -->
    <button id="menu-toggle" class="md:hidden text-3xl text-blue-900 md:text-xl">
      <i class="fa-solid fa-bars"></i>
    </button>
  </nav>

  <!-- Mobile Dropdown Menu -->
  <div id="mobile-menu" class="hidden fixed top-0 bottom-0 right-0 w-2/3 bg-white/90 backdrop-blur-md shadow-md md:hidden z-50" data-animate="slide-in-right">
  <!-- Close Button -->
  <button id="close-menu" class="absolute top-4 right-4 text-gray-700 hover:text-red-500 text-2xl font-bold pb-5">&times;</button>  
  <ul class="flex flex-col items-start space-y-2 p-6 mt-12">
     <li class="w-full p-2"> <a href="{{ route('home') }}" class="w-full font-semibold text-gray-700 hover:bg-slate-400 hover:text-white px-4 py-2 rounded">Home</a></li>
     <li class="w-full p-2"> <a href="{{ route('about') }}" class="w-full font-semibold text-gray-700 hover:bg-slate-400 hover:text-white px-4 py-2 rounded">About</a></li>
     <li class="w-full p-2"> <a href="{{ route('services') }}" class="w-full font-semibold text-gray-700 hover:bg-slate-400 hover:text-white px-4 py-2 rounded">Services</a></li>
     <li class="w-full p-2"> <a href="{{ route('projects') }}" class="w-full font-semibold text-gray-700 hover:bg-slate-400 hover:text-white px-4 py-2 rounded">Projects</a></li>
     <li class="w-full p-2"> <a href="{{ route('testimonials') }}" class="w-full font-semibold text-gray-700 hover:bg-slate-400 hover:text-white px-4 py-2 rounded">Testimonials</a></li>
     <li class="w-full p-2"> <a href="{{ route('contact') }}" class="w-full font-semibold text-gray-700 hover:bg-slate-400 hover:text-white px-4 py-2 rounded">Contact</a></li>
    </ul>
  </div>

  <!-- Hero Section -->
  <div class="absolute inset-0 bg-opacity-50 bg-black/30 flex items-center md:justify-start justify-center pt-16 md:pt-8">
    <div class="text-center m-10 max-w-4xl space-y-8">
      <h1 class="text-white md:text-8xl text-4xl drop-shadow-lg" data-animate="zoom-in">Testimonials</h1>
      <p class="text-white/90 xl:text-2xl text-xl font-xl mb-10 drop-shadow-m " data-animate="slide-up">
        We didn’t just build a structure — they built trust, comfort, and a long-term relationship with your family.
      </p>
    </div>
  </div>
</div>


 <div class="w-full space-y-8 text-center py-10">
    <p class="text-orange-500 font-semibold text-xl">Testimonials</p>
    <p class="text-6xl text-blue-950 font-semibold">What Our Clients Say</p>
    <p class="text-gray-500 py-2 text-2xl">Hear from those who've built with us and see how we brought their visions to life.</p>
</div>

<div class="grid md:grid-cols-3 grid-cols-1  sitem-center gap-8 justify-center md:p-20 p-2 mx-auto ">
    <div class="text-center item-center justify-center flex flex-col rounded-xl shadow-xl p-8 md:p-20 bg-orange-100 h-[400px] w-full md:space-y-20 space-y-10" data-animate="zoom-in"><div class=" text-xl font-semibold text-gray-600">“Ojas Builder turned our dream home into reality. The quality of work and professionalism were outstanding.”</div><span class="text-blue-900 md:text-xl font-semibold">— Rahul Mehta, Homeowner</span></div>
    <div class="text-center item-center justify-center flex flex-col rounded-xl shadow-xl p-8 md:p-20 bg-orange-100 h-[400px] w-full md:space-y-20 space-y-10" data-animate="zoom-in"><div class=" text-xl font-semibold text-gray-600">“Reliable, transparent, and on-time delivery — that’s what sets Ojas Builder apart.”</div><span  class="text-blue-900 md:text-xl font-semibold" >— Anjali Shah, Project Partner</span></div>
    <div class="text-center item-center justify-center flex flex-col rounded-xl shadow-xl p-8 md:p-20 bg-orange-100 h-[400px] w-full md:space-y-20 space-y-10" data-animate="zoom-in"><div class=" text-xl font-semibold text-gray-600">“From design to execution, the entire process was smooth and professional.”</div><span  class="text-blue-900 md:text-xl font-semibold">— Arun Patel, Business Owner</span></div>
    <div class="text-center item-center justify-center flex flex-col rounded-xl shadow-xl p-8 md:p-20 bg-orange-100 h-[400px] w-full md:space-y-20 space-y-10" data-animate="zoom-in"><div class=" text-xl font-semibold text-gray-600">“Transforming interiors with creative layouts, lighting, and premium finishes.”</div><span  class="text-blue-900 md:text-xl font-semibold">— Parthiv Patela, Renovation Owner</span></div>
    <div class="text-center item-center justify-center flex flex-col rounded-xl shadow-xl p-8 md:p-20 bg-orange-100 h-[400px] w-full md:space-y-20 space-y-10" data-animate="zoom-in"><div class=" text-xl font-semibold text-gray-600">“Innovative designs created by skilled architects focused on aesthetics and efficiency.”</div><span  class="text-blue-900 md:text-xl font-semibold">— Devendra dev, Residential Owner</span></div>
    <div class="text-center item-center justify-center flex flex-col rounded-xl shadow-xl p-8 md:p-20 bg-orange-100 h-[400px] w-full md:space-y-20 space-y-10" data-animate="zoom-in"><div class=" text-xl font-semibold text-gray-600">“They handled our home improvement project with such care and precision. Every step was clearly communicated, and the final result exceeded our expectations.”</div><span class="text-blue-900 md:text-xl font-semibold">— Homeowner Experience</span></div>
    <div class="text-center item-center justify-center flex flex-col rounded-xl shadow-xl p-8 md:p-20 bg-orange-100 h-[400px] w-full md:space-y-20 space-y-10" data-animate="zoom-in"><div class=" text-xl font-semibold text-gray-600">“The team worked seamlessly with our business requirements. Their dedication to quality and efficiency made the entire project stress-free.”</div><span  class="text-blue-900 md:text-xl font-semibold" >— Corporate Client</span></div>
    <div class="text-center item-center justify-center flex flex-col rounded-xl shadow-xl p-8 md:p-20 bg-orange-100 h-[400px] w-full md:space-y-20 space-y-10" data-animate="zoom-in"><div class=" text-xl font-semibold text-gray-600">“The craftsmanship and design quality were exceptional. They turned our vision into reality with remarkable attention to detail.”</div><span  class="text-blue-900 md:text-xl font-semibold">— Architectural/Design Project</span></div>
    <div class="text-center item-center justify-center flex flex-col rounded-xl shadow-xl p-8 md:p-20 bg-orange-100 h-[400px] w-full md:space-y-20 space-y-10" data-animate="zoom-in"><div class=" text-xl font-semibold text-gray-600">“We were nervous about starting a renovation, but their team made the process easy. The final outcome is modern, functional, and absolutely beautiful.”</div><span  class="text-blue-900 md:text-xl font-semibold">— Renovation Story</span></div>
    <div class="text-center item-center justify-center flex flex-col rounded-xl shadow-xl p-8 md:p-20 bg-orange-100 h-[400px] w-full md:space-y-20 space-y-10" data-animate="zoom-in"><div class=" text-xl font-semibold text-gray-600">“A level of elegance and detail that is rare to find. Their work elevated our home into a modern luxury space.”</div><span  class="text-blue-900 md:text-xl font-semibold">— Luxury Residential Owner</span></div>
    <div class="text-center item-center justify-center flex flex-col rounded-xl shadow-xl p-8 md:p-20 bg-orange-100 h-[400px] w-full md:space-y-20 space-y-10" data-animate="zoom-in"><div class=" text-xl font-semibold text-gray-600">“As first-timers, we had a lot of questions. They guided us through everything with kindness and professionalism.”</div><span  class="text-blue-900 md:text-xl font-semibold">— First-Time Home Project</span></div>
    <div class="text-center item-center justify-center flex flex-col rounded-xl shadow-xl p-8 md:p-20 bg-orange-100 h-[400px] w-full md:space-y-20 space-y-10" data-animate="zoom-in"><div class=" text-xl font-semibold text-gray-600">“Exceptional quality, meticulous planning, and flawless execution. They’ve set a new benchmark for professional construction services.”</div><span  class="text-blue-900 md:text-xl font-semibold">— High-Value Commercial Project</span></div>
</div>


<footer>

  <div class="bg-gray-200 text-blue-800 py-5">
    <div class="flex flex-wrap justify-center item-center px-8 py-4 md:gap-8 gap-10">
      <p class="text-[22px]">We’d love to hear from you. Whether it’s a new project or a renovation idea, our team is ready to help.</p>
      <p class=""><a href="{{ route('contact') }}" class="bg-sky-800 p-4 text-white rounded-sm justify-center hover:bg-sky-700">Get in Touch</a></p>
    </div>
  </div>
  
<div class="bg-sky-900 text-gray-700 text-xl relative md:h-[450px] h-[1000px] py-20">

  <!-- Grid Container Positioned on Top -->
  <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center">
      <div class="grid grid-cols-1 md:grid-cols-6 container mx-auto px-4 mt-10 gap-6">
          
          <div class="col-span-1 md:col-span-3 text-center md:text-left">
              <div class="inline-block text-white space-y-3">
                   <!-- Logo -->
                  <a href="{{ route('home') }}">
                    <div class="flex items-center text-white">
                      <img src="{{ asset('images/logo1.png') }}" alt="Logo" class="rounded-xl h-16 object-contain">  
                      <h1 class="flex-col flex self-center md:text-xl md:text-4xl text-xl whitespace-nowrap">
                        <p class="font-extrabold text-4xl">Ojas Builder</p>
                        <p class="text-sm">Building Dreams, Crafting Futures</p>
                      </h1>
                    </div>
                  </a>
                  <p class="text-3xl sm:text-4xl text-cyan-200 font-bold">+91 98765 43210</p>
                  <p class="text-gray-300 md:text-center">9:00 AM – 6:00 PM</p>
                  <p class="text-gray-300 md:text-center">info@ojasbuilder.com</p>
              </div>
          </div>

          <div class="col-span-1 text-center md:text-left">
              <h2 class="text-xl pb-4 mb-4 text-white font-semibold">COMPANY</h2>
              <ul class="text-[12px] text-gray-400 font-semibold">
                  <li><a href="{{ route('home') }}" class="hover:text-white">HOME</a></li>
                  <li><a href="{{ route('about') }}" class="hover:text-white">ABOUT</a></li>
                  <li><a href="{{ route('services') }}" class="hover:text-white">SERVICES</a></li>
                  <li><a href="{{ route('projects') }}" class="hover:text-white">PROJECTS</a></li> 
                  <li><a href="{{ route('testimonials') }}" class="hover:text-white">TESTIMONIALS</a></li> 
              </ul>
          </div>

          <div class="col-span-1 text-center md:text-left">
              <h2 class="text-xl pb-4 mb-4 text-white font-semibold">SUPPORT</h2>
              <ul class="text-[12px] text-gray-400 font-semibold">
                  <li><a href="{{ route('contact') }}" class="hover:text-white">CONTACT</a></li>
                  <li><a href="AboutUs.html" class="hover:text-white">FAQ</a></li>
                  <li><a href="ContactUs.html" class="hover:text-white">RESOURCES</a></li>
                  <li><a href="ContactUs.html" class="hover:text-white">EMAIL US</a></li> 
              </ul>
          </div>

          <div class="col-span-1 text-center md:text-left">
              <h2 class="text-xl pb-4 mb-4 text-white font-semibold">FOLLOW US</h2>
              <ul class="text-[12px] text-gray-400 font-semibold">
                  <li><a href="index.html" class="hover:text-white">FACEBOOK</a></li>
                  <li><a href="AboutUs.html" class="hover:text-white">TWITTER</a></li>
                  <li><a href="index.html" class="hover:text-white">PINTEREST</a></li>
                  <li><a href="AboutUs.html" class="hover:text-white">GOOGLE PLUS</a></li>
              </ul>
          </div>
      </div>

      <div class="mt-10"></div>
      <hr class="border-gray-600 hidden md:block">

      <div class="container py-5 px-4 px-8 md:px-32 text-center md:text-left">
          <div class="text-gray-300 text-sm">
              <p class="mb-5">Copyright © 2025 <a href="index.html" class="font-bold border-b border-dotted">Ojas Builder.</a>. All Rights Reserved.</p>
              <p class="justify-center md:justify-start flex gap-2">Follow us :<a href="" class=""><i class="fa-brands fa-square-facebook"></i></a>
              <a href=""><i class="fa-brands fa-square-x-twitter"></i></a>
              <a href=""><i class="fa-brands fa-square-instagram"></i></a>
              <a href=""><i class="fa-brands fa-linkedin"></i></a></p>
              <p>RERA No: GJ-REAL-2025-XXXX</p>
          </div>
      </div>
  </div>
</div>  
</footer>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeBtn = document.getElementById('close-menu');

    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('flex');   // 👈 add this (flex display)
        });
    } else {
        console.error("menu-toggle OR mobile-menu not found in DOM");
    }

    // Close mobile menu on close button click
    if (closeBtn && mobileMenu) {
        closeBtn.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('flex'); // remove flex when hidden
        });
    } else {
        console.error("close-menu OR mobile-menu not found in DOM");
    }
});
</script>

</body>
</html>