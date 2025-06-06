function renderNoticia(noticia, container) {
    const link = document.createElement("a");
    link.href = noticia.url;
    link.className = "p-noticias__cartao";

    const img = document.createElement("img");
    img.src = noticia.img;
    img.alt = noticia.alt;
    img.title = noticia.alt;

    const category = document.createElement("h2");
    category.textContent = noticia.category;

    const contentDiv = document.createElement("div");

    const title = document.createElement("h3");
    title.textContent = noticia.title;

    const excerpt = document.createElement("p");
    excerpt.textContent = noticia.excerpt;

    const date = document.createElement("span");
    date.textContent = noticia.date;

    contentDiv.appendChild(title);
    contentDiv.appendChild(excerpt);
    contentDiv.appendChild(date);

    link.appendChild(img);
    link.appendChild(category);
    link.appendChild(contentDiv);

    container.appendChild(link);
}

document.addEventListener("DOMContentLoaded", () => {
    const newsContainer = document.querySelector(".p-noticias__lista");
    const newsButton = document.querySelector(".p-noticias__lista + button");

    const perPage = 6;

    let loading = false;

    newsButton.addEventListener("click", async () => {
        if (loading) return;

        loading = true;

        let offset = newsButton.getAttribute("data-offset");
        let category = newsButton.getAttribute("data-category");
        let tag = newsButton.getAttribute("data-tag");
        let search = newsButton.getAttribute("data-search");

        let url =
            search
                ? `/wp-json/custom/v1/recent-posts?per_page=${perPage}&offset=${offset}&search=${search}`
                :
                tag
                    ? `/wp-json/custom/v1/recent-posts?per_page=${perPage}&offset=${offset}&tag=${tag}`
                    : `/wp-json/custom/v1/recent-posts?per_page=${perPage}&offset=${offset}&category=${category}`;

        try {
            newsButton.classList.add("loading");

            let response = await fetch(url);
            let data = await response.json();

            data.posts.map(noticia => {
                renderNoticia(noticia, newsContainer, category);
            });

            newsButton.setAttribute("data-offset", +offset + 6);

            if (+offset + 6 >= data.total_posts) {
                newsButton.style.display = "none";
            }
        } catch (error) {
            console.error("Erro ao buscar os posts recentes:", error);
        } finally {
            newsButton.classList.remove("loading");
            loading = false;
        }
    });
});
