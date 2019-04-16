<?php
require_once('partials/header-top.php');
require_once('partials/navbar.php');
?>

<header class="justify-content-center">
    <div class="lead">
        <img class="d-block img-fluid"
        src="dist/assets/imgs/unsplash.jpg">
        <div class="subpage-title">
            <h1>For Patients & Public</h1>
        </div>
    </div>
</header>

<!-- section title -->
<div class="section-title">
    <h2 class="d-none d-lg-block">Public & Patient Engagement</h2>
</div>

<?php 
include('partials/card-text-only.php');
include('partials/call-out-card.php');
?>

<!-- section title -->
<div class="section-title">
    <h2 class="d-none d-lg-block">Free Information Sessions</h2>
</div>

<?php
include('partials/card-text-only.php');
include('partials/accordion-main.php');
?>

<!-- section title -->
<div class="section-title">
    <h2 class="d-none d-lg-block">Monthly PPE Hubs</h2>
</div>

<!-- section title -->
<div class="section-title">
    <h2 class="d-none d-lg-block">Get Involved in Research</h2>
</div>

<?php
include('partials/card-text-only.php');
include('partials/call-out-card.php');
include('partials/footer.php');
