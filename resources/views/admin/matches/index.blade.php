<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGoFoot Admin - Matches</title>
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
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200 border-b-2 border-white">Matches</a>
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
        <h1 class="text-3xl font-bold mb-6">Matches</h1>

        <!-- Match Management Section -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold">Manage Matches</h2>
                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded" onclick="openModal()">
                    Add New Match
                </button>
            </div>

            <!-- Search and Filter -->
            <div class="mb-4 flex flex-wrap items-center">
                <input type="text" placeholder="Search matches..." class="w-full md:w-1/3 p-2 border rounded mr-2 mb-2 md:mb-0">
                <select class="w-full md:w-1/4 p-2 border rounded mr-2 mb-2 md:mb-0">
                    <option value="">All Tournaments</option>
                    <option value="summer-league-2023">Summer League 2023</option>
                    <option value="winter-cup-2023">Winter Cup 2023</option>
                </select>
                <select class="w-full md:w-1/4 p-2 border rounded mr-2 mb-2 md:mb-0">
                    <option value="">All Statuses</option>
                    <option value="scheduled">Scheduled</option>
                    <option value="in-progress">In Progress</option>
                    <option value="completed">Completed</option>
                </select>
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                    Apply Filters
                </button>
            </div>

            <!-- Matches Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-left">Date</th>
                        <th class="py-2 px-4 border-b text-left">Tournament</th>
                        <th class="py-2 px-4 border-b text-left">Home Team</th>
                        <th class="py-2 px-4 border-b text-left">Away Team</th>
                        <th class="py-2 px-4 border-b text-left">Score</th>
                        <th class="py-2 px-4 border-b text-left">Status</th>
                        <th class="py-2 px-4 border-b text-left">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b">2023-06-15</td>
                        <td class="py-2 px-4 border-b">Summer League 2023</td>
                        <td class="py-2 px-4 border-b">Red Dragons FC</td>
                        <td class="py-2 px-4 border-b">Blue Sharks United</td>
                        <td class="py-2 px-4 border-b">2 - 1</td>
                        <td class="py-2 px-4 border-b">Completed</td>
                        <td class="py-2 px-4 border-b">
                            <a href="edit-match.html" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                            <button class="text-red-500 hover:text-red-700">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b">2023-06-20</td>
                        <td class="py-2 px-4 border-b">Summer League 2023</td>
                        <td class="py-2 px-4 border-b">Green Falcons SC</td>
                        <td class="py-2 px-4 border-b">Yellow Lions FC</td>
                        <td class="py-2 px-4 border-b">0 - 0</td>
                        <td class="py-2 px-4 border-b">In Progress</td>
                        <td class="py-2 px-4 border-b">
                            <a href="edit-match.html" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                            <button class="text-red-500 hover:text-red-700">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b">2023-06-25</td>
                        <td class="py-2 px-4 border-b">Summer League 2023</td>
                        <td class="py-2 px-4 border-b">Purple Panthers United</td>
                        <td class="py-2 px-4 border-b">Orange Tigers FC</td>
                        <td class="py-2 px-4 border-b">- - -</td>
                        <td class="py-2 px-4 border-b">Scheduled</td>
                        <td class="py-2 px-4 border-b">
                            <a href="edit-match.html" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                            <button class="text-red-500 hover:text-red-700">Delete</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-4 flex justify-between items-center">
                <span>Showing 1 to 3 of 3 entries</span>
                <div>
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                        Previous
                    </button>
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                        Next
                    </button>
                </div>
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

<!-- Add Match Modal -->
<div id="addMatchModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                    Add New Match
                </h3>
                <div class="mt-2">
                    <form id="addMatchForm">
                        <div class="mb-4">
                            <label for="tournament" class="block text-gray-700 text-sm font-bold mb-2">Tournament</label>
                            <select id="tournament" name="tournament" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                <option value="">Select Tournament</option>
                                <option value="summer-league-2023">Summer League 2023</option>
                                <option value="winter-cup-2023">Winter Cup 2023</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="homeTeam" class="block text-gray-700 text-sm font-bold mb-2">Home Team</label>
                            <select id="homeTeam" name="homeTeam" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                <option value="">Select Home Team</option>
                                <option value="red-dragons">Red Dragons FC</option>
                                <option value="blue-sharks">Blue Sharks United</option>
                                <option value="green-falcons">Green Falcons SC</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="awayTeam" class="block text-gray-700 text-sm font-bold mb-2">Away Team</label>
                            <select id="awayTeam" name="awayTeam" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                <option value="">Select Away Team</option>
                                <option value="red-dragons">Red Dragons FC</option>
                                <option value="blue-sharks">Blue Sharks United</option>
                                <option value="green-falcons">Green Falcons SC</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="matchDate" class="block text-gray-700 text-sm font-bold mb-2">Match Date</label>
                            <input type="date" id="matchDate" name="matchDate" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="matchTime" class="block text-gray-700 text-sm font-bold mb-2">Match Time</label>
                            <input type="time" id="matchTime" name="matchTime" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="venue" class="block text-gray-700 text-sm font-bold mb-2">Venue</label>
                            <input type="text" id="venue" name="venue" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm" onclick="addMatch()">
                    Add Match
                </button>
                <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" onclick="closeModal()">
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

    // Modal functions
    function openModal() {
        document.getElementById('addMatchModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('addMatchModal').classList.add('hidden');
    }

    function addMatch() {
        // Here you would typically send the form data to your backend
        // For now, we'll just close the modal
        closeModal();
        alert('Match added successfully!');
    }
</script>
</body>
</html>
