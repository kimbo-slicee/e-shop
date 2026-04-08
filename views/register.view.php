<?php
$title = 'Register';
include_once __DIR__ . '/partials/header.php';
?>

<section class="py-16">
    <div class="container mx-auto max-w-md">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold mb-2">Create Account</h1>
                <p class="text-gray-600">Join us today and start building amazing applications.</p>
            </div>
            <form action="#" method="post" class="space-y-4">
                <div>
                    <label for="fullname" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <input type="text" id="fullname" name="fullname" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="terms" name="terms" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" required>
                    <label for="terms" class="ml-2 block text-sm text-gray-900">
                        I agree to the <a href="#" class="text-blue-600 hover:text-blue-500">Terms and Conditions</a>
                    </label>
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-2 px-4 rounded-md hover:from-blue-600 hover:to-purple-700 transition duration-300">Register</button>
            </form>
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">Already have an account? <a href="/controllers/login.php" class="text-blue-600 hover:text-blue-500">Sign in</a></p>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/partials/footer.php' ?>
