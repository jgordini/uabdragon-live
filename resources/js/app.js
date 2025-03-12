// Navigation toggle
window.addEventListener('load', function () {
    let main_navigation = document.querySelector('#primary-menu');
    document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
        e.preventDefault();
        main_navigation.classList.toggle('hidden');
    });
});

// Sticky header behavior
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('header');
    const headerHeight = header.offsetHeight;
    let lastScrollPosition = window.pageYOffset;
    
    window.addEventListener('scroll', function() {
        const currentScrollPosition = window.pageYOffset;
        
        if (currentScrollPosition > headerHeight) {
            // Add sticky header when scrolled past the header height
            if (currentScrollPosition < lastScrollPosition) {
                // Scrolling up - show header
                header.classList.add('fixed', 'top-0', 'left-0', 'w-full', 'shadow-md', 'z-50', 'animate-slideDown');
                header.classList.remove('animate-slideUp');
                document.body.style.paddingTop = headerHeight + 'px';
            } else {
                // Scrolling down - hide header
                header.classList.add('animate-slideUp');
                header.classList.remove('animate-slideDown');
            }
        } else {
            // Remove sticky header when at the top
            header.classList.remove('fixed', 'top-0', 'left-0', 'w-full', 'shadow-md', 'z-50', 'animate-slideDown', 'animate-slideUp');
            document.body.style.paddingTop = '0';
        }
        
        lastScrollPosition = currentScrollPosition;
    });
});