document.addEventListener('DOMContentLoaded', function() {
    // Initialize Materialize components if necessary
    M.AutoInit();

    // Add animation to form elements
    const formElements = document.querySelectorAll('.card-content, .btn-large');
    formElements.forEach(el => {
        el.classList.add('fadeIn');
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const profileButton = document.getElementById("profileButton");
    const profileDropdown = document.getElementById("profileDropdown");

    profileButton.addEventListener("click", function() {
        profileDropdown.classList.toggle("hidden");
    });

    // Dropdownni tashqi joyga bosilganda yopish
    window.addEventListener("click", function(e) {
        if (!profileButton.contains(e.target)) {
            profileDropdown.classList.add("hidden");
        }
    });
});
