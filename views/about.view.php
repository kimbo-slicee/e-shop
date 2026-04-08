<?php
$title = 'About Us';
include_once __DIR__ . '/partials/header.php';
?>

<section class="py-16">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">About Our PHP MVC Application</h1>
            <p class="text-lg text-gray-600">Learn more about our mission and the technology behind our app.</p>
        </div>
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-2xl font-semibold mb-4">Our Mission</h2>
                <p class="mb-4">We aim to provide a simple yet powerful MVC framework for PHP developers to build modern web applications quickly and efficiently.</p>
                <p>Our application demonstrates best practices in PHP development, including clean architecture, reusable components, and responsive design.</p>
            </div>
            <div class="bg-gradient-to-r from-green-400 to-blue-500 p-8 rounded-lg text-white">
                <h3 class="text-xl font-bold mb-4">Key Technologies</h3>
                <ul class="space-y-2">
                    <li><i class="fas fa-check-circle mr-2"></i> PHP 7+</li>
                    <li><i class="fas fa-check-circle mr-2"></i> MVC Pattern</li>
                    <li><i class="fas fa-check-circle mr-2"></i> Tailwind CSS</li>
                    <li><i class="fas fa-check-circle mr-2"></i> Font Awesome Icons</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-50 py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-semibold mb-8">Why Choose Us?</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-shield-alt text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Secure</h3>
                <p>Built with security best practices in mind.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-mobile-alt text-4xl text-purple-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Responsive</h3>
                <p>Works perfectly on all devices and screen sizes.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-code text-4xl text-green-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Clean Code</h3>
                <p>Well-organized and maintainable codebase.</p>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/partials/footer.php' ?>
