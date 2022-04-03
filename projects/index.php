<?php require_once "../config.php" ?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead('Projects') ?>
<body>
<?= Loader::getExtras() ?>

<?= Loader::getNavigation('Projects') ?>

<div class="container pt-5" id="page">

    <section class="my-5 mt-5 pt-2">

                <div class="text-start text-md-center mt-5">
                    <h1 class="mb-3 fw-900 mt-0">Projects</h1>
                    <p class="text mt-0 text-muted mb-0">I love building new things and have been designing, developing,
                        and deploying new projects and applications over the years, ranging from full-fledged
                        social media platforms to feedback tracking tools that help site owners track website
                        feedback.</p>
                </div>

        <hr class="my-5">

        <div class="row mt-4">
            <?php foreach ($projects as $project) { ?>
                <div class="col-md-6 mb-4">
                    <a href="<?= $site_url ?>/projects/<?= $project["slug"] ?>" class="card hover p-0">
                        <img src="<?= $site_url ?>/assets/img/projects/<?= $project["slug"] ?>/01.png"
                             alt="<?= $project["name"] ?> cover"
                             class="img-fluid w-100 rounded-top">
                        <img width="75" height="75"
                             src="<?= $site_url ?>/assets/img/projects/<?= $project["slug"] ?>/icon.png"
                             alt="<?= $project["name"] ?> icon" class="icon ms-4">
                        <div class="p-4 pb-5 pt-3 pb-2">
                            <div class="title"><?= $project["name"] ?></div>
                            <div class="subtitle text-muted mb-2"><?= $project["short_desc"] ?></div>

                            <?php for ($i = 0; $i < min(count($project["lang"]), 3); $i++) { ?>
                                <div class="badge text-white me-1 border-secondary border"><?= $project["lang"][$i] ?></div>
                            <?php } ?>

                            <?php if (count($project["lang"]) > 3) { ?>
                                <div class="badge text-white me-1">
                                    +<?= count($project["lang"]) - 3 ?> more
                                </div>
                            <?php } ?>
                        </div>
                    </a>
                </div>
                <?php } ?>
        </div>

    </section>

    <?= Loader::getFooter() ?>

</div>

<?= Loader::getScripts() ?>
</body>
</html>