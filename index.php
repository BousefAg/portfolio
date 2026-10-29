<?php
$route = $_GET['route'] ?? '';
if (!is_string($route) || $route === '') {
    $requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    $route = is_string($requestPath) ? basename(rtrim($requestPath, '/')) : '';
}

$routeFiles = [
    'projects' => 'projects.php',
    'contact' => 'contact.php',
    'project' => 'project.php',
];

if (isset($routeFiles[$route])) {
    require __DIR__ . '/' . $routeFiles[$route];
    return;
}

$pageTitle = 'Yousef Abdel Gawad | Software Developer Portfolio';
$activePage = 'home';
require __DIR__ . '/projects-data.php';
require __DIR__ . '/includes/header.php';
?>
<main id="home">
    <section class="hero">
        <div class="hero-backdrop"></div>
        <div class="container hero-content">
            <p class="eyebrow">Software Developer</p>
            <h1>Yousef Abdel Gawad</h1>
            <p class="subtitle">Ik bouw websites en applicaties en blijf mezelf ontwikkelen.</p>
            <div class="hero-actions">
                <a class="cta-button primary" href="projects">Bekijk mijn projecten</a>
                <a class="cta-button secondary" href="contact">Contact</a>
                <a class="cta-button secondary" href="images/CV_Yousef_NL.pdf" target="_blank" rel="noopener noreferrer">Mijn CV</a>
            </div>
        </div>
    </section>

    <section class="home-intro" aria-labelledby="home-intro-title">
        <div class="container home-intro-layout">
            <div class="home-intro-copy">
                <p class="eyebrow">Over mij</p>
                <h2 id="home-intro-title">Van idee naar website</h2>
                <p>Ik ben een software developer in opleiding die graag websites en applicaties bouwt. Daarbij combineer ik vormgeving met techniek en leer ik bij ieder project nieuwe dingen.</p>
            </div>
        </div>
    </section>

    <section class="skills" aria-labelledby="skills-title">
        <div class="container">
            <div class="skills-heading">
                <div>
                    <p class="eyebrow">Technologieën</p>
                    <h2 id="skills-title">Waar ik mee werk</h2>
                </div>
            </div>
            <div class="skills-marquee" role="region" aria-label="Technologieën waar ik mee werk">
                <div class="skills-track">
                    <?php for ($group = 0; $group < 2; $group++): ?>
                        <ul class="skills-group"<?= $group === 1 ? ' aria-hidden="true"' : '' ?>>
                            <li class="skill"><i class="devicon-html5-plain" aria-hidden="true"></i><span>HTML5</span></li>
                            <li class="skill"><i class="devicon-javascript-plain" aria-hidden="true"></i><span>JavaScript</span></li>
                            <li class="skill"><i class="devicon-react-original" aria-hidden="true"></i><span>React</span></li>
                            <li class="skill"><i class="devicon-docker-plain" aria-hidden="true"></i><span>Docker</span></li>
                            <li class="skill"><i class="devicon-github-original" aria-hidden="true"></i><span>GitHub</span></li>
                            <li class="skill"><i class="devicon-wordpress-plain" aria-hidden="true"></i><span>WordPress</span></li>
                            <li class="skill"><i class="devicon-php-plain" aria-hidden="true"></i><span>PHP</span></li>
                            <li class="skill"><i class="devicon-css3-plain" aria-hidden="true"></i><span>CSS</span></li>
                            <li class="skill"><i class="devicon-git-plain" aria-hidden="true"></i><span>Git</span></li>
                            <li class="skill"><i class="devicon-flutter-plain" aria-hidden="true"></i><span>Flutter</span></li>
                            <li class="skill"><i class="devicon-dart-plain" aria-hidden="true"></i><span>Dart</span></li>
                        </ul>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="home-featured projects" aria-labelledby="featured-title">
        <div class="container">
            <div class="projects-heading">
                <div>
                    <p class="eyebrow">Een greep uit mijn werk</p>
                    <h2 id="featured-title">Uitgelichte projecten</h2>
                </div>
                <a class="all-projects-link" href="projects">Bekijk alle projecten <span aria-hidden="true">&rarr;</span></a>
            </div>
            <div class="projects-grid">
                <?php foreach (array_slice($projects, 0, 2, true) as $projectId => $project): ?>
                    <article class="project-card">
                        <a class="project-image-link" href="project?project=<?= rawurlencode($projectId) ?>" aria-label="Bekijk details van <?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?>">
                            <div class="project-image">
                                <img src="<?= htmlspecialchars($project['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($project['alt'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                            </div>
                        </a>
                        <div class="project-info">
                            <p class="project-type"><?= htmlspecialchars($project['type'], ENT_QUOTES, 'UTF-8') ?></p>
                            <h3><?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                            <p><?= htmlspecialchars($project['summary'], ENT_QUOTES, 'UTF-8') ?></p>
                            <a class="project-link" href="project?project=<?= rawurlencode($projectId) ?>">
                                Bekijk details <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="home-contact" aria-labelledby="home-contact-title">
        <div class="container">
            <div class="home-contact-panel">
                <div class="home-contact-copy">
                    <p class="eyebrow">Contact</p>
                    <h2 id="home-contact-title">Zin om samen iets te maken?</h2>
                    <p>Heb je een vraag of een idee? Stuur me gerust een bericht.</p>
                    <a class="home-contact-email" href="mailto:bousefabdel@gmail.com">
                        <span>Stuur me een e-mail</span>
                        <span aria-hidden="true">&#8599;</span>
                    </a>
                </div>
                <div class="home-contact-aside">
                    <p class="home-contact-label">Volg mijn werk</p>
                    <div class="home-contact-links">
                        <a href="https://github.com/BousefAg" target="_blank" rel="noopener noreferrer">
                            <span><small><i class="devicon-github-original" aria-hidden="true"></i> GitHub</small><strong>@BousefAg</strong></span>
                            <span class="home-contact-arrow" aria-hidden="true">&#8599;</span>
                        </a>
                        <a href="https://www.linkedin.com/in/yousef-abdel-gawad-128072364/?isSelfProfile=true" target="_blank" rel="noopener noreferrer">
                            <span><small><i class="devicon-linkedin-plain"></i> LinkedIn</small><strong>Bekijk mijn profiel</strong></span>
                            <span class="home-contact-arrow" aria-hidden="true">&#8599;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
