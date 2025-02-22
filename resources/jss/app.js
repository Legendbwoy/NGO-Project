import './bootstrap';

<script>
$(document).ready(function(){
    $('.video-slider').slick({
        dots: true, // Show dots for navigation
        infinite: true, // Infinite loop
        speed: 500, // Transition speed
        slidesToShow: 2, // Number of slides to show at once
        slidesToScroll: 1, // Number of slides to scroll at once
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
});
</script>
