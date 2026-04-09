<?php
$title = 'Home Page';
include_once __DIR__ . '/partials/header.php';
?>

<section class="bg-gradient-to-r from-green-500 to-blue-600 text-white py-20">
    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-bold mb-4">Welcome to E-Shop</h1>
        <p class="text-xl mb-8">Discover amazing products at unbeatable prices. Shop now and enjoy fast delivery!</p>
        <a href="/e-shop/products" class="bg-yellow-400 text-green-800 font-bold py-3 px-6 rounded-lg hover:bg-yellow-300 transition duration-300">Shop Now</a>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-semibold mb-8">Why Choose E-Shop?</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-box-open text-4xl text-green-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Wide Variety</h3>
                <p>Thousands of products across categories like electronics, fashion, and home goods.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-shield-alt text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Secure Shopping</h3>
                <p>Safe and secure payments with multiple options including credit cards and PayPal.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-truck text-4xl text-purple-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Fast Delivery</h3>
                <p>Quick shipping to your doorstep with real-time tracking.</p>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/partials/footer.php' ?>
