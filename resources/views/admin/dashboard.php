<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGoFoot Admin Dashboard</title>
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
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200">Teams</a>
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200">Players</a>
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200">Matches</a>
                    </div>
                </div>
                <!-- Secondary Nav -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="#" class="py-5 px-3">
                        <i class="fas fa-user mr-1"></i> Admin
                    </a>
                    <a href="#" class="py-2 px-3 bg-green-700 hover:bg-green-800 text-white rounded transition duration-300">
                        Logout
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
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Teams</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Players</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Matches</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Logout</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>

        <!-- Quick Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Total Tournaments</h2>
                <p class="text-3xl font-bold text-green-600">15</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Active Teams</h2>
                <p class="text-3xl font-bold text-green-600">32</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Registered Players</h2>
                <p class="text-3xl font-bold text-green-600">487</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Upcoming Matches</h2>
                <p class="text-3xl font-bold text-green-600">12</p>
            </div>
        </div>

        <!-- Tournaments Section -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold">Tournaments</h2>
                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                    Create Tournament
                </button>
            </div>
            <div class="mb-4">
                <input type="text" placeholder="Search tournaments..." class="w-full p-2 border rounded">
            </div>
            <table class="min-w-full">
                <thead>
                <tr>
                    <th class="text-left">Name</th>
                    <th class="text-left">Start Date</th>
                    <th class="text-left">Status</th>
                    <th class="text-left">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Summer League 2023</td>
                    <td>2023-06-01</td>
                    <td>In Progress</td>
                    <td>
                        <button class="text-blue-500 hover:text-blue-700 mr-2">Edit</button>
                        <button class="text-red-500 hover:text-red-700">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Winter Cup 2023</td>
                    <td>2023-12-01</td>
                    <td>Scheduled</td>
                    <td>
                        <button class="text-blue-500 hover:text-blue-700 mr-2">Edit</button>
                        <button class="text-red-500 hover:text-red-700">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <!-- Teams Section -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold">Teams</h2>
                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                    Add Team
                </button>
            </div>
            <div class="mb-4">
                <input type="text" placeholder="Search teams..." class="w-full p-2 border rounded">
            </div>
            <table class="min-w-full">
                <thead>
                <tr>
                    <th class="text-left">Name</th>
                    <th class="text-left">Players</th>
                    <th class="text-left">Current Tournament</th>
                    <th class="text-left">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Red Dragons FC</td>
                    <td>18</td>
                    <td>Summer League 2023</td>
                    <td>
                        <button class="text-blue-500 hover:text-blue-700 mr-2">Edit</button>
                        <button class="text-red-500 hover:text-red-700">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Blue Sharks United</td>
                    <td>22</td>
                    <td>Summer League 2023</td>
                    <td>
                        <button class="text-blue-500 hover:text-blue-700 mr-2">Edit</button>
                        <button class="text-red-500 hover:text-red-700">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <!-- Players Section -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold">Players</h2>
                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                    Add Player
                </button>
            </div>
            <div class="mb-4">
                <input type="text" placeholder="Search players..." class="w-full p-2 border rounded">
            </div>
            <table class="min-w-full">
                <thead>
                <tr>
                    <th class="text-left">Name</th>
                    <th class="text-left">Team</th>
                    <th class="text-left">Position</th>
                    <th class="text-left">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>Red Dragons FC</td>
                    <td>Forward</td>
                    <td>
                        <button class="text-blue-500 hover:text-blue-700 mr-2">Edit</button>
                        <button class="text-red-500 hover:text-red-700">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>Blue Sharks United</td>
                    <td>Midfielder</td>
                    <td>
                        <button class="text-blue-500 hover:text-blue-700 mr-2">Edit</button>
                        <button class="text-red-500 hover:text-red-700">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
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
</script>
</body>
</html>
