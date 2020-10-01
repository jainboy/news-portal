const responsive = {
    0:{
        items:1
    },
    320:{
        items:1
    },
    560:{
        items:2
    },
    960:{
        items:3
    }
}


$(document).ready(function () {

    $nav = $('.nav');
    $toggleCollapse = $('.toggle-collapse');

    /** click event on toggle menu */

    $toggleCollapse.click(function () {
        $nav.toggleClass('collapse')
    })

    /** owl-casousel    */
    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:3000,
        responsive:responsive
    });

    //click to scroll
    $('.move-up span').click(function(){
        $('html,body').animate({
            scrollTop:0   
        },1000);
        })

    //AOS
    AOS.init();
});