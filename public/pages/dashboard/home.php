<?php
loadPartials('header');
loadPartials('navbar');
/**
 * @var $incomes
 * @var $expenses
 */
?>

<main class="container mx-auto px-4 py-12">
    <!-- Hero Section -->
    <section class="text-center mb-16">
        <h2 class="text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight tracking-wide animate__animated animate__fadeInDown">
            Dashboard
        </h2>
        <p class="text-xl lg:text-2xl text-gray-700 mt-6 max-w-3xl mx-auto font-light animate__animated animate__fadeInUp">
            Moliyaviy maqsadlaringizga erishish uchun barcha zarur vositalar bir joyda.
            Har bir qaroringizni muvaffaqiyatli qilish uchun biz bu yerda yordam beramiz.
        </p>
    </section>

    <!-- Dashboard Cards -->
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
        <!-- Income & Expenses Card -->
        <a href="/inc/exp" class="relative bg-gradient-to-r from-green-500 via-blue-500 to-purple-500 text-white p-8 rounded-lg shadow-2xl transform hover:scale-105 transition-all duration-500 hover:shadow-3xl animate__animated animate__zoomIn">
            <div class="absolute inset-0 opacity-20 bg-cover bg-center" style="background-image: url('/path/to/money-bg.jpg'); filter: blur(8px);"></div>
            <div class="relative z-10">
                <div class="flex items-center mb-6">
                    <i class="fas fa-wallet text-5xl lg:text-6xl mr-4 animate-spin"></i>
                    <h3 class="text-3xl lg:text-4xl font-semibold">Daromad va Xarajatlar</h3>
                </div>
                <p class="text-lg lg:text-xl mb-6">
                    🏦 Daromadlar va xarajatlaringizni kuzatib boring. Moliyaviy holatingiz ustidan nazoratni qo‘ldan boy bermang.
                </p>
                <p class="text-xl lg:text-2xl font-semibold mb-2">
                    💰 Jami Daromadlar: <span class="font-extrabold"><?= number_format($incomes['total_amount_inc'] ?? 0, 0, '', ' ') ?> UZS</span>
                </p>
                <p class="text-xl lg:text-2xl font-semibold">
                    📉 Jami Xarajatlar: <span class="font-extrabold"><?= number_format($expenses['total_amount_exp'] ?? 0, 0, '', ' ') ?> UZS</span>
                </p>
            </div>
        </a>

        <!-- Budget Planning Card -->
        <a href="/budget/planning" class="relative bg-gradient-to-r from-purple-600 via-pink-500 to-red-500 text-white p-8 rounded-lg shadow-2xl transform hover:scale-105 transition-all duration-500 hover:shadow-3xl animate__animated animate__zoomIn delay-200">
            <div class="absolute inset-0 opacity-20 bg-cover bg-center" style="background-image: url('/path/to/planning-bg.jpg'); filter: blur(8px);"></div>
            <div class="relative z-10">
                <div class="flex items-center mb-6">
                    <i class="fas fa-chart-line text-5xl lg:text-6xl mr-4"></i>
                    <h3 class="text-3xl lg:text-4xl font-semibold">Budjet Rejalashtirish</h3>
                </div>
                <p class="text-lg lg:text-xl mb-6">
                    📅 Oylik budjetingizni rejalashtiring va xarajatlarni samarali boshqaring. Moliyaviy erkinlikka yaqin bo‘ling!
                </p>
                <p class="text-xl lg:text-2xl font-semibold mb-2">
                    💵 Joriy oy budjeti: <span class="font-extrabold"><?= number_format($budget['current_budget'] ?? 0, 0, '', ' ') ?> UZS</span>
                </p>
                <p class="text-xl lg:text-2xl font-semibold">
                    📈 Xarajatlar: <span class="font-extrabold"><?= number_format($budget['expenses'] ?? 0, 0, '', ' ') ?> UZS</span>
                </p>
            </div>
        </a>

        <!-- Goal Setting Card -->
        <a href="/set/goal" class="relative bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 text-white p-8 rounded-lg shadow-2xl transform hover:scale-105 transition-all duration-500 hover:shadow-3xl animate__animated animate__zoomIn delay-400">
            <div class="absolute inset-0 opacity-20 bg-cover bg-center" style="background-image: url('/path/to/goal-bg.jpg'); filter: blur(8px);"></div>
            <div class="relative z-10">
                <div class="flex items-center mb-6">
                    <i class="fas fa-bullseye text-5xl lg:text-6xl mr-4 animate-pulse"></i>
                    <h3 class="text-3xl lg:text-4xl font-semibold">Maqsadlar Belgilash</h3>
                </div>
                <p class="text-lg lg:text-xl mb-6">
                    🎯 O'z maqsadlaringizni belgilang va ularga erishish jarayonini nazorat qiling.
                </p>
                <p class="text-xl lg:text-2xl font-semibold mb-2">
                    🎯 Belgilangan maqsadlar soni: <span class="font-extrabold"><?= $goals['total_goals'] ?? 0 ?></span>
                </p>
                <p class="text-xl lg:text-2xl font-semibold">
                    🏆 Yutuqlarga erishilgan foiz: <span class="font-extrabold"><?= $goals['achieved_percentage'] ?? 0 ?>%</span>
                </p>
            </div>
        </a>
    </section>
</main>

<?php
loadPartials('footer');
?>




