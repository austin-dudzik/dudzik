<?php require_once "config.php" ?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead('404 - Page Not Found') ?>
<body>
<?= Loader::getExtras() ?>
<?= Loader::getNavigation() ?>
<div class="container">

    <h1 class="heading heading-lg ni" style="letter-spacing: normal">404 Page<br> Not Found</h1>

    <p class="text my-4">Apologies - the page you're looking for couldn't be found. It may have been
        moved, deleted, or may have never even existed.</p>

    <p class="text mb-4">Instead, how about checking out my homepage?</p>

    <a href="<?= $site_url ?>" class="submit-button">
        Continue to homepage <i class="far fa-long-arrow-right ms-2"></i>
    </a>

</div>
<?= Loader::getScripts() ?>
</body>
</html>