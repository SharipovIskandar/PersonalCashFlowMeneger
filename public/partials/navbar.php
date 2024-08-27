<?php
// Hozirgi sahifani olish
$current_page = basename($_SERVER['REQUEST_URI']);
?>

<style>
    .dropdown-item:hover {
        background-color: #f0f4f8;
    }
    .nav-link.active {
        color: #ffffff; /* Oq rang */
        background-color: #4a5568; /* Kul rang */
        border-radius: 0.375rem; /* Burchaklarni yumshatish */
        font-weight: bold;
        padding: 0.5rem 1rem; /* Yangi orqa fon o'lchami */
        border: 2px solid #ffffff; /* Yangi chegara o'lchami va rangi */
    }
</style>

<nav class="bg-gray-800 shadow-md">
    <div class="container mx-auto flex justify-between items-center p-4">
        <!-- Logo yoki Sahifa nomi -->
        <a href="/" class="text-2xl font-bold text-yellow-400 hover:text-yellow-300 transition duration-300 flex items-center <?= ($current_page == '' || $current_page == 'index.php') ? 'nav-link active' : '' ?>">
            <i class="fas fa-home text-2xl mr-2"></i> Home
        </a>

        <!-- Nav Links -->
        <ul class="flex space-x-6">
            <li>
                <a href="/inc/exp" class="text-lg font-semibold text-white hover:text-yellow-300 transition duration-300 flex items-center <?= ($current_page == 'exp' || $current_page == 'inc/exp.php') ? 'nav-link active' : '' ?>">
                    <i class="fas fa-dollar-sign mr-1"></i> Daromad va Xarajatlar
                </a>
            </li>
            <li>
                <a href="/budget/planning" class="text-lg font-semibold text-white hover:text-yellow-300 transition duration-300 flex items-center <?= ($current_page == 'planning' || $current_page == 'budget/planning.php') ? 'nav-link active' : '' ?>">
                    <i class="fas fa-calendar-alt mr-1"></i> Budjet Rejalashtirish
                </a>
            </li>
            <li>
                <a href="/set/goal" class="text-lg font-semibold text-white hover:text-yellow-300 transition duration-300 flex items-center <?= ($current_page == 'goal' || $current_page == 'set/goal.php') ? 'nav-link active' : '' ?>">
                    <i class="fas fa-bullseye mr-1"></i> Maqsadlar Belgilash
                </a>
            </li>
            <li>
                <a href="/summary" class="text-lg font-semibold text-white hover:text-yellow-300 transition duration-300 flex items-center <?= ($current_page == 'summary' || $current_page == 'summary.php') ? 'nav-link active' : '' ?>">
                    <i class="fas fa-chart-line mr-1"></i> Natijalarni Ko'rish
                </a>
            </li>
        </ul>

        <!-- Auth Links -->
        <?php if(!$_SESSION['user']):?>
            <div class="flex space-x-4">
                <a href="/signup" class="text-lg font-semibold text-white hover:text-yellow-300 transition duration-300 flex items-center <?= ($current_page == 'signup' || $current_page == 'signup.php') ? 'nav-link active' : '' ?>">
                    <i class="fas fa-user-plus mr-1"></i> Ro'yxatdan O'tish
                </a>
                <a href="/login" class="text-lg font-semibold text-white hover:text-yellow-300 transition duration-300 flex items-center <?= ($current_page == 'login' || $current_page == 'login.php') ? 'nav-link active' : '' ?>">
                    <i class="fas fa-sign-in-alt mr-1"></i> Kirish
                </a>
            </div>
        <?php endif;?>

        <!-- Profile Dropdown -->
        <?php if($_SESSION['user']): ?>
            <div class="relative inline-block text-left">
                <div>
                    <button onclick="toggleDropdown()" class="inline-flex justify-center w-full rounded-md border border-gray-600 shadow-sm px-4 py-2 bg-gray-700 text-sm font-medium text-white hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        <i class="fas fa-user mr-2"></i> Profil
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02l2.72 2.72 2.72-2.72a.75.75 0 011.08 1.08L9.56 10l3.26 3.26a.75.75 0 11-1.06 1.06l-2.72-2.72-2.72 2.72a.75.75 0 11-1.08-1.08L7.94 10 4.68 6.74a.75.75 0 01-.02-1.06z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                </div>

                <div id="dropdownMenu" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-gray-700 ring-1 ring-black ring-opacity-5 hidden">
                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <a href="/profile" class="block px-4 py-2 text-sm text-white dropdown-item" role="menuitem" tabindex="-1" id="menu-item-0"><i class="fas fa-user-circle mr-2"></i> Profil</a>
                        <a href="/settings" class="block px-4 py-2 text-sm text-white dropdown-item" role="menuitem" tabindex="-1" id="menu-item-1"><i class="fas fa-cog mr-2"></i> Sozlamalar</a>
                        <a href="/logout" class="block px-4 py-2 text-sm text-white dropdown-item" role="menuitem" tabindex="-1" id="menu-item-2"><i class="fas fa-sign-out-alt mr-2"></i> Chiqish</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</nav>

<script>
    function toggleDropdown() {
        var menu = document.getElementById('dropdownMenu');
        menu.classList.toggle('hidden');
    }
</script>
