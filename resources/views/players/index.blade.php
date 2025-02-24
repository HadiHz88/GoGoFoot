<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGoFoot - Player Search</title>
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
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200 border-b-2 border-white">Players</a>
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
        <h1 class="text-3xl font-bold mb-6">Player Search</h1>

        <!-- Search Form -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <form id="playerSearchForm" class="space-y-4">
                <div class="flex flex-wrap -mx-2 mb-4">
                    <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                        <label for="searchTerm" class="block text-gray-700 text-sm font-bold mb-2">Search Term</label>
                        <input type="text" id="searchTerm" name="searchTerm" placeholder="Enter player name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="w-full md:w-1/2 px-2">
                        <label for="team" class="block text-gray-700 text-sm font-bold mb-2">Team</label>
                        <input type="text" id="team" name="team" placeholder="Enter team name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2 mb-4">
                    <div class="w-full md:w-1/3 px-2 mb-4 md:mb-0">
                        <label for="position" class="block text-gray-700 text-sm font-bold mb-2">Position</label>
                        <select id="position" name="position" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">All Positions</option>
                            <option value="goalkeeper">Goalkeeper</option>
                            <option value="defender">Defender</option>
                            <option value="midfielder">Midfielder</option>
                            <option value="forward">Forward</option>
                        </select>
                    </div>
                    <div class="w-full md:w-1/3 px-2 mb-4 md:mb-0">
                        <label for="ageMin" class="block text-gray-700 text-sm font-bold mb-2">Min Age</label>
                        <input type="number" id="ageMin" name="ageMin" min="0" max="100" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="w-full md:w-1/3 px-2">
                        <label for="ageMax" class="block text-gray-700 text-sm font-bold mb-2">Max Age</label>
                        <input type="number" id="ageMax" name="ageMax" min="0" max="100" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Search Players
                    </button>
                </div>
            </form>
        </div>

        <!-- Search Results -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Search Results</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Player Card 1 -->
                <div class="bg-gray-100 p-4 rounded-lg shadow">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/80" alt="Player 1" class="w-20 h-20 rounded-full mr-4">
                        <div>
                            <h3 class="text-xl font-bold">John Doe</h3>
                            <p class="text-gray-600">Age: 22</p>
                            <p class="text-gray-600">Position: Midfielder</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-2"><strong>Teams:</strong> New York Juniors, USA U23</p>
                    <a href="player-details.html" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-block">View Profile</a>
                </div>
                <!-- Player Card 2 -->
                <div class="bg-gray-100 p-4 rounded-lg shadow">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/80" alt="Player 2" class="w-20 h-20 rounded-full mr-4">
                        <div>
                            <h3 class="text-xl font-bold">Jane Smith</h3>
                            <p class="text-gray-600">Age: 24</p>
                            <p class="text-gray-600">Position: Forward</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-2"><strong>Teams:</strong> LA Galaxy Youth, USA Women's</p>
                    <a href="player-details.html" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-block">View Profile</a>
                </div>
                <!-- Player Card 3 -->
                <div class="bg-gray-100 p-4 rounded-lg shadow">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/80" alt="Player 3" class="w-20 h-20 rounded-full mr-4">
                        <div>
                            <h3 class="text-xl font-bold">Mike Johnson</h3>
                            <p class="text-gray-600">Age: 20</p>
                            <p class="text-gray-600">Position: Defender</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-2"><strong>Teams:</strong> Chicago Fire Academy</p>
                    <a href="player-details.html" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-block">View Profile</a>
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
    document.getElementById('playerSearchForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Here you would typically send the form data to your backend and update the search results
        alert('Search functionality will be implemented in the backend.');
    });
</script>
</body>
</html>
