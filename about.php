<?php $title = "About";
require_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead($title) ?>
<body>
<?= Loader::getExtras() ?>
<?= Loader::getNavigation($title) ?>

<div class="container">

    <h1 class="heading-alt text-center mb-5 fw-900"> Maker.<br> Designer.<br> Developer.</h1>

    <div class="card mt-4">

        <div class="card-body p-4 m-2 large-block">

            <img src="assets/img/headshot.jpg"
                 class="headshot rounded float-none float-md-end m-0 p-0 ms-md-4 mt-md-4 me-md-2 mb-md-5"
                 alt="Austin Dudzik headshot">

            <h3>About Me</h3>

            <p class="my-3 text-muted">I'm Austin, a talented front-end web developer
                born and
                raised in Milwaukee. With over 5+ years of self-taught experience in
                front-end development and design, I've been building and developing a
                range of websites and web applications since my start in 2017.</p>

            <p class="my-3 text-muted">
                In 2022, I earned my Associate's Degree in Front End
                Web Development at Waukesha County Technical College, where I improved
                upon my pre-existing development skills and expanded my range of
                knowledge in PHP, JavaScript, and WordPress, along with design and UI in
                Adobe Photoshop, Illustrator, and XD.
            </p>

            <p class="my-3 text-muted">Since the start of my development journey, I've
                developed
                well over 20 projects ranging from business applications to hobby
                projects and everything in between, such as <a
                        href="<?= $site_url ?>/projects/campfire" class="gradient-text">Campfire</a>,
                an embeddable feedback collection tool, <a href="<?= $site_url ?>/projects/dune"
                                                           class="gradient-text">Dune</a>, a
                full-fledged social media network for Spotify, and <a
                        href="<?= $site_url ?>/projects/nova"
                        class="gradient-text">Nova</a>,
                an easy-to-use
                idea upvote board platform for
                businesses. My passion for code is ever-growing and my portfolio is
                always expanding.</p>

            <p class="my-3 text-muted">Currently, I am employed at Snap-on Incorporated as a web
                developer intern, where I'm in charge of the design, development, and deployment
                of new internal web applications, using my skill set to improve security, audit
                code, and implement new features.</p>

        </div>

    </div>


    <p class="small mt-5 mb-3"><i class="fas fa-code me-2"></i> Languages & Tools</p>

    <div class="d-flex flex-wrap align-items-stretch" style="column-gap:15px">
        <?php $languages = [["Vue", "vue"], ["JavaScript", "javascript"], ["WordPress", "wordpress"], ["HTML", "html"], ["Firebase", "firebase"], ["Photoshop", "photoshop"], ["Illustrator", "illustrator"], ["Git", "git"], ["C#", "c-sharp"], ["Bootstrap", "bootstrap"], ["CSS", "css"], ["PHP", "php"]
        ];
        foreach ($languages as $language) { ?>
            <div class="mb-4 flex-grow-1">
                <div class="card text-center p-0 px-3">
                    <div class="card-body">
                        <img src="assets/img/knowledge/<?= $language[1] ?>.png" class="me-2"
                             alt="" width="20"> <?= $language[0] ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="text-end">
        <a href="<?= $site_url ?>/skills" class="submit-button text-white bg-transparent me-0 pe-0">
            View all skills <i class="far fa-long-arrow-right ms-2"></i>
        </a>
    </div>

    <p class="small my-3 mt-5"><i class="fas fa-graduation-cap me-2"></i> Education</p>

    <div class="bg-gradient p-1 rounded">
        <div class="card rounded">
            <div class="card-body p-4 mx-2 my-3">
                <h3 class="mt-0">Front End Web Development</h3>
                <div class="row">
                    <div class="col-12 col-md-8">
                    <p class="small text-muted mb-2 mb-md-4">AAS / Waukesha County Technical College - GPA:
                        4.0</p>
                    </div>
                    <div class="col-12 col-md-4 text-start text-md-end">
                    <p class="small mb-4 mb-md-0">2020 - 2022</p>
                </div>
                </div>

                <div class="row small mb-4 mb-md-0">
                    <div class="col">
                    <p class="mb-0 mb-md-2">Phi Theta Kappa Honor Society</p>
                    </div>
                    <div class="col-12 col-md text-start text-md-end">
                    <p class="mb-0 mb-md-2">2021 - present</p>
                    </div>
                </div>
                <div class="row small mb-4 mb-md-0">
                    <div class="col">
                    <p class="mb-0 mb-md-2">National Technical Honor Society</p>
                </div>
                    <div class="col-12 col-md text-start text-md-end">
                    <p class="mb-0 mb-md-2">2021 - present</p>
                </div>
                </div>
                <hr style="background:gray">
                <div class="row small mb-4 mb-md-0">
                    <div class="col">
                    <p class="mb-0 mb-md-2">Outstanding Program Student Award</p>
                    </div>
                    <div class="col-12 col-md text-start text-md-end">
                    <p class="mb-0 mb-md-2">March 2022</p>
                    </div>
                </div>
                <div class="row small mb-4 mb-md-0">
                    <div class="col">
                    <p class="mb-0 mb-md-2">Fall 2021 Dean's List</p>
                    </div>
                    <div class="col-12 col-md text-start text-md-end">
                    <p class="mb-0 mb-md-2">January 2022</p>
                    </div>
                </div>
                <div class="row small mb-4 mb-md-0">
                    <div class="col">
                    <p class="mb-0 mb-md-2">Spring 2021 Dean's List</p>
                    </div>
                    <div class="col-12 col-md text-start text-md-end">
                    <p class="mb-0 mb-md-2">June 2021</p>
                    </div>
                </div>
                <div class="row small">
                    <div class="col">
                    <p class="mb-0 mb-md-2">Fall 2020 Dean's List</p>
                    </div>
                    <div class="col-12 col-md text-start text-md-end">
                    <p class="mb-0 mb-md-2">January 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p class="small mt-5 mb-4"><i class="fas fa-certificate me-2"></i> Certifications</p>

    <div class="row">

        <?php

        $certifications = [
            ["SQL certificate", 'sql', 'March 2022'],
            ["Web Development Fundamentals certificate", 'web_development', 'March 2022'],
            ["React & Redux certificate", 'react', 'March 2022'],
            ["JavaScript certificate", 'javascript', 'March 2021'],
            ["PHP certificate", 'php', 'January 2021'],
            ["CSS certificate", 'css', 'January 2021'],
            ["HTML certificate", 'html', 'January 2021'],
            ["Word 2016 Expert Certification", 'word_2016_expert', 'June 2019'],
            ["Outlook 2016 Certification", 'outlook_2016', 'June 2019'],
            ["Word 2016 Certification", 'word_2016', 'May 2019'],
            ["Excel 2016 Certification", 'excel_2016', 'May 2019'],
            ["PowerPoint 2016 Certification", 'powerpoint_2016', 'May 2019'],
            ["Excel 2013 Certification", 'excel_2013', 'June 2018'],
            ["PowerPoint 2013 Certification", 'powerpoint_2013', 'December 2016'],
            ["Word 2013 Certification", 'word_2013', 'October 2016'],
        ];

        foreach($certifications as $key => $cert) { ?>
            <div class="col-md-6 mb-3">
                <div class="d-flex">
                    <div>
                        <a href="assets/img/certifications/<?= $cert[1] ?>.png" data-fancybox="certifications">
                            <img src="assets/img/certifications/<?= $cert[1] ?>.png"
                                 alt="" class="img-fluid rounded"
                                 style="height:50px">
                        </a>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-1"><?= $cert[0] ?></h6>
                        <p class="text-muted mb-0"><?= $cert[2] ?></p>
                    </div>
                </div>
            </div>
            <?= ($key % 2 != 0)  ? '<hr>' : '<hr class="d-block d-md-none">' ?>
        <?php } ?>
    </div>

    <?= Loader::getFooter() ?>
</div>

<?= Loader::getScripts() ?>
</body>
</html>