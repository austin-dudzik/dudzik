<?php

require_once "../config.php";

// Get project slug from URL
$project = isset($projects[$_GET['slug']]) ? $projects[$_GET['slug']] : null;

// If project doesn't exist
if (!$project) {
    http_response_code(404);
    die(require_once '../404.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead($project["name"]) ?>
<body>
<?= Loader::getExtras() ?>

<?= Loader::getNavigation() ?>

<div class="container" id="page">

    <div class="row">
        <div class="col-12 col-md mb-2 mb-md-0">
            <a href="<?= $site_url ?>/projects" class="text-white text-decoration-none mb-4">
                <i class="far fa-long-arrow-left me-2"></i> Back to all projects
            </a>
        </div>
        <div class="col-12 col-md text-start text-md-end">
            <a href="<?= $site_url ?>/projects" class="text-white text-decoration-none">Projects</a>
            / <span class="text-muted"><?= $project["name"] ?></span>
        </div>
    </div>

    <div class="card p-0 mt-4">
        <img src="<?= $site_url ?>/assets/img/projects/<?= $project["slug"] ?>/01.png"
             class="img-fluid w-100 rounded-top" alt="Cover of <?= $project["name"] ?>">
        <img width="100" height="100"
             src="<?= $site_url ?>/assets/img/projects/icons/<?= $project["slug"] ?>.png"
             style="margin-top: -40px" alt="Icon for <?= $project["name"] ?>"
             class="image-8 ms-4 ms-md-5">
        <div class="m-4 mt-0 m-md-5 mt-md-4">
            <div class="row">
                <div class="col-12 col-md mb-3 mb-md-0">
                    <h3 class="my-0 text-white"><?= $project["name"] ?></h3>
                    <div class="subtitle"><?= $project["short_desc"] ?></div>
                </div>

                <div class="col-12 col-md text-start text-md-end">
                    <?php if($project["github"] !== "") { ?>
                    <a href="<?= $project["github"] ?>" target="_blank" class="button alt ms-0 me-1">
                        <i class="fab fa-github"></i></a>
                    <?php } ?>
                    <?php if($project["url"] !== "") { ?>
                    <a href="<?= $project["url"] ?>" target="_blank" class="submit-button alt ms-0">
                        Visit project <i class="fas fa-arrow-up-right-from-square ms-2"></i>
                    </a>
                    <?php } ?>
                </div>

            </div>

            <h4 class="text-white mt-4">Description</h4>
            <p class="text-muted"><?= $project["description"] ?></p>

            <div class="bg-gradient text-white p-4 rounded">
                <h4 class="mb-4"><i class="far fa-layer-group me-2"></i> Tech Stack</h4>

                <div class="row">
                    <?php foreach ($project["lang"] as $lang) {
                        echo '<div class="col-md-4 mb-2">
                            <li>' . $lang . '</li>
                            </div>';
                    } ?>
                </div>

            </div>

            <h4 class="text-white mt-4">Screenshots</h4>
            <div class="row">
                <?php foreach ($project["screenshots"] as $screenshot) { ?>
                    <div class="col-6 col-md-4 mb-4">
                        <a href="../assets/img/projects/<?= $project['slug'] ?>/<?= $screenshot[0] ?>.png" data-fancybox="screenshots" data-caption="<?= $screenshot[1] ?>">
                            <img src="../assets/img/projects/<?= $project['slug'] ?>/<?= $screenshot[0] ?>.png" class="img-fluid rounded"
                                 alt="Screenshot of <?= $project["name"] ?>">
                        </a>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>

    <h4 class="text-white mb-4 mt-4">Explore other projects...</h4>

    <div class="row">

        <?php
        $keys = array_keys($projects);
        shuffle($keys);
        $i = 0;
        foreach ($keys as $key) {
            if ($projects[$key]["slug"] == $_GET['slug']) {
                continue;
            }
            ?>
            <div class="col-md-4">
                <a href="<?= $site_url . '/projects/' . $projects[$key]["slug"] ?>"
                   class="card p-0">
                    <img src="../assets/img/projects/covers/<?= $projects[$key]["slug"] ?>.png"
                         class="img-fluid w-100 rounded-top"
                         alt="Cover of <?= $projects[$key]["name"] ?>">
                    <img width="75" height="75"
                         src="../assets/img/projects/icons/<?= $projects[$key]["slug"] ?>.png"
                         style="margin-top: -36px;margin-left: 34%;"
                         alt="Icon of <?= $projects[$key]["name"] ?>">
                    <div class="p-4 text-center pt-3">
                        <div class="title"><?= $projects[$key]["name"] ?></div>
                        <div class="subtitle text-muted"><?= $projects[$key]["short_desc"] ?>
                        </div>
                    </div>
                </a>
            </div>
            <?php
            $i++;
            if ($i == 3) break;
        }
        ?>

        <?= Loader::getFooter() ?>

    </div>

    <?= Loader::getScripts() ?>
</body>
</html>