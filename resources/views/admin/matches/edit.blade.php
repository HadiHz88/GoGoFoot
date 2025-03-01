<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGoFoot Admin - Edit Match</title>
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
        <h1 class="text-3xl font-bold mb-6">Edit Match</h1>

        <!-- Edit Match Form -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <form id="editMatchForm">
                <div class="mb-4">
                    <label for="tournament" class="block text-gray-700 text-sm font-bold mb-2">Tournament</label>
                    <select id="tournament" name="tournament" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="summer-league-2023" selected>Summer League 2023</option>
                        <option value="winter-cup-2023">Winter Cup 2023</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="homeTeam" class="block text-gray-700 text-sm font-bold mb-2">Home Team</label>
                    <select id="homeTeam" name="homeTeam" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="red-dragons" selected>Red Dragons FC</option>
                        <option value="blue-sharks">Blue Sharks United</option>
                        <option value="green-falcons">Green Falcons SC</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="awayTeam" class="block text-gray-700 text-sm font-bold mb-2">Away Team</label>
                    <select id="awayTeam" name="awayTeam" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="red-dragons">Red Dragons FC</option>
                        <option value="blue-sharks" selected>Blue Sharks United</option>
                        <option value="green-falcons">Green Falcons SC</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="matchDate" class="block text-gray-700 text-sm font-bold mb-2">Match Date</label>
                    <input type="date" id="matchDate" name="matchDate" value="2023-06-15" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="matchTime" class="block text-gray-700 text-sm font-bold mb-2">Match Time</label>
                    <input type="time" id="matchTime" name="matchTime" value="15:00" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="venue" class="block text-gray-700 text-sm font-bold mb-2">Venue</label>
                    <input type="text" id="venue" name="venue" value="City Stadium" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status</label>
                    <select id="status" name="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="scheduled">Scheduled</option>
                        <option value="in-progress">In Progress</option>
                        <option value="completed" selected>Completed</option>
                    </select>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Save Changes
                    </button>
                    <a href="matches-page.html" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                        Cancel and Return to Matches
                    </a>
                </div>
            </form>
        </div>

        <!-- Match Events Section -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-bold mb-4">Match Events</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-left">Time</th>
                        <th class="py-2 px-4 border-b text-left">Team</th>
                        <th class="py-2 px-4 border-b text-left">Player</th>
                        <th class="py-2 px-4 border-b text-left">Event</th>
                        <th class="py-2 px-4 border-b text-left">Details</th>
                        <th class="py-2 px-4 border-b text-left">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b">15'</td>
                        <td class="py-2 px-4 border-b">Red Dragons FC</td>
                        <td class="py-2 px-4 border-b">John Smith</td>
                        <td class="py-2 px-4 border-b">Goal</td>
                        <td class="py-2 px-4 border-b">Assisted by Mike Johnson</td>
                        <td class="py-2 px-4 border-b">
                            <button class="text-blue-500 hover:text-blue-700 mr-2">Edit</button>
                            <button class="text-red-500 hover:text-red-700">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b">32'</td>
                        <td class="py-2 px-4 border-b">Blue Sharks United</td>
                        <td class="py-2 px-4 border-b">Alex Brown</td>
                        <td class="py-2 px-4 border-b">Yellow Card</td>
                        <td class="py-2 px-4 border-b">Unsporting behavior</td>
                        <td class="py-2 px-4 border-b">
                            <button class="text-blue-500 hover:text-blue-700 mr-2">Edit</button>
                            <button class="text-red-500 hover:text-red-700">Delete</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" onclick="openAddEventModal()">
                    Add Event
                </button>
            </div>
        </div>

        <!-- Match Statistics Section -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Match Statistics</h2>
            <div class="grid grid-cols-3 gap-4">
                <div class="text-center">
                    <h3 class="font-bold">Red Dragons FC</h3>
                    <p>2</p>
                </div>
                <div class="text-center">
                    <h3 class="font-bold">Score</h3>
                    <p>2 - 1</p>
                </div>
                <div class="text-center">
                    <h3 class="font-bold">Blue Sharks United</h3>
                    <p>1</p>
                </div>
            </div>
            <div class="mt-4 grid grid-cols-3 gap-4">
                <div class="text-center">
                    <p>55%</p>
                </div>
                <div class="text-center">
                    <h3 class="font-bold">Possession</h3>
                </div>
                <div class="text-center">
                    <p>45%</p>
                </div>
            </div>
            <div class="mt-4 grid grid-cols-3 gap-4">
                <div class="text-center">
                    <p>12</p>
                </div>
                <div class="text-center">
                    <h3 class="font-bold">Shots</h3>
                </div>
                <div class="text-center">
                    <p>8</p>
                </div>
            </div>
            <div class="mt-4 grid grid-cols-3 gap-4">
                <div class="text-center">
                    <p>5</p>
                </div>
                <div class="text-center">
                    <h3 class="font-bold">Corners</h3>
                </div>
                <div class="text-center">
                    <p>3</p>
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

<!-- Add Event Modal -->
<div id="addEventModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                    Add Match Event
                </h3>
                <div class="mt-2">
                    <form id="addEventForm">
                        <div class="mb-4">
                            <label for="eventTime" class="block text-gray-700 text-sm font-bold mb-2">Time (minutes)</label>
                            <input type="number" id="eventTime" name="eventTime" min="0" max="120" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="eventTeam" class="block text-gray-700 text-sm font-bold mb-2">Team</label>
                            <select id="eventTeam" name="eventTeam" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                <option value="red-dragons">Red Dragons FC</option>
                                <option value="blue-sharks">Blue Sharks United</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="eventPlayer" class="block text-gray-700 text-sm font-bold mb-2">Player</label>
                            <input type="text" id="eventPlayer" name="eventPlayer" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="eventType" class="block text-gray-700 text-sm font-bold mb-2">Event Type</label>
                            <select id="eventType" name="eventType" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required onchange="toggleEventDetails()">
                                <option value="">Select Event Type</option>
                                <option value="goal">Goal</option>
                                <option value="yellow-card">Yellow Card</option>
                                <option value="red-card">Red Card</option>
                                <option value="substitution">Substitution</option>
                                <option value="injury">Injury</option>
                                <option value="penalty">Penalty</option>
                                <option value="own-goal">Own Goal</option>
                            </select>
                        </div>
                        <div id="goalDetails" class="mb-4 hidden">
                            <label for="goalType" class="block text-gray-700 text-sm font-bold mb-2">Goal Type</label>
                            <select id="goalType" name="goalType" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="normal">Normal Goal</option>
                                <option value="penalty">Penalty Goal</option>
                                <option value="free-kick">Free Kick Goal</option>
                                <option value="header">Header Goal</option>
                            </select>
                            <div id="assistDetails" class="mt-2">
                                <label for="assist" class="block text-gray-700 text-sm font-bold mb-2">Assisted By</label>
                                <input type="text" id="assist" name="assist" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>
                        <div id="cardDetails" class="mb-4 hidden">
                            <label for="cardReason" class="block text-gray-700 text-sm font-bold mb-2">Reason</label>
                            <input type="text" id="cardReason" name="cardReason" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div id="substitutionDetails" class="mb-4 hidden">
                            <label for="playerIn" class="block text-gray-700 text-sm font-bold mb-2">Player In</label>
                            <input type="text" id="playerIn" name="playerIn" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div id="injuryDetails" class="mb-4 hidden">
                            <label for="injuryType" class="block text-gray-700 text-sm font-bold mb-2">Injury Type</label>
                            <input type="text" id="injuryType" name="injuryType" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm" onclick="addEvent()">
                    Add Event
                </button>
                <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" onclick="closeAddEventModal()">
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
    document.getElementById('editMatchForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Here you would typically send the form data to your backend
        // For now, we'll just show an alert
        alert('Match updated successfully!');
    });

    // Add Event Modal functions
    function openAddEventModal() {
        document.getElementById('addEventModal').classList.remove('hidden');
    }

    function closeAddEventModal() {
        document.getElementById('addEventModal').classList.add('hidden');
    }

    function toggleEventDetails() {
        const eventType = document.getElementById('eventType').value;
        document.getElementById('goalDetails').classList.add('hidden');
        document.getElementById('cardDetails').classList.add('hidden');
        document.getElementById('substitutionDetails').classList.add('hidden');
        document.getElementById('injuryDetails').classList.add('hidden');

        if (eventType === 'goal') {
            document.getElementById('goalDetails').classList.remove('hidden');
        } else if (eventType === 'yellow-card' || eventType === 'red-card') {
            document.getElementById('cardDetails').classList.remove('hidden');
        } else if (eventType === 'substitution') {
            document.getElementById('substitutionDetails').classList.remove('hidden');
        } else if (eventType === 'injury') {
            document.getElementById('injuryDetails').classList.remove('hidden');
        }
    }

    function addEvent() {
        // Here you would typically send the form data to your backend
        // For now, we'll just close the modal and show an alert
        closeAddEventModal();
        alert('Event added successfully!');
    }
</script>
</body>
</html>
