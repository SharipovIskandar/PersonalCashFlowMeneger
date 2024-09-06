<?php
loadPartials('header');
loadPartials('navbar');

/**
 * @var $budgets
 */
//dd($budgets);
?>
<main class="pt-20 px-6 py-8">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Budjet Rejalashtirish</h2>

        <!-- Budget Form -->
        <div class="bg-white rounded-lg p-6 mb-8 shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Yangi Budjet Qo'shish</h3>
            <?php if (isset($_SESSION['messages']['budget'])): ?>
                <div class="mt-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-md text-center">
                    <?= $_SESSION['messages']['budget']; ?>
                </div>
                <?php unset($_SESSION['messages']['budget']);?>
            <?php endif; ?>
            <form action="/budget/planning" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Budjet Nomi</label>
                    <input type="text" id="name" name="name" placeholder="Budjet nomi" class="w-full p-3 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="amount" class="block text-gray-700 text-sm font-bold mb-2">Miqdori</label>
                    <input type="number" id="amount" name="amount" placeholder="Miqdor" class="w-full p-3 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Boshlanish sanasi</label>
                    <input type="date" id="start_date" name="start_date" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" required>
                </div>
                <div class="mb-4">
                    <label for="end_date" class="block text-gray-700 text-sm font-bold mb-2">Tugash sanasi</label>
                    <input type="date" id="end_date" name="end_date" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Tavsif</label>
                    <textarea id="description" name="description" placeholder="Budjet haqida qisqacha ma'lumot" rows="4" class="w-full p-3 border border-gray-300 rounded-lg" required></textarea>
                </div>
                <?php if($_SESSION['user']['email']): ?>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">Qo'shish</button>
                <?php endif; ?>
            </form>
        </div>

        <!-- Budget Overview -->
        <div class="bg-white rounded-lg p-6 shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Budjetlar</h3>
            <table class="min-w-full bg-white">
                <thead>
                <tr class="border-b border-gray-200">
                    <th class="py-3 px-4 text-left text-gray-600">Budjet Nomi</th>
                    <th class="py-3 px-4 text-left text-gray-600">Miqdori</th>
                    <th class="py-3 px-4 text-left text-gray-600">Muddati</th>
                    <th class="py-3 px-4 text-left text-gray-600">Tavsif</th>
                    <th class="py-3 px-4 text-left text-gray-600">Harakatlar</th>
                </tr>
                </thead>
                <tbody>
                <!-- Dynamic Budget Rows -->
                <?php foreach ($budgets as $budget): ?>
                    <tr class="border-b border-gray-200">
                        <td class="py-3 px-4"><?= htmlspecialchars($budget['name']) ?></td>
                        <td class="py-3 px-4"><?= number_format($budget['amount'], 0, '', ' ') ?> UZS</td>
                        <td class="py-3 px-4"><?= htmlspecialchars(date("Y-m-d", strtotime($budget['end_date']))) ?></td>
                        <td class="py-3 px-4"><?= htmlspecialchars($budget['description']) ?></td>
                        <td class="py-3 px-4">
                            <form method="post" action="/budget/delete">
                            <input type="hidden" value=" <?= $budget['id'] ?>" name="delete">
                            <button type="submit" class="text-red-600 hover:text-red-800 transition duration-300 ml-4">O'chirish</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php
loadPartials('footer');
?>
