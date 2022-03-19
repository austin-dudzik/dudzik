<?php require_once "classes/Loader.php" ?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead('Skills') ?>
<body>
<?= Loader::getExtras() ?>

<?= Loader::getNavigation('Skills') ?>

<?php
$topics = [
    ['Industry Knowledge', ['Front-end Development', 'Marketing', 'Logo Design', 'Sales', 'Digital Media', 'Illustration', 'Image Editing', 'Web Design', 'Search Engine Optimization', 'IT Operations']],
    ['Tools', ['CloudFlare', 'GitHub', 'Figma', 'Microsoft Word', 'Microsoft Excel', 'Microsoft PowerPoint', 'Microsoft Outlook', 'Adobe Dreamweaver', 'Google Analytics', 'WordPress', 'Adobe XD', 'Git', 'Adobe Photoshop', 'Adobe Illustrator', 'Bash/Shell', 'Windows', 'Confluence', 'PhpMyAdmin']],
    ['Languages & Frameworks', ['HTML', 'CSS', 'JavaScript', 'jQuery', 'Vue.js', 'PHP', 'ASP.NET', 'NoSQL', 'Firebase', 'AJAX', 'Oracle SQL', 'C#', 'MySQL', 'Laravel', 'React', 'SASS', 'JSON', 'WordPress', 'Bootstrap']],
    ['Interpersonal Skills', ['Communication', 'Leadership', 'Problem Solving', 'Management', 'Critical Thinking', 'Time Management', 'Self-Motivation', 'Adaptability', 'Teamwork']]
];
?>

<div class="container">

    <div class="bg-black text-center mt-5">
        <h1 class="mb-3 fw-900 mt-0">Skills</h1>
        <p class="text mt-0 text-muted mb-0">After years of developing, I've established a strong,
            flexible, and growing skill set in dozens of development languages, tools, and
            frameworks, ranging from database management to UI and prototyping.</p>
    </div>
    <?php for ($i = 0; $i < count($topics); $i++) { ?>
        <hr class="my-5">
        <div class="mx-4">
            <h3 class="mb-4"><?= $topics[$i][0] ?></h3>
            <div class="row">
                <?php for ($j = 0; $j < count($topics[$i][1]); $j++) { ?>
                    <div class="col-md-4 mb-3">
                        ✅&nbsp; <?= $topics[$i][1][$j] ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>

    <?= Loader::getFooter() ?>

</div>

<?= Loader::getScripts() ?>
</body>
</html>