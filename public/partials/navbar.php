<nav class="bg-white shadow-lg">
    <div class="container mx-auto flex justify-between items-center p-4">
        <!-- Logo yoki Sahifa nomi -->
        <a href="/" class="text-2xl font-bold text-blue-600 hover:text-blue-800 transition duration-300">
            <i class="fas fa-home"></i> Home
        </a>

        <!-- Nav Links -->
        <ul class="flex space-x-6 text-gray-800">
            <li><a href="/inc/exp" class="hover:text-blue-600 transition duration-300">Daromad va Xarajatlar</a></li>
            <li><a href="/budget/planning" class="hover:text-blue-600 transition duration-300">Budjet Rejalashtirish</a></li>
            <li><a href="/set/goal" class="hover:text-blue-600 transition duration-300">Maqsadlar Belgilash</a></li>
            <li><a href="/summary" class="hover:text-blue-600 transition duration-300">Natijalarni Ko'rish</a></li>
        </ul>

        <!-- Profil linki va Dropdown -->
        <div class="relative dropdown">
            <button class="text-gray-800 hover:text-blue-600 transition duration-300 flex items-center space-x-2">
                <span>Profil</span>
                <i class="fas fa-caret-down"></i>
            </button>
            <div class="absolute right-0 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg dropdown-menu">
                <a href="/profile" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Profil</a>
                <a href="/settings" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Sozlamalar</a>
                <a href="/logout" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Chiqish</a>
            </div>
        </div>
    </div>
</nav>
