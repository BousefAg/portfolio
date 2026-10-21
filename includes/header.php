<?php
$pageTitle = $pageTitle ?? 'Yousef Abdel Gawad | Software Developer Portfolio';
$activePage = $activePage ?? '';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.16.0/devicon.min.css">
    <link rel="stylesheet" href="style.css?v=3">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
</head>
<body>
    <div class="page-wrap">
        <header class="site-header">
            <div class="container header-inner">
                <a href="index.php" class="brand-logo-text">YousefAbdelGawad<span>.nl</span></a>
                <nav class="main-nav" aria-label="Hoofdnavigatie">
                    <ul>
                        <li><a href="index.php"<?= $activePage === 'home' ? ' aria-current="page"' : '' ?>>Home</a></li>
                        <li><a href="projects.php"<?= $activePage === 'projects' ? ' aria-current="page"' : '' ?>>Projecten</a></li>
                        <li><a href="contact.php"<?= $activePage === 'contact' ? ' aria-current="page"' : '' ?>>Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
