$(document).ready(function() {



    //Portfolio

    $(".view").click(function(e) {  
        e.preventDefault();
        $(".view").removeClass('active');
        $('.dynamics').addClass('no-view'); 
        $(this).addClass('active'); 
        $('[data-view-id="'+$(this).attr('id')+'"]').removeClass('no-view');
    });

    //SLick slider
    $('.slick-slider').slick({
        dots: false,
        centerMode: true,
        slidesToShow: 1,
        centerPadding: '35%',
        infinite: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '0',
                slidesToShow: 1
                }
            }
        ]
    });

   
    //Form validation
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
                if (form.checkValidity() !== false) {
                    $('.success-submit').removeClass('hide');
                    $('form').removeClass('was-validated');
                    this.reset();
                   
                }
                
            }, false);
            });
        }, false);
    })();
    
});