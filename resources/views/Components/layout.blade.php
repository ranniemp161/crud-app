<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <!-- Website Logo -->
                        <a href="#" class="flex items-center py-4 px-2">
                            <span class="font-semibold text-gray-500 text-lg">BlogSite</span>
                        </a>
                    </div>
                    <!-- Primary Navbar items -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="#" class="text-gray-600 hover:text-gray-800">Home</a>
                        <a href="#" class="text-gray-600 hover:text-gray-800">About</a>
                        <a href="#" class="text-gray-600 hover:text-gray-800">Blog</a>
                        <!-- Add more links as needed -->
                    </div>
                </div>
                <!-- Secondary Navbar items (e.g., login, search) -->
                <div class="hidden md:flex items-center space-x-3">
                    <a href="#" class="text-gray-600 hover:text-gray-800">Login</a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">Search</a>
                </div>
            </div>
        </div>
    </nav>
      
    <main>
        {{$slot}}
    </main>
    <!-- Footer -->
    <div class="flex flex-col min-h-screen">
        <!-- Content -->
        <div class="flex-grow">
          <!-- Your content goes here -->
        </div>
        <!-- Footer -->
        <footer class="bg-gray-200 pt-10 overflow-auto">
          <div class="max-w-6xl mx-auto px-4">
            <p class="text-center text-gray-600">© 2024 BlogSite. All rights reserved.</p>
          </div>
        </footer>
      </div>
    
</body>
</html>