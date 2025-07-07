window.addEventListener("DOMContentLoaded", function () {
    var splide = new Splide(".splide", {
        perPage: 3,
        // fixedWidth: "32rem",
        fixedHeight: "36rem",
        arrows: false,
        gap: "2.8rem",
        autoplay: true,
        interval: 3000,
        breakpoints: {
            1100: {
                perPage: 2,
            },
            600: {
                fixedWidth: "100%",
                fixedHeight: "20rem",
                perPage: 1,
            },
        },
    });
    splide.mount();
});
