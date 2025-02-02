const $j = document.querySelector.bind(document);
const $$j = document.querySelectorAll.bind(document);

window.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("resize", function () {
        menuPositions();
    });

    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            document
                .querySelector(".header")
                .classList.toggle("header--scrolled", true);
        } else {
            document
                .querySelector(".header")
                .classList.toggle("header--scrolled", false);
        }
    });

    $j(".header__m-button").addEventListener("click", () => {
        $j(".header__m-button").toggleAttribute("data-active");
        $j(".header__m-menu").toggleAttribute("data-active");
    });

    $j(".footer__b-up").addEventListener("click", () => {
        window.scrollTo(0, 0);
    });

    setTimeout(() => {
        menuFunctions();
    }, 250);
});

function isTouchDevice() {
    return (
        "ontouchstart" in window ||
        navigator.maxTouchPoints > 0 ||
        navigator.msMaxTouchPoints > 0
    );
}

function menuPositions() {
    const menus = document.querySelectorAll(".drop");

    menus.forEach((value) => {
        const refElement = document.querySelectorAll(
            "." + value.getAttribute("data-ref")
        );

        function translateProps(templateString) {
            let p = templateString;
            if (p.includes("ref-w"))
                p = p.replace("ref-w", refElement[0].clientWidth / 10 + "rem");
            if (p.includes("ref-h"))
                p = p.replace("ref-h", refElement[0].clientHeight / 10 + "rem");
            if (p.includes("par-w"))
                p = p.replace(
                    "par-w",
                    value.parentElement.clientWidth / 10 + "rem"
                );
            if (p.includes("par-h"))
                p = p.replace(
                    "par-h",
                    value.parentElement.clientHeight / 10 + "rem"
                );
            if (p.includes("ref-t"))
                p = p.replace("ref-t", refElement[0].offsetTop / 10 + "rem");
            if (p.includes("ref-l"))
                p = p.replace("ref-l", refElement[0].offsetLeft / 10 + "rem");
            if (p.includes("par-t"))
                p = p.replace(
                    "par-t",
                    value.parentElement.offsetTop / 10 + "rem"
                );
            if (p.includes("par-l"))
                p = p.replace(
                    "par-l",
                    value.parentElement.offsetLeft / 10 + "rem"
                );
            if (p.includes("men-w"))
                p = p.replace("men-w", value.clientWidth / 10 + "rem");
            if (p.includes("men-h"))
                p = p.replace("men-h", value.clientHeight / 10 + "rem");
            if (p.includes("fat-w"))
                p = p.replace(
                    "far-w",
                    value.parentElement.parentElement.clientWidth / 10 + "rem"
                );
            if (p.includes("fat-h"))
                p = p.replace(
                    "fat-h",
                    value.parentElement.parentElement.clientHeight / 10 + "rem"
                );
            if (p.includes("h-header"))
                p = p.replace(
                    "h-header",
                    $j("header").clientHeight / 10 + "rem"
                );
            return p;
        }

        function getPosSizeAttributes() {
            value.getAttributeNames().forEach((attr) => {
                let val = `calc(${translateProps(value.getAttribute(attr))})`;
                switch (attr) {
                    case "data-menu-width":
                        value.style.width = val;
                        break;
                    case "data-menu-height":
                        value.style.height = val;
                        break;
                    case "data-menu-top":
                        value.style.top = val;
                        break;
                    case "data-menu-left":
                        value.style.left = val;
                        break;
                }
            });
        }
        getPosSizeAttributes();
    });
}

function menuFunctions() {
    const menus = document.querySelectorAll(".drop");

    menus.forEach((value) => {
        const refElement = document.querySelectorAll(
            "." + value.getAttribute("data-ref")
        );

        function translateProps(templateString) {
            let p = templateString;
            if (p.includes("ref-w"))
                p = p.replace("ref-w", refElement[0].clientWidth / 10 + "rem");
            if (p.includes("ref-h"))
                p = p.replace("ref-h", refElement[0].clientHeight / 10 + "rem");
            if (p.includes("par-w"))
                p = p.replace(
                    "par-w",
                    value.parentElement.clientWidth / 10 + "rem"
                );
            if (p.includes("par-h"))
                p = p.replace(
                    "par-h",
                    value.parentElement.clientHeight / 10 + "rem"
                );
            if (p.includes("ref-t"))
                p = p.replace("ref-t", refElement[0].offsetTop / 10 + "rem");
            if (p.includes("ref-l"))
                p = p.replace("ref-l", refElement[0].offsetLeft / 10 + "rem");
            if (p.includes("par-t"))
                p = p.replace(
                    "par-t",
                    value.parentElement.offsetTop / 10 + "rem"
                );
            if (p.includes("par-l"))
                p = p.replace(
                    "par-l",
                    value.parentElement.offsetLeft / 10 + "rem"
                );
            if (p.includes("men-w"))
                p = p.replace("men-w", value.clientWidth / 10 + "rem");
            if (p.includes("men-h"))
                p = p.replace("men-h", value.clientHeight / 10 + "rem");
            if (p.includes("fat-w"))
                p = p.replace(
                    "far-w",
                    value.parentElement.parentElement.clientWidth / 10 + "rem"
                );
            if (p.includes("fat-h"))
                p = p.replace(
                    "fat-h",
                    value.parentElement.parentElement.clientHeight / 10 + "rem"
                );
            if (p.includes("h-header"))
                p = p.replace(
                    "h-header",
                    $j("header").clientHeight / 10 + "rem"
                );
            return p;
        }

        function getPosSizeAttributes() {
            value.getAttributeNames().forEach((attr) => {
                let val = `calc(${translateProps(value.getAttribute(attr))})`;
                switch (attr) {
                    case "data-menu-width":
                        value.style.width = val;
                        break;
                    case "data-menu-height":
                        value.style.height = val;
                        break;
                    case "data-menu-top":
                        value.style.top = val;
                        break;
                    case "data-menu-left":
                        value.style.left = val;
                        break;
                }
            });
        }
        getPosSizeAttributes();

        refElement.forEach((ref) => {
            ref.addEventListener("mouseenter", (e) => {
                if (!isTouchDevice()) {
                    e.preventDefault();
                    value.toggleAttribute("active", true);
                    refElement.forEach((ref) => {
                        ref.toggleAttribute("active", true);
                    });

                    const others = [
                        ...document.querySelectorAll(
                            ".drop[data-identifier='" +
                                value.getAttribute("data-identifier") +
                                "']"
                        ),
                    ];
                    others.forEach((v) => {
                        if (v.isSameNode(value)) return;
                        v.removeAttribute("active");
                    });
                }
            });
            ref.addEventListener("click", (e) => {
                if (isTouchDevice()) {
                    e.preventDefault();
                    value.toggleAttribute("active");
                    refElement.forEach((ref) => {
                        ref.toggleAttribute("active");
                    });

                    const others = [
                        ...document.querySelectorAll(
                            ".drop[data-identifier='" +
                                value.getAttribute("data-identifier") +
                                "']"
                        ),
                    ];
                    others.forEach((v) => {
                        if (v.isSameNode(value)) return;
                        v.removeAttribute("active");
                    });
                }
            });
        });

        document.addEventListener("mousemove", (e) => {
            const ref = [...refElement];
            const bool_ = ref.filter((v) => v.isSameNode(e.target)).length == 0;
            if (
                !e.target.isSameNode(value) &&
                bool_ &&
                !value.contains(e.target) &&
                !e.target.isSameNode($j("header")) &&
                !$j("header").contains(e.target)
            ) {
                value.removeAttribute("active");
                refElement.forEach((ref) => ref.removeAttribute("active"));
            }
        });
    });
}
