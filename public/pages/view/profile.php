<?php
loadPartials('header');
loadPartials('navbar');
/**
 * @var $user;
 */

?>

<!-- Profile Section -->
<section class="bg-gray-100 py-12">
    <div class="container mx-auto px-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col md:flex-row items-center md:items-start">
            <!-- Profile Image -->
            <div class="md:w-1/3 bg-cover bg-center h-48 md:h-auto relative">
                <img src="<?= htmlspecialchars($user->avatar_url) ?>" alt="Profile Picture" class="w-full h-full object-cover rounded-t-lg md:rounded-none md:rounded-l-lg">
            </div>
            <!-- Profile Details -->
            <div class="md:w-2/3 p-6">
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">Profil Ma'lumotlari</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-center space-x-4">
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h10M7 16h10"></path>
                        </svg>
                        <div>
                            <p class="text-gray-700 font-semibold">Ism:</p>
                            <p class="text-gray-600"><?= htmlspecialchars($user['name']) ?></p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v4a1 1 0 001 1h3m10 0h3a1 1 0 001-1V7m-6 0V5a2 2 0 10-4 0v2m4 0H7"></path>
                        </svg>
                        <div>
                            <p class="text-gray-700 font-semibold">Familiya:</p>
                            <p class="text-gray-600"><?= htmlspecialchars($user['lastName']) ?></p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v4a1 1 0 001 1h3m10 0h3a1 1 0 001-1V7m-6 0V5a2 2 0 10-4 0v2m4 0H7"></path>
                        </svg>
                        <div>
                            <p class="text-gray-700 font-semibold">Email:</p>
                            <p class="text-gray-600"><?= htmlspecialchars($user['email']) ?></p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>
                            <p class="text-gray-700 font-semibold">Parol:</p>
                            <p class="text-gray-600">********</p>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex justify-end">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">Profilni tahrirlash</button>
                </div>
            </div>
        </div>
        <div class="mt-12 text-center">
            <p class="text-gray-600 text-sm">A'zolik sanasi: <?= date("F j, Y", strtotime($user->created_at)) ?></p>
        </div>
    </div>
</section>

<?php
loadPartials('footer');
?>
