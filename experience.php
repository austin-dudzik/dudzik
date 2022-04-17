<?php require_once "config.php" ?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead('Experience') ?>
<body>
<?= Loader::getExtras() ?>

<?= Loader::getNavigation('Experience') ?>

<div class="container pt-5">

    <section class="my-5 mt-5 pt-2">

        <div class="text-start text-md-center mt-5">
            <h1 class="mb-3 fw-900 mt-0">Experience</h1>
            <p class="text mt-0 text-muted mb-0">I've gotten the opportunity to work with some of
                the most innovative and trusted companies, in helping to contribute to the
                development, design, and usability of new web and digital experiences. My work has
                been proven successful time and time again.</p>
        </div>

        <hr class="my-5">

        <?php foreach ($experience as $exp) { ?>
            <div class="card p-2 p-md-4 ni mb-4">
                <div class="card-body">
                    <?php if ($exp["img"] != "") { ?>
                        <img src="<?= $exp["img"] ?>" class="rounded mb-2"
                             width="50" alt="">
                    <?php } ?>
                    <div class="d-none d-md-flex justify-content-between mb-2">
                        <div>
                            <h4 class="mb-2"><?= $exp["title"] ?></h4>
                            <p class="x-small text-muted mb-0"><?= $exp["workplace"] ?></p>
                        </div>
                        <div>
                            <p class="small mb-2 text-end">
                                <?= $exp["start"] ?>
                                - <?= $exp["end"] ?>
                            </p>
                            <p class="small text-end"><?= $exp["location"] ?></p>
                        </div>
                    </div>
                    <div class="d-block d-md-none mb-2">
                        <div>
                            <h4 class="mb-2"><?= $exp["title"] ?></h4>
                            <p class="x-small text-muted mb-0"><?= $exp["workplace"] ?></p>
                        </div>
                        <div>
                            <p class="small mt-2 mb-2">
                                <?= $exp["start"] ?>
                                - <?= $exp["end"] ?>
                            </p>
                            <p class="small"><?= $exp["location"] ?></p>
                        </div>
                    </div>
                    <?php foreach ($exp["skills"] as $skill) { ?>
                        <div class="d-flex">
                            <div class="me-2 ni">✨</div>
                            <p class="mb-2"><?= $skill ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

    </section>

    <?= Loader::getFooter() ?>

</div>

<?= Loader::getScripts() ?>
</body>
</html>