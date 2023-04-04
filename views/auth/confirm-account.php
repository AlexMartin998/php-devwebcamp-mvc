<main class="auth">
    <h2 class="auth__heading"><?php echo $title; ?></h2>
    <p class="auth__text">Tu Cuenta DevWebCamp</p>

    <?php require_once __DIR__ . '/../templates/alerts.php'; ?>

    <?php if (isset($alerts['success'])) { ?>
        <div class="actions actions--center">
            <a href="/login" class="actions__link">Iniciar Sesión</a>
        </div>
    <?php } ?>

</main>