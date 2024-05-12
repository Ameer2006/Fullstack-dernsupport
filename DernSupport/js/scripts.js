/*!
* Start Bootstrap - Grayscale v7.0.6 (https://startbootstrap.com/theme/grayscale)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-grayscale/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%',
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});
function showLoginWindow2() {
    document.getElementById('loginWindow2').style.display = 'block';
}
function showLoginWindow() {
    document.getElementById('signupWindow').style.display = 'none';
    document.getElementById('loginWindow').style.display = 'block';
}
function closeLoginWindow() {

    document.getElementById('loginWindow').style.display = 'none';
}
function showSignupWindow() {

    document.getElementById('loginWindow').style.display = 'none';
    document.getElementById('signupWindow').style.display = 'block';
}
function closeSignupWindow() {
    document.getElementById('signupWindow').style.display = 'none';
}

document.getElementById('requestTypeSelect').addEventListener('change', function () {
    var requestType = this.value;
    var priceDisplay = document.getElementById('priceDisplay');
    if (requestType === 'hardware') {
        priceDisplay.textContent = 'Price: $50';
    } else if (requestType === 'software') {
        priceDisplay.textContent = 'Price: $30';
    } else if (requestType === 'empty') {
        priceDisplay.textContent = 'Enter your Request Type please ';
    }
});
function cart() {
    alert('item added successfully')
}


