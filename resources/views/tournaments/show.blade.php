<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGoFoot - Tournament Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="min-h-screen flex flex-col">
    <!-- Navbar (same as in tournament-search.html) -->
    <nav class="bg-green-600 text-white shadow-lg">
        <!-- ... (navbar content) ... -->
    </nav>

    <!-- Main Content -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Summer Youth Cup 2023</h1>

        <!-- Tournament Details -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h2 class="text-2xl font-bold mb-4">Tournament Information</h2>
                    <p class="mb-2"><strong>Location:</strong> New York, USA</p>
                    <p class="mb-2"><strong>Dates:</strong> July 15 - July 30, 2023</p>
                    <p class="mb-2"><strong>Age Group:</strong> Under 15</p>
                    <p class="mb-2"><strong>Number of Teams:</strong> 16</p>
                    <p class="mb-2"><strong>Format:</strong> Group Stage + Knockout</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold mb-4">Description</h2>
                    <p class="text-gray-700">
                        The Summer Youth Cup 2023 is an exciting international tournament for under-15 teams.
                        It brings together talented young players from around the world to compete in a
                        challenging and rewarding environment. The tournament features a group stage followed by knockout rounds, ensuring intense competition throughout the event.
                    </p>
                </div>
            </div>
        </div>

        <!-- Standings Table -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-bold mb-4">Tournament Standings</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Pos</th>
                        <th class="py-3 px-6 text-left">Team</th>
                        <th class="py-3 px-6 text-center">Played</th>
                        <th class="py-3 px-6 text-center">Won</th>
                        <th class="py-3 px-6 text-center">Drawn</th>
                        <th class="py-3 px-6 text-center">Lost</th>
                        <th class="py-3 px-6 text-center">GF</th>
                        <th class="py-3 px-6 text-center">GA</th>
                        <th class="py-3 px-6 text-center">GD</th>
                        <th class="py-3 px-6 text-center">Points</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">1</td>
                        <td class="py-3 px-6 text-left">
                            <div class="flex items-center">
                                <div class="mr-2">
                                    <img class="w-6 h-6" src="https://via.placeholder.com/30" alt="Team Logo">
                                </div>
                                <span>New York Juniors</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">5</td>
                        <td class="py-3 px-6 text-center">4</td>
                        <td class="py-3 px-6 text-center">1</td>
                        <td class="py-3 px-6 text-center">0</td>
                        <td class="py-3 px-6 text-center">12</td>
                        <td class="py-3 px-6 text-center">3</td>
                        <td class="py-3 px-6 text-center">9</td>
                        <td class="py-3 px-6 text-center">13</td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">2</td>
                        <td class="py-3 px-6 text-left">
                            <div class="flex items-center">
                                <div class="mr-2">
                                    <img class="w-6 h-6" src="https://via.placeholder.com/30" alt="Team Logo">
                                </div>
                                <span>LA Galaxy Youth</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">5</td>
                        <td class="py-3 px-6 text-center">4</td>
                        <td class="py-3 px-6 text-center">0</td>
                        <td class="py-3 px-6 text-center">1</td>
                        <td class="py-3 px-6 text-center">10</td>
                        <td class="py-3 px-6 text-center">4</td>
                        <td class="py-3 px-6 text-center">6</td>
                        <td class="py-3 px-6 text-center">12</td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">3</td>
                        <td class="py-3 px-6 text-left">
                            <div class="flex items-center">
                                <div class="mr-2">
                                    <img class="w-6 h-6" src="https://via.placeholder.com/30" alt="Team Logo">
                                </div>
                                <span>Chicago Fire Academy</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">5</td>
                        <td class="py-3 px-6 text-center">3</td>
                        <td class="py-3 px-6 text-center">1</td>
                        <td class="py-3 px-6 text-center">1</td>
                        <td class="py-3 px-6 text-center">8</td>
                        <td class="py-3 px-6 text-center">5</td>
                        <td class="py-3 px-6 text-center">3</td>
                        <td class="py-3 px-6 text-center">10</td>
                    </tr>
                    <!-- Add more rows for other teams -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Upcoming Matches -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-bold mb-4">Upcoming Matches</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between bg-gray-100 p-4 rounded-lg">
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/30" alt="Team A Logo" class="w-8 h-8 mr-2">
                        <span>New York Juniors</span>
                    </div>
                    <div class="text-center">
                        <span class="font-bold">vs</span>
                        <p class="text-sm text-gray-500">July 20, 2023 - 15:00</p>
                    </div>
                    <div class="flex items-center">
                        <span>LA Galaxy Youth</span>
                        <img src="https://via.placeholder.com/30" alt="Team B Logo" class="w-8 h-8 ml-2">
                    </div>
                </div>
                <div class="flex items-center justify-between bg-gray-100 p-4 rounded-lg">
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/30" alt="Team C Logo" class="w-8 h-8 mr-2">
                        <span>Chicago Fire Academy</span>
                    </div>
                    <div class="text-center">
                        <span class="font-bold">vs</span>
                        <p class="text-sm text-gray-500">July 21, 2023 - 14:00</p>
                    </div>
                    <div class="flex items-center">
                        <span>Seattle Sounders Jr.</span>
                        <img src="https://via.placeholder.com/30" alt="Team D Logo" class="w-8 h-8 ml-2">
                    </div>
                </div>
            </div>
        </div>

        <!-- Follow Tournament Button -->
        <div class="text-center">
            <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Follow Tournament
            </button>
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

    // Follow Tournament button functionality
    document.querySelector('button').addEventListener('click', function() {
        alert('You are now following this tournament!');
    });
</script>
</body>
</html>
