document.addEventListener('DOMContentLoaded', function() {
    // Initialize Materialize components if necessary
    M.AutoInit();

    // Add animation to form elements
    const formElements = document.querySelectorAll('.card-content, .btn-large');
    formElements.forEach(el => {
        el.classList.add('fadeIn');
    });
});
