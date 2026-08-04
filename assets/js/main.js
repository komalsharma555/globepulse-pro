/*
====================================
GlobePulse Pro Main JavaScript
====================================
*/

document.addEventListener("DOMContentLoaded", function () {

    // Sticky Header
    const header = document.querySelector(".gp-header");

    window.addEventListener("scroll", function () {

        if (window.scrollY > 100) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }

    });

    // Back To Top
    const backToTop = document.getElementById("backToTop");

    if (backToTop) {

        window.addEventListener("scroll", function () {

            if (window.scrollY > 400) {
                backToTop.style.display = "block";
            } else {
                backToTop.style.display = "none";
            }

        });

        backToTop.addEventListener("click", function () {

            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });

        });

    }

    // Mobile Menu

    const menuButton = document.querySelector(".menu-toggle");
    const menu = document.querySelector(".primary-menu");

    if (menuButton && menu) {

        menuButton.addEventListener("click", function () {

            menu.classList.toggle("active");

        });

    }

    // Search Popup

    const searchButton = document.querySelector(".search-toggle");
    const searchBox = document.querySelector(".gp-search");

    if (searchButton && searchBox) {

        searchButton.addEventListener("click", function () {

            searchBox.classList.toggle("active");

        });

    }

    // Breaking News

    const breaking = document.querySelector(".gp-breaking-news span");

    if (breaking) {

        let position = 100;

        setInterval(function () {

            position--;

            if (position < -100) {

                position = 100;

            }

            breaking.style.transform = "translateX(" + position + "%)";

        }, 40);

    }

});
