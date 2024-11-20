
document.addEventListener('DOMContentLoaded', function() {
    // Your JavaScript code here
    const modal = document.getElementById('modal');
    const modalOverlay = document.getElementById('modalOverlay');
    const learnMoreBtn = document.getElementById('learnMoreBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');

// Open modal
    learnMoreBtn.addEventListener('click', () => {
        modal.classList.add('active');
        modalOverlay.classList.add('active');
    });

// Close modal
    closeModalBtn.addEventListener('click', () => {
        modal.classList.remove('active');
        modalOverlay.classList.remove('active');
    });

// Close modal by clicking overlay
    modalOverlay.addEventListener('click', () => {
        modal.classList.remove('active');
        modalOverlay.classList.remove('active');
    });
});