<?php
require __DIR__ . '/projects-data.php';

$projectId = $_GET['project'] ?? '';
$project = is_string($projectId) ? ($projects[$projectId] ?? null) : null;

if ($project === null) {
    http_response_code(404);
}

$pageTitle = $project
    ? $project['title'] . ' | Yousef Abdel Gawad'
    : 'Project niet gevonden | Yousef Abdel Gawad';
$activePage = 'projects';
require __DIR__ . '/includes/header.php';
?>
<main class="content-page project-detail-page">
    <div class="container">
        <?php if ($project === null): ?>
            <section class="not-found">
                <p class="eyebrow">404</p>
                <h1>Project niet gevonden</h1>
                <p>Dit project bestaat niet (meer) in mijn portfolio.</p>
                <a class="cta-button primary" href="projects">Terug naar projecten</a>
            </section>
        <?php else: ?>
            <a class="back-link" href="projects">&larr; Alle projecten</a>
            <div class="project-detail">
                <div class="project-detail-copy">
                    <p class="eyebrow"><?= htmlspecialchars($project['type'], ENT_QUOTES, 'UTF-8') ?></p>
                    <h1><?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?></h1>
                    <p class="project-detail-summary"><?= htmlspecialchars($project['summary'], ENT_QUOTES, 'UTF-8') ?></p>
                    <div class="project-story">
                        <?php foreach ($project['sections'] as $section): ?>
                            <section class="project-story-section">
                                <h2><?= htmlspecialchars($section['heading'], ENT_QUOTES, 'UTF-8') ?></h2>
                                <p><?= htmlspecialchars($section['text'], ENT_QUOTES, 'UTF-8') ?></p>
                            </section>
                        <?php endforeach; ?>
                    </div>
                    <h2>Gebruikte technologieën</h2>
                    <div class="tech-tags" aria-label="Gebruikte technologieën">
                        <?php foreach ($project['technologies'] as $technology): ?>
                            <span><?= htmlspecialchars($technology, ENT_QUOTES, 'UTF-8') ?></span>
                        <?php endforeach; ?>
                    </div>
                    <a class="cta-button primary" href="<?= htmlspecialchars($project['url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                        Open het project <span aria-hidden="true">&nbsp;&#8599;</span>
                    </a>
                </div>
                <section class="project-gallery" aria-labelledby="project-gallery-title">
                    <div class="project-gallery-grid">
                        <a class="project-detail-image" href="<?= htmlspecialchars($project['url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" aria-label="Open projectwebsite: <?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?>">
                            <img src="<?= htmlspecialchars($project['detail_image'] ?? $project['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($project['detail_alt'] ?? $project['alt'], ENT_QUOTES, 'UTF-8') ?>">
                            <span class="project-image-overlay" aria-hidden="true">Bezoek de website <span>&#8599;</span></span>
                        </a>
                        <?php if (!empty($project['gallery'])): ?>
                            <?php foreach ($project['gallery'] as $galleryImage): ?>
                                <figure>
                                    <img src="<?= htmlspecialchars($galleryImage['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($galleryImage['alt'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                                    <figcaption><?= htmlspecialchars($galleryImage['caption'], ENT_QUOTES, 'UTF-8') ?></figcaption>
                                </figure>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </section>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
