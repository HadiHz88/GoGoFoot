<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGoFoot Admin - Edit Team</title>
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
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200 border-b-2 border-white">Teams</a>
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
        <h1 class="text-3xl font-bold mb-6">Edit Team</h1>

        <!-- Edit Team Form -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <form id="editTeamForm">
                <div class="mb-4">
                    <label for="teamName" class="block text-gray-700 text-sm font-bold mb-2">Team Name</label>
                    <input type="text" id="teamName" name="teamName" value="Red Dragons FC" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="coachName" class="block text-gray-700 text-sm font-bold mb-2">Coach Name</label>
                    <input type="text" id="coachName" name="coachName" value="John Smith" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="tournament" class="block text-gray-700 text-sm font-bold mb-2">Current Tournament</label>
                    <select id="tournament" name="tournament" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="summer-league-2023" selected>Summer League 2023</option>
                        <option value="winter-cup-2023">Winter Cup 2023</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="foundationYear" class="block text-gray-700 text-sm font-bold mb-2">Foundation Year</label>
                    <input type="number" id="foundationYear" name="foundationYear" value="2010" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="homeStadium" class="block text-gray-700 text-sm font-bold mb-2">Home Stadium</label>
                    <input type="text" id="homeStadium" name="homeStadium" value="Dragon's Lair Stadium" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Save Changes
                    </button>
                    <a href="teams-page.html" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                        Cancel and Return to Teams
                    </a>
                </div>
            </form>
        </div>

        <!-- Team Players Section -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-bold mb-4">Team Players</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-left">Name</th>
                        <th class="py-2 px-4 border-b text-left">Position</th>
                        <th class="py-2 px-4 border-b text-left">Jersey Number</th>
                        <th class="py-2 px-4 border-b text-left">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b">Alex Johnson</td>
                        <td class="py-2 px-4 border-b">Forward</td>
                        <td class="py-2 px-4 border-b">10</td>
                        <td class="py-2 px-4 border-b">
                            <button class="text-blue-500 hover:text-blue-700 mr-2">Edit</button>
                            <button class="text-red-500 hover:text-red-700">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b">Sarah Lee</td>
                        <td class="py-2 px-4 border-b">Midfielder</td>
                        <td class="py-2 px-4 border-b">8</td>
                        <td class="py-2 px-4 border-b">
                            <button class="text-blue-500 hover:text-blue-700 mr-2">Edit</button>
                            <button class="text-red-500 hover:text-red-700">Remove</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" onclick="openAddPlayerModal()">
                    Add Player
                </button>
            </div>
        </div>

        <!-- Team Statistics Section -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Team Statistics</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-gray-100 p-4 rounded-lg">
                    <h3 class="text-lg font-semibold mb-2">Matches Played</h3>
                    <p class="text-3xl font-bold">12</p>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg">
                    <h3 class="text-lg font-semibold mb-2">Wins</h3>
                    <p class="text-3xl font-bold">8</p>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg">
                    <h3 class="text-lg font-semibold mb-2">Draws</h3>
                    <p class="text-3xl font-bold">2</p>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg">
                    <h3 class="text-lg font-semibold mb-2">Losses</h3>
                    <p class="text-3xl font-bold">2</p>
                </div>
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

<!-- Add Player Modal -->
<div id="addPlayerModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                    Add New Player
                </h3>
                <div class="mt-2">
                    <form id="addPlayerForm">
                        <div class="mb-4">
                            <label for="playerName" class="block text-gray-700 text-sm font-bold mb-2">Player Name</label>
                            <input type="text" id="playerName" name="playerName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="playerPosition" class="block text-gray-700 text-sm font-bold mb-2">Position</label>
                            <select id="playerPosition" name="playerPosition" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                <option value="">Select Position</option>
                                <option value="forward">Forward</option>
                                <option value="midfielder">Midfielder</option>
                                <option value="defender">Defender</option>
                                <option value="goalkeeper">Goalkeeper</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="jerseyNumber" class="block text-gray-700 text-sm font-bold mb-2">Jersey Number</label>
                            <input type="number" id="jerseyNumber" name="jerseyNumber" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm" onclick="addPlayer()">
                    Add Player
                </button>
                <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" onclick="closeAddPlayerModal()">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    // Mobile menu toggle
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });

    // Form submission handler
    document.getElementById('editTeamForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Here you would typically send the form data to your backend
        // For now, we'll just show an alert
        alert('Team updated successfully!');
    });

    // Add Player Modal functions
    function openAddPlayerModal() {
        document.getElementById('addPlayerModal').classList.remove('hidden');
    }

    function closeAddPlayerModal() {
        document.getElementById('addPlayerModal').classList.add('hidden');
    }

    function addPlayer() {
        // Here you would typically send the form data to your backend
        // For now, we'll just close the modal
        closeAddPlayerModal();
        alert('Player added successfully!');
    }
</script>
</body>
</html>
