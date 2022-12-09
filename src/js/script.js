$(function () {

    //メニューを途中からスムーズに固定
    var w = $(window).width();
    if (w > 1200) {
        $(window).scroll(function () {
            var pcHead = $("header .top_sec").innerHeight();//固定したい部分より上(ヘッダーなど)
            var page_navH = $('header .gnav').innerHeight();//固定したい部分(メニューなど)
            if ($(this).scrollTop() > pcHead) {
                $('header .gnav').addClass('fixed');
                $('header + section').css('margin-top', page_navH);
            } else {
                $('header .gnav').removeClass('fixed');
                $('header + section').css('margin-top', 0);
            }
        });
    }

    //pagetop
    function fix_calc() {
        var a = $(document).height();
        var b = $(window).scrollTop();
        var c = window.innerHeight;
        var d = $("footer").innerHeight();
        var f = a - (b + c);
        var e = d - f + 30;
        if (a - b - c <= d) {
            $("#pagetop").css({
                "bottom": e
            });
        } else {
            $("#pagetop").css({
                "bottom": "30px"
            });
        }
    }

    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('header').addClass('scrolled');
        } else {
            $('header').removeClass('scrolled');
        }
        fix_calc();
    });

    fix_calc();

    $(window).resize(function () {
        fix_calc();
    });

    //smooth scroll
    $('a[href^="#"]').click(function () {
        var speed = 500;
        var headerH = $('header').innerHeight();//headerがfixedでない場合はこの行不要
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - headerH;//headerがfixedでない場合は「 - headerH」不要
        $('body,html').animate({ scrollTop: position }, speed, 'swing');
        return false;
    });

    //sp_btn
    $('#sp_btn').click(function () {
        $('header').toggleClass('nav_open');
        $('header .gnav').slideDown();
    });
    $('header .close').click(function(){
        $('header .gnav').slideUp();
    });


    //タブ
    $('.tab_nav li').click(function () {
        var index = $('.tab_nav li').index(this);
        $('.tab_nav li').removeClass('current');
        $(this).addClass('current');
        $('.tab_content').removeClass('show').eq(index).addClass('show');
    });


    //スライダー
    $('.slider').slick({
        dots: true,
        autoplay: true,
        responsive: [{
            breakpoint: 825,
            settings: {
                arrows: false
            }
        }]
    });
});