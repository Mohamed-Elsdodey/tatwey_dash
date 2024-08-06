console.log("start")
$(document).ready(function() {
    $('.AE_dropdown-toggle').click(function() {
        $(this).siblings('.AE_dropdown-menu').slideToggle();
        $(this).find('.AE_DropDownArrow').toggleClass('active')
    });
});

// button header
let AE_header_button = document.getElementById("AE_header_button");
AE_header_button.addEventListener("click", ()=>{
    document.querySelector(".AE_FastLink").classList.toggle("active")
})