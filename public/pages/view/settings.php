<?php
loadPartials('header');
loadPartials('navbar');
/**
 * @var $user;
 */
?>

<!-- Settings Section -->
<section class="bg-gray-100 py-12">
    <div class="container mx-auto px-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Sozlamalar</h2>
                <form action="/settings" method="post" class="space-y-6">
                    <!-- Profile Image -->
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="w-16 h-16 bg-gray-200 rounded-full overflow-hidden relative">
                            <img src="<?= htmlspecialchars($user->avatar_url) ?>" alt="Profile Picture" class="w-full h-full object-cover">
                            <input type="file" name="avatar" id="avatar" class="absolute inset-0 opacity-0 cursor-pointer">
                        </div>
                        <div>
                            <p class="text-gray-700 font-semibold">Profil rasm</p>
                            <p class="text-gray-600 text-sm">Rasmni yangilash uchun boshingiz mumkin.</p>
                        </div>
                    </div>

                    <!-- Name -->
                    <div>
                        <label for="first_name" class="block text-gray-700 font-semibold mb-2">Ism</label>
                        <input type="text" id="first_name" name="first_name" value="<?= htmlspecialchars($user->first_name) ?>" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    </div>

                    <!-- Last Name -->
                    <div>
                        <label for="last_name" class="block text-gray-700 font-semibold mb-2">Familiya</label>
                        <input type="text" id="last_name" name="last_name" value="<?= htmlspecialchars($user->last_name) ?>" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" value="<?= htmlspecialchars($user->email) ?>" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="old_password" class="block text-gray-700 font-semibold mb-2">Eski parolni kiriting</label>
                        <input type="password" id="old_password" name="old_password" placeholder="Eski parolni kiriting" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                    </div>
                    <div>
                        <label for="password" class="block text-gray-700 font-semibold mb-2">Yangi parol</label>
                        <input type="password" id="password" name="password" placeholder="Yangi parol" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                    </div>

                    <div>
                        <label for="password_confirm" class="block text-gray-700 font-semibold mb-2">Parolni tasdiqlash</label>
                        <input type="password" id="password_confirm" name="password_confirm" placeholder="Parolni tasdiqlash" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                        <p class="text-gray-600 text-sm mt-1">Parolni tasdiqlash uchun qayta kiritishingiz kerak.</p>
                    </div>
                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    document.querySelector('form').addEventListener('submit', function(event) {
        const password = document.getElementById('password').value;
        const passwordConfirm = document.getElementById('password_confirm').value;

        if (password !== passwordConfirm) {
            event.preventDefault(); // Formni yuborishni to'xtatish
            alert('Parollar mos kelmaydi. Iltimos, qayta tekshirib ko\'ring.');
        }
    });
</script>

<?php
loadPartials('footer');
?>
