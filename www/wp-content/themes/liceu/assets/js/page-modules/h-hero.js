window.addEventListener("DOMContentLoaded", function () {
    var splide = new Splide(".splide", {
        perPage: 1,
        arrows: false,
        type: "fade"
    });
    splide.mount();
});

document.querySelectorAll(".video__player").forEach((button) => {
    button.addEventListener("click", function () {
        const videoId = this.id;
        const container = this.parentElement;

        container.innerHTML = `
            <iframe width="500" height="375"
                src="https://www.youtube.com/embed/${videoId}?autoplay=1"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                sandbox="allow-scripts allow-same-origin"
            >
            </iframe>
        `;
    });
});

document.querySelectorAll(".video__thumbnail").forEach((button) => {
    button.addEventListener("click", function () {
        const container = this.parentElement;
        const button = container.querySelector(".video__player");
        const videoId = button.id;

        container.innerHTML = `
            <iframe width="500" height="375"
                src="https://www.youtube.com/embed/${videoId}?autoplay=1"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                sandbox="allow-scripts allow-same-origin"
            >
            </iframe>
        `;
    });
});