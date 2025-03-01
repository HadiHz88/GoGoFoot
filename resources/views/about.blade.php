<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGoFoot - Overall Statistics</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                        <a href="#" class="py-5 px-3 text-white hover:text-green-200 border-b-2 border-white">Statistics</a>
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
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Statistics</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-green-700">Search</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Overall Statistics</h1>

        <!-- Key Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Total Tournaments</h2>
                <p class="text-4xl font-bold text-green-600">127</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Total Matches</h2>
                <p class="text-4xl font-bold text-green-600">3,542</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Total Players</h2>
                <p class="text-4xl font-bold text-green-600">12,789</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Total Goals</h2>
                <p class="text-4xl font-bold text-green-600">9,876</p>
            </div>
        </div>

        <!-- Charts -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Tournaments by Year Chart -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4">Tournaments by Year</h2>
                <canvas id="tournamentsByYearChart"></canvas>
            </div>
            <!-- Top Goal Scorers Chart -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4">Top Goal Scorers</h2>
                <canvas id="topGoalScorersChart"></canvas>
            </div>
        </div>

        <!-- Additional Statistics -->
        <div class="mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4">Additional Statistics</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div>
                    <h3 class="font-semibold">Average Goals per Match</h3>
                    <p class="text-2xl font-bold text-green-600">2.79</p>
                </div>
                <div>
                    <h3 class="font-semibold">Total Red Cards</h3>
                    <p class="text-2xl font-bold text-red-600">231</p>
                </div>
                <div>
                    <h3 class="font-semibold">Total Yellow Cards</h3>
                    <p class="text-2xl font-bold text-yellow-600">1,876</p>
                </div>
                <div>
                    <h3 class="font-semibold">Most Goals in a Match</h3>
                    <p class="text-2xl font-bold text-green-600">12</p>
                </div>
                <div>
                    <h3 class="font-semibold">Longest Winning Streak</h3>
                    <p class="text-2xl font-bold text-green-600">15 matches</p>
                </div>
                <div>
                    <h3 class="font-semibold">Total Playing Time</h3>
                    <p class="text-2xl font-bold text-green-600">5,313 hours</p>
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

<script>
    // Mobile menu toggle
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });

    // Charts
    const tournamentsByYearCtx = document.getElementById('tournamentsByYearChart').getContext('2d');
    new Chart(tournamentsByYearCtx, {
        type: 'line',
        data: {
            labels: ['2018', '2019', '2020', '2021', '2022', '2023'],
            datasets: [{
                label: 'Number of Tournaments',
                data: [15, 21, 18, 24, 29, 32],
                borderColor: 'rgb(34, 197, 94)',
                tension: 0.1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const topGoalScorersCtx = document.getElementById('topGoalScorersChart').getContext('2d');
    new Chart(topGoalScorersCtx, {
        type: 'bar',
        data: {
            labels: ['John Doe', 'Jane Smith', 'Mike Johnson', 'Sarah Williams', 'Tom Brown'],
            datasets: [{
                label: 'Goals Scored',
                data: [45, 38, 35, 31, 28],
                backgroundColor: 'rgba(34, 197, 94, 0.6)',
                borderColor: 'rgb(34, 197, 94)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>
</html>
