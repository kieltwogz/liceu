window.addEventListener("DOMContentLoaded", function () {
    new Splide("#ensino", {
        perPage: 3,
        fixedHeight: "48rem",
        arrows: false,
        gap: "1.6rem",
        breakpoints: {
            1100: {
                perPage: 2,
            },
            600: {
                fixedWidth: "95%",
                fixedHeight: "30rem",
                perPage: 1,
            },
        },
    }).mount();
});
