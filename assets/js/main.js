/**
 * Wayuuglish - Main JavaScript
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Audio Pronunciation Button (using Web Speech Synthesis API for "Thank you")
  const playAudioBtn = document.getElementById('playAudioBtn');
  if (playAudioBtn) {
    playAudioBtn.addEventListener('click', () => {
      if ('speechSynthesis' in window) {
        const utterance = new SpeechSynthesisUtterance("Thank you");
        utterance.lang = 'en-US';
        utterance.rate = 0.9;
        window.speechSynthesis.speak(utterance);
      } else {
        alert("Audio: Thank you");
      }
    });
  }

  // 2. Interactive Mini-Quiz Handler
  const quizButtons = document.querySelectorAll('.quiz-option-btn');
  const quizFeedback = document.getElementById('quizFeedback');

  quizButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      // Reset all buttons
      quizButtons.forEach(b => b.classList.remove('correct', 'wrong'));

      const isCorrect = btn.dataset.correct === 'true';

      if (isCorrect) {
        btn.classList.add('correct');
        if (quizFeedback) {
          const successMsg = quizFeedback.dataset.msgSuccess || 'Excellent! "Thank you" is correct.';
          quizFeedback.style.color = '#2E7D32';
          quizFeedback.innerHTML = `
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
            <span>${successMsg}</span>
          `;
        }
      } else {
        btn.classList.add('wrong');
        if (quizFeedback) {
          const errorMsg = quizFeedback.dataset.msgError || 'Try again! Check the available options.';
          quizFeedback.style.color = '#FF4B4B';
          quizFeedback.innerHTML = `
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
              <line x1="18" y1="6" x2="6" y2="18"></line>
              <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
            <span>${errorMsg}</span>
          `;
        }
      }
    });
  });

  // 3. FAQ Accordions Toggle
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    item.addEventListener('click', () => {
      const isActive = item.classList.contains('active');
      faqItems.forEach(i => i.classList.remove('active'));
      
      if (!isActive) {
        item.classList.add('active');
      }
    });
  });
});
