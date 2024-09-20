// Wait for the DOM to fully load
document.addEventListener('DOMContentLoaded', function () {
    // Get the current URL path
    const currentPath = window.location.pathname;

    // Select all sidebar links
    const sidebarLinks = document.querySelectorAll('.sidebar-link');

    // Loop through the sidebar links and check if the href matches the current URL path
    sidebarLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            // Add 'active' class to the link if it matches the current path
            link.classList.add('active');
        } else {
            // Remove 'active' class from other links
            link.classList.remove('active');
        }
    });
});