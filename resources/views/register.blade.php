<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>

<body class="flex items-center justify-center min-h-screen bg-white">

    <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-md">
        <div class="px-6 py-8">
            <h2 class="text-2xl font-bold text-center text-gray-700">Create an Account</h2>

            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Username
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        id="username" type="text" placeholder="Enter your username" >
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        id="email" type="email" placeholder="Enter your email" >
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                        Phone Number
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        id="phone" type="text" placeholder="Enter your phone number" >
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                        Address
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        id="address" type="text" placeholder="Enter your address" >
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        id="password" type="password" placeholder="Enter your password" >
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">
                        Confirm Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        id="confirm-password" type="password" placeholder="Confirm your password" >
                </div>
                <div class="mb-4">
                <button
                        class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-150 ease-in-out"
                        type="submit">
                            <a href="/contact">
                            Register
                            </a>
                    </button>
                </div>
                <div class="text-center">
                    <p class="text-gray-600">Already have an account? <a href="/" class="text-blue-500 hover:text-blue-700">Login</a></p>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
