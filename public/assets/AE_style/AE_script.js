console.log("start")
$(document).ready(function() {
    $('.AE_dropdown-toggle').click(function() {
        $(this).siblings('.AE_dropdown-menu').slideToggle();
    });
});

// button header
let AE_header_button = document.getElementById("AE_header_button");
AE_header_button.addEventListener("click", ()=>{
    document.querySelector(".AE_FastLink").classList.toggle("active")
})
$(document).ready(function() {
    $('#searchSideBar').on('input', function() {
        var searchValue = $(this).val().toLowerCase();
        var resultCount = 0;

        $('#navbar-nav li').filter(function() {
            var isVisible = $(this).text().toLowerCase().indexOf(searchValue) > -1;
            $(this).toggle(isVisible);

            if (isVisible) {
                resultCount++;
            }
        });

        // Display the result count
        $('#resultCount').css('display','block').text(resultCount + ' نتائج');
    });
});
