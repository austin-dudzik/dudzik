<?php require_once "config.php" ?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead('Resume') ?>
<body>
<?= Loader::getExtras(false) ?>

<?= Loader::getNavigation() ?>

<div class="container">
    <div class="text-start text-md-center mt-5">
        <h1 class="mb-3 fw-900 mt-0">Resume</h1>
        <p class="text mt-0 text-muted mb-0">My resume highlights the skills and experience I have developed throughout my years as a front-end web developer and is ever-changing as I continue to divulge into new areas of development and continue to grow my experience day by day.</p>
        <div class="row mt-4">
            <div class="col"></div>
            <div class="col-md-4 mb-3 mb-md-0">
                <a href="assets/pdf/resume.pdf" download="Austin Dudzik Resume"
                   class="btn bg-white py-2 w-100 ni"><i class="fas fa-download me-2"></i>
                    Download</a>
            </div>
            <div class="col-md-4">
                <a href="assets/pdf/resume.pdf" target="_blank" class="btn btn-dark py-2 w-100"><i
                            class="fas fa-arrow-up-right-from-square me-2"></i> Open in new tab</a>
            </div>
            <div class="col"></div>
        </div>
        <p class="mt-4 mb-0 fst-italic">Last updated: March 21st 2022</p>
    </div>
    <hr class="my-5">

<div id="viewer" class="rounded ni w-100 m-0"></div>

    <?= Loader::getFooter() ?>
</div>
<?= Loader::getScripts() ?>
<script>
    WebViewer({
        path: 'assets/lib',
        licenseKey: 'V3hK85S4KPnFVCwYclt5',
        initialDoc: 'assets/pdf/resume.pdf',
        disabledElements: [
            'leftPanelButton',
            'selectToolButton',
            'panToolButton'
        ]
    }, document.getElementById('viewer'))
        .then((instance) => {
            instance.UI.setTheme('dark');
        });
</script>
</body>
</html>