<?php
loadPartials('header');
loadPartials('navbar');
?>
<main class="pt-20 px-6 py-8">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Budjet Rejalashtirish</h2>

        <!-- Budget Form -->
        <div class="bg-white rounded-lg p-6 mb-8 shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Yangi Budjet Qo'shish</h3>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="budgetName" class="block text-gray-700 text-sm font-bold mb-2">Budjet Nomi</label>
                    <input type="text" id="budgetName" name="budgetName" placeholder="Budjet nomi" class="w-full p-3 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="budgetAmount" class="block text-gray-700 text-sm font-bold mb-2">Miqdori</label>
                    <input type="number" id="budgetAmount" name="budgetAmount" placeholder="Miqdor" class="w-full p-3 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="budgetDate" class="block text-gray-700 text-sm font-bold mb-2">Muddati</label>
                    <input type="date" id="budgetDate" name="budgetDate" class="w-full p-3 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="budgetDescription" class="block text-gray-700 text-sm font-bold mb-2">Tavsif</label>
                    <textarea id="budgetDescription" name="budgetDescription" placeholder="Budjet haqida qisqacha ma'lumot" rows="4" class="w-full p-3 border border-gray-300 rounded-lg" required></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">Qo'shish</button>
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
                        <td class="py-3 px-4"><?= htmlspecialchars(date("Y-m-d", strtotime($budget['date']))) ?></td>
                        <td class="py-3 px-4"><?= htmlspecialchars($budget['description']) ?></td>
                        <td class="py-3 px-4">
                            <a href="edit_budget.php?id=<?= htmlspecialchars($budget['id']) ?>" class="text-blue-600 hover:text-blue-800 transition duration-300">Tahrirlash</a>
                            <a href="delete_budget.php?id=<?= htmlspecialchars($budget['id']) ?>" class="text-red-600 hover:text-red-800 transition duration-300 ml-4">O'chirish</a>
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
