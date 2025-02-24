<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGoFoot - Match Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="min-h-screen flex flex-col">
    <!-- Navbar (same as in match-search.html) -->
    <nav class="bg-green-600 text-white shadow-lg">
        <!-- ... (navbar content) ... -->
    </nav>

    <!-- Main Content -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Match Details</h1>

        <!-- Match Information -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                <div class="text-center md:text-left mb-4 md:mb-0">
                    <h2 class="text-2xl font-bold">New York Juniors vs LA Galaxy Youth</h2>
                    <p class="text-gray-600">Summer Youth Cup 2023</p>
                </div>
                <div class="text-center">
                    <p class="text-lg font-semibold">July 20, 2023 - 15:00</p>
                    <p class="text-green-600 font-semibold">Upcoming</p>
                </div>
            </div>
            <div class="flex justify-center items-center space-x-8">
                <div class="text-center">
                    <img src="https://via.placeholder.com/100" alt="New York Juniors" class="w-24 h-24 mx-auto mb-2">
                    <p class="font-bold">New York Juniors</p>
                </div>
                <div class="text-4xl font-bold">vs</div>
                <div class="text-center">
                    <img src="https://via.placeholder.com/100" alt="LA Galaxy Youth" class="w-24 h-24 mx-auto mb-2">
                    <p class="font-bold">LA Galaxy Youth</p>
                </div>
            </div>
        </div>

        <!-- Match Details -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-bold mb-4">Match Details</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <p><strong>Venue:</strong> Central Stadium, New York</p>
                    <p><strong>Referee:</strong> John Smith</p>
                    <p><strong>Weather:</strong> Partly Cloudy, 22°C</p>
                </div>
                <div>
                    <p><strong>Tournament Stage:</strong> Group Stage</p>
                    <p><strong>Group:</strong> A</p>
                    <p><strong>Matchday:</strong> 3 of 5</p>
                </div>
            </div>
        </div>

        <!-- Team Lineups -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-bold mb-4">Team Lineups</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-2">New York Juniors</h3>
                    <ul class="list-disc list-inside">
                        <li>John Doe (GK)</li>
                        <li>Mike Johnson</li>
                        <li>Sarah Williams</li>
                        <li>Tom Brown</li>
                        <li>Emily Davis</li>
                        <!-- Add more players as needed -->
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">LA Galaxy Youth</h3>
                    <ul class="list-disc list-inside">
                        <li>Alex Smith (GK)</li>
                        <li>Chris Lee</li>
                        <li>Jessica Taylor</li>
                        <li>Ryan Wilson</li>
                        <li>Olivia Martin</li>
                        <!-- Add more players as needed -->
                    </ul>
                </div>
            </div>
        </div>

        <!-- Match Statistics (for completed matches) -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-bold mb-4">Match Statistics</h2>
            <p class="text-center text-gray-600 mb-4">Statistics will be available after the match is completed.</p>
        </div>

        <!-- Match Commentary -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Live Commentary</h2>
            <p class="text-center text-gray-600 mb-4">Live commentary will be available once the match starts.</p>
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
</script>
</body>
</html>
