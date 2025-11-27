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

<div class="relative group bg-cover bg-center xl:h-[600px] h-[400px] ">
  <img src="{{ asset('images/back6.avif') }}" alt="bg-image" class="absolute inset-0 w-full h-full object-cover">

  <!-- Navbar -->
  <nav class="fixed flex top-0 bg-white/20 left-0 w-full z-50 md:px-20 px-6 py-3 items-center justify-between backdrop-blur-sm box-shadow slide-down transition-all duration-500" id="navbar" data-animate="slide-down">
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
  <div class="absolute inset-0 bg-opacity-50 bg-black/30 flex items-center justify-center md:justify-end md:pr-20 pt-16 md:pt-8">
    <div class="text-center m-10 max-w-4xl space-y-8">
      <h1 class="text-white md:text-9xl text-6xl drop-shadow-lg" data-animate="slide-in-left">Services</h1>
      <p class="text-white/90 xl:text-2xl text-xl font-xl mb-10 drop-shadow-m " data-animate="slide-in-right">
        We are a team of highly skilled professionals
      </p>
    </div>
  </div>
</div>

<!-- servises section -->
 <div class="container mx-auto py-28 px-4 md:px-0">
      <p class="lg:text-4xl text-3xl font-semibold  mb-6 text-center text-blue-700">
        Our Services
      </p>
       <p class="lg:text-6xl text-3xl font-semibold  mb-6 text-center text-gray-800">
      We Build Everything You Need</p>
      <p class="lg:text-xl text-gray-500 text-md font-semibold text-center">
       We provide tailored construction solutions, designed to meet your needs and executed
       with precision and expertise.
      </p>

    <div class="w-full flex flex-wrap gap-4 py-10 gap-8 justify-center Item-center">

      <!-- Card 1 -->
      <div class="flex flex-col  w-full sm:w-1/2 lg:w-[30%] border rounded-xl shadow-xl overflow-hidden" data-animate="slide-in-left">
        <a href="machineLearning.html">
          <img src="{{ asset('images/residential.jpg') }}" alt="Machine Learning" class="w-full h-80 object-cover transform transition-transform duration-300 hover:scale-110">
        </a>
        <div class="p-5 text-center">
          <p class="text-2xl font-bold text-blue-950">Residential Construction</p>
          <p class="text-md font-medium text-gray-500 my-3">
            Custom-built homes, villas, and apartments with modern design and quality materials.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="flex flex-col  w-full sm:w-1/2 lg:w-[30%] border rounded-xl shadow-xl overflow-hidden" data-animate="slide-up">
        <a href="machineLearning.html">
          <img src="{{ asset('images/commercial.avif') }}" alt="Machine Learning" class="w-full h-80 object-cover transform transition-transform duration-300 hover:scale-110">
        </a>
        <div class="p-5 text-center">
          <p class="text-2xl font-bold text-blue-950">Commercial Projects</p>
          <p class="text-md font-medium text-gray-500 my-3">
           Office spaces, retail complexes, and business parks built for long-term value and function.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="flex flex-col  w-full sm:w-1/2 lg:w-[30%] border rounded-xl shadow-xl overflow-hidden" data-animate="slide-in-right">
        <a href="machineLearning.html">
          <img src="{{ asset('images/Architectural.avif') }}" alt="Machine Learning" class="w-full h-80 object-cover transform transition-transform duration-300 hover:scale-110">
        </a>
        <div class="p-5 text-center">
          <p class="text-2xl font-bold text-blue-950">Architectural Design</p>
          <p class="text-md font-medium text-gray-500 my-3">
            Innovative designs created by skilled architects focused on aesthetics and efficiency.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="flex flex-col  w-full sm:w-1/2 lg:w-[30%] border rounded-xl shadow-xl overflow-hidden" data-animate="slide-in-left">
        <a href="machineLearning.html">
          <img src="{{ asset('images/Interior.avif') }}" alt="Machine Learning" class="w-full h-80 object-cover transform transition-transform duration-300 hover:scale-110">
        </a>
        <div class="p-5 text-center">
          <p class="text-2xl font-bold text-blue-950">Interior Design & Renovation</p>
          <p class="text-md font-medium text-gray-500 my-3">
            Transforming interiors with creative layouts, lighting, and premium finishes.
          </p>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="flex flex-col  w-full sm:w-1/2 lg:w-[30%] border rounded-xl shadow-xl overflow-hidden" data-animate="slide-up">
        <a href="machineLearning.html">
          <img src="{{ asset('images/turnkey.jpg') }}" alt="Machine Learning" class="w-full h-80 object-cover transform transition-transform duration-300 hover:scale-110">
        </a>
        <div class="p-5 text-center">
          <p class="text-2xl font-bold text-blue-950">Turnkey Solutions</p>
          <p class="text-md font-medium text-gray-500 my-3">
            End-to-end project management — from planning and approvals to construction and finishing.
          </p>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="flex flex-col  w-full sm:w-1/2 lg:w-[30%] border rounded-xl shadow-xl overflow-hidden" data-animate="slide-in-right">
        <a href="machineLearning.html">
          <img src="{{ asset('images/realstate.avif') }}" alt="Machine Learning" class="w-full h-80 object-cover transform transition-transform duration-300 hover:scale-110">
        </a>
        <div class="p-5 text-center">
          <p class="text-2xl font-bold text-blue-950">Real Estate Development</p>
          <p class="text-md font-medium text-gray-500 my-3">
           Building and developing premium real estate projects that redefine urban living.
          </p>
        </div>
      </div>

</div>
</div>

<section class="bg-slate-800 py-20 md:p-20 p-6">
<h1 class="text-gray-300 text-center md:text-4xl text-2xl font-semibold md:p-10 pb-20">Always strive for better work. Never stop learning. Have fun a clear plan for a new project or just an idea on a napkin?  Sky, land, and sea disappear together out of the world</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 md:gap-20 gap-6 md:p-20">
      <!-- 1 Trusted Quality -->
      <div class="flex gap-4 p-6 bg-white rounded-xl shadow" data-animate="slide-up">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-indigo-50 flex items-center justify-center">
          <!-- shield-check icon -->
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M12 2l7 3v5c0 5-3.5 9.7-7 11-3.5-1.3-7-6-7-11V5l7-3z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9 12l1.8 1.8L15 10.6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="space-y-3">
          <h3 class="font-semibold text-2xl">Construction</h3>
          <p class="text-md text-gray-600 font-semibold">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
        </div>
      </div>

      <!-- 2 On-Time Delivery -->
      <div class="flex gap-4 p-6 bg-white rounded-xl shadow" data-animate="slide-up">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-green-50 flex items-center justify-center">
          <!-- clock icon -->
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <circle cx="12" cy="12" r="8" stroke="currentColor" stroke-width="1.5"/>
            <path d="M12 8v5l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class=" space-y-3">
          <h3 class="font-semibold text-2xl">Roofing</h3>
          <p class="text-md text-gray-600 font-semibold">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
        </div>
      </div>

      <!-- 3 Skilled & Experienced Team -->
      <div class="flex gap-4 p-6 bg-white rounded-xl shadow" data-animate="slide-up">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-yellow-50 flex items-center justify-center">
          <!-- users icon -->
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M16 11a4 4 0 1 0-8 0" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M2 19a6 6 0 0 1 12 0" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M22 19a4 4 0 0 0-4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class=" space-y-3">
          <h3 class="font-semibold text-2xl">Remodeling</h3>
          <p class="text-md text-gray-600 font-semibold">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
        </div>
      </div>

      <!-- 4 Transparent Process -->
      <div class="flex gap-4 p-6 bg-white rounded-xl shadow" data-animate="slide-up">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center">
          <!-- document-text / eye icon -->
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M9 2h6l4 4v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9 14h6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9 10h6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div  class=" space-y-3">
          <h3 class="font-semibold text-2xl">Electrical</h3>
          <p class="text-md text-gray-600 font-semibold">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
        </div>
      </div>
</div>
</section>

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