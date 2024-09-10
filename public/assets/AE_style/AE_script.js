console.log("start")
$(document).ready(function () {
    $('.AE_dropdown-toggle').click(function () {
        $(this).siblings('.AE_dropdown-menu').slideToggle();
    });
});

// button header
let AE_header_button = document.getElementById("AE_header_button");
AE_header_button.addEventListener("click", () => {
    document.querySelector(".AE_FastLink").classList.toggle("active")
})
$(document).ready(function () {
    $('#searchSideBar').on('input', function () {
        var searchValue = $(this).val().toLowerCase();
        var resultCount = 0;

        $('#navbar-nav li').filter(function () {
            var isVisible = $(this).text().toLowerCase().indexOf(searchValue) > -1;
            $(this).toggle(isVisible);

            if (isVisible) {
                resultCount++;
            }
        });

        // Display the result count
        $('#resultCount').css('display', 'block').text(resultCount + ' نتائج');
    });
});

$('.light-dark-mode').click(function () {
    var navbarMenu = document.getElementsByClassName('navbar-menu');
    var userHeader = document.getElementsByClassName('topbar-user');
    var AE_dropdownMenu = document.getElementsByClassName('AE_dropdown-menu');
    var header = document.getElementById('page-topbar');
    var navbarSupportedContent = document.getElementById('navbarSupportedContent');

    // Check if 'dark-side' is already set in local storage
    if (localStorage.getItem('dark-mode') === 'enabled') {
        // Remove the 'dark-side' class from all elements and clear local storage
        for (let i = 0; i < navbarMenu.length; i++) {
            navbarMenu[i].classList.remove('dark-side');
            AE_dropdownMenu[i].classList.remove('dark-side');
            userHeader[i].classList.remove('semi-dark');
        }
        header.classList.remove('semi-dark');
        navbarSupportedContent.classList.remove('semi-dark');
        localStorage.removeItem('dark-mode');
    } else {
        // Add the 'dark-side' class and set it in local storage
        for (let i = 0; i < navbarMenu.length; i++) {
            navbarMenu[i].classList.add('dark-side');
            AE_dropdownMenu[i].classList.add('dark-side');
            userHeader[i].classList.add('semi-dark');
        }
        header.classList.add('semi-dark');
        navbarSupportedContent.classList.add('semi-dark');
        localStorage.setItem('dark-mode', 'enabled');
    }
});

// On page load, check if 'dark-mode' is enabled and apply the class if needed
$(document).ready(function () {
    if (localStorage.getItem('dark-mode') === 'enabled') {
        var navbarMenu = document.getElementsByClassName('navbar-menu');
        var header = document.getElementById('page-topbar');
        var userHeader = document.getElementsByClassName('topbar-user');
        var AE_dropdownMenu = document.getElementsByClassName('AE_dropdown-menu');
        var navbarSupportedContent = document.getElementById('navbarSupportedContent');


        for (let i = 0; i < navbarMenu.length; i++) {
            navbarMenu[i].classList.add('dark-side');
            AE_dropdownMenu[i].classList.add('dark-side');
            userHeader[i].classList.add('semi-dark');
        }
        header.classList.add('semi-dark');
        navbarSupportedContent.classList.add('semi-dark');
    }
});
