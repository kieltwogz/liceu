window.addEventListener("DOMContentLoaded", function () {
    new Splide("#ensino", {
        perPage: 2,
        fixedWidth: "35.6rem",
        fixedHeight: "48rem",
        arrows: false,
        gap: "1.6rem",
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
    }).mount();
});
