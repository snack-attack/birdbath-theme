<?php 
    require_once('partials/header-top.php');
    require_once('partials/navbar.php');
?>

<!-- header for web -->
<header class="d-none d-lg-block jumbotron jumbotron-fluid jumbo-lg">
    <div class="container">
        <h1>Bath Institute for Rheumatic Diseases</h1>
        <h3>Supporting arthritis research, education & patient engagement</h3>
    </div>
</header>

<!-- header for mobile -->
<header class="justify-content-center">
    <div class="header-content d-lg-none">
        <img class="d-block d-lg-none img-fluid" src="dist/assets/imgs/unsplash.jpg">
        <div class="homepage-title">
            <h2>Welcome</h2>
        </div>
    </div>
</header>

        
<section>
    <!-- section title - homepage web only -->
    <div class="section-title d-none d-lg-block">
        <h2>Welcome</h2>
    </div>
    <div class="card-text-only">
        <p>The Bath Institute for Rheumatic Diseases (BIRD), a registered charity, exists to support arthritis research, education and patient engagement so that we can improve treatment for patients with rheumatic diseases.</p>
        <p>Rheumatology is the study and treatment of arthritis, including a number of autoimmune diseases, pain disorders affecting bones, joints, soft tissue and tendons. There are more than 200 types of rheumatic diseases, including rheumatoid arthritis, psoriatic arthritis, ankylosing spondylitis, systemic sclerosis, lupus (SLE), Raynaud’s, vasculitis,osteoarthritis, gout, back pain, osteoporosis and tendinitis.</p>
        <p>People of any age are affected, including children, but patient numbers are increasing with the number of older people in the population. These diseases are the cause of great pain and suffering and one of the main causes of disability in Britain. In the long term, our work helps almost everyone, because only one person in fifty escapes some form of rheumatic complaint in their lives.</p>
    </div>
</section>

<?php 
    require_once('partials/welcome-cards.php');
?>

<div class="section-title">
    <h2>Latest News</h2>
</div>

<?php
    require_once('partials/carousel.php');
    require_once('partials/accordion-with-feature.php');
?>

<!-- section title -->
<div class="section-title d-lg-none">
    <h2>Support Us</h2>
</div>
<?php
    require_once('partials/call-out-card.php');
    require_once('partials/footer.php');
?>

        




        

