<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGoFoot Admin - Edit Tournament</title>
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
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200 border-b-2 border-white">Tournaments</a>
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
        <h1 class="text-3xl font-bold mb-6">Edit Tournament</h1>

        <!-- Edit Tournament Form -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <form id="editTournamentForm">
                <div class="mb-4">
                    <label for="tournamentName" class="block text-gray-700 text-sm font-bold mb-2">Tournament Name</label>
                    <input type="text" id="tournamentName" name="tournamentName" value="Summer League 2023" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="startDate" class="block text-gray-700 text-sm font-bold mb-2">Start Date</label>
                    <input type="date" id="startDate" name="startDate" value="2023-06-01" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="endDate" class="block text-gray-700 text-sm font-bold mb-2">End Date</label>
                    <input type="date" id="endDate" name="endDate" value="2023-08-31" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status</label>
                    <select id="status" name="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="scheduled">Scheduled</option>
                        <option value="in-progress" selected>In Progress</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                    <textarea id="description" name="description" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">Summer football tournament featuring 16 teams competing for the championship title.</textarea>
                </div>
                <div class="mb-4">
                    <label for="location" class="block text-gray-700 text-sm font-bold mb-2">Location</label>
                    <input type="text" id="location" name="location" value="City Stadium, Downtown" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="maxTeams" class="block text-gray-700 text-sm font-bold mb-2">Maximum Number of Teams</label>
                    <input type="number" id="maxTeams" name="maxTeams" value="16" min="2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Save Changes
                    </button>
                    <a href="#" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                        Cancel and Return to Tournaments
                    </a>
                </div>
            </form>
        </div>

        <!-- Participating Teams Section -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-bold mb-4">Participating Teams</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-left">Team Name</th>
                        <th class="py-2 px-4 border-b text-left">Coach</th>
                        <th class="py-2 px-4 border-b text-left">Players</th>
                        <th class="py-2 px-4 border-b text-left">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b">Red Dragons FC</td>
                        <td class="py-2 px-4 border-b">John Smith</td>
                        <td class="py-2 px-4 border-b">18</td>
                        <td class="py-2 px-4 border-b">
                            <button class="text-red-500 hover:text-red-700">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b">Blue Sharks United</td>
                        <td class="py-2 px-4 border-b">Sarah Johnson</td>
                        <td class="py-2 px-4 border-b">22</td>
                        <td class="py-2 px-4 border-b">
                            <button class="text-red-500 hover:text-red-700">Remove</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                    Add Team
                </button>
            </div>
        </div>

        <!-- Match Schedule Section -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Match Schedule</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-left">Date</th>
                        <th class="py-2 px-4 border-b text-left">Time</th>
                        <th class="py-2 px-4 border-b text-left">Home Team</th>
                        <th class="py-2 px-4 border-b text-left">Away Team</th>
                        <th class="py-2 px-4 border-b text-left">Venue</th>
                        <th class="py-2 px-4 border-b text-left">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b">2023-06-05</td>
                        <td class="py-2 px-4 border-b">14:00</td>
                        <td class="py-2 px-4 border-b">Red Dragons FC</td>
                        <td class="py-2 px-4 border-b">Blue Sharks United</td>
                        <td class="py-2 px-4 border-b">Main Stadium</td>
                        <td class="py-2 px-4 border-b">
                            <button class="text-blue-500 hover:text-blue-700 mr-2">Edit</button>
                            <button class="text-red-500 hover:text-red-700">Delete</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                    Add Match
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-green-600 text-white py-4 mt-8">
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
    document.getElementById('editTournamentForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Here you would typically send the form data to your backend
        // For now, we'll just show an alert
        alert('Tournament updated successfully!');
    });
</script>
</body>
</html>
