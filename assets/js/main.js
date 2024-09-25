AOS.init({
    // disable: true 
  });
  
  

(function ($) {
    "use strict";
    
    // Dropdown on mouse hover
    // $(document).ready(function () {
    //     function toggleNavbarMethod() {
    //         if ($(window).width() > 992) {
    //             $('.navbar .dropdown').on('mouseover', function () {
    //                 $('.dropdown-toggle', this).trigger('click');
    //             }).on('mouseout', function () {
    //                 $('.dropdown-toggle', this).trigger('click').blur();
    //             });
    //         } else {
    //             $('.navbar .dropdown').off('mouseover').off('mouseout');
    //         }
    //     }
    //     toggleNavbarMethod();
    //     $(window).resize(toggleNavbarMethod);
    // });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Service carousel
    $(".service-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:1
            },
            992:{
                items:2
            }
        }
    });


   // Initialize Isotope
var $grid = $('.portfolio-container').isotope({
    itemSelector: '.portfolio-item',
    layoutMode: 'fitRows'
  });
  
  // Filter items on button click
  $('#portfolio-flters').on('click', 'li', function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
    // Remove active class from previous active button and add to clicked button
    $('#portfolio-flters li').removeClass('active');
    $(this).addClass('active');
  });
  


    // Team carousel
    $(".team-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ]
    });

    // counter js
    function startCounter(id, endValue, duration) {
        let element = document.getElementById(id);
        let startValue = 0;
        let stepTime = Math.abs(duration / endValue);
        
        if (endValue === 0) {
            element.textContent = '0 +';
            return;
        }
    
        let timer = setInterval(function() {
            startValue += 1;
            element.textContent = startValue + ' +';
            if (startValue >= endValue) {
                clearInterval(timer);
                element.textContent = endValue + ' +'; // Ensure it shows the final value with the '+'
            }
        }, stepTime);
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        startCounter('yearsEstablished', 25, 2000); // Example: 25 years
        startCounter('completedProjects', 150, 2000); // Example: 150 projects
        startCounter('satisdiedClients', 350, 2000); // Fixed typo from 'satisdied' to 'satisfied'
    });
    
    
})(jQuery);

