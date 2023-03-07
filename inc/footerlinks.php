<!-- Jquery JS-->
<script src="js/jquery.min.js"></script>
<!-- Jquery JS-->

<!-- main js -->
<script src="js/index.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<!-- main js -->

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
                },
            ],
        });
    });
    // profile-wrapper
    $("a.btn.green.profile-wrapper-btn").click(function() {
        $(".my-profile-wrapper1").css("display", "block");
        $(".my-profile-wrapper").css("display", "none");
    });
    $("a.dropdown-main-img").click(function() {
        $(".dropdown-img").toggle();
        $(this).css("display", "block");
    });
</script>