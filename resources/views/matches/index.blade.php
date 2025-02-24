<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGoFoot - Match Search</title>
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
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200">Tournaments</a>
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200">Teams</a>
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200">Players</a>
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200 border-b-2 border-white">Matches</a>
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
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Matches</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Login</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Sign Up</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Match Search</h1>

        <!-- Search Form -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <form id="matchSearchForm" class="space-y-4">
                <div class="flex flex-wrap -mx-2 mb-4">
                    <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                        <label for="team" class="block text-gray-700 text-sm font-bold mb-2">Team</label>
                        <input type="text" id="team" name="team" placeholder="Enter team name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="w-full md:w-1/2 px-2">
                        <label for="tournament" class="block text-gray-700 text-sm font-bold mb-2">Tournament</label>
                        <input type="text" id="tournament" name="tournament" placeholder="Enter tournament name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2 mb-4">
                    <div class="w-full md:w-1/3 px-2 mb-4 md:mb-0">
                        <label for="dateFrom" class="block text-gray-700 text-sm font-bold mb-2">Date From</label>
                        <input type="date" id="dateFrom" name="dateFrom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="w-full md:w-1/3 px-2 mb-4 md:mb-0">
                        <label for="dateTo" class="block text-gray-700 text-sm font-bold mb-2">Date To</label>
                        <input type="date" id="dateTo" name="dateTo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="w-full md:w-1/3 px-2">
                        <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Match Status</label>
                        <select id="status" name="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">All Statuses</option>
                            <option value="upcoming">Upcoming</option>
                            <option value="live">Live</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Search Matches
                    </button>
                </div>
            </form>
        </div>

        <!-- Match Results -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Match Results</h2>
            <div class="space-y-4">
                <!-- Match Card 1 -->
                <div class="bg-gray-100 p-4 rounded-lg shadow">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm font-semibold text-gray-600">July 20, 2023 - 15:00</span>
                        <span class="text-sm font-semibold text-green-600">Upcoming</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/30" alt="Team A Logo" class="w-8 h-8 mr-2">
                            <span class="font-bold">New York Juniors</span>
                        </div>
                        <span class="text-xl font-bold">vs</span>
                        <div class="flex items-center">
                            <span class="font-bold">LA Galaxy Youth</span>
                            <img src="https://via.placeholder.com/30" alt="Team B Logo" class="w-8 h-8 ml-2">
                        </div>
                    </div>
                    <div class="mt-2 text-center text-sm text-gray-600">Summer Youth Cup 2023</div>
                    <div class="mt-4 text-center">
                        <a href="match-details.html" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-block">View Details</a>
                    </div>
                </div>
                <!-- Match Card 2 -->
                <div class="bg-gray-100 p-4 rounded-lg shadow">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm font-semibold text-gray-600">July 19, 2023 - 18:30</span>
                        <span class="text-sm font-semibold text-red-600">Completed</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/30" alt="Team C Logo" class="w-8 h-8 mr-2">
                            <span class="font-bold">Chicago Fire Academy</span>
                        </div>
                        <span class="text-xl font-bold">2 - 1</span>
                        <div class="flex items-center">
                            <span class="font-bold">Seattle Sounders Jr.</span>
                            <img src="https://via.placeholder.com/30" alt="Team D Logo" class="w-8 h-8 ml-2">
                        </div>
                    </div>
                    <div class="mt-2 text-center text-sm text-gray-600">Summer Youth Cup 2023</div>
                    <div class="mt-4 text-center">
                        <a href="match-details.html" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-block">View Details</a>
                    </div>
                </div>
                <!-- Match Card 3 -->
                <div class="bg-gray-100 p-4 rounded-lg shadow">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm font-semibold text-gray-600">July 20, 2023 - 14:00</span>
                        <span class="text-sm font-semibold text-yellow-600">Live - 65'</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/30" alt="Team E Logo" class="w-8 h-8 mr-2">
                            <span class="font-bold">Boston United Youth</span>
                        </div>
                        <span class="text-xl font-bold">1 - 1</span>
                        <div class="flex items-center">
                            <span class="font-bold">Miami FC Academy</span>
                            <img src="https://via.placeholder.com/30" alt="Team F Logo" class="w-8 h-8 ml-2">
                        </div>
                    </div>
                    <div class="mt-2 text-center text-sm text-gray-600">Summer Youth Cup 2023</div>
                    <div class="mt-4 text-center">
                        <a href="match-details.html" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-block">View Details</a>
                    </div>
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
    document.getElementById('matchSearchForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Here you would typically send the form data to your backend and update the search results
        alert('Search functionality will be implemented in the backend.');
    });
</script>
</body>
</html>
