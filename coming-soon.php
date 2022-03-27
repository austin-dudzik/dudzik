<?php require_once "config.php" ?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead('Coming Soon') ?>
<body>
<?= Loader::getExtras() ?>
<div class="container text-start text-md-center px-4 px-md-0" id="coming-soon">
    <h1 class="heading heading-lg ni mb-4">Coming Soon.</h1>
    <p class="text mb-5">I'm currently working on something new that isn't quite ready yet.</p>

    <hr>

    <p class="text my-5">In the meantime, why not take a second to explore me elsewhere on the internet?</p>

        <div class="row social-items mt-4">
            <div class="col-12 col-md mb-3 text-start text-md-center">
                <a href="<?= $social["github"] ?>" target="_blank">
                    <i class="fab fa-github me-2"></i> GitHub
                </a>
            </div>
            <div class="col-12 col-md mb-3 text-start text-md-center">
                <a href="<?= $social["linkedin"] ?>" target="_blank">
                    <i class="fab fa-linkedin me-2"></i> LinkedIn
                </a>
            </div>
            <div class="col-12 col-md mb-3 text-start text-md-center">
                <a href="<?= $social["dribbble"] ?>" target="_blank">
                    <i class="fab fa-dribbble me-2"></i> Dribbble
                </a>
            </div>
            <div class="col-12 col-md-4 mb-3 text-start text-md-center">
                <a href="mailto:<?= $email ?>" target="_blank">
                    <i class="fas fa-envelope me-3"></i><?= $email ?>
                </a>
            </div>
    </div>
</div>
<?= Loader::getScripts() ?>
</body>
</html>