<?php
loadPartials('header');
loadPartials('navbar');
?>
<main class="container mx-auto p-6">
    <!-- Page Title -->
    <section class="text-center my-8">
        <h2 class="text-4xl font-bold text-gray-900 leading-tight">Maqsadlar Belgilash</h2>
        <p class="text-gray-700 mt-2 text-lg">
            Sizning maqsadlaringizni belgilash va ular bo'yicha yutuqlaringizni kuzatish.
        </p>
    </section>

    <!-- Goals Form -->
    <section class="mt-8">
        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Yangi Maqsad Qo'shish</h3>
        <form action="#" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="goalTitle" class="block text-gray-700 text-sm font-medium mb-2">Maqsad Sarlavhasi</label>
                <input type="text" id="goalTitle" name="goalTitle" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" placeholder="Maqsad sarlavhasini kiriting" required>
            </div>
            <div class="mb-4">
                <label for="goalDescription" class="block text-gray-700 text-sm font-medium mb-2">Maqsad Tavsifi</label>
                <textarea id="goalDescription" name="goalDescription" rows="4" class="form-textarea mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" placeholder="Maqsad tavsifini kiriting" required></textarea>
            </div>
            <div class="mb-4">
                <label for="goalDeadline" class="block text-gray-700 text-sm font-medium mb-2">Maqsad Tugash Sani</label>
                <input type="date" id="goalDeadline" name="goalDeadline" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
            </div>
            <?php if($_SESSION['user']['email']): ?>
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">Maqsadni Qo'shish</button>
            <?php endif; ?>
        </form>
    </section>

    <!-- Goals List -->
    <section class="mt-8">
        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Maqsadlaringiz</h3>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <!-- Example of Goal Item -->
            <div class="border-b border-gray-200 pb-4 mb-4">
                <h4 class="text-xl font-semibold text-gray-900">Maqsad 1</h4>
                <p class="text-gray-700 mt-2">Maqsad tavsifi yoki detallar.</p>
                <p class="text-gray-600 mt-2">Tugash sanasi: <span class="font-semibold">2024-12-31</span></p>
            </div>
            <!-- Add more goal items here -->
        </div>
    </section>
</main>
<?php
loadPartials('footer');
?>