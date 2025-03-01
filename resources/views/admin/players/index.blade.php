<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGoFoot Admin - Players</title>
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
                            <span class="font-bold">GoGoFoot Admin</span>
                        </a>
                    </div>
                    <!-- Primary Nav -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200">Dashboard</a>
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200">Tournaments</a>
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200 border-b-2 border-white">Players</a>
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200">Matches</a>
                    </div>
                </div>
                <!-- Secondary Nav -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="#" class="py-5 px-3">
                        <i class="fas fa-user mr-1"></i> Logout
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
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Dashboard</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Tournaments</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Players</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Matches</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Logout</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Player Management</h1>

        <!-- Search Form -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-xl font-semibold mb-4">Search Players</h2>
            <form id="playerSearchForm" class="space-y-4">
                <div class="flex flex-wrap -mx-2 mb-4">
                    <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                        <label for="playerId" class="block text-gray-700 text-sm font-bold mb-2">Player ID</label>
                        <input type="text" id="playerId" name="playerId" placeholder="Enter player ID" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="w-full md:w-1/2 px-2">
                        <label for="playerName" class="block text-gray-700 text-sm font-bold mb-2">Player Name</label>
                        <input type="text" id="playerName" name="playerName" placeholder="Enter player name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Search Players
                    </button>
                </div>
            </form>
        </div>

        <!-- Player List -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Player List</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Position</th>
                        <th class="py-3 px-6 text-left">Team</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">1</td>
                        <td class="py-3 px-6 text-left">John Doe</td>
                        <td class="py-3 px-6 text-left">Forward</td>
                        <td class="py-3 px-6 text-left">Team A</td>
                        <td class="py-3 px-6 text-center">
                            <a href="admin-edit-player.html?id=1" class="text-blue-600 hover:text-blue-900 mr-2">Edit</a>
                            <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">2</td>
                        <td class="py-3 px-6 text-left">Jane Smith</td>
                        <td class="py-3 px-6 text-left">Midfielder</td>
                        <td class="py-3 px-6 text-left">Team B</td>
                        <td class="py-3 px-6 text-center">
                            <a href="admin-edit-player.html?id=2" class="text-blue-600 hover:text-blue-900 mr-2">Edit</a>
                            <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="mt-4 flex justify-center">
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
    <footer class="bg-green-600 text-white py-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 GoGoFoot Admin. All rights reserved.</p>
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
        // Here you would typically send the form data to your backend and update the player list
        alert('Search functionality will be implemented in the backend.');
    });
</script>
</body>
</html>
