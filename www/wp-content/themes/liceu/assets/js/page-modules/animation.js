document.addEventListener("DOMContentLoaded", () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains("animated--visible"))
                    entry.target.classList.add('show');

                if (entry.target.classList.contains("animated--grow"))
                    entry.target.classList.add('grow');

                if (entry.target.classList.contains("animated--down"))
                    entry.target.classList.add('down');
            }
        });
    });

    document.querySelectorAll('.animated').forEach(el => observer.observe(el));
});