<?php require_once "config.php" ?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead('Skills') ?>
<body>
<?= Loader::getExtras() ?>

<?= Loader::getNavigation('Skills') ?>

<?php
$topics = [
    'Industry Knowledge' => ['Front-end Development', 'Marketing', 'Logo Design', 'Sales', 'Digital Media', 'Illustration', 'Image Editing', 'Web Design', 'IT Operations', 'SEO'],
    'Tools' => ['CloudFlare', 'GitHub', 'Figma', 'Microsoft Word', 'Microsoft Excel', 'Microsoft PowerPoint', 'Microsoft Outlook', 'Adobe Dreamweaver', 'Google Analytics', 'WordPress', 'Adobe XD', 'Git', 'Adobe Photoshop', 'Adobe Illustrator', 'Bash/Shell', 'Windows', 'Confluence', 'PhpMyAdmin', 'WebStorm', 'PhpStorm', 'Visual Studio', 'DBeaver', 'Windows', 'macOS', 'Ubuntu' ],
    'Languages & Frameworks' => ['HTML', 'CSS', 'JavaScript', 'jQuery', 'Vue.js', 'PHP', 'ASP.NET', 'NoSQL', 'Firebase', 'AJAX', 'Oracle SQL', 'C#', 'MySQL', 'Laravel', 'React', 'Sass', 'JSON', 'WordPress', 'Bootstrap', 'Tailwind', 'Vuetify', 'MUI', 'styled-components'],
    'Interpersonal Skills' => ['Communication', 'Leadership', 'Problem Solving', 'Management', 'Critical Thinking', 'Time Management', 'Self-Motivation', 'Adaptability', 'Teamwork']
];
?>

<div class="container">

    <div class="text-start text-md-center mt-5">
        <h1 class="mb-3 fw-900 mt-0">Skills</h1>
        <p class="text mt-0 text-muted mb-0">After years of developing, I've established a strong,
            flexible, and growing skill set in dozens of development languages, tools, and
            frameworks, ranging from database management to UI and prototyping.</p>
    </div>

    <?php foreach ($topics as $name => $skills) { ?>
        <hr class="my-4 my-md-5">
        <div class="mx-1 mx-md-4">
            <h3 class="mb-4"><?= $name ?></h3>
            <div class="row">
                <?php foreach ($skills as $skill) { ?>
                    <div class="col-md-4 mb-3">
                        <div class="d-flex">
                            <div class="me-2">✅&nbsp;</div>
                            <?= $skill ?>
                        </div>
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