/*
====================================
GlobePulse Pro Dark Mode
====================================
*/

document.addEventListener("DOMContentLoaded", function () {

    const button = document.getElementById("dark-mode-toggle");

    // Load Saved Mode
    if (localStorage.getItem("gp-theme") === "dark") {

        document.body.classList.add("dark-mode");

        if (button) {
            button.innerHTML = "☀️";
        }

    }

    // Toggle Dark Mode

    if (button) {

        button.addEventListener("click", function () {

            document.body.classList.toggle("dark-mode");

            if (document.body.classList.contains("dark-mode")) {

                localStorage.setItem("gp-theme", "dark");

                button.innerHTML = "☀️";

            } else {

                localStorage.setItem("gp-theme", "light");

                button.innerHTML = "🌙";

            }

        });

    }

});
