<?php
session_start();

$formValues = ['name' => '', 'email' => '', 'message' => ''];
$formErrors = [];
$contactStatus = $_SESSION['contact_form_status'] ?? '';
unset($_SESSION['contact_form_status']);

if (!isset($_SESSION['contact_form_token']) || !is_string($_SESSION['contact_form_token'])) {
    $_SESSION['contact_form_token'] = bin2hex(random_bytes(32));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($formValues as $field => $defaultValue) {
        $submittedValue = $_POST[$field] ?? '';
        $formValues[$field] = is_string($submittedValue) ? trim($submittedValue) : '';
    }

    $submittedToken = $_POST['csrf_token'] ?? '';
    if (
        !is_string($submittedToken)
        || !hash_equals($_SESSION['contact_form_token'], $submittedToken)
    ) {
        http_response_code(400);
        $formErrors[] = 'Het formulier is verlopen. Controleer je gegevens en probeer het opnieuw.';
    } else {
        $name = $formValues['name'];
        $email = $formValues['email'];
        $message = $formValues['message'];

        if ($name === '' || strlen($name) > 400) {
            $formErrors[] = 'Vul je naam in (maximaal 100 tekens).';
        }

        if (
            $email === ''
            || strlen($email) > 254
            || filter_var($email, FILTER_VALIDATE_EMAIL) === false
        ) {
            $formErrors[] = 'Vul een geldig e-mailadres in.';
        }

        if ($message === '' || strlen($message) > 10000) {
            $formErrors[] = 'Vul een bericht in (maximaal 2500 tekens).';
        }

        if ($formErrors === []) {
            $mailBody = "Naam: {$name}\r\nE-mailadres: {$email}\r\n\r\nBericht:\r\n{$message}";
            $mailHeaders = [
                'From: Yousef Abdel Gawad <bousefabdel@gmail.com>',
                "Reply-To: {$email}",
                'Content-Type: text/plain; charset=UTF-8',
            ];

            set_error_handler(static function (int $severity, string $message, string $file, int $line): bool {
                if ((error_reporting() & $severity) === 0) {
                    return false;
                }

                throw new ErrorException($message, 0, $severity, $file, $line);
            });

            try {
                $mailSent = mail(
                    'bousefabdel@gmail.com',
                    'Nieuw bericht via je portfolio',
                    $mailBody,
                    implode("\r\n", $mailHeaders)
                );
            } catch (ErrorException $exception) {
                error_log('Contact form mail() failed: ' . $exception->getMessage());
                $mailSent = false;
            } finally {
                restore_error_handler();
            }

            if ($mailSent) {
                $_SESSION['contact_form_status'] = 'success';
                $_SESSION['contact_form_token'] = bin2hex(random_bytes(32));
                header('Location: contact', true, 303);
                exit;
            }

            $formErrors[] = 'Je bericht kon niet worden verstuurd omdat de mailserver niet bereikbaar is. Probeer het later opnieuw of mail rechtstreeks naar bousefabdel@gmail.com.';
        }
    }

    $_SESSION['contact_form_token'] = bin2hex(random_bytes(32));
}

$contactFormToken = $_SESSION['contact_form_token'];
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
            <?php if ($contactStatus === 'success'): ?>
                <p class="contact-form-status success" role="status">Bedankt! Je bericht is verstuurd.</p>
            <?php endif; ?>
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
            <section class="contact-form-section" aria-labelledby="contact-form-title">
                <h2 id="contact-form-title">Stuur me een bericht</h2>
                <p>Vul je gegevens in en ik neem zo snel mogelijk contact met je op.</p>
                <?php if ($formErrors !== []): ?>
                    <div class="contact-form-status error" role="alert">
                        <ul>
                            <?php foreach ($formErrors as $error): ?>
                                <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <form class="contact-form" action="contact" method="post">
                    <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($contactFormToken, ENT_QUOTES, 'UTF-8') ?>">
                    <div class="contact-form-field">
                        <label for="contact-name">Naam</label>
                        <input id="contact-name" name="name" type="text" autocomplete="name" maxlength="100" required value="<?= htmlspecialchars($formValues['name'], ENT_QUOTES, 'UTF-8') ?>">
                    </div>
                    <div class="contact-form-field">
                        <label for="contact-email">E-mailadres</label>
                        <input id="contact-email" name="email" type="email" autocomplete="email" maxlength="254" required value="<?= htmlspecialchars($formValues['email'], ENT_QUOTES, 'UTF-8') ?>">
                    </div>
                    <div class="contact-form-field full-width">
                        <label for="contact-message">Bericht</label>
                        <textarea id="contact-message" name="message" rows="6" maxlength="2500" required><?= htmlspecialchars($formValues['message'], ENT_QUOTES, 'UTF-8') ?></textarea>
                    </div>
                    <button class="cta-button primary contact-form-submit" type="submit">Verstuur bericht <span aria-hidden="true">&rarr;</span></button>
                </form>
            </section>
        </section>
    </div>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
