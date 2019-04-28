<section>
    <div class="d-none d-lg-flex">
        <div class="welcome card">
            <img class="card-img-top my-4" src="/dist/assets/imgs/unsplash.jpg" alt="Card image cap">
            <div class="card-body p-0">
                <h5 class="card-title">Research Funding</h5>
                <p class="card-text">We make ‘pump priming’ grants to support
                research in the field of bone and joint diseases and fund the
                training of PhD students, clinical research fellows and
                post-doctoral research assistants.</p>
                <a href="#" class="btn btn-outline-primary">Learn More</a>
            </div>
        </div>
        <div class="welcome card px-5">
            <img class="card-img-top my-4" src="/dist/assets/imgs/unsplash.jpg" alt="Card image cap">
            <div class="card-body p-0">
                <h5 class="card-title">Professional Education</h5>
                <p class="card-text">We provide free educational and professional development opportunities, such as conferences and courses on the impact of bone and joint diseases for healthcare professionals.</p>
                <a href="#" class="btn btn-outline-primary">Upcoming Events</a>
            </div>
        </div>
        <div class="welcome card">
            <img class="card-img-top my-4" src="/dist/assets/imgs/unsplash.jpg" alt="Card image cap">
            <div class="card-body p-0">
                <h5 class="card-title">Patient Involvement</h5>
                <p class="card-text">We run a programme of Patient and Public Engagement which supports patients, their families and carers with the latest information in their diseases areas and involves them in research.</p>
                <a href="#" class="btn btn-outline-primary">Read More</a>
            </div>
        </div>
    </div>
</section>

<!-- accordian => mobile -->
<div class="accordion d-lg-none" id="accordionMain">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2>
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Research Funding</button>
            </h2>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionMain">
            <div class="card-body">We make ‘pump priming’ grants to
            support research in the field of bone and joint diseases and
            fund the training of PhD students, clinical research fellows
            and post-doctoral research assistants.
                <button class="btn btn-outline-primary mt-4 d-block">Learn More</button>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingTwo">
            <h2>
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Professional Education</button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionMain">
            <div class="card-body">We provide free educational and professional development opportunities, such as conferences and courses on the impact of bone and joint diseases for healthcare professionals.
                <button class="btn btn-outline-primary mt-4 d-block">Learn More</button>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingThree">
            <h2>
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Upcoming Events</button>
            </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionMain">
                <div class="card-body">We run a programme of Patient and Public Engagement which supports patients, their families and carers with the latest information in their diseases areas and involves them in research.
                    <button class="btn btn-outline-primary mt-4 d-block">Learn More</button>
                </div>
        </div>
    </div>
</div>