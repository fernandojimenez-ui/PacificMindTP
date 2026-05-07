window.addEventListener('load', function () {
    // Mobile menu toggle
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileToggle = document.getElementById('primary-menu-toggle');

    if (mobileMenu && mobileToggle) {
        mobileToggle.addEventListener('click', function (e) {
            e.preventDefault();
            mobileMenu.classList.toggle('hidden');
        });
    }
})
