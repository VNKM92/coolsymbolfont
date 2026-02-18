// Toggle mobile menu
document.getElementById("menu-toggle").addEventListener("click", function () {
    document.getElementById("mobile-menu").classList.toggle("hidden");
});

// Copy symbol on click
document.querySelectorAll(".symbol-card").forEach(card => {
    card.addEventListener("click", () => {
        const text = card.textContent.trim();
        navigator.clipboard.writeText(text).then(() => {
            card.classList.add("bg-green-100");
            setTimeout(() => card.classList.remove("bg-green-100"), 500);
        });
    });
});