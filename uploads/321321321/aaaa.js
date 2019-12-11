jQuery(document).ready(function() {
    jQuery('.nav-icon4').click(function() {
        jQuery(this).toggleClass('open');
        jQuery(".the-nav").fadeToggle("fast");
    });
});

 jQuery('.menu-item-has-children').click(function() {
     jQuery(this).find('.sub-menu').slideToggle();
 });




if(jQuery('.elementor-portfolio-item__overlay > h3.elementor-portfolio-item__title').length){
    function addPortBtn(x) {
        if (x.matches) { // If media query matches
            jQuery('.elementor-portfolio-item__button').remove();
            jQuery('.elementor-portfolio-item__overlay').append('<a class="elementor-portfolio-item__button">לצפייה</a>');
    console.log('small');
        } else {
        jQuery('.elementor-portfolio-item__button').remove();
        jQuery('.elementor-portfolio-item__title').append('<a class="elementor-portfolio-item__button">לצפייה</a>');
    console.log('big');
        }
    }    

    var x = window.matchMedia("(max-width: 768px)")
    addPortBtn(x); // Call listener function at run time
    x.addListener(addPortBtn); // Attach listener function on state changes
  
};

//add page url to hidden field in rav meser form
function fieldUrl() {
    var pageUrl = window.location.href;
    var pageTitle = document.getElementsByTagName("title")[0].innerHTML;
    document.getElementById('form-field-2-5').value = pageUrl;
    document.getElementById('form-field-2-6').value = pageTitle;
};

setTimeout(fieldUrl(), 3000);


