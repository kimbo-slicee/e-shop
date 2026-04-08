<?php
$title = 'Our Products';
include_once __DIR__ . '/partials/header.php';
?>

<section class="py-16">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Our Products</h1>
            <p class="text-lg text-gray-600">Explore our curated collection of high-quality products for every need.</p>
        </div>
        <div class="mb-8 flex justify-center">
            <div class="flex space-x-4">
                <button class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition duration-300">All</button>
                <button class="bg-gray-200 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-300 transition duration-300">Electronics</button>
                <button class="bg-gray-200 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-300 transition duration-300">Fashion</button>
                <button class="bg-gray-200 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-300 transition duration-300">Home & Garden</button>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-blue-500 to-green-600 h-48 flex items-center justify-center">
                    <i class="fas fa-laptop text-6xl text-white"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Gaming Laptop</h3>
                    <p class="text-gray-600 mb-4">High-performance laptop for gaming and productivity.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-green-600">$1299.99</span>
                        <button class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition duration-300">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-purple-500 to-pink-600 h-48 flex items-center justify-center">
                    <i class="fas fa-mobile-alt text-6xl text-white"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Smartphone</h3>
                    <p class="text-gray-600 mb-4">Latest smartphone with advanced camera and features.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-purple-600">$799.99</span>
                        <button class="bg-purple-600 text-white px-4 py-2 rounded-md hover:bg-purple-700 transition duration-300">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-red-500 to-orange-600 h-48 flex items-center justify-center">
                    <i class="fas fa-headphones text-6xl text-white"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Wireless Headphones</h3>
                    <p class="text-gray-600 mb-4">Noise-cancelling wireless headphones for immersive audio.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600">$199.99</span>
                        <button class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition duration-300">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-yellow-500 to-orange-600 h-48 flex items-center justify-center">
                    <i class="fas fa-tshirt text-6xl text-white"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Cotton T-Shirt</h3>
                    <p class="text-gray-600 mb-4">Comfortable and stylish cotton t-shirt in various colors.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-yellow-600">$29.99</span>
                        <button class="bg-yellow-600 text-white px-4 py-2 rounded-md hover:bg-yellow-700 transition duration-300">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-indigo-500 to-blue-600 h-48 flex items-center justify-center">
                    <i class="fas fa-couch text-6xl text-white"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Modern Sofa</h3>
                    <p class="text-gray-600 mb-4">Elegant modern sofa for your living room.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-indigo-600">$599.99</span>
                        <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition duration-300">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-teal-500 to-cyan-600 h-48 flex items-center justify-center">
                    <i class="fas fa-blender text-6xl text-white"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Kitchen Blender</h3>
                    <p class="text-gray-600 mb-4">Powerful blender for smoothies and food preparation.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-teal-600">$89.99</span>
                        <button class="bg-teal-600 text-white px-4 py-2 rounded-md hover:bg-teal-700 transition duration-300">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/partials/footer.php' ?>
