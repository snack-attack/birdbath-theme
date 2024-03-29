<?php
require_once('partials/header-top.php');
require_once('partials/navbar.php');
?>

<header class="justify-content-center">
    <div class="lead">
        <img class="d-block img-fluid"
        src="dist/assets/imgs/unsplash.jpg">
        <div class="subpage-title">
            <h1>For Professionals</h1>
        </div>
    </div>
</header>

<!-- section title -->
<div class="section-title">
    <h2 class="d-none d-lg-block">BIRD Supports Professional Education</h2>
</div>

<?php include('partials/card-text-only.php') ?>

<!-- section title -->
<div class="section-title">
    <h2 class="d-none d-lg-block">Upcoming Professional Educational Events</h2>
</div>

<?php 
include('partials/card-text-only.php');
include('partials/accordion-main.php');
include('partials/footer.php');
?>

