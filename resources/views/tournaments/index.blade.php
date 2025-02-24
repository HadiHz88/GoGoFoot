<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGoFoot - Tournament Search</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-green-600 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-4">
                    <!-- Logo -->
                    <div>
                        <a href="#" class="flex items-center py-5 px-2 text-white">
                            <i class="fas fa-futbol text-2xl mr-1"></i>
                            <span class="font-bold">GoGoFoot</span>
                        </a>
                    </div>
                    <!-- Primary Nav -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200">Home</a>
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200 border-b-2 border-white">Tournaments</a>
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200">Teams</a>
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200">Players</a>
                    </div>
                </div>
                <!-- Secondary Nav -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="#" class="py-5 px-3">
                        <i class="fas fa-user mr-1"></i> Login
                    </a>
                    <a href="#" class="py-2 px-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-900 rounded transition duration-300">
                        Sign Up
                    </a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button">
                        <i class="fas fa-bars text-white text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden">
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Home</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Tournaments</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Teams</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Players</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Login</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Sign Up</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Tournament Search</h1>

        <!-- Search Form -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <form id="tournamentSearchForm" class="space-y-4">
                <div class="flex flex-wrap -mx-2 mb-4">
                    <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                        <label for="searchTerm" class="block text-gray-700 text-sm font-bold mb-2">Search Term</label>
                        <input type="text" id="searchTerm" name="searchTerm" placeholder="Enter tournament name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="w-full md:w-1/2 px-2">
                        <label for="location" class="block text-gray-700 text-sm font-bold mb-2">Location</label>
                        <input type="text" id="location" name="location" placeholder="Enter city or country" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2 mb-4">
                    <div class="w-full md:w-1/3 px-2 mb-4 md:mb-0">
                        <label for="startDate" class="block text-gray-700 text-sm font-bold mb-2">Start Date</label>
                        <input type="date" id="startDate" name="startDate" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="w-full md:w-1/3 px-2 mb-4 md:mb-0">
                        <label for="endDate" class="block text-gray-700 text-sm font-bold mb-2">End Date</label>
                        <input type="date" id="endDate" name="endDate" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="w-full md:w-1/3 px-2">
                        <label for="ageGroup" class="block text-gray-700 text-sm font-bold mb-2">Age Group</label>
                        <select id="ageGroup" name="ageGroup" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">All Age Groups</option>
                            <option value="u12">Under 12</option>
                            <option value="u15">Under 15</option>
                            <option value="u18">Under 18</option>
                            <option value="adult">Adult</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Search Tournaments
                    </button>
                </div>
            </form>
        </div>

        <!-- Search Results -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Search Results</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Tournament Card 1 -->
                <div class="bg-gray-100 p-4 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-2">Summer Youth Cup 2023</h3>
                    <p class="text-gray-600 mb-2"><i class="fas fa-map-marker-alt mr-2"></i>New York, USA</p>
                    <p class="text-gray-600 mb-2"><i class="fas fa-calendar-alt mr-2"></i>Jul 15 - Jul 30, 2023</p>
                    <p class="text-gray-600 mb-4"><i class="fas fa-users mr-2"></i>Under 15</p>
                    <a href="tournament-details.html" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-block">View Details</a>
                </div>
                <!-- Tournament Card 2 -->
                <div class="bg-gray-100 p-4 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-2">European Champions League</h3>
                    <p class="text-gray-600 mb-2"><i class="fas fa-map-marker-alt mr-2"></i>Various Cities, Europe</p>
                    <p class="text-gray-600 mb-2"><i class="fas fa-calendar-alt mr-2"></i>Sep 1, 2023 - May 30, 2024</p>
                    <p class="text-gray-600 mb-4"><i class="fas fa-users mr-2"></i>Adult</p>
                    <a href="tournament-details.html" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-block">View Details</a>
                </div>
                <!-- Tournament Card 3 -->
                <div class="bg-gray-100 p-4 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-2">Junior World Cup</h3>
                    <p class="text-gray-600 mb-2"><i class="fas fa-map-marker-alt mr-2"></i>Rio de Janeiro, Brazil</p>
                    <p class="text-gray-600 mb-2"><i class="fas fa-calendar-alt mr-2"></i>Aug 10 - Aug 25, 2023</p>
                    <p class="text-gray-600 mb-4"><i class="fas fa-users mr-2"></i>Under 18</p>
                    <a href="tournament-details.html" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-block">View Details</a>
                </div>
            </div>
            <!-- Pagination -->
            <div class="mt-8 flex justify-center">
                <nav class="inline-flex rounded-md shadow">
                    <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        Previous
                    </a>
                    <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-blue-600 hover:bg-blue-50">
                        1
                    </a>
                    <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        2
                    </a>
                    <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        3
                    </a>
                    <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        Next
                    </a>
                </nav>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-green-600 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 GoGoFoot. All rights reserved.</p>
        </div>
    </footer>
</div>

<script>
    // Mobile menu toggle
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });

    // Form submission handler
    document.getElementById('tournamentSearchForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Here you would typically send the form data to your backend and update the search results
        alert('Search functionality will be implemented in the backend.');
    });
</script>
</body>
</html>
