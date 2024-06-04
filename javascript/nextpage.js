document.addEventListener('DOMContentLoaded', function() {
    const page1 = document.getElementById('page1');
    const page2 = document.getElementById('page2');
    const nextButton = document.getElementById('next');
    const prevButton = document.getElementById('prev');

    if (nextButton) {
        nextButton.addEventListener('click', function() {
            page1.style.transform = 'translateX(-100%)';
            page2.style.transform = 'translateX(0)';
        });
    }

    if (prevButton) {
        prevButton.addEventListener('click', function() {
            page1.style.transform = 'translateX(0)';
            page2.style.transform = 'translateX(100%)';
        });
    }
});
