const sliderCards = document.querySelector(".ensino__cards");
const indicators = document.querySelectorAll(".indicator");

let currentSlide = 0;
let isDragging = false;
let startPos = 0;
let currentTranslate = 0;
let prevTranslate = 0;
let isSliderEnabled = window.innerWidth <= 9999;

function updateSlider(slideIndex) {
    if (!isSliderEnabled) return;

    const offset = -slideIndex * 36.4;
    sliderCards.style.transform = `translateX(${offset}rem)`;

    indicators.forEach((indicator, index) => {
        indicator.classList.toggle("active", index === slideIndex);
    });

    currentSlide = slideIndex;
}

indicators.forEach((indicator, index) => {
    indicator.addEventListener("click", () => {
        if (isSliderEnabled) updateSlider(index);
    });
});

updateSlider(currentSlide);

function setPositionByIndex() {
    if (!isSliderEnabled) return;

    currentTranslate = -currentSlide * sliderCards.clientWidth;
    sliderCards.style.transform = `translateX(${currentTranslate}px)`;
}

function touchStart(index) {
    return function (event) {
        if (!isSliderEnabled) return;

        isDragging = true;
        startPos = getPositionX(event);
        sliderCards.classList.add("grabbing");
    };
}

function touchMove(event) {
    if (isDragging && isSliderEnabled) {
        const currentPosition = getPositionX(event);
        currentTranslate = prevTranslate + currentPosition - startPos;
        sliderCards.style.transform = `translateX(${currentTranslate}px)`;
    }
}

function touchEnd() {
    if (!isSliderEnabled) return;

    isDragging = false;
    sliderCards.classList.remove("grabbing");

    const movedBy = currentTranslate - prevTranslate;
    if (movedBy < -100 && currentSlide < indicators.length - 1) {
        currentSlide += 1;
    }
    if (movedBy > 100 && currentSlide > 0) {
        currentSlide -= 1;
    }

    setPositionByIndex();
    updateSlider(currentSlide);
    prevTranslate = currentTranslate;
}

function getPositionX(event) {
    return event.type.includes("mouse")
        ? event.pageX
        : event.touches[0].clientX;
}

sliderCards.addEventListener("mousedown", touchStart(0));
sliderCards.addEventListener("mousemove", touchMove);
sliderCards.addEventListener("mouseup", touchEnd);
sliderCards.addEventListener("mouseleave", () => {
    if (isDragging) touchEnd();
});

sliderCards.addEventListener("touchstart", touchStart(0));
sliderCards.addEventListener("touchmove", touchMove);
sliderCards.addEventListener("touchend", touchEnd);

function checkSliderStatus() {
    isSliderEnabled = window.innerWidth <= 9999;

    if (!isSliderEnabled) {
        sliderCards.style.transform = "translateX(0)";
        indicators.forEach((indicator) => indicator.classList.remove("active"));
        indicators[0].classList.add("active");
        currentSlide = 0;
    }
}

window.addEventListener("resize", checkSliderStatus);
