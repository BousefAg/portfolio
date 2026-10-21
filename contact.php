<?php
$pageTitle = 'Contact | Yousef Abdel Gawad';
$activePage = 'contact';
require __DIR__ . '/includes/header.php';
?>
<main class="content-page contact-page">
    <div class="container">
        <section class="contact-page-content" aria-labelledby="contact-title">
            <div class="contact-page-heading">
                <p class="eyebrow">Samenwerken?</p>
                <h1 id="contact-title">Laten we in contact komen</h1>
                <p>Heb je een vraag, een projectidee of wil je kennismaken? Kies hieronder hoe je contact wilt opnemen.</p>
            </div>
            <div class="contact-card-grid">
                <a class="contact-card contact-card-email" href="mailto:bousefabdel@gmail.com">
                    <span class="contact-card-icon" aria-hidden="true">@</span>
                    <span class="contact-card-label">E-mail</span>
                    <span class="contact-card-value">bousefabdel@gmail.com</span>
                    <span class="contact-card-action">Stuur een bericht <span aria-hidden="true">&rarr;</span></span>
                </a>
                <a class="contact-card" href="https://github.com/BousefAg" target="_blank" rel="noopener noreferrer">
                    <i class="devicon-github-original contact-card-icon" aria-hidden="true"></i>
                    <span class="contact-card-label">GitHub</span>
                    <span class="contact-card-value">Bekijk mijn projecten</span>
                    <span class="contact-card-action">Naar GitHub <span aria-hidden="true">&#8599;</span></span>
                </a>
                <a class="contact-card" href="https://www.linkedin.com/in/yousef-abdel-gawad-128072364/?isSelfProfile=true" target="_blank" rel="noopener noreferrer">
                    <i class="devicon-linkedin-plain contact-card-icon" aria-hidden="true"></i>
                    <span class="contact-card-label">LinkedIn</span>
                    <span class="contact-card-value">Bekijk mijn profiel</span>
                    <span class="contact-card-action">Naar LinkedIn <span aria-hidden="true">&#8599;</span></span>
                </a>
            </div>
        </section>
    </div>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
