<?php require_once "config.php" ?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead() ?>
<body>
<?= Loader::getExtras() ?>

<?= Loader::getNavigation() ?>

<header class="bg-gradient d-min-vh-100 ni pt-5">

    <div class="container intro">
        <h1>Austin Dudzik</h1>
        <h2 class="mb-0 mb-md-4">Maker. Designer. Developer.</h2>

        <p class="my-3 border-bottom pb-4">Ambitious and talented front-end web developer with 5+
            years of self-taught experience. Driven to deliver meaningful results, on-time and with
            great attention to detail. Striving to create positive user experiences that capture
            true potential.</p>

        <div class="d-flex flex-wrap social-items mt-4">
            <a href="<?= $social["behance"] ?>" target="_blank" class="me-4">
                <i class="fab fa-behance me-2"></i> Behance
            </a>
            <a href="<?= $social["github"] ?>" target="_blank" class="me-4">
                <i class="fab fa-github me-2"></i> GitHub
            </a>
            <a href="<?= $social["linkedin"] ?>" target="_blank" class="me-4">
                <i class="fab fa-linkedin me-2"></i> LinkedIn
            </a>
            <a href="mailto:<?= $email ?>" target="_blank" class="me-4">
                <i class="fas fa-envelope me-3"></i><?= $email ?>
            </a>
        </div>

    </div>

</header>

<div class="container pt-0 pt-md-5" id="page">

    <section class="my-5">

        <h2 class="subheading mt-5 mb-3 fw-900">The proper skill set to succeed.
            <span class="d-block text-muted">Coupled with years of experience.</span>
        </h2>

        <p class="text mt-0 mb-5">After years of developing, I've established a strong, flexible,
            and
            growing skill set in dozens of development languages, tools, and frameworks, ranging
            from
            database management to UI and
            prototyping.</p>


        <p class="small mb-3">Tools & Languages</p>

        <?php
        $sliders = [
            [["Vue", "vue"], ["Laravel", "laravel"], ["CloudFlare", "cloudflare"], ["Firebase", "firebase"]],
            [["WordPress", "wordpress"], ["Git", "git"], ["HTML", "html"], ["jQuery", "jquery"]],
            [["CSS", "css"], ["JavaScript", "javascript"], ["C#", "c-sharp"], ["Bootstrap", "bootstrap"]],
            [["Word", "word"], ["Excel", "excel"], ["PowerPoint", "powerpoint"], ["Outlook", "outlook"]],
            [["Photoshop", "photoshop"], ["Illustrator", "illustrator"], ["Adobe XD", "xd"], ["Figma", "figma"]]
        ];

        foreach ($sliders as $key => $slider) { ?>
            <div class="swiper-container swiper-container-free-mode <?= ($key % 2 == 0) ? "forward" : "reverse" ?> overflow-hidden mb-3">
                <div class="swiper-wrapper">
                    <?php foreach ($slider as $item) { ?>
                        <div class="swiper-slide">
                            <div class="card text-center p-0 px-3">
                                <div class="card-body">
                                    <img src="assets/img/knowledge/<?= $item[1] ?>.png" class="me-2"
                                         alt="" height="20"> <?= $item[0] ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

        <div class="d-flex justify-content-center my-4">
            <div class="bg-gradient ni p-1 rounded">
                <div class="button-3 hover-grad ni px-4 py-2">
                    <a href="<?= $site_url ?>/skills" class="text-white">
                        Explore entire skill set <i class="far fa-long-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <div class="divider"></div>

    <section class="my-5">

        <h2 class="subheading mt-5 mb-3 fw-900">The right experience to show.<br><span
                    class="text-muted">Driven to deliver meaningful results.</span></h2>
        <p class="text mt-0 mb-5">As a front-end web developer, I've gotten the opportunity to work
            with
            some of the most
            innovative and trusted companies, in helping to contribute to the development, design,
            and
            usability of new web and digital experiences. My work has been proven successful time
            and
            time again.</p>

        <div class="bg-gradient p-1 ni mb-5 rounded">
            <div class="card p-2 p-md-4 ni">
                <div class="card-body">
                    <?php if ($experience["wd-intern"]["img"] != "") { ?>
                        <img src="<?= $experience["wd-intern"]["img"] ?>" class="rounded mb-2"
                             width="50" alt="">
                    <?php } ?>
                    <div class="d-none d-md-flex justify-content-between mb-2">
                        <div>
                            <h4 class="mb-2"><?= $experience["wd-intern"]["title"] ?></h4>
                            <p class="x-small text-muted mb-0"><?= $experience["wd-intern"]["workplace"] ?></p>
                        </div>
                        <div>
                            <p class="small mb-2 text-end">
                                <?= $experience["wd-intern"]["start"] ?>
                                - <?= $experience["wd-intern"]["end"] ?>
                            </p>
                            <p class="small text-end"><?= $experience["wd-intern"]["location"] ?></p>
                        </div>
                    </div>
                    <div class="d-block d-md-none mb-2">
                        <div>
                            <h4 class="mb-2"><?= $experience["wd-intern"]["title"] ?></h4>
                            <p class="x-small text-muted mb-0"><?= $experience["wd-intern"]["workplace"] ?></p>
                        </div>
                        <div>
                            <p class="small mt-2 mb-2">
                                <?= $experience["wd-intern"]["start"] ?>
                                - <?= $experience["wd-intern"]["end"] ?>
                            </p>
                            <p class="small"><?= $experience["wd-intern"]["location"] ?></p>
                        </div>
                    </div>
                    <?php foreach ($experience["wd-intern"]["skills"] as $skill) { ?>
                        <div class="d-flex">
                            <div class="me-2 ni">✨</div>
                            <p class="mb-2"><?= $skill ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </section>

    <div class="divider"></div>

    <section class="my-5">
        <div>
            <h2 class="subheading mt-5 mb-3 fw-900">Unique brand experiences.<br><span
                        class="text-muted">Designed to adapt and evolve.</span></h2>
            <p class="text mt-0 mb-5">Besides working with code, I've utilized my skills in UI and
                UX design to create adaptive and flavorful brand logos and design systems that
                present as modern, unique, and legible. The work I create is well-thought-out and
                tuned to perfection.</p>
        </div>

        <div class="mt-5">
            <div class="row">
                <?php
                $logos = [["ShopFlow", "shopflow"], ["Hexagonal", "hexagonal"], ["Outage", "outage"], ["Blossom", "blossom"], ["MTN RD", "mtn-rd"], ["SourceView", "sourceview"], ["DomainKit", "domainkit"], ["Crinkle", "crinkle"], ["Campfire", "campfire"], ["Stackpin", "stackpin"], ["1MB", "1mb"], ["RocketFuel", "rocketfuel"]];

                foreach ($logos as $logo) { ?>
                    <div class="col-6 col-md-3 pb-4">
                        <a href="assets/img/logos/<?= $logo[1] ?>.png" data-fancybox="logos">
                            <img class="img-fluid rounded"
                                 src="assets/img/logos/<?= $logo[1] ?>.png"
                                 alt="<?= $logo[0] ?> logo">
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>

    </section>

    <div class="divider"></div>

    <section class="my-5">

        <h2 class="subheading mt-5 mb-3 fw-900">Passionate about code.<br><span
                    class="text-muted">Explore my recent projects.</span></h2>
        <p class="text mt-0 mb-5">I love building new things and have been designing, developing,
            and deploying new projects and applications over the years, ranging from full-fledged
            social media platforms to feedback tracking tools that help site owners track website
            feedback.</p>

        <div class="row">
            <?php
            $p = 0;
            foreach ($projects as $project) { ?>
                <div class="col-md-6 mb-4">
                    <a href="<?= $site_url ?>/projects/<?= $project["slug"] ?>"
                       class="card hover p-0">
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
                <?php
                $p++;
                if ($p == 4) break;
            } ?>
        </div>

    </section>

    <div class="divider"></div>

    <section class="my-5">

        <h2 class="subheading mt-5 mb-3 fw-900">Hear what they think.
            <br><span class="text-muted">Read the testimonials.</span>
        </h2>
        <div class="text mt-0 mb-5">
            By others, I'm most commonly known for my strong work ethic and dedication. I'm always
            up for a good challenge and can easily adapt to new development languages, projects, and
            environments.
            Don't just take it from me, read what others really have to say.
        </div>

        <div class="mt-5">

            <?php

            $testimonials = [
                ["name" => "Jason McCann", "title" => "Supervisor", "company" => "Snap-on Incorporated", "quote" => "Austin has great attention to detail and can quickly grasp existing codebases, offering alternative code approaches and improvements along the way. He has been responsive in integrating new features on time and implementing fixes to improve security, functionality, and usability. He has been able to adapt well in all situations and has been a great addition to our team.", "color" => "#b13cff"],

                ["name" => "Katie Rozek", "title" => "Web Development Instructor", "company" => "WCTC", "quote" => "Austin has consistently demonstrated a commitment to delivering a high quality work product with his strong work ethic, attention to detail and problem-solving skills. Coupled with his ability to work as a team member, he goes above and beyond to contribute to the success of his classmates.", "color" => "#dd45d3"],

                ["name" => "Tyler Kowalchuk", "title" => "Web Development Instructor", "company" => "WCTC", "quote" => "I’ve had the pleasure of working with Austin for the past two years and he always exceeds my expectations with every project he works on. He is a quick learner and is open to trying new techniques and creative solutions. He truly understands the entire process from UI/UX to development and won’t stop until every detail is polished. Austin has a high attention to detail and continually strives to expand his skill set in both his designs and his code.", "color" => "#fd9d52"],
            ];

            foreach ($testimonials as $testimonial) { ?>
                <div class="ps-2 rounded ni" style="background:<?= $testimonial["color"] ?>">
                    <div class="testimonial mb-4 ni">
                        <blockquote class="mb-3 ps-0 pe-0 pe-md-3">
                            "<?= $testimonial["quote"] ?>"
                        </blockquote>
                        <p class="fw-500 mb-0"><?= $testimonial["name"] ?></p>
                        <p class="text-muted mb-0"><?= $testimonial["title"] ?>
                            @ <?= $testimonial["company"] ?></p>
                    </div>
                </div>
            <?php } ?>

        </div>

    </section>

    <?= Loader::getFooter() ?>

</div>

<?= Loader::getScripts() ?>
</body>
</html>