/**
 * Created by Sushant Gauchan
 * Date: 6/9/2018
 * Time: 7:20 AM
 */


var winWidth = $(window).width();
$(document).ready(function () {
    sliderInit();
    addClassInit();
    isotopeInit();
    navInit();
    mcustomInit();

    $('.common-select-nav').on('change', function (e) {
        var $optionSelected = $("option:selected", this);
        $optionSelected.tab('show')
    });
});

if(winWidth >= 992){
    $(window).scroll(function(){
        var wScroll = $(this).scrollTop();

        if(wScroll >= 400) {
            $('#header-wrapper').addClass('show-toggle');
        }
        if(wScroll < $('#content-wrapper').offset().top) {
            $('#header-wrapper').removeClass('show-toggle');
        }
    });
}


/*------------------------------- Functions Starts -------------------------------*/
function sliderInit() {
    $('.common-banner-slider').slick({
        arrows: true,
        dots: false,
        autoplay: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        pauseOnHover: false,
        cssEase: 'linear'
    });

    $('.add-product-slider .common-product-container').slick({
        arrows: true,
        dots: false,
        autoplay: false,
        slidesToShow: 5,
        slidesToScroll: 5,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 1500,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            }
        ]
    });

    $('.product-gallery-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.product-gallery-nav'
    });

    $('.product-gallery-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        asNavFor: '.product-gallery-slider',
        dots: false,
        arrows: false,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            },
        ]
    });


    if(winWidth <= 991){
        $('#home-page .common-blog-section .blog-container').slick({
            arrows: true,
            dots: false,
            autoplay: false,
            slidesToShow: 2,
            slidesToScroll: 2,
            pauseOnHover: false,
            responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
            ]
        });
    }
    if(winWidth <= 767){
        $('.tise-slider').slick({
            arrows: true,
            dots: false,
            autoplay: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            pauseOnHover: false,
        });
    }
}


function isotopeInit() {
    var $menu = $('.nav-container > ul > li > .menu-dropdown > ul').isotope({
        itemSelector: '.nav-container > ul > li > .menu-dropdown > ul > li',
        layoutMode: 'masonry'
    });

    $menu.imagesLoaded().progress(function () {
        $menu.isotope('layout');
    });
}


function addClassInit(){
    $('.announcement-bar .close').click(function () {
        $('body').removeClass('announcement-visible');
    });
    $('#header-wrapper .right-inner .search-item').click(function () {
        $('body').addClass('search-visible');
    });
    $('.mobile-menu-toggle').click(function () {
        $('body').addClass('mobile-nav-open');
    });
    $('#cart-toggle').click(function () {
        $('body').addClass('side-cart-visible');
    });
    $('.filer-toggle').click(function () {
        $('#shop-page .shop-block.side-block').addClass('open');
    });


    $('#content-wrapper,.form-times').click(function () {
        $('body').removeClass('search-visible');
    });
    $('#main-overlay,.common-close-container').click(function () {
        $('body').removeClass('mobile-nav-open');
        $('body').removeClass('side-cart-visible');
    });
    $('#shop-page .shop-block.side-block .common-close-container').click(function () {
        $('#shop-page .shop-block.side-block').removeClass('open');
    });

}


function navInit() {
    $('.mobile-nav  > ul > li > ul').parent('li').addClass('hasChildren');
    $('.mobile-nav  > ul > li > ul > li > ul').parent('li').addClass('hasChildren-lvl-3');



    $('#mobile-navigation .mobile-nav > ul >  li > a').on('click', function (e) {
        e.stopPropagation();
        if($(this).parents('li').hasClass('open')){
            $('#mobile-navigation .mobile-nav > ul >  li').removeClass('open');
            $(this).parents('li').removeClass('open');
        }else{
            $('#mobile-navigation .mobile-nav > ul >  li').removeClass('open');
            $(this).parents('li').addClass('open');
        }
    });


    $('#mobile-navigation .mobile-nav > ul >  li > ul > li').on('click', function () {
        if($(this).hasClass('open-three')){
            $(this).removeClass('open-three');
        }else{
            $(this).parents('ul').parents('li').addClass('open');
            $('#mobile-navigation .mobile-nav > ul >  li > ul > li').removeClass('open-three');
            $(this).addClass('open-three');
        }
    });

}


function mcustomInit() {
    /*$(".your-class").mCustomScrollbar({
        theme:"minimal",
        axis:"x" // horizontal scrollbar
    });*/
}
/*-------------------------------- Functions Ends --------------------------------*/


/*------------------------------- Animation Starts -------------------------------*/



/*-------------------------------- Animation Ends --------------------------------*/
