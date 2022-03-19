<?php require_once "classes/Loader.php" ?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead() ?>
<body>
<?= Loader::getExtras() ?>

<?= Loader::getNavigation() ?>

<header class="bg-gradient min-vh-100 ni pt-5">

    <div class="container intro">
        <h1>Austin Dudzik</h1>
        <h2 class="mb-4">Maker. Designer. Developer.</h2>

        <p class="my-3 border-bottom pb-4">Ambitious and talented front-end web developer with 5+
            years of self-taught experience. Driven to deliver meaningful results, on-time and with
            great attention to detail. Striving to create positive user experiences that capture
            true potential.</p>

        <div class="social-items mt-4 mb-5">
            <a href="https://github.com/austin-dudzik" target="_blank" class="me-4">
                <i class="fab fa-github me-2"></i> GitHub
            </a>
            <a href="https://linkedin.com/in/austin-dudzik" target="_blank" class="me-4">
                <i class="fab fa-linkedin me-2"></i> LinkedIn
            </a>
            <a href="https://dribbble.com/d_austin" target="_blank" class="me-4">
                <i class="fab fa-dribbble me-2"></i> Dribbble
            </a>
            <a href="mailto:austin@dudzik.dev" target="_blank" class="me-4">
                <i class="fas fa-envelope me-3"></i>austin@dudzik.dev
            </a>
        </div>

    </div>

</header>

<div class="container pt-5">

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

        <?php
        $slider1 = [["Vue", "vue"], ["Laravel", "laravel"], ["CloudFlare", "cloudflare"], ["Firebase", "firebase"]];
        $slider2 = [["WordPress", "wordpress"], ["Git", "git"], ["HTML", "html"], ["jQuery", "jquery"]];
        $slider3 = [["CSS", "css"], ["JavaScript", "javascript"], ["C#", "c-sharp"], ["Bootstrap", "bootstrap"]];
        $slider4 = [["Word", "word"], ["Excel", "excel"], ["PowerPoint", "powerpoint"], ["Outlook", "outlook"]];
        $slider5 = [["Photoshop", "photoshop"], ["Illustrator", "illustrator"], ["Adobe XD", "xd"], ["Figma", "figma"]];
        $slider5 = [["Photoshop", "photoshop"], ["Illustrator", "illustrator"], ["Adobe XD", "xd"], ["Figma", "figma"]];
        ?>

        <p class="small mb-3">Tools & Languages</p>
        <div class="swiper-container swiper-container-free-mode forward overflow-hidden mb-3">
            <div class="swiper-wrapper">
                <?php for ($i = 0; $i < count($slider1); $i++) { ?>
                    <div class="swiper-slide">
                        <div class="card text-center p-0 px-3">
                            <div class="card-body">
                                <img src="assets/img/knowledge/<?= $slider1[$i][1] ?>.png"
                                     class="me-2"
                                     alt="" width="20"> <?= $slider1[$i][0] ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="swiper-container swiper-container-free-mode reverse overflow-hidden mb-3">
            <div class="swiper-wrapper">
                <?php for ($i = 0; $i < count($slider2); $i++) { ?>
                    <div class="swiper-slide">
                        <div class="card text-center p-0 px-3">
                            <div class="card-body">
                                <img src="assets/img/knowledge/<?= $slider2[$i][1] ?>.png"
                                     class="me-2"
                                     alt="" width="20"> <?= $slider2[$i][0] ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="swiper-container swiper-container-free-mode forward overflow-hidden mb-3">
            <div class="swiper-wrapper">
                <?php for ($i = 0; $i < count($slider3); $i++) { ?>
                    <div class="swiper-slide">
                        <div class="card text-center p-0 px-3">
                            <div class="card-body">
                                <img src="assets/img/knowledge/<?= $slider3[$i][1] ?>.png"
                                     class="me-2"
                                     alt="" width="20"> <?= $slider3[$i][0] ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="swiper-container swiper-container-free-mode reverse overflow-hidden mb-3">
            <div class="swiper-wrapper">
                <?php for ($i = 0; $i < count($slider4); $i++) { ?>
                    <div class="swiper-slide">
                        <div class="card text-center p-0 px-3">
                            <div class="card-body">
                                <img src="assets/img/knowledge/<?= $slider4[$i][1] ?>.png"
                                     class="me-2"
                                     alt="" width="20"> <?= $slider4[$i][0] ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="swiper-container swiper-container-free-mode forward overflow-hidden mb-3">
            <div class="swiper-wrapper">
                <?php for ($i = 0; $i < count($slider5); $i++) { ?>
                    <div class="swiper-slide">
                        <div class="card text-center p-0 px-3">
                            <div class="card-body">
                                <img src="assets/img/knowledge/<?= $slider5[$i][1] ?>.png"
                                     class="me-2"
                                     alt="" width="20"> <?= $slider5[$i][0] ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="d-flex justify-content-center mb-4 mt-4">
            <div class="bg-gradient ni p-1 rounded">
                <a href="#" class="button-3 w-button hover-grad ni">
                    Explore entire skill set <i class="far fa-long-arrow-right ms-2"></i>
                </a>
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
            <div class="card p-4 ni">
                <div class="card-body">
                    <img width="50"
                         src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEwmBs4BzmGhMKA5QqMrU6cu10b5yxscJHjqmgxILeD-_wXWejXQweii6YRgynHuR9enU&usqp=CAU"
                         class="rounded" alt="">

                    <div class="d-flex justify-content-between mb-2">
                        <div>
                            <div>
                                <div>
                                    <h4 class="mb-2">Web
                                        Developer
                                        Intern</h4>
                                    <p class="x-small text-muted mb-0">Snap-on Incorporated</p>
                                </div>
                            </div>

                        </div>

                        <div>

                            <p class="small mb-2 text-end">May 2021 - present</p>
                            <p class="small text-end">Kenosha, Wisconsin</p>

                        </div>

                    </div>


                    <div class="d-flex">
                        <div class="me-2 ni">✨</div>
                        <p class="mb-2">Accelerated the design, development, and deployment of 3 new
                            internal applications</p>
                    </div>

                    <div class="d-flex">
                        <div class="me-2 ni">✨</div>
                        <p class="mb-2">Organized and participated in device enrollment and roll out
                            of
                            application pilot program to 40+ iPad devices</p>
                    </div>

                    <div class="d-flex">
                        <div class="me-2 ni">✨</div>
                        <p class="mb-2">Diagnosed slow and demanding SQL queries to improve
                            application
                            load
                            times and performance</p>
                    </div>

                    <div class="d-flex">
                        <div class="me-2 ni">✨</div>
                        <p class="mb-2">Identified potential security threats and concerns in
                            infrastructure</p>
                    </div>

                    <div class="d-flex">
                        <div class="me-2 ni">✨</div>
                        <p class="mb-2">Performed regular audits to ensure code is error-free and
                            meets
                            conventional standards</p>
                    </div>

                    <div class="d-flex">
                        <div class="me-2 ni">✨</div>
                        <p class="mb-2">Implemented new features and code modifications based on
                            in-field user
                            feedback</p>
                    </div>

                    <div class="d-flex">
                        <div class="me-2 ni">✨</div>
                        <p class="mb-2">Integrated multiple new API endpoints to retrieve customer
                            data
                            and
                            insights</p>
                    </div>

                    <div class="d-flex">
                        <div class="me-2 ni">✨</div>
                        <p class="mb-2">Collaborated with team members to discuss new ideas and
                            implementations</p>
                    </div>

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

                <div class="col-md-3 pb-4">
                    <a href="assets/img/logos/shopflow.png" data-fancybox="logos">
                        <img class="img-fluid rounded"
                             src="assets/img/logos/shopflow.png" alt="ShopFlow logo">
                    </a>
                </div>

                <div class="col-md-3 pb-4">
                    <a href="assets/img/logos/hexagonal.png" data-fancybox="logos">
                        <img class="img-fluid rounded"
                             src="assets/img/logos/hexagonal.png" alt="Hexagonal logo">
                    </a>
                </div>


                <div class="col-md-3 pb-4">
                    <a href="assets/img/logos/outage.png" data-fancybox="logos">
                        <img class="img-fluid rounded"
                             src="assets/img/logos/outage.png" alt="Outage logo">
                    </a>
                </div>

                <div class="col-md-3 pb-4">
                    <a href="assets/img/logos/blossom.png" data-fancybox="logos">
                        <img class="img-fluid rounded"
                             src="assets/img/logos/blossom.png" alt="Blossom logo">
                    </a>
                </div>

                <div class="col-md-3 pb-4">
                    <a href="assets/img/logos/mtn-rd.png" data-fancybox="logos">
                        <img class="img-fluid rounded"
                             src="assets/img/logos/mtn-rd.png"
                             alt="MTN RD logo">
                    </a>
                </div>


                <div class="col-md-3 pb-4">
                    <a href="assets/img/logos/sourceview.png" data-fancybox="logos">
                        <img class="img-fluid rounded"
                             src="assets/img/logos/sourceview.png"
                             alt="SourceView logo">
                    </a>
                </div>

                <div class="col-md-3 pb-4">
                    <a href="assets/img/logos/domainkit.png" data-fancybox="logos">
                        <img class="img-fluid rounded"
                             src="assets/img/logos/domainkit.png"
                             alt="DomainKit logo">
                    </a>
                </div>

                <div class="col-md-3 pb-4">
                    <a href="assets/img/logos/crinkle.png" data-fancybox="logos">
                        <img class="img-fluid rounded"
                             src="assets/img/logos/crinkle.png"
                             alt="Crinkle logo">
                    </a>
                </div>

                <div class="col-md-3 pb-4">
                    <a href="assets/img/logos/campfire.png" data-fancybox="logos">
                        <img class="img-fluid rounded"
                             src="assets/img/logos/campfire.png"
                             alt="Campfire logo">
                    </a>
                </div>

                <div class="col-md-3 pb-4">
                    <a href="assets/img/logos/stackpin.png" data-fancybox="logos">
                        <img class="img-fluid rounded"
                             src="assets/img/logos/stackpin.png"
                             alt="Stackpin logo">
                    </a>
                </div>

                <div class="col-md-3 pb-4">
                    <a href="assets/img/logos/1mb.png" data-fancybox="logos">
                        <img class="img-fluid rounded"
                             src="assets/img/logos/1mb.png"
                             alt="1MB logo">
                    </a>
                </div>

                <div class="col-md-3 pb-4">
                    <a href="assets/img/logos/rocketfuel.png" data-fancybox="logos">
                        <img class="img-fluid rounded"
                             src="assets/img/logos/rocketfuel.png"
                             alt="RocketFuel logo">
                    </a>
                </div>

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
            feedback .</p>


        <div class="row">

            <div class="col-md-6 mb-4">
                <a href="#" class="card hover p-0">
                    <img src="assets/img/projects/covers/nova.png" alt="Nova cover"
                         class="img-fluid w-100 rounded-top">
                    <img width="75" height="75" src="assets/img/projects/icons/nova.png"
                         alt="DomainKit" class="icon ms-4">
                    <div class="p-4 pb-5 pt-3 pb-2">
                        <div class="title">Nova</div>
                        <div class="subtitle text-muted mb-2">User feedback collection
                            platform
                        </div>
                        <div class="badge bg-dark text-white me-1">PHP</div>
                        <div class="badge bg-dark text-white me-1">JavaScript</div>
                        <div class="badge bg-dark text-white me-1">JSON</div>
                        <div class="badge text-white">+5 more</div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 mb-4">
                <a href="#" class="card hover p-0">
                    <img src="assets/img/projects/covers/campfire.png" alt="Nova cover"
                         class="img-fluid w-100 rounded-top">
                    <img width="75" height="75" src="assets/img/projects/icons/campfire.png"
                         alt="DomainKit" class="icon ms-4">
                    <div class="p-4 pb-5 pt-3 pb-2">
                        <div class="title">Campfire</div>
                        <div class="subtitle text-muted mb-2">Website feeedback tool
                        </div>
                        <div class="badge bg-dark text-white me-1">PHP</div>
                        <div class="badge bg-dark text-white me-1">MySQL</div>
                        <div class="badge bg-dark text-white me-1">Bootstrap</div>
                        <div class="badge text-white">+5 more</div>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="#" class="card hover p-0">
                    <img src="assets/img/projects/covers/dune.png" alt="Dune cover"
                         class="img-fluid w-100 rounded-top">
                    <img width="75" height="75" src="assets/img/projects/icons/dune.png"
                         alt="DomainKit" class="icon ms-4">
                    <div class="p-4 pb-5 pt-3 pb-2">
                        <div class="title">Dune</div>
                        <div class="subtitle text-muted mb-2">Social media platform for Spotify
                        </div>
                        <div class="badge text-white bg-dark me-1">Vue</div>
                        <div class="badge text-white bg-dark me-1">NoSQL</div>
                        <div class="badge text-white bg-dark me-1">Spotify API</div>
                        <div class="badge text-white">+5 more</div>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="#" class="card hover p-0">
                    <img src="assets/img/projects/covers/spark.png"
                         alt="Dune cover" class="img-fluid w-100 rounded-top">
                    <img width="75" height="75"
                         src="assets/img/projects/icons/spark.png" alt="DomainKit"
                         class="icon ms-4">
                    <div class="p-4 pb-5 pt-3 pb-2">
                        <div class="title">Spark</div>
                        <div class="subtitle text-muted mb-2">Task management platform</div>
                        <div class="badge text-white bg-dark me-1">Laravel</div>
                        <div class="badge text-white bg-dark me-1">PHP</div>
                        <div class="badge text-white bg-dark me-1">Bootstrap</div>
                        <div class="badge text-white">+5 more</div>
                    </div>
                </a>
            </div>

        </div>

    </section>

    <div class="divider"></div>

    <section class="my-5">

        <h2 class="subheading mt-5 mb-3 fw-900">Hear what they think.<br><span class="text-muted">Read the testimonials.</span>
        </h2>
        <div class="text mt-0 mb-5">

            By others, I'm most commonly known for my strong work ethic and dedication. I'm always
            up for a good challenge and can easily adapt to new development languages, projects, and
            environments.
            Don't just take it from me, read what others really have to say.
        </div>

        <div class="mt-5">

            <div class="ps-2 rounded ni" style="background:#b13cff">
                <div class="testimonial mb-4 ni">
                    <blockquote class="mb-3 ps-0">
                        "Austin has great attention to detail and can quickly grasp existing
                        codebases, offering alternative code approaches and improvements along the
                        way. He has been responsive in integrating new features on time and
                        implementing fixes to improve security, functionality, and usability. He has
                        been able to adapt well in all situations and has been a great addition to
                        our team."
                    </blockquote>
                    <p class="fw-500 mb-0">Jason</p>
                    <p class="text-muted mb-0">Supervisor @ Snap-on Incorporated</p>
                </div>
            </div>

            <div class="ps-2 rounded ni mt-4" style="background:#dd45d3">
                <div class="testimonial mb-4 ni">
                    <blockquote class="mb-3 ps-0">
                        "Austin has consistently demonstrated a commitment to delivering a high
                        quality work product with his strong work ethic, attention to detail and
                        problem-solving skills. Coupled with his ability to work as a team member,
                        he goes above and beyond to contribute to the success of his classmates."
                    </blockquote>
                    <p class="fw-500 mb-0">Katie</p>
                    <p class="text-muted mb-0">Instructor @ WCTC</p>
                </div>
            </div>

            <div class="ps-2 rounded ni mt-4" style="background:#fd9d52">
                <div class="testimonial mb-4 ni">
                    <blockquote class="mb-3 ps-0">
                        "Austin has consistently demonstrated a commitment to delivering a high
                        quality work product with his strong work ethic, attention to detail and
                        problem-solving skills. Coupled with his ability to work as a team member,
                        he goes above and beyond to contribute to the success of his classmates."
                    </blockquote>
                    <p class="fw-500 mb-0">Tyler</p>
                    <p class="text-muted mb-0">Instructor @ WCTC</p>
                </div>
            </div>

        </div>

    </section>

    <?= Loader::getFooter() ?>

</div>

<?= Loader::getScripts() ?>
</body>
</html>