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
  <img src="{{ asset('images/back3.avif') }}" alt="bg-image" class="absolute inset-0 w-full h-full">

<!-- Navbar -->
  <nav class="fixed bg-white/50 flex top-0 left-0 w-full z-50 md:px-20 px-6 py-3 items-center justify-between backdrop-blur-sm box-shadow slide-down transition-all duration-500" id="navbar" data-animate="slide-down">
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
  <div class="absolute inset-0 bg-opacity-50 bg-black/30 flex items-center justify-center py-16 md:pt-8">
    <div class="text-center md:m-10 m-4 max-w-9xl space-y-8">
      <h1 class="text-white md:text-8xl text-4xl drop-shadow-lg" data-animate="slide-down">“More Than Builders — We’re Your Construction Partners”</h1>
      <p class="text-white/90 xl:text-2xl text-xl font-xl mb-10 drop-shadow-m " data-animate="slide-up">
        Learn what drives our team and how we turn visions into lasting structures.
      </p>
    </div>
  </div>
</div>



<div class="w-full py-12 mx-auto" id="stats-section">
<p class="text-center md:text-6xl text-2xl font-semibold text-gray-700 md:p-16 p-6">With over a decade of experience, Ojas Builder has become a name synonymous with trust, quality, and innovation in the construction industry.</p>
  
  <div class="grid grid-cols-1 md:grid-cols-4 w-full flex justify-center items-center gap-4 bg-white p-6 px-10">

    <!-- Card 1 -->
    <div class="flex flex-col w-full">
      <div class="p-5 text-center">
        <p class="text-6xl font-bold text-blue-950 counter" data-target="10">0+</p>
        <p class="text-md font-medium text-gray-500 my-3">
          Years of Construction Excellence
        </p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="flex flex-col w-full">
      <div class="p-5 text-center">
        <p class="text-6xl font-bold text-blue-950 counter" data-target="100">0+</p>
        <p class="text-md font-medium text-gray-500 my-3">
          Completed Projects
        </p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="flex flex-col w-full">
      <div class="p-5 text-center">
        <p class="text-6xl font-bold text-blue-950 counter" data-target="200">0+</p>
        <p class="text-md font-medium text-gray-500 my-3">
          Expert Team of Engineers & Architects
        </p>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="flex flex-col w-full">
      <div class="p-5 text-center">
        <p class="text-6xl font-bold text-blue-950 counter" data-target="90" data-suffix="%">0%</p>
        <p class="text-md font-medium text-gray-500 my-3">
          Trusted by Leading Developers & Homeowners
        </p>
      </div>
    </div>
  </div>
</div>

<div class="w-full py-12 mx-auto container p-6">
    <h1 class="text-blue-700 text-md p-1 font-semibold">About Us</h1>
    <p class="text-gray-700 md:text-6xl text-3xl font-semibold py-10">Built with Purpose Our Journey from Passion to Industry Leadership</p>

<!-- who we are -->
<div class="w-full py-20 flex flex-col lg:flex-row justify-center text-center lg:text-left gap-3 mx-auto">
  <!-- Left Column -->
  <div class="w-full md:w-2/3 p-2 md:space-y-20" data-animate="slide-in-left">
    <h1 class="text-blue-700 p-2 text-xl font-semibold">Who We Are</h1>
    <p class="lg:text-2xl text-xl font-semibold text-gray-600 p-2">
     Ojas Builder is a leading construction and real estate development company committed to turning visions into reality. Since our inception, we’ve built a strong reputation for delivering
     top-quality residential, commercial, and industrial projects with precision and integrity.
    </p>
  </div>

  <!-- Right Column -->
  <div class="w-full md:w-2/3" data-animate="slide-down">
    <img src="{{ asset('images/residential.jpg') }}" alt="" class="object-cover h-full w-full rounded-xl">
  </div>
</div>

<!-- our mission and vision -->
<div class="w-full py-20 flex flex-col lg:flex-row justify-center text-center lg:text-left gap-3 mx-auto">
  <!-- Left Column -->
  <div class="w-full md:w-2/3" data-animate="slide-down">
    <img src="{{ asset('images/turnkey.jpg') }}" alt="" class="object-cover h-full w-full rounded-xl">
  </div>

  <!-- Right Column -->
   <div class="w-full md:w-2/3 p-2 md:space-y-10" data-animate="slide-in-right">
    <h1 class="text-blue-700 p-2 text-xl font-semibold">Our Mission:</h1>
    <p class="lg:text-2xl text-xl font-semibold text-gray-600 p-2">
     To create long-lasting spaces that combine design, durability, and sustainability.
    </p>
    <h1 class="text-blue-700 p-2 text-xl font-semibold">Our Vision:</h1>
    <p class="lg:text-2xl text-xl font-semibold text-gray-600 p-2">
     To be recognized as a benchmark in quality construction, customer satisfaction, and innovation across India.
    </p>
   </div>
  
</div>
</div>

<!-- CORE VALUES - Ojas Builder -->
<section class="py-12 bg-gray-300">
  <div class="md:max-w-7xl mx-auto p-6">
    <h2 class="text-3xl font-bold text-center mb-6 md:text-5xl">Core Values</h2>
    <p class="text-center text-gray-600 mb-10 max-w-2xl mx-auto text-xl">
      The guiding principles that shape every Ojas Builder project — from planning to final handover.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 items-start" data-animate="slide-up">
      <!-- Quality & Excellence -->
      <div class="text-center p-6 bg-white rounded-xl shadow h-72">
        <div class="mx-auto w-16 h-16 rounded-full bg-indigo-50 flex items-center justify-center mb-4">
          <!-- ribbon / badge icon -->
          <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M12 2l3 6 6 .5-4.5 4 1.4 6L12 15.5 6.1 19.9 7.5 13 3 9l6-.5L12 2z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="font-semibold">Quality &amp; Excellence</h3>
        <p class="text-sm text-gray-600 mt-2">Premium materials, meticulous workmanship and rigorous quality checks.</p>
      </div>

      <!-- Transparency -->
      <div class="text-center p-6 bg-white rounded-xl shadow h-72">
        <div class="mx-auto w-16 h-16 rounded-full bg-blue-50 flex items-center justify-center mb-4">
          <!-- eye / document icon -->
          <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.2"/>
          </svg>
        </div>
        <h3 class="font-semibold">Transparency</h3>
        <p class="text-sm text-gray-600 mt-2">Clear estimates, open communication and no hidden charges.</p>
      </div>

      <!-- Safety First -->
      <div class="text-center p-6 bg-white rounded-xl shadow h-72">
        <div class="mx-auto w-16 h-16 rounded-full bg-emerald-50 flex items-center justify-center mb-4">
          <!-- shield / safety icon -->
          <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M12 2l7 3v5c0 5-3.5 9.7-7 11-3.5-1.3-7-6-7-11V5l7-3z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9 12l1.8 1.8L15 10.6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="font-semibold">Safety First</h3>
        <p class="text-sm text-gray-600 mt-2">Strict on-site safety protocols and regular training for all staff.</p>
      </div>

      <!-- On-Time Delivery -->
      <div class="text-center p-6 bg-white rounded-xl shadow h-72">
        <div class="mx-auto w-16 h-16 rounded-full bg-yellow-50 flex items-center justify-center mb-4">
          <!-- clock / timer icon -->
          <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <circle cx="12" cy="12" r="8" stroke="currentColor" stroke-width="1.2"/>
            <path d="M12 8v5l3 2" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="font-semibold">On-Time Delivery</h3>
        <p class="text-sm text-gray-600 mt-2">Reliable schedules, milestone tracking and punctual handovers.</p>
      </div>

      <!-- Sustainable Practices -->
      <div class="text-center p-6 bg-white rounded-xl shadow h-72">
        <div class="mx-auto w-16 h-16 rounded-full bg-emerald-100 flex items-center justify-center mb-4">
          <!-- leaf / eco icon -->
          <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M12 2s7 3 7 8c0 7-7 12-7 12S5 17 5 10c0-5 7-8 7-8z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8.5 12.5c1.2-1.5 3-2.5 4.5-3" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="font-semibold">Sustainable Practices</h3>
        <p class="text-sm text-gray-600 mt-2">Eco-friendly materials and energy-efficient building solutions.</p>
      </div>
    </div>

    <div class="mt-8 text-center">
      <a href="{{ route('services') }}" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-md shadow hover:bg-indigo-700">Our Services</a>
    </div>
  </div>
</section>

<!-- Our Team- Ojas Builder -->
<section class="py-12">
  <div class="md:max-w-7xl mx-auto p-6">
    <h2 class="text-3xl font-bold text-center mb-6 text-blue-700">Our Team</h2>
    <h1 class="text-6xl font-bold text-center mb-6 text-blue-950">Meet The Team</h1>
    <p class="text-center text-gray-600 mb-10 max-w-2xl mx-auto text-xl">
     Professionals united by purpose, experience, and a commitment to building better
    </p>

    <div class="w-full flex flex-wrap gap-4 py-10 gap-8 justify-center Item-center">

      <!-- Card 1 -->
      <div class="flex flex-col rounded-xl  w-full sm:w-1/2 lg:w-[30%] border shadow-xl overflow-hidden" data-animate="slide-up">
        <a href="machineLearning.html">
          <img src="{{ asset('images/team6.jpg') }}" alt="Machine Learning" class="w-full h-80 object-cover transform transition-transform duration-300 hover:scale-110">
        </a>
        <div class="p-5 text-center">
          <p class="text-2xl font-bold text-blue-950">Rahul Mehta</p>
          <p class="text-md font-medium text-gray-500 my-3">
            Founder & CEO
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="flex flex-col rounded-xl  w-full sm:w-1/2 lg:w-[30%] border shadow-xl overflow-hidden" data-animate="slide-up">
        <a href="machineLearning.html">
          <img src="{{ asset('images/team3.avif') }}" alt="Machine Learning" class="w-full h-80 object-cover transform transition-transform duration-300 hover:scale-110">
        </a>
        <div class="p-5 text-center">
          <p class="text-2xl font-bold text-blue-950">Anjali Shah</p>
          <p class="text-md font-medium text-gray-500 my-3">
           Architecturer
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="flex flex-col rounded-xl  w-full sm:w-1/2 lg:w-[30%] border shadow-xl overflow-hidden" data-animate="slide-up">
        <a href="machineLearning.html">
          <img src="{{ asset('images/team1.avif') }}" alt="Machine Learning" class="w-full h-80 object-cover transform transition-transform duration-300 hover:scale-110">
        </a>
        <div class="p-5 text-center">
          <p class="text-2xl font-bold text-blue-950">Arun Patel</p>
          <p class="text-md font-medium text-gray-500 my-3">
           Renovationer head
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="flex flex-col rounded-xl  w-full sm:w-1/2 lg:w-[30%] border shadow-xl overflow-hidden" data-animate="slide-up">
        <a href="machineLearning.html">
          <img src="{{ asset('images/team2.webp') }}" alt="Machine Learning" class="w-full h-80 object-cover transform transition-transform duration-300 hover:scale-110">
        </a>
        <div class="p-5 text-center">
          <p class="text-2xl font-bold text-blue-950">Rakesh Patel</p>
          <p class="text-md font-medium text-gray-500 my-3">
            Plannig Head
          </p>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="flex flex-col rounded-xl  w-full sm:w-1/2 lg:w-[30%] border shadow-xl overflow-hidden" data-animate="slide-up">
        <a href="machineLearning.html">
          <img src="{{ asset('images/team4.jpg') }}" alt="Machine Learning" class="w-full h-80 object-cover transform transition-transform duration-300 hover:scale-110">
        </a>
        <div class="p-5 text-center">
          <p class="text-2xl font-bold text-blue-950">Anuj Ojha</p>
          <p class="text-md font-medium text-gray-500 my-3">
            Team Manager
          </p>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="flex flex-col rounded-xl  w-full sm:w-1/2 lg:w-[30%] border shadow-xl overflow-hidden" data-animate="slide-up">
        <a href="machineLearning.html">
          <img src="{{ asset('images/team5.jpg') }}" alt="Machine Learning" class="w-full h-80 object-cover transform transition-transform duration-300 hover:scale-110">
        </a>
        <div class="p-5 text-center">
          <p class="text-2xl font-bold text-blue-950">Surya Patel</p>
          <p class="text-md font-medium text-gray-500 my-3">
          Material Tester
          </p>
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

  <!-- Grid Container Positioned on Top--> 
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