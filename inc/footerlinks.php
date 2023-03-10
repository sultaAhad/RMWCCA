<!-- Jquery JS-->
<script src="js/jquery.min.js"></script>
<!-- Jquery JS-->

<!-- main js -->
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/index.js"></script>
<!-- main js -->
<!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
<!-- slick slider js -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- slick slider js -->

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiper", {
    effect: "cards",
    grabCursor: true,
});
</script>
<script>
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function() {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({
        opacity: 0,
    }, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = now * 50 + "%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
                transform: "scale(" + scale + ")",
            });
            next_fs.css({
                left: left,
                opacity: opacity,
            });
        },
        duration: 800,
        complete: function() {
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: "easeInOutBack",
    }, );
});

$(".previous").click(function() {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //de-activate current step on progressbar
    $("#progressbar li")
        .eq($("fieldset").index(current_fs))
        .removeClass("active");

    //show the previous fieldset
    previous_fs.show();
    //hide the current fieldset with style
    current_fs.animate({
        opacity: 0,
    }, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = (1 - now) * 50 + "%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
                left: left,
            });
            previous_fs.css({
                transform: "scale(" + scale + ")",
                opacity: opacity,
            });
        },
        duration: 800,
        complete: function() {
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: "easeInOutBack",
    }, );
});

$(".submit").click(function() {
    return false;
});

// Header
const CurrentLocation = location.href;
const menuItem = document.querySelectorAll(".normal-nav-items .menu");
const menuLength = menuItem.length;
for (let i = 0; i < menuLength; i++) {
    if (menuItem[i].href === CurrentLocation) {
        menuItem[i].id = "active";
    }
}

// dropdowns
$(".third-main").hover(function() {
    $(".third-dropdown").toggle();
    $(this).css("display", "block");
});
$("a.dropdown-main-img").click(function() {
    $(".dropdown-img").toggle();
    $(this).css("display", "block");
});
// year
var date = new Date().getFullYear();

document.getElementById("year").innerHTML = date;
// marquee
$(".slider-wrapper").slick({
    arrows: false,
    infinite: true,
    autoplay: true,
    centerMode: true,
    dots: false,
    // slidesToShow: 5,
    variableWidth: true,
    slidesToScroll: 1,
    speed: 2000,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: "linear",
    pauseOnhover: false,
    responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 767,
            settings: {
                slidesToScroll: 1,
            },
        },
    ],
});
$(document).ready(function() {
    $(".industry-slider").slick({
        infinite: true,
        slidesToShow: 3,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                },
            },
        ],
    });
});
$(document).ready(function() {
    $(".Directors-wrapper").slick({
        infinite: true,
        slidesToShow: 5,
        speed: 2000,
        autoplay: true,
        autoplaySpeed: 0,
        arrows: false,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                },
            }
        ],
    });
});
$(document).ready(function() {
    $(".Directors-wrapper").slick({
        infinite: true,
        slidesToShow: 5,
        speed: 2000,
        autoplay: true,
        autoplaySpeed: 0,
        arrows: false,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                },
            },
        ],
    });
});
// profile-wrapper
$("a.btn.green.password-wrapper-btn").click(function() {
    $(".my-profile-wrapper1.password1").css("display", "block");
    $(".my-profile-wrapper.password").css("display", "none");
});
$("a.btn.green.profile-wrapper-btn").click(function() {
    $(".my-profile-wrapper1.my-profile-wrapper13").css("display", "block");
    $(".my-profile-wrapper.my-profile-wrapper12").css("display", "none");
});
$("a.btn.green.menbership-wrapper-btn").click(function() {
    $(".my-profile-wrapper1.Membership1").css("display", "block");
    $(".my-profile-wrapper.Membership").css("display", "none");
});
</script>