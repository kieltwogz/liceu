window.addEventListener("DOMContentLoaded", function () {
    new Splide("#aprovados", {
        perPage: 3,
        arrows: false,
        gap: "1.6rem",
        breakpoints: {
            1100: {
                perPage: 2,
            },
            800: {
                perPage: 1,
            },
        },
    }).mount();
});
