<?php require_once "config.php" ?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead('Thank you') ?>
<body>
<?= Loader::getExtras() ?>
<?= Loader::getNavigation() ?>
<div class="container text-center">
    <div class="intro">
        <h1 class="gradient-heading ni mb-4">Thank you!</h1>
        <p class="mb-3">Your message has arrived safe and sound in my inbox.</p>
        <p class="mt-0">I'll get back to you as soon as possible. Talk soon!</p>
        <a href="./" class="button-3 primary w-button">Continue to homepage <i
                    class="far fa-long-arrow-right ms-2"></i></a>
    </div>
    <?= Loader::getScripts() ?>
</body>
</html>