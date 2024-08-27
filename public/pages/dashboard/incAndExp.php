<?php
loadPartials('header');
loadPartials('navbar');
/**
 * @var $incomes_amount
 * @var $expenses_amount
 * @var $incomes
 * @var $expenses
 */
?>


<main class="container mx-auto p-5">
    <section class="text-center my-10">
        <h2 class="text-4xl font-bold text-gray-900 leading-tight">
            Daromad va Xarajatlar
        </h2>
        <p class="text-gray-700 mt-4 text-lg">
            Bu sahifa orqali o'z daromad va xarajatlaringizni kuzatishingiz mumkin.
        </p>
    </section>

    <!-- Income & Expense Form -->
    <section class="bg-white p-8 rounded-lg shadow-xl mt-10">
        <h3 class="text-2xl font-semibold text-gray-800 mb-6">Daromad yoki Xarajat qo'shish</h3>
        <?php if (isset($_SESSION['messages']['incomeAndExpense'])): ?>
            <div class="mt-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-md text-center">
                <?= $_SESSION['messages']['incomeAndExpense']; ?>
            </div>
            <?php unset($_SESSION['messages']['incomeAndExpense']);?>
        <?php endif; ?>
        <form method="POST" action="" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 font-medium">Turini tanlang</label>
                    <select id="incomeType" name="incomeType" class="w-full mt-2 p-3 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="income">Daromad</option>
                        <option value="expense">Xarajat</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium">Kategoriyani kiriting</label>
                    <input type="text" name="category" class="w-full mt-2 p-3 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masalan, maosh, oziq-ovqat..." required>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium">Izoh</label>
                    <input type="text" name="description" class="w-full mt-2 p-3 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-medium">Miqdori</label>
                    <input type="number" step="0.01" name="amount" class="w-full mt-2 p-3 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
            </div>
            <button type="submit" class="mt-6 bg-blue-600 text-white py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Qo'shish</button>
        </form>
    </section>

    <!-- Income & Expense List -->
    <section class="mt-10">
        <h3 class="text-2xl font-semibold text-gray-800 mb-6">Joriy Daromad va Xarajatlar</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-xl">
                <h4 class="text-xl font-semibold text-gray-800 mb-4">Daromadlar</h4>
                <ul class="space-y-4">
                    <?php foreach ($incomes as $income): ?>
                        <li class="flex justify-between py-2 border-b border-gray-200">
                            <span><?= $income['description'] ?> - <?= $income['date'] ?></span>
                            <span class="text-green-600 font-semibold">+$<?= number_format($income['amount'], 0, '', ' ') ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <p class="text-xl font-semibold text-gray-800 mt-4">Jami Daromad: <span class="text-green-600">$<?= number_format($incomes_amount->total_amount_inc, 0, '', ' ')?></span></p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-xl">
                <h4 class="text-xl font-semibold text-gray-800 mb-4">Xarajatlar</h4>
                <ul class="space-y-4">
                    <?php foreach ($expenses as $expense): ?>
                        <li class="flex justify-between py-2 border-b border-gray-200">
                            <span><?= $expense['description'] ?> - <?= $expense['date'] ?></span>
                            <span class="text-red-600 font-semibold">-$<?= number_format($expense['amount'], 0, '', ' ')  ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <p class="text-xl font-semibold text-gray-800 mt-4">Jami Xarajatlar: <span class="text-red-600">$<?= number_format($expenses_amount->total_amount_exp, 0, '', ' ') ?></span></p>
            </div>
        </div>
    </section>

    <!-- Balance -->
    <section class="mt-10 text-center">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Balans</h3>
        <p class="text-3xl font-bold <?= $balance >= 0 ? 'text-green-600' : 'text-red-600' ?>">
            $<?= $balance ?>
        </p>
    </section>
</main>


<?php
loadPartials('footer');
?>
