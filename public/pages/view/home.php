<?php
//loadPartials('header');
loadPartials('navbar');
?>

<main class="container mx-auto p-5">
    <!-- Qahramon Seksiyasi -->
    <section class="text-center my-10 bg-blue-100 p-10 rounded-lg shadow-md">
        <h2 class="text-5xl font-extrabold text-blue-900 leading-tight">
            Shaxsiy moliyangizni boshqarishni osonlashtiring
        </h2>
        <p class="text-blue-700 mt-4 text-lg">
            Daromad va xarajatlaringizni kuzatib boring, byudjet rejalashtiring va maqsadlaringizga erishing.
        </p>
    </section>

    <!-- Xizmatlar Seksiyasi -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
        <div class="bg-white p-8 rounded-lg shadow-xl transform hover:scale-105 transition duration-300">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Daromad va Xarajatlar</h3>
            <p class="text-gray-600 text-base">
                Moliyaviy holatingizni nazorat qiling, daromad va xarajatlaringizni yozib boring.
            </p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-xl transform hover:scale-105 transition duration-300">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Byudjet Rejalashtirish</h3>
            <p class="text-gray-600 text-base">
                Oylik byudjetingizni rejalashtiring va uni real xarajatlar bilan solishtiring.
            </p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-xl transform hover:scale-105 transition duration-300">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Maqsad Qo'yish</h3>
            <p class="text-gray-600 text-base">
                Qisqa va uzoq muddatli maqsadlaringizni belgilang va ularni amalga oshirish jarayonini kuzating.
            </p>
        </div>
    </section>

    <!-- Qo'shimcha Funksiyalar -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
        <div class="bg-white p-8 rounded-lg shadow-xl transform hover:scale-105 transition duration-300">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Hisobotlar</h3>
            <p class="text-gray-600 text-base">
                Daromad va xarajatlaringiz bo'yicha to'liq hisobotlarni ko'ring va moliyaviy holatingizni tahlil qiling.
            </p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-xl transform hover:scale-105 transition duration-300">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Pul O'tkazmalarini Kuzatish</h3>
            <p class="text-gray-600 text-base">
                Pul o'tkazmalarini kuzatib boring va ularni maqsadlaringiz bilan moslashtiring.
            </p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-xl transform hover:scale-105 transition duration-300">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Tezkor Hisob-kitoblar</h3>
            <p class="text-gray-600 text-base">
                Tez va oson hisob-kitoblar qilish orqali vaqt va resurslaringizni tejang.
            </p>
        </div>
    </section>
</main>

<?php
loadPartials('footer');
?>
