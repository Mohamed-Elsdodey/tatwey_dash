console.log("start")
$(document).ready(function() {
    $('.AE_dropdown-toggle').click(function() {
        $(this).siblings('.AE_dropdown-menu').slideToggle();
        $(this).find('.AE_DropDownArrow').toggleClass('active')
    });
});