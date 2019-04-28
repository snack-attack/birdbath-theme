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
include('partials/card-text-img.php');
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
    <div class="row">
        <div class="col">
            <div class="person-card card">
                <img src="dist/assets/imgs/face.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5>Dr Lego Person</h5>
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <!-- card-person -->
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
            <!-- card-person -->
            <div class="person-card card">
                <img src="dist/assets/imgs/face.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5>Dr Lego Person</h5>
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="person-card card">
                <img src="dist/assets/imgs/face.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5>Dr Lego Person</h5>
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <!-- card-person -->
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
            <!-- card-person -->
            <div class="person-card card">
                <img src="dist/assets/imgs/face.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5>Dr Lego Person</h5>
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
<div class="section-title">
    <h2 class="d-lg-none">Structure</h2>
    <h2 class="d-none d-lg-block">Governance Structure & Annual Reports</h2>
</div>

<section class="reports">
    <div class="row">
        <div class="col-12">
            <h3>Governance</h3>
            <p>BIRD is governed by a Council of Management which oversees the work of three committees, Finance, Research and Education supported by the executive office.  A guide to our governance structure is available to download here</p>
        </div>
        <div class="col-12">
            <button class="btn btn-outline-primary d-block">Download PDF</button>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3>BIRD’s Annual Report & Financial Overview</h3>
            <p>BIRD issues its annual report and produces a short summary of its impact in the previous year, both are available to download here:</p>
        </div>
        <div class="col-12"> 
            <button class="btn btn-outline-primary d-block">Download Annual Report</button>
        </div>
        <div class="col-12"> 
            <button class="btn btn-outline-primary d-block">Download Impact Summary</button>
        </div>
    </div>
</section>



<?php
include('partials/call-out-card.php');
include('partials/footer.php');
?>