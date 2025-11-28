// multistep form

//const { set } = require("lodash");

var currentStep = 1;
var updateProgressBar;

function displayStep(stepNumber) {
    if (stepNumber >= 1 && stepNumber <= 4) {
        $(".step-" + currentStep).hide();
        $(".step-" + stepNumber).show();
        currentStep = stepNumber;
        updateProgressBar();
    }
}

jQuery(document).ready(function ($) {
    console.log("Main JS Loaded");
    $('#multi-step-form').find('.step').slice(1).hide();

    $(".next-step").click(function () {
        if (currentStep < 4) {
            $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
            currentStep++;
            setTimeout(function () {
                $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
                $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
                updateProgressBar();
            }, 500);
        }
    });

    $(".prev-step").click(function () {
        if (currentStep > 1) {
            $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
            currentStep--;
            setTimeout(function () {
                $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
                $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInLeft");
                updateProgressBar();
            }, 500);
        }
    });

    updateProgressBar = function () {
        var progressPercentage = ((currentStep - 1) / 3) * 100;
        $(".progress-bar").css("width", progressPercentage + "%");
    }


    // Sliders

    $('.homepage-rfq-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        pauseOnHover: false
    });

    $('.homepage-ad-slider-2').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        pauseOnHover: false
    });
      
    //Home Products Slider
    $('#new-banner-products-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
   
});



