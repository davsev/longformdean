$('#studentForm').parsley();

// close 
// $('#datasaved').on('click', function () {
//     $('#datasaved').fadeToggle();
//     console.log('#datasaved');
// });


$('#explanation').on('click', function(){
    $('#explanation-content').slideToggle();
});


//scroll to anchor
$(document).ready(function () {
    // Add scrollspy to <body>
    $('body').scrollspy({
        target: "#sidebar-menu",
        offset: 50
    });

    // Add smooth scrolling on all links inside the navbar
    $("#anchor-menu a").on('click', function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});

// $('#explanation').on('click', function(){
//     $(this).closest('.x_content').slideToggle;
// })



