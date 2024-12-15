document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.projects .card');
    cards.forEach((card) => {
        card.addEventListener('mouseover', () => {
            card.style.transform = 'scale(1.1)';
        });
        card.addEventListener('mouseout', () => {
            card.style.transform = 'scale(1)';
        });
    });
});
