<?php
loadPartials('header');
loadPartials('navbar');
?>
<main class="container mx-auto mt-8 p-6 bg-white shadow-lg rounded-lg">
    <!-- Filters and Date Range Selector -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold mb-4">Hisobotlar</h2>
        <div class="flex space-x-4">
            <select class="form-select block w-full mt-1 border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option>Oylik</option>
                <option>Kunlik</option>
                <option>Haftalik</option>
            </select>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-600 transition duration-300">Filtrni qo'llash</button>
        </div>
    </div>

    <!-- Charts and Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Xarajatlar Diagrammasi -->
        <div class="bg-gray-200 p-4 rounded-lg shadow-md">
            <h3 class="text-xl font-bold mb-4">Xarajatlar Diagrammasi</h3>
            <!-- Example placeholder for chart -->
            <div class="w-full h-64 bg-gray-300 rounded-lg flex items-center justify-center text-gray-600">
                <span class="text-lg font-medium">Xarajatlar Diagrammasi (Grafik joylashtiriladi)</span>
            </div>
        </div>

        <!-- Daromadlar Diagrammasi -->
        <div class="bg-gray-200 p-4 rounded-lg shadow-md">
            <h3 class="text-xl font-bold mb-4">Daromadlar Diagrammasi</h3>
            <!-- Example placeholder for chart -->
            <div class="w-full h-64 bg-gray-300 rounded-lg flex items-center justify-center text-gray-600">
                <span class="text-lg font-medium">Daromadlar Diagrammasi (Grafik joylashtiriladi)</span>
            </div>
        </div>
    </div>

    <!-- Maqsadlar -->
    <div class="mt-8 bg-gray-200 p-4 rounded-lg shadow-md">
        <h3 class="text-xl font-bold mb-4">Maqsadlar</h3>
        <!-- Example placeholder for goal progress -->
        <div class="w-full h-64 bg-gray-300 rounded-lg flex items-center justify-center text-gray-600">
            <span class="text-lg font-medium">Maqsadlar Progressi (Grafik joylashtiriladi)</span>
        </div>
    </div>
</main>
<?php
loadPartials('footer');
?>
