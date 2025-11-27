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
  <img src="{{ asset('images/contact.jpg') }}" alt="bg-image" class="absolute inset-0 w-full h-full object-cover" data-animate="slide-down">

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
    <div class="text-center m-10 md:pr-20 max-w-4xl space-y-8">
      <h1 class="text-white md:text-8xl text-4xl drop-shadow-lg" data-animate="zoom-in">Let’s Talk About Your Project</h1>
      <p class="text-white/90 xl:text-2xl text-xl font-xl mb-10 drop-shadow-m " data-animate="slide-up">
        Whether you're planning, building, or renovating, we’re here to help. Reach out today and let’s build something exceptional together.
      </p>
    </div>
  </div>
</div>


<div class="w-full py-12 mx-auto container">
<div class="py-20 flex flex-col lg:flex-row justify-center items-center text-center lg:text-left gap-3 mx-auto">
  <!-- Left Column -->
  <div class="w-full md:w-2/3 p-2 md:space-y-8" data-animate="slide-in-left">
    <h1 class="text-blue-700 p-2 text-xl font-semibold">Contact Details</h1>
    <h1 class="p-2 text-6xl font-semibold">Get a Free Quotation</h1>
    <p class="lg:text-2xl text-xl font-semibold text-gray-600 p-2 border-b">
    Tell us about your project, and we’ll provide a detailed, no-obligation estimate.
    </p>
    <div class="flex flex-col md:flex-row gap-1 md:p-2 p-4 items-center border-b"><h1 class="text-2xl font-semibold text-blue-900">Message Us :</h1><span class="text-xl pt-1">nfo@ojasbuilder.com</span></div>
    <div class="flex flex-col md:flex-row gap-1 md:p-2 p-4 items-center border-b"><h1 class="text-2xl font-semibold text-blue-900">Call Us :</h1><span class="text-xl pt-1">+91 98765 43210</span></div>
    <div class="flex flex-col md:flex-row gap-1 md:p-2 p-4 items-center border-b"><h1 class="text-2xl font-semibold text-blue-900">Location :</h1><span class="text-xl pt-1">82 Westfield Industrial Blvd, Ring Road, DELHI 456783</span></div>
    <div class="flex flex-col md:flex-row gap-1 md:p-2 p-4 items-center border-b"><h1 class="text-2xl font-semibold text-blue-900">Business Hours :</h1><span class="text-xl pt-1">9:00 AM – 6:00 PM</span></div>
  </div>

  <!-- Right Column -->
  <div class="w-full md:w-2/3" data-animate="zoom-in">
    <div class="z-10">
      <form class="max-w-lg mx-auto bg-indigo-900 md:px-8 px-4 py-10 space-y-10 rounded-xl shadow-xl shadow-gray-500">
        <div class="mb-2">
          <input type="text" id="text" class="text-gray-900 text-lg rounded-lg focus:ring-blue-500 block w-full p-3" placeholder="Full Name*" required />
        </div>
        <div class="mb-2">
          <input type="email" id="email" class="text-gray-900 text-lg rounded-lg focus:ring-blue-500 block w-full p-3" placeholder="Email*" required />
        </div>
        <div class="mb-2">
          <input type="text" id="text" class="text-gray-900 text-lg rounded-lg focus:ring-blue-500 block w-full p-3" placeholder="Phone Number*" required />
        </div>
        <div class="mb-2">
        <select id="project-type" name="project_type" class="text-gray-900 text-lg rounded-lg block w-full p-3" required>
          <option value="">Select Project Type</option>
          <option value="residential">Residential Construction</option>
          <option value="commercial">Commercial Construction</option>
          <option value="renovation">Renovation/Remodeling</option>
          <option value="interior">Interior/Exterior Works</option>
        </select>
        </div>
        <div class="mb-2">
          <input type="text" id="budget" name="budget" placeholder="Budget Range (Optional)" class="text-gray-900 text-lg rounded-lg block w-full p-3">
        </div>
        <div class="mb-2">
          <textarea id="message" rows="3" class="block w-full text-lg rounded-lg focus:ring-blue-500 p-3 mb-8" placeholder="Message..." required></textarea>
        </div>
        <div class="mb-2">
          <input type="submit" class="text-indigo-900 text-xl rounded-lg block w-full p-3 bg-white hover:bg-gray-200 transition font-semibold" value="REQUEST QUOTE">
        </div>
        <p class="text-green-500 text-center mt-4 hidden" id="success-msg">Your request has been sent successfully!</p>
      </form>
    </div>
  </div>
</div>
</div>


<!-- location -->
<section class="container mx-auto p-4">
   <div class="space-y-4 text-center" data-animate="">
    <h1 class="text-blue-700 p-2 text-xl font-semibold">Our Location</h1>
    <h1 class="p-2 text-7xl font-semibold">Find Us on the Map</h1>
   </div>
   <!-- map for location -->
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.9332120833915!2d77.64930817575495!3d12.912014116180423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1483292c815f%3A0x2078ab134177b75b!2s27th%20Main%20Rd%2C%20Bengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1738246166407!5m2!1sen!2sin" width="100%" height="500px" style="border:0;" class="mt-20 zoom-in rounded-xl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</section>

<section class="w-full bg-orange-100">
  <div class="flex flex-col lg:flex-row justify-center text-center lg:text-left gap-3 mx-auto ">
  <!-- Left Column -->
   <div class="w-full md:w-2/3 p-2 space-y-10 md:px-20 p-8" data-animate="">
    <h1 class="p-2 md:text-6xl text-4xl font-semibold">Find the Right Service for Your Build</h1>
    <p class="lg:text-2xl text-xl font-semibold text-gray-600 p-2 md:pb-10">
     Explore our construction services for new homes, resident, expansions, and renovations.
    </p>
    <p><a href="{{ route('projects') }}" class="p-4 bg-indigo-700 m-2 text-white rounded-sm hover:bg-gray-600 text-xl">View All Projects  <i class="fa-solid fa-arrow-right"></i></a></p>
   </div>
  

  <!-- Right Column -->
  <div class="w-full h-full" data-animate="">
    <img src="{{ asset('images/proj3.avif') }}" alt="" class="object-cover w-full h-full rounded-xl">
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