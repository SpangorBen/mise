<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>DreamCasa - Proprietor Dashboard</title>
</head>

<body class="bg-gray-100 font-sans">

  <header class="bg-white shadow-md py-4 px-4 fixed top-0 w-full z-50">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-xl font-bold text-gray-800">DreamCasa</h1>
      <button id="menu-btn" class="md:hidden text-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>
      <nav class="hidden md:flex space-x-4">
        <a href="#" class="text-gray-800 hover:text-gray-600">Dashboard</a>
        <a href="#" class="text-gray-800 hover:text-gray-600">Listings</a>
        <a href="#" class="text-gray-800 hover:text-gray-600">Settings</a>
        <a href="#" class="text-gray-800 hover:text-gray-600">Logout</a>
      </nav>
    </div>
  </header>

  <div id="mobile-menu" class="fixed inset-0 bg-white bg-opacity-90 z-40 hidden md:hidden">
    <nav class="flex flex-col justify-center h-full text-center">
      <a href="#" class="py-4 text-xl font-bold text-gray-800">Dashboard</a>
      <a href="#" class="py-4 text-xl font-bold text-gray-800">Listings</a>
      <a href="#" class="py-4 text-xl font-bold text-gray-800">Settings</a>
      <a href="#" class="py-4 text-xl font-bold text-gray-800">Logout</a>
    </nav>
  </div>

  <main class="container mx-auto px-4 pt-20 pb-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Proprietor Dashboard</h2>

    <div class="flex flex-col md:flex-row gap-4">
      <div class="w-full md:w-1/2 bg-white shadow-md rounded-lg px-4 py-5">
        <h3 class="text-lg font-bold text-gray-800 mb-2">Active Listings</h3>
        <span class="text-gray-600">3</span>
        <p class="text-sm text-gray-500 mt-2">View and manage existing listings.</p>
        <a href="#" class="inline-block mt-2 text-blue-500 hover:text-blue-700">Go to Listings</a>
      </div>

      <div class="w-full md:w-1/2 bg-white shadow-md rounded-lg px-4 py-5">
        <h3 class="text-lg font-bold text-gray-800 mb-2">Pending Reviews</h3>
        <span class="text-gray-600">2</span>
        <p class="text-sm text-gray-500 mt-2">Respond to client reviews and manage your reputation.</p>
        <a href="#" class="inline-block mt-2 text-blue-500 hover:text-blue-700">View Reviews</a>
      </div>
    </div>

    <div class="w-full mt-8 bg-white shadow-md rounded-lg px-4 py-5">
      <h2 class="text-lg font-bold text-gray-800 mb-4">Recent Inquiries</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="flex items-center p-2 border-b border-gray-200">
          <img src="placeholder.jpg" alt="Profile picture" class="w-10 h-10 rounded-full mr-4">
          <div>
            <p class="text-gray-800 font-medium">John Doe</p>
            <p class="text-gray-500 text-sm">Inquired about Apartment on Elm Street</p>
          </div>
          <div class="ml-auto flex items-center space-x-2">
            <a href="#" class="text-blue-500 hover:text-blue-700">View Inquiry</a>
            <a href="#" class="text-red-500 hover:text-red-700">Mark as Read</a>
          </div>
        </div>
        <div class="flex items-center p-2 border-b border-gray-200">
          <img src="placeholder.jpg" alt="Profile picture" class="w-10 h-10 rounded-full mr-4">
          <div>
            <p class="text-gray-800 font-medium">Jane Smith</p>
            <p class="text-gray-500 text-sm">Interested in House with a Pool</p>
          </div>
          <div class="ml-auto flex items-center space-x-2">
            <a href="#" class="text-blue-500 hover:text-blue-700">View Inquiry</a>
            <a href="#" class="text-red-500 hover:text-red-700">Mark as Read</a>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-8">
      <h2 class="text-xl font-bold text-gray-800 mb-4">Create New Listing</h2>

      <form class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="property-title" class="block text-sm font-medium text-gray-700">Property Title</label>
            <input type="text" id="property-title" name="property-title" class="w-full rounded-md border border-gray-300 py-2 px-3 text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500">
          </div>
          <div>
            <label for="property-type" class="block text-sm font-medium text-gray-700">Property Type</label>
            <select id="property-type" name="property-type" class="w-full rounded-md border border-gray-300 py-2 px-3 text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500">
              <option value="">Select Type</option>
              <option value="apartment">Apartment</option>
              <option value="house">House</option>
              <option value="villa">Villa</option>
            </select>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
            <input type="text" id="location" name="location" class="w-full rounded-md border border-gray-300 py-2 px-3 text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500">
        </div>
        <div>
          <label for="price" class="block text-sm font-medium text-gray-700">Price (per month)</label>
          <input type="number" id="price" name="price" class="w-full rounded-md border border-gray-300 py-2 px-3 text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500">
        </div>
      </div>

      <div>
        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
        <textarea id="description" name="description" rows="5" class="w-full rounded-md border border-gray-300 py-2 px-3 text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500"></textarea>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label for="images" class="block text-sm font-medium text-gray-700">Property Images</label>
          <input type="file" id="images" name="images" multiple class="w-full rounded-md border border-gray-300 py-2 px-3 text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500">
        </div>
        <div>
          <label for="amenities" class="block text-sm font-medium text-gray-700">Amenities (optional)</label>
          <div class="flex flex-wrap space-x-2">
            <label for="amenity-1">
              <input type="checkbox" id="amenity-1" name="amenities[]" value="parking">
              <span class="text-gray-700 ml-2">Parking</span>
            </label>
            <label for="amenity-2">
              <input type="checkbox" id="amenity-2" name="amenities[]" value="wifi">
              <span class="text-gray-700 ml-2">Wi-Fi</span>
            </label>
            <label for="amenity-3">
              <input type="checkbox" id="amenity-3" name="amenities[]" value="pet-friendly">
              <span class="text-gray-700 ml-2">Pet-friendly</span>
            </label>
            </div>
        </div>
      </div>

      <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400">Create Listing</button>
      </div>
    </form>
  </div>
</main>

<script src="script.js"></script> </body>

</html>
