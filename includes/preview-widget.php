<?php
/**
 * Preview Widget Component - Wayuuglish
 * Interactive mini vocabulary lesson preview: "Anaayawatchi" (Gracias / Thank you)
 */
$sample_lesson = [
    'wayuu' => 'Anaayawatchi',
    'spanish' => __t('wayuuglish-demo-meaning'),
    'question' => __t('wayuuglish-demo-question'),
    'audio_text' => 'Thank you',
    'options' => [
        ['text' => __t('wayuuglish-demo-opt-a'), 'correct' => false],
        ['text' => __t('wayuuglish-demo-opt-b'), 'correct' => true],
        ['text' => __t('wayuuglish-demo-opt-c'), 'correct' => false],
        ['text' => __t('wayuuglish-demo-opt-d'), 'correct' => false]
    ]
];
?>

<div class="preview-container">
    <div class="preview-header">
        <span class="preview-pill" style="display: inline-flex; align-items: center; gap: 6px;">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                <path d="M7 2v11h3v9l7-12h-4l4-8z"/>
            </svg>
            <span><?= htmlspecialchars(__t('wayuuglish-demo-badge')) ?></span>
        </span>
        <span style="font-weight: 700; font-size: 14px; color: var(--color-slug);"><?= htmlspecialchars(__t('wayuuglish-demo-lesson-title')) ?></span>
    </div>

    <div class="flashcard">
        <div class="flashcard-wayuu">
            <span><?= htmlspecialchars($sample_lesson['wayuu']) ?></span>
            <button class="audio-btn" id="playAudioBtn" title="Escuchar / Listen" aria-label="Escuchar / Listen">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z"/>
                </svg>
            </button>
        </div>
        <div class="flashcard-spanish"><?= htmlspecialchars($sample_lesson['spanish']) ?></div>
        <div class="flashcard-instruction"><?= htmlspecialchars($sample_lesson['question']) ?></div>
    </div>

    <div class="quiz-options">
        <?php foreach ($sample_lesson['options'] as $index => $option): ?>
            <button class="quiz-option-btn" data-correct="<?= $option['correct'] ? 'true' : 'false' ?>">
                <span style="opacity: 0.6; font-weight: 800; margin-right: 6px;"><?= chr(65 + $index) ?>.</span>
                <span><?= htmlspecialchars($option['text']) ?></span>
            </button>
        <?php endforeach; ?>
    </div>
    
    <div id="quizFeedback" 
         data-msg-success="<?= htmlspecialchars(__t('wayuuglish-demo-success')) ?>" 
         data-msg-error="<?= htmlspecialchars(__t('wayuuglish-demo-error')) ?>" 
         style="margin-top: 16px; text-align: center; font-weight: 800; min-height: 28px; display: flex; align-items: center; justify-content: center; gap: 8px;"></div>
</div>
