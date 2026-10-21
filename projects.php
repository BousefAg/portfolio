<?php
require __DIR__ . '/projects-data.php';
$pageTitle = 'Projecten | Yousef Abdel Gawad';
$activePage = 'projects';
require __DIR__ . '/includes/header.php';
?>
<main class="content-page projects">
    <div class="container">
        <div class="projects-heading page-heading">
            <div>
                <p class="eyebrow">Geselecteerd werk</p>
                <h1>Mijn projecten</h1>
            </div>
            <p>Bekijk een selectie van mijn websites en applicaties.</p>
        </div>
        <p class="projects-notice" role="note">Sommige oudere projecten zijn niet geoptimaliseerd voor mobiel. Voor de beste ervaring kun je ze op een groter scherm bekijken.</p>
        <div class="projects-grid">
            <?php foreach ($projects as $projectId => $project): ?>
                <article class="project-card">
                    <a class="project-image-link" href="project.php?project=<?= rawurlencode($projectId) ?>" aria-label="Bekijk details van <?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?>">
                        <div class="project-image">
                            <img src="<?= htmlspecialchars($project['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($project['alt'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                        </div>
                    </a>
                    <div class="project-info">
                        <p class="project-type"><?= htmlspecialchars($project['type'], ENT_QUOTES, 'UTF-8') ?></p>
                        <h2><?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                        <p><?= htmlspecialchars($project['summary'], ENT_QUOTES, 'UTF-8') ?></p>
                        <div class="tech-tags" aria-label="Gebruikte technologieën">
                            <?php foreach ($project['technologies'] as $technology): ?>
                                <span><?= htmlspecialchars($technology, ENT_QUOTES, 'UTF-8') ?></span>
                            <?php endforeach; ?>
                        </div>
                        <a class="project-link" href="project.php?project=<?= rawurlencode($projectId) ?>">
                            Bekijk details <span aria-hidden="true">&#8594;</span>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
        <a class="more-projects" href="https://github.com/BousefAg" target="_blank" rel="noopener noreferrer">
            <span>Meer projecten op GitHub</span>
            <span class="more-projects-arrow" aria-hidden="true">&#8599;</span>
        </a>
    </div>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
