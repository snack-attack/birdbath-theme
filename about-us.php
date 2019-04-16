<?php
require_once('partials/header-top.php');
require_once('partials/navbar.php');
?>

<header class="justify-content-center">
    <div class="lead">
        <img class="d-block img-fluid"
        src="dist/assets/imgs/unsplash.jpg">
        <div class="subpage-title">
            <h1>About Us</h1>
        </div>
    </div>
</header>

<!-- section title -->
<div class="section-title">
    <h2 class="d-none d-lg-block">Who We Are</h2>
</div>

<?php
include('partials/card-text-only.php');
?>

<!-- section title -->
<div class="section-title">
    <h2>Our Mission</h2>
</div>

<?php
include('partials/card-text-only.php');
?>

<!-- section title -->
<div class="section-title">
    <h2 class="d-lg-none">The Team</h2>
    <h2 class="d-none d-lg-block">Meet The Team</h2>
</div>
<!-- card-person -->
<div class="person-card card" style="width: 30%;">
    <img src="dist/assets/imgs/face.jpg" class="card-img-top" alt="">
    <div class="card-body">
        <h5 class="card-title">Dr Lego Person</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
</div>

<!-- section title -->
<div class="section-title">
    <h2 class="d-lg-none">Structure</h2>
    <h2 class="d-none d-lg-block">Governance Structure & Annual Reports</h2>
</div>



<?php
include('partials/call-out-card.php');
include('partials/footer.php');
?>