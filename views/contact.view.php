<?php
$title = 'Contact Us';
include_once __DIR__ . '/partials/header.php';
?>

<section class="py-16">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Get In Touch</h1>
            <p class="text-lg text-gray-600">We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
        </div>
        <div class="grid md:grid-cols-2 gap-12">
            <div>
                <h2 class="text-2xl font-semibold mb-6">Contact Information</h2>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <i class="fas fa-map-marker-alt text-blue-600 mr-4 text-xl"></i>
                        <div>
                            <p class="font-semibold">Address</p>
                            <p>123 PHP Street, MVC City, 12345</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-phone text-blue-600 mr-4 text-xl"></i>
                        <div>
                            <p class="font-semibold">Phone</p>
                            <p>+1 (555) 123-4567</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-envelope text-blue-600 mr-4 text-xl"></i>
                        <div>
                            <p class="font-semibold">Email</p>
                            <p>info@phpmvcapp.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-6">Send us a Message</h3>
                <form action="#" method="post" class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-2 px-4 rounded-md hover:from-blue-600 hover:to-purple-700 transition duration-300">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/partials/footer.php' ?>
