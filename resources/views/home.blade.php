<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGoFoot - Your Football Tournament Hub</title>
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
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200">Players</a>
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200">Matches</a>
                    </div>
                </div>
                <!-- Secondary Nav -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="#" class="py-5 px-3">
                        <i class="fas fa-search mr-1"></i> Search
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
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Players</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Matches</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Search</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <!-- Hero Section -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="md:flex">
                <div class="md:flex-shrink-0">
                    <img class="h-48 w-full object-cover md:w-48" src="https://source.unsplash.com/random/800x600?football+fan" alt="Football Fan">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-green-500 font-semibold">Welcome to GoGoFoot</div>
                    <h1 class="block mt-1 text-lg leading-tight font-medium text-black">Your Ultimate Football Tournament Hub</h1>
                    <p class="mt-2 text-gray-500">Stay updated with the latest tournaments, player stats, and match results. Experience the thrill of football like never before!</p>
                </div>
            </div>
        </div>

        <!-- Featured Sections -->
        <div class="grid md:grid-cols-3 gap-8 mb-8">
            <!-- Tournaments -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img class="h-48 w-full object-cover" src="https://source.unsplash.com/random/800x600?football+tournament" alt="Football Tournament">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">Tournaments</h2>
                    <p class="text-gray-600">Explore ongoing and upcoming football tournaments from around the world.</p>
                    <a href="#" class="mt-4 inline-block bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">View Tournaments</a>
                </div>
            </div>
            <!-- Players -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img class="h-48 w-full object-cover" src="https://source.unsplash.com/random/800x600?football+player" alt="Football Player">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">Players</h2>
                    <p class="text-gray-600">Discover talented football players and their impressive statistics.</p>
                    <a href="#" class="mt-4 inline-block bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">View Players</a>
                </div>
            </div>
            <!-- Matches -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img class="h-48 w-full object-cover" src="https://source.unsplash.com/random/800x600?football+match" alt="Football Match">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">Matches</h2>
                    <p class="text-gray-600">Get live updates and results from exciting football matches.</p>
                    <a href="#" class="mt-4 inline-block bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">View Matches</a>
                </div>
            </div>
        </div>

        <!-- Sample Tournament Standing -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-2xl font-semibold mb-4">Sample Tournament Standing</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Pos</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Team</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Played</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Won</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Drawn</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Lost</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Points</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-700">
                        <tr>
                            <td class="py-3 px-4">1</td>
                            <td class="py-3 px-4">Team A</td>
                            <td class="py-3 px-4">10</td>
                            <td class="py-3 px-4">8</td>
                            <td class="py-3 px-4">1</td>
                            <td class="py-3 px-4">1</td>
                            <td class="py-3 px-4">25</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="py-3 px-4">2</td>
                            <td class="py-3 px-4">Team B</td>
                            <td class="py-3 px-4">10</td>
                            <td class="py-3 px-4">7</td>
                            <td class="py-3 px-4">2</td>
                            <td class="py-3 px-4">1</td>
                            <td class="py-3 px-4">23</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4">3</td>
                            <td class="py-3 px-4">Team C</td>
                            <td class="py-3 px-4">10</td>
                            <td class="py-3 px-4">6</td>
                            <td class="py-3 px-4">2</td>
                            <td class="py-3 px-4">2</td>
                            <td class="py-3 px-4">20</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="py-3 px-4">4</td>
                            <td class="py-3 px-4">Team D</td>
                            <td class="py-3 px-4">10</td>
                            <td class="py-3 px-4">5</td>
                            <td class="py-3 px-4">3</td>
                            <td class="py-3 px-4">2</td>
                            <td class="py-3 px-4">18</td>
                        </tr>
                        </tbody>
                    </table>
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
