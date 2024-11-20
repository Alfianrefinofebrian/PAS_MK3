<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Palette</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

</head>
<body class="font-poppins bg-gray-50 text-gray-800">
    <header class="navbar fixed w-full top-0 z-50 bg-black py-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="logo">
                <h1 class="text-white text-lg font-semibold">Logo</h1>
            </div>
            <nav>
                <ul class="flex space-x-5">
                    <li><a href="#" class="text-white hover:text-red-500 transition duration-300">Find Color Id</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero flex items-center justify-center text-center h-screen bg-[url('asset/color-desktop-wallpaper-1.jpg')] bg-cover bg-center px-5">
        <div class="container mx-auto">
            <h2 class="text-3xl md:text-5xl font-bold text-black mb-3">Find Your Color!</h2>
            <p class="text-lg md:text-xl text-black mb-6">Color Palette</p>
            <button class="btn bg-red-500 text-white px-6 py-2 rounded-md hover:bg-red-600 transition duration-300" onclick="goToPage()">Find Now</button>
        </div>
    </section>
    <script src="javascript.js"></script>


</body>
</html>


