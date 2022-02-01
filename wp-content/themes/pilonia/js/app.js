'use strict';

// const scrollNav = () => {
//
//
//     let scroll = window.scrollTop;
//
//     let mainMenu = document.querySelector('.main-menu');
//     console.log(mainMenu);
//
//     if (scroll >= 20) {
//         mainMenu.classList.add("background-version");
//     } else {
//         mainMenu.classList.remove("background-version");
//     }
//
//
//     if (scroll >= 50) {
//         //scroll up or down
//         let currentScroll = this.scrollTop;
//
//         if (currentScroll > previousScroll) {
//             mainMenu.classList.add("scroll-version");
//
//         } else {
//             mainMenu.classList.remove("scroll-version");
//         }
//
//         previousScroll = currentScroll;
//     } else {
//         mainMenu.classList.remove("scroll-version");
//     }
//
// }


(function ($) {
    $(document).ready(function () {
        scrollNav();
    });

    $(window).load(function () {

    });

    $(window).scroll(function () {
        scrollNav();
    });

    var previousScroll = 0;
    function scrollNav() {

        var scroll = $(window).scrollTop();
        console.log(scroll);
        if (scroll >= 50) {
            $(".main-menu").addClass("background-version");
        } else {
            $(".main-menu").removeClass("background-version");
        }

        if (scroll >= 100) {
            //scroll up or down
            var currentScroll = $(window).scrollTop();
            console.log(currentScroll);
            if (currentScroll > previousScroll) {
                $(".main-menu").addClass("scroll-version");

            } else {
                $(".main-menu").removeClass("scroll-version");
            }
            previousScroll = currentScroll;
        } else {
            $(".main-menu").removeClass("scroll-version");
        }
    }

})(jQuery);

