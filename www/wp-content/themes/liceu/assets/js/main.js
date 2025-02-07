const $j = document.querySelector.bind(document),
    $$j = document.querySelectorAll.bind(document);
function isTouchDevice() {
    return "ontouchstart" in window || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
}
function menuPositions() {
    let e = document.querySelectorAll(".drop");
    e.forEach((e) => {
        let t = document.querySelectorAll("." + e.getAttribute("data-ref"));
        e.getAttributeNames().forEach((r) => {
            var a;
            let l,
                i = `calc(${
                    ((l = a = e.getAttribute(r)).includes("ref-w") && (l = l.replace("ref-w", t[0].clientWidth / 10 + "rem")),
                    l.includes("ref-h") && (l = l.replace("ref-h", t[0].clientHeight / 10 + "rem")),
                    l.includes("par-w") && (l = l.replace("par-w", e.parentElement.clientWidth / 10 + "rem")),
                    l.includes("par-h") && (l = l.replace("par-h", e.parentElement.clientHeight / 10 + "rem")),
                    l.includes("ref-t") && (l = l.replace("ref-t", t[0].offsetTop / 10 + "rem")),
                    l.includes("ref-l") && (l = l.replace("ref-l", t[0].offsetLeft / 10 + "rem")),
                    l.includes("par-t") && (l = l.replace("par-t", e.parentElement.offsetTop / 10 + "rem")),
                    l.includes("par-l") && (l = l.replace("par-l", e.parentElement.offsetLeft / 10 + "rem")),
                    l.includes("men-w") && (l = l.replace("men-w", e.clientWidth / 10 + "rem")),
                    l.includes("men-h") && (l = l.replace("men-h", e.clientHeight / 10 + "rem")),
                    l.includes("fat-w") && (l = l.replace("far-w", e.parentElement.parentElement.clientWidth / 10 + "rem")),
                    l.includes("fat-h") && (l = l.replace("fat-h", e.parentElement.parentElement.clientHeight / 10 + "rem")),
                    l.includes("h-header") && (l = l.replace("h-header", $j("header").clientHeight / 10 + "rem")),
                    l)
                })`;
            switch (r) {
                case "data-menu-width":
                    e.style.width = i;
                    break;
                case "data-menu-height":
                    e.style.height = i;
                    break;
                case "data-menu-top":
                    e.style.top = i;
                    break;
                case "data-menu-left":
                    e.style.left = i;
            }
        });
    });
}
function menuFunctions() {
    let e = document.querySelectorAll(".drop");
    e.forEach((e) => {
        let t = document.querySelectorAll("." + e.getAttribute("data-ref"));
        e.getAttributeNames().forEach((r) => {
            var a;
            let l,
                i = `calc(${
                    ((l = a = e.getAttribute(r)).includes("ref-w") && (l = l.replace("ref-w", t[0].clientWidth / 10 + "rem")),
                    l.includes("ref-h") && (l = l.replace("ref-h", t[0].clientHeight / 10 + "rem")),
                    l.includes("par-w") && (l = l.replace("par-w", e.parentElement.clientWidth / 10 + "rem")),
                    l.includes("par-h") && (l = l.replace("par-h", e.parentElement.clientHeight / 10 + "rem")),
                    l.includes("ref-t") && (l = l.replace("ref-t", t[0].offsetTop / 10 + "rem")),
                    l.includes("ref-l") && (l = l.replace("ref-l", t[0].offsetLeft / 10 + "rem")),
                    l.includes("par-t") && (l = l.replace("par-t", e.parentElement.offsetTop / 10 + "rem")),
                    l.includes("par-l") && (l = l.replace("par-l", e.parentElement.offsetLeft / 10 + "rem")),
                    l.includes("men-w") && (l = l.replace("men-w", e.clientWidth / 10 + "rem")),
                    l.includes("men-h") && (l = l.replace("men-h", e.clientHeight / 10 + "rem")),
                    l.includes("fat-w") && (l = l.replace("far-w", e.parentElement.parentElement.clientWidth / 10 + "rem")),
                    l.includes("fat-h") && (l = l.replace("fat-h", e.parentElement.parentElement.clientHeight / 10 + "rem")),
                    l.includes("h-header") && (l = l.replace("h-header", $j("header").clientHeight / 10 + "rem")),
                    l)
                })`;
            switch (r) {
                case "data-menu-width":
                    e.style.width = i;
                    break;
                case "data-menu-height":
                    e.style.height = i;
                    break;
                case "data-menu-top":
                    e.style.top = i;
                    break;
                case "data-menu-left":
                    e.style.left = i;
            }
        }),
            t.forEach((r) => {
                r.addEventListener("mouseenter", (r) => {
                    if (!isTouchDevice()) {
                        r.preventDefault(),
                            e.toggleAttribute("active", !0),
                            t.forEach((e) => {
                                e.toggleAttribute("active", !0);
                            });
                        let a = [...document.querySelectorAll(".drop[data-identifier='" + e.getAttribute("data-identifier") + "']")];
                        a.forEach((t) => {
                            t.isSameNode(e) || t.removeAttribute("active");
                        });
                    }
                }),
                    r.addEventListener("click", (r) => {
                        if (isTouchDevice()) {
                            r.preventDefault(),
                                e.toggleAttribute("active"),
                                t.forEach((e) => {
                                    e.toggleAttribute("active");
                                });
                            let a = [...document.querySelectorAll(".drop[data-identifier='" + e.getAttribute("data-identifier") + "']")];
                            a.forEach((t) => {
                                t.isSameNode(e) || t.removeAttribute("active");
                            });
                        }
                    });
            }),
            document.addEventListener("mousemove", (r) => {
                let a = 0 == [...t].filter((e) => e.isSameNode(r.target)).length;
                r.target.isSameNode(e) || !a || e.contains(r.target) || r.target.isSameNode($j("header")) || $j("header").contains(r.target) || (e.removeAttribute("active"), t.forEach((e) => e.removeAttribute("active")));
            });
    });
}
window.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("resize", function () {
        menuPositions();
    }),
        window.addEventListener("scroll", () => {
            window.scrollY > 50 ? document.querySelector(".header").classList.toggle("header--scrolled", !0) : document.querySelector(".header").classList.toggle("header--scrolled", !1);
        }),
        $j(".header__m-button").addEventListener("click", () => {
            $j(".header__m-button").toggleAttribute("data-active"), $j(".header__m-menu").toggleAttribute("data-active");
        }),
        $j(".footer__b-up").addEventListener("click", () => {
            window.scrollTo(0, 0);
        }),
        setTimeout(() => {
            menuFunctions();
        }, 250);
    if ($j("button[data-search]")) {
        $j("button[data-search]").addEventListener("click", () => {
            const searchInput = $j('input[name="search"]');

            searchInput.classList.toggle("visible")

            searchInput.addEventListener("keypress", function(event) {
                if (event.key === "Enter") {
                    event.preventDefault();

                    const searchValue = this.value.trim();
                    if (searchValue) {
                        window.location.href = `/pesquisa?search=${encodeURIComponent(searchValue)}`;
                    }
                }
            });
        });
    }
});
window.addEventListener("beforeunload", () => {
    $j(".transition").classList.add("transition--unload")
})
