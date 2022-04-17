<?php

class Loader
{
    public static function getHead(string $title = ""): string
    {
        global $site_url;

        return '
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>' . ($title ? $title . " | Austin Dudzik" : "Austin Dudzik") . '</title>
    <meta content="null" name="description">
    <link rel="apple-touch-icon" href="' . $site_url . '/apple-touch-icon.png">
    <link rel="shortcut icon" href="' . $site_url . '/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8.0.6/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <link rel="stylesheet" href="' . $site_url . '/assets/css/styles.css?=v' . rand() . '">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap">
</head>
    ';
    }

    public static function getExtras(bool $stripe = true): string
    {
        global $site_url;

        return
            ($stripe ? '<div class="gradient-stripe fixed-top ni"></div>' : '') .
            '<!-- Start Page loader -->
<div class="loader">
   <div class="text-center">
   <img src="' . $site_url . '/assets/img/logo-white.svg" class="m-3 ni" alt="">
   <div class="loading">
  <div class="bar"></div>
  </div>
</div>
</div>
<!-- End Page loader -->

<!-- Start Mode toggle -->
<div id="modeToggle" data-toggle="tooltip" data-placement="right" title="Toggle light/dark mode">
    <span class="fa-stack">
        <i class="fas fa-circle fa-stack-2x"></i>
        <i class="fas fa-adjust fa-stack-1x fa-inverse"></i>
    </span>
</div>
<!-- End Mode toggle -->

<!-- Start fixed logo -->
<img src="' . $site_url . '/assets/img/logo-white.svg" class="logo logo_float" alt="">
<!-- End fixed logo -->
';
    }

    public static function getNavigation(string $title = ""): string
    {
        global $site_url;

        return '<nav class="navbar navbar-expand-md" id="top-nav">
    <a href="' . $site_url . '" class="navbar-brand">
        <img src="' . $site_url . '/assets/img/logo-white.svg" alt="Austin Dudzik logo" class="me-3">
        <span>Austin Dudzik</span>
    </a>
    <button class="navbar-toggler mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText">
      <i class="far fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
    <div class="me-auto"></div>
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link ' . ($title === 'About' ? 'active' : '') . '" href="' . $site_url . '/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ' . ($title === 'Projects' ? 'active' : '') . '" href="' . $site_url . '/projects">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ' . ($title === 'Experience' ? 'active' : '') . '" href="' . $site_url . '/experience">Experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ' . ($title === 'Skills' ? 'active' : '') . '" href="' . $site_url . '/skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ' . ($title === 'Resume' ? 'active' : '') . '" href="' . $site_url . '/resume">Resume</a>
        </li>
        <li class="nav-item"></li>
        <li class="nav-item">
          <a class="nav-link button_small outline" href="' . $site_url . '/contact">Contact</a>
        </li>
      </ul>
    </div>
</nav>';
    }

    public static function getFooter(): string
    {
        global $site_url;
        global $social;

        return '
<div class="my-5">
        <div class="border-top border-3 border-dark"></div>

        <div class="briefer">
            <img src="' . $site_url . '/assets/img/headshot.jpg" alt="Headshot of Austin Dudzik">
            <div class="fw-500 mt-4" style="font-size:18px">Austin Dudzik</div>
            <div class="fw-500 text-muted">Front-end Web Developer</div>
                <p class="px-0 px-md-5 mx-0 mx-md-5">I strive to create positive user experiences focused on consistency and
                usability that remain responsive and capture true
                potential.</p>

            <div class="mt-4 mb-3 text-center">
                <a href="' . $social["linkedin"] . '" target="_blank" class="submit-button">
                    <i class="fab fa-linkedin me-2"></i> Let\'s connect
                </a>
                <a href="' . $site_url . '/about" class="thin-link mb-2">Learn more about Austin</a>
            </div>
        </div>


         <div class="border-top border-3 border-dark"></div>


        <div class="mt-5 inquiry">
            <div class="align-items-center">
                <h2 class="subheading text-center mb-3 fw-700">
                    Have an inquiry or idea?<br>
                    <span class="text-span-8 gradient-text ni">Let\'s get in touch.</span>
                </h2>

                <div class="text-center mt-4">
                    <a href="' . $site_url . '/contact" class="submit-button">
                        Get in touch  <i class="far fa-long-arrow-right ms-2"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
     <div class="border-top border-3 border-dark"></div>
        <div class="mt-4 mx-3">
        <div class="row">
            <div class="col-md">
                <div class="d-flex">
                    <div class="my-auto">
                <img src="' . $site_url . '/assets/img/logo-white.svg" class="logo" width="50" alt="">
                    </div>
                    <div class="ms-4">
                <div class="font-weight-bold">Austin Dudzik</div>
                <p class="mb-0 small text-muted">Front-end Web Developer</p>
                    </div>
                </div>
        </div>
            <div class="col-md text-start text-md-end mt-3 mb-md-0">
            <a href="' . $social["github"] . '" target="_blank" class="text-white">
                <i class="fab fa-github me-3" style="font-size:20px"></i>
            </a>
            <a href="' . $social["linkedin"] . '" target="_blank" class="text-white">
                <i class="fab fa-linkedin me-3" style="font-size:20px"></i>
            </a>
            <a href="' . $social["behance"] . '" target="_blank" class="text-white">
                <i class="fab fa-behance" style="font-size:20px"></i>
            </a>
            </div>
            </div>
            <div class="row mb-0 mb-4">
            <div class="col-md">
            <p class="mt-3 small mb-0">Made with <span class="ni">❤️</span> in Wisconsin</p>
            </div>
            <div class="col-md text-start text-md-end">
            <p class="small mt-0 mt-md-3 mb-2 mb-md-0">&copy; ' . date('Y') . ' Austin Dudzik, all rights reserved.</p>
            </div>
            </div>
        </div>
        
            <div class="navbar-nav mb-5 d-flex justify-content-between" style="flex-shrink: 0; flex-flow: row wrap; justify-content: flex-end; align-items: flex-end;">

            <div class="nav-item">
                <a href="' . $site_url . '/about">
                    <div class="text-block-12">About</div>
                </a>
            </div>

            <div class="nav-item">
                <a href="' . $site_url . '/projects">
                    <div class="text-block-12">Projects</div>
                </a>
            </div>

            <div class="nav-item">
                <a href="' . $site_url . '/experience">
                    <div class="text-block-12">Experience</div>
                </a>
            </div>

            <div class="nav-item">
                <a href="' . $site_url . '/skills">
                    <div class="text-block-12">Skills</div>
                </a>
            </div>
            
            <div class="nav-item">
                <a href="' . $site_url . '/resume">
                    <div class="text-block-12">Resume</div>
                </a>
            </div>

            <div class="nav-item">
                <a href="' . $site_url . '/contact" class="text-block-12">Contact</a>
            </div>

        </div>

        ';

    }

    public static function getScripts(): string
    {
        global $site_url;

        return '
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-visible@1.2.0/jquery.visible.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8.0.6/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
        <script src="' . $site_url . '/assets/lib/webviewer.min.js"></script>
        <script src="' . $site_url . '/assets/js/scripts.js"></script>';
    }

}