const footer_year = document.querySelector('.footer__container__bottom span');

footer_year.innerHTML = new Date().getFullYear();

const toggle_menu_el = document.querySelectorAll('.nav-link.dropdown-toggle');
const main_wrapper = document.getElementById('main-wrapper');

const toggleMainWrapperClass = () => {
    const isMenuOpen = ([...toggle_menu_el]).some(el => el.classList.contains('show'));

    if (isMenuOpen) {
        main_wrapper.classList.add('opened-menu');
    } 
}

document.addEventListener('click', (event) => {
    const isInsideMenu = event.target.closest('.navbar-bottom .menu-vertical-overflow');

    if (isInsideMenu) {
          main_wrapper.classList.add('opened-menu');
    } else {
        main_wrapper.classList.remove('opened-menu');
    }

    toggleMainWrapperClass();
});


document.addEventListener('click', toggleMainWrapperClass);

$(window).on('scroll', function() {
    if ($(window).scrollTop() > 0) {
        $('#topbar, nav .navbar-top, nav .navbar-bottom').addClass('page-scroll');
        $('header').addClass('fixed-header');
    } else {
        $('#topbar, nav .navbar-top, nav .navbar-bottom').removeClass('page-scroll');
        $('header').removeClass('fixed-header');
    }
});