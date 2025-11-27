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
  <img src="{{ asset('images/back.avif') }}" alt="bg-image" class="absolute inset-0 w-full h-full object-cover">

  <!-- Navbar -->
  <nav class="fixed flex top-0 left-0 w-full z-50 md:px-20 px-6 py-3 items-center justify-between backdrop-blur-sm box-shadow slide-down transition-all duration-500" id="navbar" data-animate="slide-down">
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
  <div id="mobile-menu" class="hidden fixed top-0 bottom-0  right-0 w-2/3 bg-white/90 backdrop-blur-md shadow-md md:hidden z-50" data-animate="slide-in-right">
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
  <div class="absolute inset-0 bg-opacity-50 bg-black/30 flex items-center justify-center pt-16 md:pt-8">
    <div class="text-center m-10 max-w-4xl space-y-8">
      <h1 class="text-white md:text-8xl text-4xl drop-shadow-lg" data-animate="slide-in-left">“Building Dreams, Creating Landmarks”</h1>
      <p class="text-white/90 xl:text-2xl text-xl font-xl mb-10 drop-shadow-m " data-animate="slide-in-right">
        From residential homes to large commercial projects, Ojas Builder delivers quality, trust, and innovation in every structure.
      </p>
      <p class="" data-animate="slide-up"><a href="{{ route('services') }}" class="p-4 bg-yellow-300 text-xl px-10 rounded-xl font-bold hover:bg-blue-400 transition">
        Explore Now
      </a></p>
    </div>
  </div>
</div>



<div class="w-full py-12 mx-auto" id="stats-section">
  <!-- Right Column (Cards Section) -->
  <div class="grid grid-cols-1 md:grid-cols-4 w-full flex justify-center items-center gap-4 bg-white">

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





<div class="w-full py-20 flex flex-col lg:flex-row items-center justify-center text-center lg:text-left gap-24 mx-auto p-10 bg-slate-600">

  <!-- Left Column -->
  <div class="w-full lg:w-2/3 ">
    <p class="lg:text-4xl text-2xl font-semibold text-white">
      With over a decade of experience,<span class="text-pink-300">Ojas Builder</span>  has become a name synonymous with trust, quality, and innovation in the construction industry.
    </p>
  </div>

  <!-- Right Column -->
  <div class="w-full lg:w-auto flex justify-center">
    <a href="{{ route('about') }}" class="p-3 border-4 text-white text-xl px-10 rounded-xl font-bold hover:bg-blue-400 hover:text-white transition">
      Get to Know Us <i class="fa-solid fa-arrow-right"></i>
    </a>
  </div>

</div>


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
      <div class="flex flex-col  w-full sm:w-1/2 lg:w-[30%] border shadow-xl rounded-xl overflow-hidden" data-animate="slide-in-left">
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
      <div class="flex flex-col  w-full sm:w-1/2 lg:w-[30%] border shadow-xl rounded-xl overflow-hidden" data-animate="slide-up">
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
      <div class="flex flex-col  w-full sm:w-1/2 lg:w-[30%] border shadow-xl rounded-xl overflow-hidden" data-animate="slide-in-right">
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
      <div class="flex flex-col  w-full sm:w-1/2 lg:w-[30%] border shadow-xl rounded-xl overflow-hidden" data-animate="slide-in-left">
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
      <div class="flex flex-col  w-full sm:w-1/2 lg:w-[30%] border shadow-xl rounded-xl overflow-hidden" data-animate="slide-up">
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
      <div class="flex flex-col  w-full sm:w-1/2 lg:w-[30%] border shadow-xl rounded-xl overflow-hidden" data-animate="slide-in-right">
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

<!-- WHY OJAS BUILDER - Icons for 1..9 -->
<section class="py-12 bg-slate-700">
  <div class="max-w-6xl mx-auto px-4">
    <p class="py-2 text-gray-400 font-semibold text-center ">Our Great Values</p>
    <h2 class="text-center mb-8 text-white text-6xl font-bold">Why Ojas Builder?</h2>
    <p class="text-2xl text-white text-center py-10 mb-8">From design to execution, the entire process was smooth and professional.Every project we
           complete reflects our commitment to quality, design, and client satisfaction.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
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
          <h3 class="font-semibold text-2xl">Trusted Quality</h3>
          <p class="text-md text-gray-600 font-semibold">Top-grade materials and workmanship you can rely on.</p>
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
          <h3 class="font-semibold text-2xl">On-Time Delivery</h3>
          <p class="text-md text-gray-600 font-semibold">Efficient planning and dedicated teams ensure deadlines are met.</p>
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
          <h3 class="font-semibold text-2xl">Skilled & Experienced Team</h3>
          <p class="text-md text-gray-600 font-semibold">Engineers, architects and supervisors with proven expertise.</p>
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
          <h3 class="font-semibold text-2xl">Transparent Process</h3>
          <p class="text-md text-gray-600 font-semibold">Clear estimates, schedules and open communication — always.</p>
        </div>
      </div>

      <!-- 5 Modern Designs -->
      <div class="flex gap-4 p-6 bg-white rounded-xl shadow" data-animate="slide-up">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-pink-50 flex items-center justify-center">
          <!-- sparkles / pencil icon -->
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M20 7l-8 8-4 1 1-4 8-8 3 3z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M16 3l2 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div  class=" space-y-3">
          <h3 class="font-semibold text-2xl">Modern Designs</h3>
          <p class="text-md text-gray-600 font-semibold">Contemporary architecture that balances form and function.</p>
        </div>
      </div>

      <!-- 6 Customer-Centric Approach -->
      <div class="flex gap-4 p-6 bg-white rounded-xl shadow" data-animate="slide-up">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-red-50 flex items-center justify-center">
          <!-- heart / handshake icon -->
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M20.8 4.6a4.6 4.6 0 0 0-6.5 0L12 6.9 9.7 4.6a4.6 4.6 0 0 0-6.5 6.5L12 21.9l8.8-10.8a4.6 4.6 0 0 0 0-6.5z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div  class=" space-y-3">
          <h3 class="font-semibold text-2xl">Customer-Centric Approach</h3>
          <p class="text-md text-gray-600 font-semibold">We listen, adapt, and deliver solutions tailored to you.</p>
        </div>
      </div>

      <!-- 7 Strong Track Record -->
      <div class="flex gap-4 p-6 bg-white rounded-xl shadow" data-animate="slide-up">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-amber-50 flex items-center justify-center">
          <!-- trophy icon -->
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M8 3h8v2a3 3 0 0 1-3 3H11A3 3 0 0 1 8 5V3z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M3 8h2a4 4 0 0 0 4 4v3h6v-3a4 4 0 0 0 4-4h2" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10 21h4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div  class=" space-y-3">
          <h3 class="font-semibold text-2xl">Strong Track Record</h3>
          <p class="text-md text-gray-600 font-semibold">Proven success across residential and commercial projects.</p>
        </div>
      </div>

      <!-- 8 Safety & Sustainability -->
      <div class="flex gap-4 p-6 bg-white rounded-xl shadow" data-animate="slide-up">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-emerald-50 flex items-center justify-center">
          <!-- leaf / shield icon -->
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M12 2s7 3 7 8c0 7-7 12-7 12S5 17 5 10c0-5 7-8 7-8z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8.5 12.5c1.2-1.5 3-2.5 4.5-3" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div  class=" space-y-3">
          <h3 class="font-semibold text-2xl">Safety & Sustainability</h3>
          <p class="text-md text-gray-600 font-semibold">Strict safety protocols and eco-friendly building practices.</p>
        </div>
      </div>

      <!-- 9 End-to-End Solutions -->
      <div class="flex gap-4 p-6 bg-white rounded-xl shadow" data-animate="slide-up">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-slate-50 flex items-center justify-center">
          <!-- cog / puzzle icon -->
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M12 15.5A3.5 3.5 0 1 0 12 8.5a3.5 3.5 0 0 0 0 7z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M19.4 15a1.7 1.7 0 0 0 .3-1.1 1.7 1.7 0 0 0-.3-1.1l1.6-1.2-1.8-3-1.9.5a6.4 6.4 0 0 0-1.6-1L14 3.6h-4l-.7 2.4a6.4 6.4 0 0 0-1.6 1L6.9 6.5 5 9.5l1.6 1.2a1.7 1.7 0 0 0-.3 1.1c0 .4.1.8.3 1.1L5 14.8l1.8 3 1.9-.5a6.4 6.4 0 0 0 1.6 1L10 20.4h4l.7-2.4c.6-.2 1.2-.6 1.6-1l1.9.5 1.8-3-1.6-1.2z" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class=" space-y-3">
          <h3 class="font-semibold text-2xl">End-to-End Solutions</h3>
          <p class="text-md text-gray-600 font-semibold">Comprehensive services from planning and approvals to finishing touches.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="w-full py-20 bg-gray-200">
  <p class="text-center pb-20 font-semibold text-xl text-gray-500">
   We offer reliable construction services with a focus on unmatched quality, ensuring projects are completed on time and within budget.
  </p>

  <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-8 place-items-center px-8">
    <img src="{{ asset('images/volkswagen_logo.svg') }}" alt="Volkswagen" class="h-12 object-contain">
    <img src="{{ asset('images/samsung_logo.svg') }}" alt="Samsung" class="h-12 object-contain">
    <img src="{{ asset('images/cisco_logo.svg') }}" alt="Cisco" class="h-12 object-contain">
    <img src="{{ asset('images/vimeo_logo_resized-2.svg') }}" alt="Vimeo" class="h-12 object-contain">
    <img src="{{ asset('images/procter_gamble_logo.svg') }}" alt="P&G" class="h-12 object-contain">
    <img src="{{ asset('images/hewlett_packard_enterprise_logo.svg') }}" alt="HP Enterprise" class="h-12 object-contain">
    <img src="{{ asset('images/citi_logo.svg') }}" alt="Citi" class="h-12 object-contain">
    <img src="{{ asset('images/ericsson_logo.svg') }}" alt="Ericsson" class="h-12 object-contain">
  </div>
</div>

<div class="w-full py-20 flex flex-col lg:flex-row items-center justify-center text-center lg:text-left gap-3 mx-auto p-10">
  <!-- Left Column -->
  <div class="w-full lg:w-auto p-2 space-y-8" data-animate="slide-in-left">
    <h1 class="text-blue-700 p-2 ">How We Work</h1>
    <h1 class="text-7xl font-bold text-blue-950 mb-10">Our Work Process</h1>
    <p class="lg:text-2xl text-xl font-semibold text-gray-600 p-2">
     A transparent, step-by-step approach — from first meeting to final handover. We keep you informed at every stage.
    </p>
    <div class="mt-10">
      <a href="{{ route('contact') }}" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-md shadow hover:bg-indigo-700">Get Started — Free Consultation</a>
    </div>
  </div>

  <!-- Right Column -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 lg:w-auto" data-animate="slide-in-right">
      <!-- 1 Consultation -->
      <div class="flex gap-4 p-5 py-8 bg-gray-50 shadow-md rounded-xl">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-indigo-50 flex items-center justify-center">
          <!-- chat icon -->
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div>
          <h3 class="font-semibold text-blue-950 text-xl">1. Consultation</h3>
          <p class="text-sm text-gray-600">Initial meeting to understand your vision, budget, and timeline.</p>
        </div>
      </div>

      <!-- 2 Site Survey -->
      <div class="flex gap-4 p-5 py-8 bg-gray-50 shadow-md rounded-xl">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-emerald-50 flex items-center justify-center">
          <!-- map-pin / survey icon -->
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M12 2c3.866 0 7 3.134 7 7 0 5-7 13-7 13S5 14 5 9c0-3.866 3.134-7 7-7z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="12" cy="9" r="2" stroke="currentColor" stroke-width="1.4"/>
          </svg>
        </div>
        <div>
          <h3 class="font-semibold text-blue-950 text-xl">2. Site Survey</h3>
          <p class="text-sm text-gray-600">Detailed inspection and measurements to assess feasibility and constraints.</p>
        </div>
      </div>

      <!-- 3 Design & Planning -->
      <div class="flex gap-4 p-5 py-8 bg-gray-50 shadow-md rounded-xl">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-yellow-50 flex items-center justify-center">
          <!-- pencil-ruler icon -->
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M3 21l6-6" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M14.5 5.5l4 4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M7 7l10 10" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div>
          <h3 class="font-semibold text-blue-950 text-xl">3. Design & Planning</h3>
          <p class="text-sm text-gray-600">Architectural drawings, material selection, cost estimate, and schedule.</p>
        </div>
      </div>

      <!-- 4 Approvals & Permits -->
      <div class="flex gap-4 p-5 py-8 bg-gray-50 shadow-md rounded-xl">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center">
          <!-- document-check icon -->
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M9 11l2 2 4-4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M21 12v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h11" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div>
          <h3 class="font-semibold text-blue-950 text-xl">4. Approvals & Permits</h3>
          <p class="text-sm text-gray-600">We handle local approvals, regulatory paperwork and RERA (if required).</p>
        </div>
      </div>

      <!-- 5 Construction -->
      <div class="flex gap-4 p-5 py-8 bg-gray-50 shadow-md rounded-xl">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-red-50 flex items-center justify-center">
          <!-- hammer / construction icon -->
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M14 9l7 7" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M3 21l7-7 4 4-7 7-4-4z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div>
          <h3 class="font-semibold text-blue-950 text-xl">5. Construction</h3>
          <p class="text-sm text-gray-600">Skilled teams, quality materials, and on-site supervision to execute the plan.</p>
        </div>
      </div>

      <!-- 6 Handover & Aftercare -->
      <div class="flex gap-4 p-5 py-8 bg-gray-50 shadow-md rounded-xl">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-teal-50 flex items-center justify-center">
          <!-- key / shield icon -->
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M3 11a8 8 0 1 1 14.32 4.906L21 21l-5.094-3.681A8 8 0 0 1 3 11z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 12v.01" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div>
          <h3 class="font-semibold text-blue-950 text-xl">6. Handover & Aftercare</h3>
          <p class="text-sm text-gray-600">Final walkthrough, handover documents, and post-handover support/warranty.</p>
        </div>
      </div>
    </div>
</div>


<div class="bg-slate-700 py-20">
<div class="w-full py-6 flex flex-col lg:flex-row items-center justify-center text-center lg:text-left mx-auto p-10 gap-10">
  <!-- Left Column -->
  <div class="w-full lg:w-2/3 ">
   <h1 class="md:text-7xl text-5xl font-semibold text-white mb-10">Featured Projects</h1>
  </div>
  <!-- Right Column -->
  <div class="w-full lg:w-auto flex justify-center">
   <h1 class="md:text-2xl text-xl font-semibold text-gray-200 mb-10 md:px-20">Every project we complete reflects our commitment to quality, design, and client satisfaction.</h1>
  </div>
</div>

<div class="w-full flex flex-col lg:flex-row items-center justify-center text-center lg:text-left mx-auto">

  <div class="w-full md:p-10 p-4">
   <div class="swiper swiper-recognized-by items-center">
    <!-- Pagination -->
   <div class="swiper-pagination-recognized-by my-6 md:my-2 flex justify-center md:justify-end md:pr-56"></div>

    <div class="swiper-wrapper item-center">
    
    <div class="swiper-slide grid md:grid-cols-2 gap-4 grid-cols-1 text-center">
      <img src="images/proj1.webp" class="rounded-xl mx-auto w-full h-[400px] md:h-[500px] object-cover">
      <span class="text-white text-2xl md:py-10 md:text-4xl md:p-10 font-semibold">Sunrise Heights, Pune – 120-unit luxury apartment complex</span>
    </div>

    <div class="swiper-slide grid md:grid-cols-2 gap-4 grid-cols-1 text-center">
      <img src="images/proj2.webp" class="rounded-xl mx-auto w-full h-[400px] md:h-[500px] object-cover">
      <span class="text-white text-2xl md:py-10 md:text-4xl md:p-10 font-semibold">Silverline Business Tower, Ahmedabad – Modern office building</span>
    </div>

    <div class="swiper-slide grid md:grid-cols-2 gap-4 grid-cols-1 text-center">
      <img src="images/proj3.avif" class="rounded-xl mx-auto w-full h-[400px] md:h-[500px] object-cover">
      <span class="text-white text-2xl md:py-10 md:text-4xl md:p-10 font-semibold">GreenView Villas, Surat – 40 premium villas with landscaped gardens</span>
    </div>

    <div class="swiper-slide grid md:grid-cols-2 gap-4 grid-cols-1 text-center">
      <img src="images/proj4.avif" class="rounded-xl mx-auto w-full h-[400px] md:h-[500px] object-cover">
      <span class="text-white text-2xl md:py-10 md:text-4xl md:p-10 font-semibold">Ongoing: Urban Edge Residences, Vadodara</span>
    </div>
  </div>
  </div>
 </div>
</div>

</div>

<!-- testimonials -->
<div class="bg-gray-100 py-20 w-full p-4">
  <div class="w-full flex flex-col lg:flex-row items-center justify-center text-center lg:text-left md:gap-80 gap-10">
    <div class="col-span-1 md:text-left space-y-8">
    <p class="text-orange-500 font-semibold text-xl">Testimonials</p>
    <p class="text-6xl text-blue-950 font-semibold">What Our Clients Say</p>
    <p class="text-gray-500 py-2 text-2xl">Hear from those who've built with us and see how we brought their visions to life.</p>
    </div>
  <!-- Navigation Buttons -->
    <div class="flex justify-center md:justify-center gap-10 py-4 ">
      <button id="button-left1" class="p-2 flex justify-center outline items-center text-blue-950 bg-gray-200 w-20 h-20 transition-all duration-500 hover:bg-orange-500">
        <i class="fa-solid fa-angle-left text-blue-950 hover:text-white text-3xl"></i>
      </button>
      <button id="button-right1" class="p-2 flex justify-center outline items-center text-blue-950 bg-gray-200 w-20 h-20 transition-all duration-500 hover:bg-orange-500">
        <i class="fa-solid fa-angle-right text-blue-950 hover:text-white text-3xl"></i>
      </button>
    </div>
 </div>

 <div class="swiper swiper-testimonials items-center md:py-20 md:p-6">
      <div class="swiper-wrapper item-center">
        <div class="swiper-slide rounded-xl text-center item-center justify-center flex flex-col shadow-xl p-8 md:p-20 bg-orange-100 h-[400px] md:space-y-20 space-y-10"><div class=" text-xl font-semibold text-gray-600">“Ojas Builder turned our dream home into reality. The quality of work and professionalism were outstanding.”</div><span class="text-blue-900 md:text-xl font-semibold">— Rahul Mehta, Homeowner</span></div>
        <div class="swiper-slide rounded-xl text-center item-center justify-center flex flex-col shadow-xl p-8 md:p-20 bg-orange-100 h-[400px] md:space-y-20 space-y-10"><div class=" text-xl font-semibold text-gray-600">“Reliable, transparent, and on-time delivery — that’s what sets Ojas Builder apart.”</div><span  class="text-blue-900 md:text-xl font-semibold" >— Anjali Shah, Project Partner</span></div>
        <div class="swiper-slide rounded-xl text-center item-center justify-center flex flex-col shadow-xl p-8 md:p-20 bg-orange-100 h-[400px] md:space-y-20 space-y-10"><div class=" text-xl font-semibold text-gray-600">“From design to execution, the entire process was smooth and professional.”</div><span  class="text-blue-900 md:text-xl font-semibold">— Arun Patel, Business Owner</span></div>
        <div class="swiper-slide rounded-xl text-center item-center justify-center flex flex-col shadow-xl p-8 md:p-20 bg-orange-100 h-[400px] md:space-y-20 space-y-10"><div class=" text-xl font-semibold text-gray-600">“Transforming interiors with creative layouts, lighting, and premium finishes.”</div><span  class="text-blue-900 md:text-xl font-semibold">— Parthiv Patela, Renovation Owner</span></div>
        <div class="swiper-slide rounded-xl text-center item-center justify-center flex flex-col shadow-xl p-8 md:p-20 bg-orange-100 h-[400px] md:space-y-20 space-y-10"><div class=" text-xl font-semibold text-gray-600">“Innovative designs created by skilled architects focused on aesthetics and efficiency.”</div><span  class="text-blue-900 md:text-xl font-semibold">— Devendra dev, Residential Owner</span></div>
      </div>
      <!-- Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </div>
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
