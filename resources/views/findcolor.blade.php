<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Grid</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src ="javascript.js"></script>
</head>
<div class="container mx-auto p-4">
    <h2 class="text-3xl font-bold mb-6">Find Your Shades</h2>
    
    <!-- Search Bar -->
    <div class="search-container mb-4">
            <form class="flex justify-center">
                <input 
                    type="text" 
                    name="search" 
                    class="w-2/3 p-3 border-2 border-gray-300 rounded-l-md" 
                    placeholder="Search by color index..." 
                />
                <button 
                    type="submit" 
                    class="bg-blue-500 text-white px-4 rounded-r-md hover:bg-blue-600"
                >
                    Search
                </button>
            </form>
        </div>

        <!-- Baris Warna Merah -->
        <div class="grid grid-cols-10 gap-4">
            <div class="container border-2 border-red-500 rounded-lg shadow-md">
                <div class="bg-[#1A0000] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#1A0000</p>
            </div>
            <div class="container border-2 border-red-500 rounded-lg shadow-md">
                <div class="bg-[#330000] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#330000</p>
            </div>
            <div class="container border-2 border-red-500 rounded-lg shadow-md">
                <div class="bg-[#4D0000] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#4D0000</p>
            </div>
            <div class="container border-2 border-red-500 rounded-lg shadow-md">
                <div class="bg-[#660000] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#660000</p>
            </div>
            <div class="container border-2 border-red-500 rounded-lg shadow-md">
                <div class="bg-[#800000] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#800000</p>
            </div>
            <div class="container border-2 border-red-500 rounded-lg shadow-md">
                <div class="bg-[#990000] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#990000</p>
            </div>
            <div class="container border-2 border-red-500 rounded-lg shadow-md">
                <div class="bg-[#B20000] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#B20000</p>
            </div>
            <div class="container border-2 border-red-500 rounded-lg shadow-md">
                <div class="bg-[#CC0000] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#CC0000</p>
            </div>
            <div class="container border-2 border-red-500 rounded-lg shadow-md">
                <div class="bg-[#E50000] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#E50000</p>
            </div>
            <div class="container border-2 border-red-500 rounded-lg shadow-md">
                <div class="bg-[#FF0000] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#FF0000</p>
            </div>
        </div>

        <!-- Baris Warna Kuning -->
        <div class="grid grid-cols-10 gap-4">
            <div class="container border-2 border-yellow-500 rounded-lg shadow-md">
                <div class="bg-[#1A1A00] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#1A1A00</p>
            </div>
            <div class="container border-2 border-yellow-500 rounded-lg shadow-md">
                <div class="bg-[#333300] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#333300</p>
            </div>
            <div class="container border-2 border-yellow-500 rounded-lg shadow-md">
                <div class="bg-[#4D4D00] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#4D4D00</p>
            </div>
            <div class="container border-2 border-yellow-500 rounded-lg shadow-md">
                <div class="bg-[#666600] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#666600</p>
            </div>
            <div class="container border-2 border-yellow-500 rounded-lg shadow-md">
                <div class="bg-[#808000] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#808000</p>
            </div>
            <div class="container border-2 border-yellow-500 rounded-lg shadow-md">
                <div class="bg-[#999900] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#999900</p>
            </div>
            <div class="container border-2 border-yellow-500 rounded-lg shadow-md">
                <div class="bg-[#B2B200] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#B2B200</p>
            </div>
            <div class="container border-2 border-yellow-500 rounded-lg shadow-md">
                <div class="bg-[#CCCC00] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#CCCC00</p>
            </div>
            <div class="container border-2 border-yellow-500 rounded-lg shadow-md">
                <div class="bg-[#E5E500] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#E5E500</p>
            </div>
            <div class="container border-2 border-yellow-500 rounded-lg shadow-md">
                <div class="bg-[#FFFF00] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#FFFF00</p>
            </div>
        </div>

        <!-- Baris Warna Hijau -->
        <div class="grid grid-cols-10 gap-4">
            <div class="container border-2 border-green-500 rounded-lg shadow-md">
                <div class="bg-[#001A00] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#001A00</p>
            </div>
            <div class="container border-2 border-green-500 rounded-lg shadow-md">
                <div class="bg-[#003300] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#003300</p>
            </div>
            <div class="container border-2 border-green-500 rounded-lg shadow-md">
                <div class="bg-[#004D00] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#004D00</p>
            </div>
            <div class="container border-2 border-green-500 rounded-lg shadow-md">
                <div class="bg-[#006600] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#006600</p>
            </div>
            <div class="container border-2 border-green-500 rounded-lg shadow-md">
                <div class="bg-[#008000] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#008000</p>
            </div>
            <div class="container border-2 border-green-500 rounded-lg shadow-md">
                <div class="bg-[#009900] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#009900</p>
            </div>
            <div class="container border-2 border-green-500 rounded-lg shadow-md">
                <div class="bg-[#00B200] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#00B200</p>
            </div>
            <div class="container border-2 border-green-500 rounded-lg shadow-md">
                <div class="bg-[#00CC00] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#00CC00</p>
            </div>
            <div class="container border-2 border-green-500 rounded-lg shadow-md">
                <div class="bg-[#00E500] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#00E500</p>
            </div>
            <div class="container border-2 border-green-500 rounded-lg shadow-md">
                <div class="bg-[#00FF00] h-20 rounded-t-md"></div>
                <p class="mt-2 text-xs font-semibold text-gray-700">#00FF00</p>
            </div>
        </div>
        <div class="grid grid-cols-10 gap-4">
    <!-- Purple shades -->
    <div class="container border-2 border-purple-500 rounded-lg shadow-md">
        <div class="bg-[#1A001A] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#1A001A</p>
    </div>
    <div class="container border-2 border-purple-500 rounded-lg shadow-md">
        <div class="bg-[#330033] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#330033</p>
    </div>
    <div class="container border-2 border-purple-500 rounded-lg shadow-md">
        <div class="bg-[#4D004D] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#4D004D</p>
    </div>
    <div class="container border-2 border-purple-500 rounded-lg shadow-md">
        <div class="bg-[#660066] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#660066</p>
    </div>
    <div class="container border-2 border-purple-500 rounded-lg shadow-md">
        <div class="bg-[#800080] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#800080</p>
    </div>
    <div class="container border-2 border-purple-500 rounded-lg shadow-md">
        <div class="bg-[#990099] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#990099</p>
    </div>
    <div class="container border-2 border-purple-500 rounded-lg shadow-md">
        <div class="bg-[#B200B2] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#B200B2</p>
    </div>
    <div class="container border-2 border-purple-500 rounded-lg shadow-md">
        <div class="bg-[#CC00CC] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#CC00CC</p>
    </div>
    <div class="container border-2 border-purple-500 rounded-lg shadow-md">
        <div class="bg-[#E500E5] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#E500E5</p>
    </div>
    <div class="container border-2 border-purple-500 rounded-lg shadow-md">
        <div class="bg-[#FF00FF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FF00FF</p>
    </div>
</div>
<div class="grid grid-cols-10 gap-4">
    <div class="container border-2 border-blue-500 rounded-lg shadow-md">
        <div class="bg-[#0000FF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#0000FF</p>
    </div>
    <div class="container border-2 border-blue-500 rounded-lg shadow-md">
        <div class="bg-[#1A1AFF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#1A1AFF</p>
    </div>
    <div class="container border-2 border-blue-500 rounded-lg shadow-md">
        <div class="bg-[#3333FF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#3333FF</p>
    </div>
    <div class="container border-2 border-blue-500 rounded-lg shadow-md">
        <div class="bg-[#4D4DFF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#4D4DFF</p>
    </div>
    <div class="container border-2 border-blue-500 rounded-lg shadow-md">
        <div class="bg-[#6666FF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#6666FF</p>
    </div>
    <div class="container border-2 border-blue-500 rounded-lg shadow-md">
        <div class="bg-[#8080FF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#8080FF</p>
    </div>
    <div class="container border-2 border-blue-500 rounded-lg shadow-md">
        <div class="bg-[#9999FF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#9999FF</p>
    </div>
    <div class="container border-2 border-blue-500 rounded-lg shadow-md">
        <div class="bg-[#B2B2FF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#B2B2FF</p>
    </div>
    <div class="container border-2 border-blue-500 rounded-lg shadow-md">
        <div class="bg-[#CCCCFF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#CCCCFF</p>
    </div>
    <div class="container border-2 border-blue-500 rounded-lg shadow-md">
        <div class="bg-[#E5E5FF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#E5E5FF</p>
    </div>
</div>
<div class="grid grid-cols-10 gap-4">
    <div class="container border-2 border-pink-500 rounded-lg shadow-md">
        <div class="bg-[#FF69B4] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FF69B4</p>
    </div>
    <div class="container border-2 border-pink-500 rounded-lg shadow-md">
        <div class="bg-[#FF77B3] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FF77B3</p>
    </div>
    <div class="container border-2 border-pink-500 rounded-lg shadow-md">
        <div class="bg-[#FF85CC] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FF85CC</p>
    </div>
    <div class="container border-2 border-pink-500 rounded-lg shadow-md">
        <div class="bg-[#FF99CC] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FF99CC</p>
    </div>
    <div class="container border-2 border-pink-500 rounded-lg shadow-md">
        <div class="bg-[#FFB3D9] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FFB3D9</p>
    </div>
    <div class="container border-2 border-pink-500 rounded-lg shadow-md">
        <div class="bg-[#FFCCE5] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FFCCE5</p>
    </div>
    <div class="container border-2 border-pink-500 rounded-lg shadow-md">
        <div class="bg-[#FFD9E6] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FFD9E6</p>
    </div>
    <div class="container border-2 border-pink-500 rounded-lg shadow-md">
        <div class="bg-[#FFE5F2] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FFE5F2</p>
    </div>
    <div class="container border-2 border-pink-500 rounded-lg shadow-md">
        <div class="bg-[#FFEBF2] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FFEBF2</p>
    </div>
    <div class="container border-2 border-pink-500 rounded-lg shadow-md">
        <div class="bg-[#FFF1F6] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FFF1F6</p>
    </div>
</div>
<div class="grid grid-cols-10 gap-4">
    <div class="container border-2 border-cyan-500 rounded-lg shadow-md">
        <div class="bg-[#00FFFF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#00FFFF</p>
    </div>
    <div class="container border-2 border-cyan-500 rounded-lg shadow-md">
        <div class="bg-[#1AFFFD] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#1AFFFD</p>
    </div>
    <div class="container border-2 border-cyan-500 rounded-lg shadow-md">
        <div class="bg-[#33FFFB] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#33FFFB</p>
    </div>
    <div class="container border-2 border-cyan-500 rounded-lg shadow-md">
        <div class="bg-[#4DFFF9] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#4DFFF9</p>
    </div>
    <div class="container border-2 border-cyan-500 rounded-lg shadow-md">
        <div class="bg-[#66FFF7] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#66FFF7</p>
    </div>
    <div class="container border-2 border-cyan-500 rounded-lg shadow-md">
        <div class="bg-[#80FFF5] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#80FFF5</p>
    </div>
    <div class="container border-2 border-cyan-500 rounded-lg shadow-md">
        <div class="bg-[#99FFF3] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#99FFF3</p>
    </div>
    <div class="container border-2 border-cyan-500 rounded-lg shadow-md">
        <div class="bg-[#B2FFF1] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#B2FFF1</p>
    </div>
    <div class="container border-2 border-cyan-500 rounded-lg shadow-md">
        <div class="bg-[#CCFFEF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#CCFFEF</p>
    </div>
    <div class="container border-2 border-cyan-500 rounded-lg shadow-md">
        <div class="bg-[#E5FFED] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#E5FFED</p>
    </div>
</div>
<div class="grid grid-cols-10 gap-4">
    <div class="container border-2 border-teal-500 rounded-lg shadow-md">
        <div class="bg-[#008080] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#008080</p>
    </div>
    <div class="container border-2 border-teal-500 rounded-lg shadow-md">
        <div class="bg-[#119595] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#119595</p>
    </div>
    <div class="container border-2 border-teal-500 rounded-lg shadow-md">
        <div class="bg-[#22AAAA] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#22AAAA</p>
    </div>
    <div class="container border-2 border-teal-500 rounded-lg shadow-md">
        <div class="bg-[#33BFBF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#33BFBF</p>
    </div>
    <div class="container border-2 border-teal-500 rounded-lg shadow-md">
        <div class="bg-[#44D4D4] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#44D4D4</p>
    </div>
    <div class="container border-2 border-teal-500 rounded-lg shadow-md">
        <div class="bg-[#55E9E9] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#55E9E9</p>
    </div>
    <div class="container border-2 border-teal-500 rounded-lg shadow-md">
        <div class="bg-[#66FFFF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#66FFFF</p>
    </div>
    <div class="container border-2 border-teal-500 rounded-lg shadow-md">
        <div class="bg-[#77FFFF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#77FFFF</p>
    </div>
    <div class="container border-2 border-teal-500 rounded-lg shadow-md">
        <div class="bg-[#88FFFF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#88FFFF</p>
    </div>
    <div class="container border-2 border-teal-500 rounded-lg shadow-md">
        <div class="bg-[#99FFFF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#99FFFF</p>
    </div>
</div>
<div class="grid grid-cols-10 gap-4">
    <div class="container border-2 border-olive-500 rounded-lg shadow-md">
        <div class="bg-[#808000] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#808000</p>
    </div>
    <div class="container border-2 border-olive-500 rounded-lg shadow-md">
        <div class="bg-[#8A8A1A] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#8A8A1A</p>
    </div>
    <div class="container border-2 border-olive-500 rounded-lg shadow-md">
        <div class="bg-[#949433] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#949433</p>
    </div>
    <div class="container border-2 border-olive-500 rounded-lg shadow-md">
        <div class="bg-[#9E9E4D] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#9E9E4D</p>
    </div>
    <div class="container border-2 border-olive-500 rounded-lg shadow-md">
        <div class="bg-[#A8A866] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#A8A866</p>
    </div>
    <div class="container border-2 border-olive-500 rounded-lg shadow-md">
        <div class="bg-[#B2B280] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#B2B280</p>
    </div>
    <div class="container border-2 border-olive-500 rounded-lg shadow-md">
        <div class="bg-[#BCBC99] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#BCBC99</p>
    </div>
    <div class="container border-2 border-olive-500 rounded-lg shadow-md">
        <div class="bg-[#C6C6B2] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#C6C6B2</p>
    </div>
    <div class="container border-2 border-olive-500 rounded-lg shadow-md">
        <div class="bg-[#D0D0CC] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#D0D0CC</p>
    </div>
    <div class="container border-2 border-olive-500 rounded-lg shadow-md">
        <div class="bg-[#DADAD5] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#DADAD5</p>
    </div>
</div>
<div class="grid grid-cols-10 gap-4">
    <div class="container border-2 border-gold-500 rounded-lg shadow-md">
        <div class="bg-[#FFD700] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FFD700</p>
    </div>
    <div class="container border-2 border-gold-500 rounded-lg shadow-md">
        <div class="bg-[#FFE033] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FFE033</p>
    </div>
    <div class="container border-2 border-gold-500 rounded-lg shadow-md">
        <div class="bg-[#FFE94D] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FFE94D</p>
    </div>
    <div class="container border-2 border-gold-500 rounded-lg shadow-md">
        <div class="bg-[#FFF066] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FFF066</p>
    </div>
    <div class="container border-2 border-gold-500 rounded-lg shadow-md">
        <div class="bg-[#FFF380] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FFF380</p>
    </div>
    <div class="container border-2 border-gold-500 rounded-lg shadow-md">
        <div class="bg-[#FFF899] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FFF899</p>
    </div>
    <div class="container border-2 border-gold-500 rounded-lg shadow-md">
        <div class="bg-[#FFFDB2] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FFFDB2</p>
    </div>
    <div class="container border-2 border-gold-500 rounded-lg shadow-md">
        <div class="bg-[#FFFFCC] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FFFFCC</p>
    </div>
    <div class="container border-2 border-gold-500 rounded-lg shadow-md">
        <div class="bg-[#FFFFE5] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FFFFE5</p>
    </div>
    <div class="container border-2 border-gold-500 rounded-lg shadow-md">
        <div class="bg-[#FFFFFF] h-20 rounded-t-md"></div>
        <p class="mt-2 text-xs font-semibold text-gray-700">#FFFFFF</p>
    </div>
</div>

    </div>

</body>
</html>
