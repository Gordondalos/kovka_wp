$(document).ready(function () {
    var is_chrome = navigator.userAgent.indexOf('Chrome') > -1;
    var is_explorer = navigator.userAgent.indexOf('MSIE') > -1;
    var is_firefox = navigator.userAgent.indexOf('Firefox') > -1;
    var is_safari = navigator.userAgent.indexOf("Safari") > -1;
    var is_opera = navigator.userAgent.toLowerCase().indexOf("op") > -1;

    $("a#1").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $('.'+elementClick).offset().top-50;
        if (is_safari) {
            $('body').animate({ scrollTop: destination }, 3000); //1100 - ????????
        } else {
            $('html').animate({ scrollTop: destination }, 3000);
        }
        return false;
    });

    $("a#2").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $('.'+elementClick).offset().top-50;


        if (is_safari) {
            $('body').animate({ scrollTop: destination }, 3000); //1100 - ????????
        } else {
            $('html').animate({ scrollTop: destination }, 3000);
        }
        return false;
    });

    $("a#3").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $('.'+elementClick).offset().top-50;
        if (is_safari) {
            $('body').animate({ scrollTop: destination }, 3000); //1100 - ????????
        } else {
            $('html').animate({ scrollTop: destination }, 3000);
        }
        return false;
    });

    $("a#4").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $('.'+elementClick).offset().top-50;
        if (is_safari) {
            $('body').animate({ scrollTop: destination }, 3000); //1100 - ????????
        } else {
            $('html').animate({ scrollTop: destination }, 3000);
        }
        return false;
    });

    $("a#5").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $('.'+elementClick).offset().top-50;
        if (is_safari) {
            $('body').animate({ scrollTop: destination }, 3000); //1100 - ????????
        } else {
            $('html').animate({ scrollTop: destination }, 3000);
        }
        return false;
    });

    $("a#6").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $('.'+elementClick).offset().top-50;
        if (is_safari) {
            $('body').animate({ scrollTop: destination }, 3000); //1100 - ????????
        } else {
            $('html').animate({ scrollTop: destination }, 3000);
        }
        return false;
    });

    $("a#7").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $('.'+elementClick).offset().top-50;
        if (is_safari) {
            $('body').animate({ scrollTop: destination }, 3000); //1100 - ????????
        } else {
            $('html').animate({ scrollTop: destination }, 3000);
        }
        return false;
    });

    $("a#8").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $('.'+elementClick).offset().top-50;
        if (is_safari) {
            $('body').animate({ scrollTop: destination }, 3000); //1100 - ????????
        } else {
            $('html').animate({ scrollTop: destination }, 3000);
        }
        return false;
    });

    $("a#9").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $('.'+elementClick).offset().top-50;
        if (is_safari) {
            $('body').animate({ scrollTop: destination }, 3000); //1100 - ????????
        } else {
            $('html').animate({ scrollTop: destination }, 3000);
        }
        return false;
    });


    $('.section_9 img').addClass('wow zoomIn');
    $('.section_6 img').addClass('wow zoomIn');

    //new WOW().init();

    // $('.lamp').addClass('wow bounceInLeft');
    // $('.myfoto').addClass('wow bounceInRight');
    // $('.skill').addClass('wow zoomIn');
    //
    //// $('.lamp').addClass('wow bounceInRight');
    // $('.green').addClass('wow rollIn');
    // $('.work').addClass('wow RotateInDownRight');
    // $('.contact').addClass('wow bounceInRight');


});