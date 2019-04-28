<?php
require_once('partials/header-top.php');
require_once('partials/navbar.php');
?>

<header class="justify-content-center">
    <div class="lead">
        <img class="d-block img-fluid"
        src="dist/assets/imgs/unsplash.jpg">
        <div class="subpage-title research">
            <h1>Adherence to anti-TNF therapy in Rheumatoid Arthritis</h1>
        </div>
    </div>
</header>
<br style="clear: both;" />

<!-- section title -->
<div class="section-title research">
    <h2 class="">Lay Summary</h2>
</div>

<?php
    include('partials/card-text-only.php');
?>


<!-- section title -->
<div class="section-title research">
    <h2 class="">Contributors</h2>
</div>

<section class="meet-the-team d-none d-lg-block">
    <div class="row">
        <div class="col">
            <div class="person-card card">
                <img src="dist/assets/imgs/face.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5>Dr Lego Person</h5>
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="person-card card">
                <img src="dist/assets/imgs/face.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5>Dr Lego Person</h5>
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="person-card card">
                <img src="dist/assets/imgs/face.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5>Dr Lego Person</h5>
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="meet-the-team d-lg-none">
    <?php 
        include('partials/accordion-with-img.php');
    ?>
</section> 


<!-- section title -->
<div class="section-title research">
    <h2 class="">Scientific Summary</h2>
</div>

<?php
    include('partials/card-text-only.php');
?>


<!-- section title -->
<div class="section-title research">
    <h2 class="">Updates</h2>
</div>

<?php
    include('partials/card-text-only.php');
?>

<?php
include('partials/footer.php');
?>