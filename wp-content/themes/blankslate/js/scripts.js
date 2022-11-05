jQuery(function ($) {
    $(function(){
        var note = $('#note'),
            ts = new Date(2012, 0, 1),
            newYear = true;
        if((new Date()) > ts){
            // The new year is here! Count towards something else.
            // Notice the *1000 at the end - time must be in milliseconds
            ts = (new Date()).getTime() + 10*24*60*60*1000;
            newYear = false;
        }
        ts = dts*1000;
        $('#countdown').countdown({
            timestamp	: ts,
            callback	: function(days, hours, minutes, seconds){
                var message = "";
                message += days + " day" + ( days==1 ? '':'s' ) + ", ";
                message += hours + " hour" + ( hours==1 ? '':'s' ) + ", ";
                message += minutes + " minute" + ( minutes==1 ? '':'s' ) + " and ";
                message += seconds + " second" + ( seconds==1 ? '':'s' ) + " <br />";
                if(newYear){
                    message += "left until the new year!";
                }
                else {
                    message += "left to 10 days from now!";
                }
                note.html(message);
            }
        });
    });
});

jQuery(document).ready(function($) {

    var slidesPerView = 3;

    if($(window).width() < 960 && slidesPerView != 1) {
        slidesPerView = 1;
    }
    if($(window).width() >= 960 && $(window).width() < 1200 && slidesPerView != 2) {
        slidesPerView = 2;
    }
    if($(window).width() >= 1200 && slidesPerView != 3) {
        slidesPerView = 3;
    }

    var sliderCarouselPrograms = new Swiper(".programs-new .swiper-container", {
        direction: "horizontal",
        slidesPerView: (slidesPerView == 3 ? (slidesPerView + 1) : slidesPerView),
        //spaceBetween: 7,
        loop: true,
        prevButton: ".swiper-button-prev1",
        nextButton: ".swiper-button-next1",
        centeredSlide: true,
        autoplay: 3500
    });

    var sliderCarouselTrainers = new Swiper(".trainers .swiper-container", {
        direction: "horizontal",
        slidesPerView: slidesPerView,
        //spaceBetween: 140,
        loop: true,
        prevButton: ".swiper-button-prev",
        nextButton: ".swiper-button-next",
        centeredSlide: true
    });

    show = 0;
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200){
            if (show != 1) {
                $(".star-back-call").show();
                $(".back-call-phone").show();
                show = 1;
            }
        } else {
            if (show != 0) {
                $(".star-back-call").hide();
                $(".back-call-phone").hide();
                show = 0;
            }
        }
    });

    $('.star-back-call img').click(function() {
        if ($(".back-call-phone").hasClass("open")) {
            $(".back-call-phone").animate({width: '0'}, 500);
            setTimeout(function() {
                $(".back-call-phone").removeClass("open");
            }, 350);
        } else {
            $(".back-call-phone").animate({width: '494px'}, 500);
            setTimeout(function() {
                $(".back-call-phone").addClass("open");
            }, 350);
        }
        //$(".overlay, .modal-back-call").css("display", "block");
        //$(".overlay, .modal-back-call").animate({opacity: 1}, 300);
    });

    $(".overlay, .btn-join").on("click", function() {
        $(".overlay, .modal").animate({opacity: 0}, 300);
        setTimeout(function() {
            $(".overlay, .modal").css("display", "none");
        }, 350);
    });

    try {
        $("#category").msDropDown();
    } catch(e) {
        console.log(e.message);
    }

    $('a[href=#]').click(function (e) {
        e.preventDefault();
    });
    $('a[href*=#]').click(function(event){
        if ($( $.attr(this, 'href') ).length >= 1) {
            $('html, body').animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top
            }, 500);
            event.preventDefault();
        }
    });

    $('.programs-new .prog-click').click(function () {
        var title = $(this).data('title');
        var text  = $(this).data('text');
        var img  = $(this).data('img');
        $('.modal-card .right-block .title').html(title);
        $('.modal-card .right-block .text').html(text);
        $('.modal-card .girl-img img').attr('src', img);
        $(".overlay, .modal-card").css("display", "block");
        $(".overlay, .modal-card").animate({opacity: 1}, 300);
    });

    $('.btn-join').click(function (e) {

    });
    $('input.phone').mask("+7(000)-000-00-00");
    $('.submitter').click(function (e) {
        $('.back-call-phone.open input[type="submit"]').click();
    });
});