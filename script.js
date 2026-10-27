```javascript
// ========================================
// JAVASCRIPT MI NURUL YAQIN TAMPU​​MIA
// ========================================

document.addEventListener("DOMContentLoaded", function () {

    // Efek saat halaman selesai dimuat
    document.body.classList.add("loaded");


    // ========================================
    // ANIMASI CARD SAAT MUNCUL
    // ========================================

    const cards = document.querySelectorAll(
        ".info-card, .news-card, .contact-item"
    );

    const observer = new IntersectionObserver(
        function (entries) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    entry.target.classList.add("show");

                }

            });

        },
        {
            threshold: 0.15
        }
    );


    cards.forEach(function (card) {

        observer.observe(card);

    });


    // ========================================
    // KONFIRMASI MENU
    // ========================================

    const links = document.querySelectorAll("nav a");

    links.forEach(function (link) {

        link.addEventListener("click", function () {

            links.forEach(function (item) {

                item.classList.remove("clicked");

            });

            this.classList.add("clicked");

        });

    });


    // ========================================
    // TOMBOL KEMBALI KE ATAS
    // ========================================

    const backToTop = document.createElement("button");

    backToTop.innerHTML = "↑";

    backToTop.className = "back-to-top";

    document.body.appendChild(backToTop);


    window.addEventListener("scroll", function () {

        if (window.scrollY > 300) {

            backToTop.classList.add("show");

        } else {

            backToTop.classList.remove("show");

        }

    });


    backToTop.addEventListener("click", function () {

        window.scrollTo({

            top: 0,

            behavior: "smooth"

        });

    });


});
```