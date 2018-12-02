"use strict";
$(document).ready(function() {
    // search
    $("#search-friends").on("keyup", function() {
        var g = $(this)
            .val()
            .toLowerCase();
        $(".userlist-box .media-body .chat-header").each(function() {
            var s = $(this)
                .text()
                .toLowerCase();
            $(this)
                .closest(".userlist-box")
                [s.indexOf(g) !== -1 ? "show" : "hide"]();
        });
    });

    $(".search-btn").on("click", function() {
        $(".main-search").addClass("open");
        $(".main-search .form-control").animate({
            width: "200px"
        });
    });
    $(".search-close").on("click", function() {
        $(".main-search .form-control").animate({
            width: "0"
        });
        setTimeout(function() {
            $(".main-search").removeClass("open");
        }, 300);
    });

    $(".mobile-options").on("click", function() {
        $(".navbar-container .nav-right").slideToggle("slow");
    });

    $("#mobile-collapse i").addClass("icon-toggle-right");
    $("#mobile-collapse").on("click", function() {
        $("#mobile-collapse i").toggleClass("icon-toggle-right");
        $("#mobile-collapse i").toggleClass("icon-toggle-left");
    });

    // left sidebar menu
    $("li.hasmenu > a").on("click", function(e) {
        e.preventDefault();
        $("li.hasmenu > a").toggleClass("active");
        $("ul.submenu").toggleClass("active");
    });

    $("#mobile-collapse").on("click", function() {
        $("nav.sidebar").toggleClass("sidebar-offcanvass");
    });

    //full screen
    $(".fullscreen").on("click", function(e) {
        e.preventDefault();
        toggleFullScreen();
    });
});

// toggle full screen
function toggleFullScreen() {
    var a = $(window).height() - 10;
    if (
        !document.fullscreenElement && // alternative standard method
        !document.mozFullScreenElement &&
        !document.webkitFullscreenElement
    ) {
        // current working methods
        if (document.documentElement.requestFullscreen) {
            document.documentElement.requestFullscreen();
        } else if (document.documentElement.mozRequestFullScreen) {
            document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullscreen) {
            document.documentElement.webkitRequestFullscreen(
                Element.ALLOW_KEYBOARD_INPUT
            );
        }
    } else {
        if (document.cancelFullScreen) {
            document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
            document.webkitCancelFullScreen();
        }
    }
    $(".full-screen").toggleClass("icon-maximize");
    $(".full-screen").toggleClass("icon-minimize");
}
