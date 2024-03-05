<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>DreamCasa - Find Your Dream Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .hero-image {
      background-image: url("path/to/hero-image.jpg");
      background-size: cover;
      background-position: center;
      height: 60vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body class="bg-gray-100">

    <header class="bg-white py-4 shadow-md fixed top-0 w-full z-50">
        <div class="container mx-auto px-4 flex justify-between items-center">
          <h1 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold text-gray-800">DreamCasa</h1>
          <nav class="hidden md:flex space-x-8">
            <a href="#" class="text-gray-800 hover:text-gray-600">Home</a>
            <a href="#" class="text-gray-800 hover:text-gray-600">About</a>
            <a href="#" class="text-gray-800 hover:text-gray-600">Contact</a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-gray-800 hover:text-gray-600">Dashboard</a>
            @else
                    <a href="{{ route('login') }}" class="text-gray-800 hover:text-gray-600">Log in</a>
                @endauth
            @endif
            {{-- <a href="#" class="text-gray-800 hover:text-gray-600">Login</a> --}}
          </nav>
          <button id="menu-btn" class="md:hidden text-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
          </button>
        </div>
      </header>

  <div id="mobile-menu" class="fixed inset-0 bg-white bg-opacity-90 z-50 hidden">
    <nav class="flex flex-col justify-center h-full text-center">
      <a href="#" class="py-4 text-xl font-bold text-gray-800">Home</a>
      <a href="#" class="py-4 text-xl font-bold text-gray-800">About</a>
      <a href="#" class="py-4 text-xl font-bold text-gray-800">Contact</a>
      <a href="#" class="py-4 text-xl font-bold text-gray-800">Login</a>
    </nav>
  </div>

  <section class="hero-image bg-cover bg-center" style="background-image: url({{asset('images/sebastian-schuppik-H7xTpvBjJS4-unsplash.jpg')}})">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white uppercase">Find Your Dream Home</h2>
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-200 mb-8">Ready to Get Started?</h2>
      <div class="flex justify-center gap-4 mt-4">
        <a href="{{ route('client.register') }}" class="inline-block bg-white hover:bg-gray-200 text-gray-800 font-bold py-3 px-8 rounded-full shadow-md transition duration-300">As a Client</a>
        <a href="{{ route('register') }}" class="inline-block bg-white hover:bg-gray-200 text-gray-800 font-bold py-3 px-8 rounded-full shadow-md transition duration-300">As a Proprietor</a>
      </div>
    </div>
  </section>

  <section class="bg-white py-8">
    <div class="container mx-auto px-4 flex justify-center">
      <input type="text" class="w-full bg-white border border-gray-300 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-500 text-gray-800 placeholder-opacity-75" placeholder="Enter location or zip code">
      <button type="button" class="ml-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300">Search</button>
    </div>
  </section>

  <section class="bg-gray-100 py-24">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-12 text-center">Explore Featured Listings</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="path/to/image1.jpg" alt="Featured Listing" class="w-full h-64 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-2">Modern Luxury Villa</h3>
            <p class="text-gray-600">Location: Beverly Hills</p>
            <div class="flex justify-between items-center mt-4">
              <span class="text-gray-600 font-bold">$5,000,000</span>
              <a href="#" class="inline-block px-6 py-2 bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-lg transition duration-300">View Details</a>
            </div>
          </div>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="path/to/image2.jpg" alt="Featured Listing" class="w-full h-64 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-2">Beachfront Paradise</h3>
            <p class="text-gray-600">Location: Malibu</p>
            <div class="flex justify-between items-center mt-4">
              <span class="text-gray-600 font-bold">$3,200,000</span>
              <a href="#" class="inline-block px-6 py-2 bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-lg transition duration-300">View Details</a>
            </div>
          </div>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="path/to/image3.jpg" alt="Featured Listing" class="w-full h-64 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-2">Cosy Urban Loft</h3>
            <p class="text-gray-600">Location: Downtown Manhattan</p>
            <div class="flex justify-between items-center mt-4">
              <span class="text-gray-600 font-bold">$1,800,000</span>
              <a href="#" class="inline-block px-6 py-2 bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-lg transition duration-300">View Details</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <footer class="bg-gray-800 py-8 text-center text-white">
    <div class="container mx-auto">
      <p class="text-sm">&copy; 2024 DreamCasa. All rights reserved.</p>
    </div>
  </footer>

  <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>

</body>

</html>
