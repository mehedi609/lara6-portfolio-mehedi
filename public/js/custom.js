function testimonials_slider(){
    if ( $('.testi_slider').length ){
        $('.testi_slider').owlCarousel({
            loop:true,
            margin: 30,
            items: 3,
            nav: false,
            autoplay: true,
            smartSpeed: 1500,
            dots:true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 3,
                },
            }
        })
    }
}
testimonials_slider();

/*Scroll To Top*/
jQuery(document).ready(function() {

    var btn = $('#button');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });

});
