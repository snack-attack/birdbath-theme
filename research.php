<?php 
require_once('partials/header-top.php');
require_once('partials/navbar.php');
?>

<!-- header for mobile -->
<header class="justify-content-center">
    <div class="lead">
        <img class="d-block img-fluid"
        src="dist/assets/imgs/unsplash.jpg">
        <div class="subpage-title">
            <h1>Research</h1>
        </div>
    </div>
</header>

<div class="section-title d-none d-lg-block">
    <h2>Current Research Opportunities</h2>
</div>

<?php require_once('partials/card-text-only.php') ?>

<!-- section title -->
<div class="section-title d-lg-none">
    <h2>Apply</h2>
</div>

<section class="call-out-card d-none d-lg-block">
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4 p-5">
                <img src="/dist/assets/imgs/unsplash.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body pr-5">
                    <h4 class="card-title pt-5">Research Grant
                    Application Form</h4>
                    <p class="card-text text-justify">Curabitur non accumsan urna, et
                    scelerisque orci. Morbi aliquam, neque vitae
                    bibendum suscipit, orci tortor lacinia justo, vitae
                    tincidunt massa sem in diam. Maecenas non ex quis
                    eros vehicula blandit. Nunc in tincidunt odio.
                    Maecenas non ex quis eros vehicula blandit. Nunc in
                    tincidunt odio.</p>
                    <button type="button" class="btn
                    btn-primary">Download Application</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section title -->
<div class="section-title">
    <h2 class="d-lg-none">FAQs</h2>
    <h2 class="d-none d-lg-block">Frequently Asked Questions</h2>
</div>

<?php require_once('partials/accordion-main.php') ?>

<!-- section title mobile -->
<div class="section-title">
    <h2 class="d-lg-none">Funded Projects</h2>
    <h2 class="d-none d-lg-block">Research Projects Funded by BIRD</h2>
</div>
<?php 
require_once('partials/carousel.php'); 
?>
<section class="card-with-img d-lg-none">
<?php
require_once('partials/accordion-with-img.php');
?>
<button class="btn btn-primary">See All Projects</button>
</section>



<?php 
    require_once('partials/footer.php');
?>