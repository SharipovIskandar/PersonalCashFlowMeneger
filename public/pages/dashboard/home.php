<?php
loadPartials('header');
loadPartials('navbar');
/**
 * @var $incomes
 * @var $expenses
 */

?>

<main class="container mx-auto p-5">
    <section class="text-center my-10">
        <h2 class="text-5xl font-bold text-gray-900 leading-tight">
            Dashboard
        </h2>
        <?php if(!$_SESSION['user']['email']): ?>
        <p class="text-red-700 mt-4 text-xl">
            Web sahifani to'liq ishlatmoqchi bo'lsangiz Ro'yxatdan oting yoki Kirish tugmasi orqali kiring !
        </p>
        <?php endif; ?>
        <p class="text-gray-700 mt-4 text-xl">
            Moliyaviy maqsadlaringizga erishish uchun barcha zarur vositalar bir joyda.
        </p>
    </section>

    <!-- Dashboard Cards -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
        <!-- Income & Expenses Card -->
        <a href="/inc/exp" class="bg-gradient-to-r from-green-400 to-blue-500 text-white p-8 rounded-lg shadow-xl transform hover:scale-105 transition duration-300">
            <div class="flex items-center mb-4">
                <i class="fas fa-wallet text-5xl mr-4"></i>
                <h3 class="text-3xl font-semibold">Daromad va Xarajatlar</h3>
            </div>
            <p class="text-white text-lg mb-4">
                🏦 Daromadlar va xarajatlaringizni bir joyda kuzatib boring. Biz sizga o'z moliyaviy holatingizni to'liq nazorat qilish imkoniyatini taqdim etamiz.
            </p>
            <p class="text-white text-lg mb-4">
                💰 Jami Daromadlar: <span class="font-bold"><?= number_format($incomes['total_amount_inc'], 0, '', ' ') ?> UZS</span>
            </p>
            <p class="text-white text-lg">
                📉 Jami Xarajatlar: <span class="font-bold"><?= number_format($expenses['total_amount_exp'], 0, '', ' ') ?> UZS</span>
            </p>
        </a>

        <!-- Budget Planning Card -->
        <a href="/budget/planning" class="bg-gradient-to-r from-purple-400 to-pink-500 text-white p-8 rounded-lg shadow-xl transform hover:scale-105 transition duration-300">
            <div class="flex items-center mb-4">
                <i class="fas fa-chart-line text-5xl mr-4"></i>
                <h3 class="text-3xl font-semibold">Budjet Rejalashtirish</h3>
            </div>
            <p class="text-white text-lg mb-4">
                📅 Oylik budjetingizni rejalashtiring va xarajatlarni samarali boshqaring. Sizni moliyaviy maqsadlaringizga erishishga yaqinlashtiradigan barcha vositalar mavjud.
            </p>
            <p class="text-white text-lg mb-4">
                💵 Joriy oy budjeti: <span class="font-bold">UZS</span>
            </p>
            <p class="text-white text-lg">
                📈 Xarajatlar: <span class="font-bold">UZS</span>
            </p>
        </a>

        <!-- Goal Setting Card -->
        <a href="/set/goal" class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white p-8 rounded-lg shadow-xl transform hover:scale-105 transition duration-300">
            <div class="flex items-center mb-4">
                <i class="fas fa-bullseye text-5xl mr-4"></i>
                <h3 class="text-3xl font-semibold">Maqsadlar Belgilash</h3>
            </div>
            <p class="text-white text-lg mb-4">
                🎯 O'z maqsadlaringizni belgilash va ularga erishish jarayonini nazorat qilish. Har bir maqsadga erishish yo'lida sizga yordam beramiz.
            </p>
            <p class="text-white text-lg mb-4">
                🎯 Belgilangan maqsadlar soni: <span class="font-bold"></span>
            </p>
            <p class="text-white text-lg">
                🏆 Yutuqlarga erishilgan foiz: <span class="font-bold">%</span>
            </p>
        </a>
    </section>

    <!-- Analytics Section -->
</main>

<?php
loadPartials('footer');
?>
