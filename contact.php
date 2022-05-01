<?php require_once "config.php" ?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead('Contact') ?>
<body>
<?= Loader::getExtras() ?>

<?= Loader::getNavigation() ?>

<div class="container">

    <h1 class="text-center ni heading">Contact Austin</h1>

    <div class="card mt-5">
        <div class="m-4 m-md-5">

            <p class="text-white">I'd love to hear from you! Please complete the following
                contact form or reach out at one of my alternate contacts with inquiries and
                ideas. 👇</p>

            <form class="pt-2" action="https://formsubmit.co/fc50331ed6d2051741a66979e055804a"
                  method="post">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="text-white">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                               placeholder="Enter your name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="text-white">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                               placeholder="Enter your email" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="message" class="text-white">Message</label>
                        <textarea class="form-control" id="message" name="message"
                                  placeholder="Enter your email" rows="7" required></textarea>
                    </div>
                </div>

                <input type="hidden" name="_honey">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_next" value="<?= $site_url ?>/thanks">

                <button type="submit" class="btn-gradient w-100 ni py-2 submit-button text-white">
                    <i class="fas fa-paper-plane me-2"></i> Send message
                </button>
            </form>


            <h4 class="text-white mt-4">Other ways to connect...</h4>

            <div class="row mt-3">
                <div class="col-md mb-2 mb-md-0">
                    <a href="tel:4143785182" target="_blank" class="text-white text-decoration-none">
                    <i class="fas fa-phone me-2"></i> (414) 378-5182
                    </a>
                </div>
                <div class="col-md mb-2 mb-md-0">
                    <a href="mailto:austin@dudzik.dev" target="_blank" class="text-white text-decoration-none">
                    <i class="fas fa-envelope me-2"></i> austin@dudzik.dev
                    </a>
                </div>
                <div class="col-md mb-2 mb-md-0">
                    <a href="https://linkedin.com/in/austin-dudzik" target="_blank" class="text-white text-decoration-none">
                    <i class="fab fa-linkedin me-2"></i> austin-dudzik
                    </a>
                </div>
            </div>

        </div>
    </div>


    <?= Loader::getFooter() ?>

</div>

<?= Loader::getScripts() ?>
</body>
</html>