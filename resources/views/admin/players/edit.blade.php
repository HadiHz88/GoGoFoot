<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGoFoot Admin - Edit Player</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="min-h-screen flex flex-col">
    <!-- Navbar (same as in admin-players.html) -->
    <nav class="bg-green-600 text-white shadow-lg">
        <!-- ... (navbar content) ... -->
    </nav>

    <!-- Main Content -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Edit Player</h1>

        <!-- Edit Player Form -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <form id="editPlayerForm" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="playerName" class="block text-gray-700 text-sm font-bold mb-2">Player Name</label>
                        <input type="text" id="playerName" name="playerName" value="John Doe" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div>
                        <label for="playerPosition" class="block text-gray-700 text-sm font-bold mb-2">Position</label>
                        <select id="playerPosition" name="playerPosition" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="forward">Forward</option>
                            <option value="midfielder">Midfielder</option>
                            <option value="defender">Defender</option>
                            <option value="goalkeeper">Goalkeeper</option>
                        </select>
                    </div>
                    <div>
                        <label for="playerTeam" class="block text-gray-700 text-sm font-bold mb-2">Team</label>
                        <input type="text" id="playerTeam" name="playerTeam" value="Team A" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div>
                        <label for="playerAge" class="block text-gray-700 text-sm font-bold mb-2">Age</label>
                        <input type="number" id="playerAge" name="playerAge" value="25" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div>
                        <label for="playerNationality" class="block text-gray-700 text-sm font-bold mb-2">Nationality</label>
                        <input type="text" id="playerNationality" name="playerNationality" value="United States" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div>
                        <label for="playerHeight" class="block text-gray-700 text-sm font-bold mb-2">Height (cm)</label>
                        <input type="number" id="playerHeight" name="playerHeight" value="180" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                </div>
                <div>
                    <label for="playerBio" class="block text-gray-700 text-sm font-bold mb-2">Player Bio</label>
                    <textarea id="playerBio" name="playerBio" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">John Doe is a talented forward known for his speed and goal-scoring ability.</textarea>
                </div>
                <div class="flex justify-end space-x-4">
                    <button type="button" onclick="window.history.back()" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Cancel
                    </button>
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Save Changes
                    </button>
                </div>
            </form>
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
    document.getElementById('editPlayerForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Here you would typically send the form data to your backend to update the player details
        alert('Player update functionality will be implemented in the backend.');
    });
</script>
</body>
</html>
