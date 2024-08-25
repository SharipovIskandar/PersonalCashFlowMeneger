<?php
loadPartials('header');
loadPartials('navbar');
?>

<main class="container mx-auto p-5">
    <section class="text-center my-10">
        <h2 class="text-4xl font-bold text-gray-900 leading-tight">
            Dashboard
        </h2>
        <p class="text-gray-700 mt-4 text-lg">
            Foydalanuvchi shaxsiy moliyaviy holatini kuzatish va boshqarish uchun.
        </p>
    </section>

    <!-- Dashboard Cards -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
        <!-- Income & Expenses Card -->
        <a href="/inc/exp" class="bg-gradient-to-r from-green-400 to-blue-500 text-white p-8 rounded-lg shadow-xl transform hover:scale-105 transition duration-300">
            <div class="flex items-center mb-4">
                <i class="fas fa-wallet text-4xl mr-4"></i>
                <h3 class="text-2xl font-semibold">Daromad va Xarajatlar</h3>
            </div>
            <p class="text-white text-base">
                Daromadlar: <span class="font-bold">₮</span>
            </p>
            <p class="text-white text-base">
                Xarajatlar: <span class="font-bold">₮</span>
            </p>
        </a>

        <!-- Budget Planning Card -->
        <a href="/budget/planning" class="bg-gradient-to-r from-purple-400 to-pink-500 text-white p-8 rounded-lg shadow-xl transform hover:scale-105 transition duration-300">
            <div class="flex items-center mb-4">
                <i class="fas fa-chart-line text-4xl mr-4"></i>
                <h3 class="text-2xl font-semibold">Budjet Rejalashtirish</h3>
            </div>
            <p class="text-white text-base">
                Joriy oy budjeti: <span class="font-bold">₮</span>
            </p>
            <p class="text-white text-base">
                Xarajatlar: <span class="font-bold">₮</span>
            </p>
        </a>

        <!-- Goal Setting Card -->
        <a href="/set/goal" class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white p-8 rounded-lg shadow-xl transform hover:scale-105 transition duration-300">
            <div class="flex items-center mb-4">
                <i class="fas fa-bullseye text-4xl mr-4"></i>
                <h3 class="text-2xl font-semibold">Maqsadlar Belgilash</h3>
            </div>
            <p class="text-white text-base">
                Belgilangan maqsadlar soni: <span class="font-bold"></span>
            </p>
            <p class="text-white text-base">
                Yutuqlarga erishilgan foiz: <span class="font-bold">%</span>
            </p>
        </a>
    </section>

    <!-- Analytics Section -->
    <section class="mt-16">
        <h3 class="text-3xl font-semibold text-gray-900 leading-tight">Analitika</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
            <!-- Income vs Expenses Chart -->
            <div class="bg-white p-8 rounded-lg shadow-xl">
                <h4 class="text-xl font-semibold text-gray-800 mb-4">Daromadlar va Xarajatlar Grafikasi</h4>
                <!-- Progress Bars -->
                <div class="flex flex-col gap-4">
                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Daromadlar</span>
                        <span class="font-bold text-gray-900">₮</span>
                    </div>
                    <div class="relative h-6 bg-gray-200 rounded-full">
                        <div class="absolute top-0 left-0 h-full bg-green-500 rounded-full" style="width:%;"></div>
                        <span class="absolute inset-0 flex items-center justify-center text-white text-xs font-medium" style="width:"></span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Xarajatlar</span>
                        <span class="font-bold text-gray-900">₮</span>
                    </div>
                    <div class="relative h-6 bg-gray-200 rounded-full">
                        <div class="absolute top-0 left-0 h-full bg-red-500 rounded-full" style="width:"></div>
                        <span></span>
                    </div>
                </div>
            </div>

            <!-- Budget Usage Chart -->
            <div class="">
                <h4 class="text-xl font-semibold text-gray-800 mb-4">Budjetdan Foydalanish Grafikasi</h4>
                <!-- Donut Chart -->
                <div class="relative flex items-center justify-center h-40 w-40">
                    <svg class="absolute" viewBox="0 0 32 32" width="100%" height="100%">
                        <circle cx="16" cy="16" r="14" stroke="#e2e8f0" stroke-width="4" fill="none"></circle>
                        <circle cx="16" cy="16" r="14" stroke="#4caf50" stroke-width="4" fill="none" stroke-dasharray=" " stroke-dashoffset="25"></circle>
                    </svg>
                    <span class="text-xl font-semibold text-gray-800"></span>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
loadPartials('footer');
?>
