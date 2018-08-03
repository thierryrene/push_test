$('.my-nav-link a').click(function() {
    var sectionTo = $(this).attr('href');
    console.log(sectionTo);
    $('html, body').animate({
        scrollTop: $(sectionTo).offset().top
    }, 1500);
});