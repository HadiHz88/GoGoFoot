<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGoFoot - Player Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="min-h-screen flex flex-col">
    <!-- Navbar (same as in player-search.html) -->
    <nav class="bg-green-600 text-white shadow-lg">
        <!-- ... (navbar content) ... -->
    </nav>

    <!-- Main Content -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Player Details</h1>

        <!-- Player Information -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/3 mb-4 md:mb-0">
                    <img src="https://via.placeholder.com/300" alt="John Doe" class="w-full rounded-lg">
                </div>
                <div class="md:w-2/3 md:pl-8">
                    <h2 class="text-2xl font-bold mb-4">John Doe</h2>
                    <p class="mb-2"><strong>Age:</strong> 22</p>
                    <p class="mb-2"><strong>Position:</strong> Midfielder</p>
                    <p class="mb-2"><strong>Nationality:</strong> United States</p>
                    <p class="mb-4"><strong>Height:</strong> 180 cm</p>

                    <h3 class="text-xl font-bold mb-2">Registered Teams</h3>
                    <ul class="list-disc list-inside mb-4">
                        <li>New York Juniors</li>
                        <li>USA U23</li>
                    </ul>

                    <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-block">Follow Player</a>
                </div>
            </div>
        </div>

        <!-- Player Stats -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-bold mb-4">All-Time Stats</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Stat</th>
                        <th class="py-3 px-6 text-center">Value</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">Matches Played</td>
                        <td class="py-3 px-6 text-center">150</td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">Goals</td>
                        <td class="py-3 px-6 text-center">45</td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">Assists</td>
                        <td class="py-3 px-6 text-center">30</td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">Yellow Cards</td>
                        <td class="py-3 px-6 text-center">12</td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">Red Cards</td>
                        <td class="py-3 px-6 text-center">1</td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">Minutes Played</td>
                        <td class="py-3 px-6 text-center">12,500</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Recent Performances -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Recent Performances</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between bg-gray-100 p-4 rounded-lg">
                    <div>
                        <p class="font-bold">New York Juniors vs LA Galaxy Youth</p>
                        <p class="text-sm text-gray-500">July 15, 2023</p>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-green-600">1 Goal, 1 Assist</p>
                        <p class="text-sm text-gray-500">90 minutes played</p>
                    </div>
                </div>
                <div class="flex items-center justify-between bg-gray-100 p-4 rounded-lg">
                    <div>
                        <p class="font-bold">USA U23 vs Canada U23</p>
                        <p class="text-sm text-gray-500">July 10, 2023</p>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-green-600">2 Assists</p>
                        <p class="text-sm text-gray-500">85 minutes played</p>
                    </div>
                </div>
                <div class="flex items-center justify-between bg-gray-100 p-4 rounded-lg">
                    <div>
                        <p class="font-bold">New York Juniors vs Chicago Fire Academy</p>
                        <p class="text-sm text-gray-500">July 5, 2023</p>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-yellow-600">Yellow Card</p>
                        <p class="text-sm text-gray-500">90 minutes played</p>
                    </div>
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

    // Follow Player button functionality
    document.querySelector('a[href="#"]').addEventListener('click', function(e) {
        e.preventDefault();
        alert('You are now following this player!');
    });
</script>
</body>
</html>
