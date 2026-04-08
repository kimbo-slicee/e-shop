<?php
$title = 'Login';
include_once __DIR__ . '/partials/header.php';
?>

<section class="py-16">
    <div class="container mx-auto max-w-md">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold mb-2">Welcome Back</h1>
                <p class="text-gray-600">Sign in to your account to continue.</p>
            </div>
            <form action="#" method="post" class="space-y-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-900">Remember me</label>
                    </div>
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-500">Forgot password?</a>
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-2 px-4 rounded-md hover:from-blue-600 hover:to-purple-700 transition duration-300">Sign In</button>
            </form>
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">Don't have an account? <a href="/controllers/register.php" class="text-blue-600 hover:text-blue-500">Sign up</a></p>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/partials/footer.php' ?>
