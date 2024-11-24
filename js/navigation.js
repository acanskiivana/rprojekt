document.addEventListener('DOMContentLoaded', function () {

    // Select all menu items that have a submenu
    var menuItems = document.querySelectorAll('.main-navigation ul li:has(ul) > a');

    menuItems.forEach(function (item) {
        item.addEventListener('click', function (e) {
            // Prevent the default link behavior
            e.preventDefault();

            // Get the submenu
            var submenu = this.nextElementSibling;

            // Smooth toggle: Check if the submenu is open
            if (submenu.style.maxHeight) {
                // Close the submenu
                submenu.style.maxHeight = null;
                submenu.style.opacity = 0;
                submenu.style.visibility = 'hidden';
            } else {
                // Open the submenu
                submenu.style.maxHeight = submenu.scrollHeight + "px";

                submenu.style.opacity = 1;
                submenu.style.visibility = 'visible';
            }
        });
    });

	// Navigation toggle button
	const menuToggle = document.querySelector('.menu-toggle');
    const menu = document.querySelector('#site-navigation');

    menuToggle.addEventListener('click', function() {
        // Toggle the menu open/close class
        var isOpen = menu.classList.toggle('menu-open');
        // Update aria-expanded attribute
        const expanded = menuToggle.getAttribute('aria-expanded') === 'true';
        menuToggle.setAttribute('aria-expanded', !expanded);

        if (isOpen) {
            document.body.classList.add('no-scroll');
        } else {
            document.body.classList.remove('no-scroll');
        }
    });


});