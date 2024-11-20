<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Palettes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">

    <!-- Header -->
    <header class="bg-gray-800 text-white py-6 shadow-md">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-6">
            <h1 class="text-3xl font-semibold">Color Palettes</h1>
            <a href="findcolor.html" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300">Find by Code</a>
        </div>
    </header>

    <!-- Search Container -->
    <div class="text-center py-12 bg-gray-100">
        <h2 class="text-3xl font-semibold mb-4 text-gray-700">Find Your Color!</h2>
        <form action="/search" method="GET" class="inline-flex items-center">
            <input type="text" placeholder="Search Your Color Here" name="search" class="px-6 py-3 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 w-72" />
            <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-r-md hover:bg-blue-700 transition duration-300">
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>

    <!-- Color Grid Container -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6 max-w-7xl mx-auto">
        <!-- Color Item -->
        <div class="container text-center bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:ring-2 ring-blue-400">
            <img src="asset/1.png" class="w-full h-48 object-cover rounded-t-xl" alt="Color 1">
            <h5 class="mt-4 text-lg font-semibold text-gray-700">#FF6666</h5>
        </div>
        <div class="container text-center bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:ring-2 ring-blue-400">
            <img src="asset/4.png" class="w-full h-48 object-cover rounded-t-xl" alt="Color 2">
            <h5 class="mt-4 text-lg font-semibold text-gray-700">#FF9966</h5>
        </div>
        <div class="container text-center bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:ring-2 ring-blue-400">
            <img src="asset/7.png" class="w-full h-48 object-cover rounded-t-xl" alt="Color 3">
            <h5 class="mt-4 text-lg font-semibold text-gray-700">#FFFF66</h5>
        </div>
        <div class="container text-center bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:ring-2 ring-blue-400">
            <img src="asset/10.png" class="w-full h-48 object-cover rounded-t-xl" alt="Color 4">
            <h5 class="mt-4 text-lg font-semibold text-gray-700">#66FF66</h5>
        </div>
        <div class="container text-center bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:ring-2 ring-blue-400">
            <img src="asset/16.png" class="w-full h-48 object-cover rounded-t-xl" alt="Color 5">
            <h5 class="mt-4 text-lg font-semibold text-gray-700">#CCFFCC</h5>
        </div>
        <div class="container text-center bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:ring-2 ring-blue-400">
            <img src="asset/19.png" class="w-full h-48 object-cover rounded-t-xl" alt="Color 6">
            <h5 class="mt-4 text-lg font-semibold text-gray-700">#CCFFFF</h5>
        </div>
        <div class="container text-center bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:ring-2 ring-blue-400">
            <img src="asset/2.png" class="w-full h-48 object-cover rounded-t-xl" alt="Color 7">
            <h5 class="mt-4 text-lg font-semibold text-gray-700">#CC3333</h5>
        </div>
        <div class="container text-center bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:ring-2 ring-blue-400">
            <img src="asset/5.png" class="w-full h-48 object-cover rounded-t-xl" alt="Color 8">
            <h5 class="mt-4 text-lg font-semibold text-gray-700">#FF6633</h5>
        </div>
        <div class="container text-center bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:ring-2 ring-blue-400">
            <img src="asset/8.png" class="w-full h-48 object-cover rounded-t-xl" alt="Color 9">
            <h5 class="mt-4 text-lg font-semibold text-gray-700">#FFFF33</h5>
        </div>
        <div class="container text-center bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:ring-2 ring-blue-400">
            <img src="asset/11.png" class="w-full h-48 object-cover rounded-t-xl" alt="Color 10">
            <h5 class="mt-4 text-lg font-semibold text-gray-700">#00FF00</h5>
        </div>
        <div class="container text-center bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:ring-2 ring-blue-400">
            <img src="asset/17.png" class="w-full h-48 object-cover rounded-t-xl" alt="Color 11">
            <h5 class="mt-4 text-lg font-semibold text-gray-700">#99FF99</h5>
        </div>
        <div class="container text-center bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:ring-2 ring-blue-400">
            <img src="asset/20.png" class="w-full h-48 object-cover rounded-t-xl" alt="Color 12">
            <h5 class="mt-4 text-lg font-semibold text-gray-700">#99FFFF</h5>
        </div>
        <div class="container text-center bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:ring-2 ring-blue-400">
            <img src="asset/3.png" class="w-full h-48 object-cover rounded-t-xl" alt="Color 13">
            <h5 class="mt-4 text-lg font-semibold text-gray-700">#FF0000</h5>
        </div>
        <div class="container text-center bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:ring-2 ring-blue-400">
            <img src="asset/6.png" class="w-full h-48 object-cover rounded-t-xl" alt="Color 14">
            <h5 class="mt-4 text-lg font-semibold text-gray-700">#FF6600</h5>
        </div>
        <div class="container text-center bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:ring-2 ring-blue-400">
            <img src="asset/9.png" class="w-full h-48 object-cover rounded-t-xl" alt="Color 15">
            <h5 class="mt-4 text-lg font-semibold text-gray-700">#FFFF00</h5>
        </div>
        <div class="container text-center bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:ring-2 ring-blue-400">
            <img src="asset/15.png" class="w-full h-48 object-cover rounded-t-xl" alt="Color 16">
            <h5 class="mt-4 text-lg font-semibold text-gray-700">#00CC00</h5>
        </div>
        <div class="container text-center bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:ring-2 ring-blue-400">
            <img src="asset/18.png" class="w-full h-48 object-cover rounded-t-xl" alt="Color 17">
            <h5 class="mt-4 text-lg font-semibold text-gray-700">#99FFCC</h5>
        </div>
        <div class="container text-center bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:ring-2 ring-blue-400">
            <img src="asset/20.png" class="w-full h-48 object-cover rounded-t-xl" alt="Color 18">
            <h5 class="mt-4 text-lg font-semibold text-gray-700">#00FFFF</h5>
        </div>
    </div>

</body>
</html>
