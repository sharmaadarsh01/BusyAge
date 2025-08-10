<?php $page = 'home';
require './components/head.php' ?>
<title>Choose Your Profile</title>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <?php require './components/top_nav.php' ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?php require './components/navbar.php' ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header about-imgs py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Choose Your Profile</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Choose Your Profile</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- busyAge Start -->
    <div class="container-fluid pb-0" id="about_us">
        <div class="container py-5 pb-0">
            <div class="row g-5">
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <img src="img/home/1.jpg" class="img-fluid h-100" alt="img">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-2 py-1 text-dark rounded-pill d-inline-block ">
                            Navigate Instantly Based on Who You Are</h5>
                        <p class="fs-5" style="text-align: justify;">Navigate the Ourown Ecosystem Through Key Pathways
                        </p>
                        <p class="fs-5" style="text-align: justify;">
                            We understand that each visitor has a unique purpose, timeline, and intention. That's why we
                            created the “Quick Path” model — to help you skip the clutter and directly reach what
                            matters most to you.
                        </p>
                        <p class="fs-5" style="text-align: justify;">Whether you’re just starting your journey,
                            expanding your initiative, or looking to collaborate with a powerful system — there’s a
                            place for you inside the Ourown Ecosystem.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pb-0" id="about_us">
        <div class="container py-5 pb-0">
            <div class="row g-5">
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-item overflow-hidden">
                        <h4 class="mb-1 py-1 text-dark d-inline-block">
                            Choose your current profile to see how you fit in:</h4>
                        <h4 class="mb-1 py-1 text-dark d-inline-block">
                            Intern / Learner / Trainee
                        </h4>
                        <p class="fs-5" style="text-align: justify;">You're looking to grow, learn, and gain practical
                            exposure.
                        </p>
                        <p class="fs-5" style="text-align: justify;">We help you:
                        </p>
                        <ul class="list-items fs-5">
                            <li class="list-item">Join live projects as a contributor</li>
                            <li class="list-item">Explore multiple domains before choosing a path</li>
                            <li class="list-item">Get mentored and become ecosystem-ready</li>
                            <li class="list-item">Earn certifications, internships, and AOP/AVC opportunities</li>
                            <li class="list-item">Entry Route: Troup Internship | Panda Outsourcing | AVC Program</li>
                        </ul>
                        <a href="#!" class="link-intern">
                            Click to Explore Interns & Learning Tracks
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-1 py-1 text-dark d-inline-block">
                            Founder / Team / Startup Enthusiast</h5>
                        <p class="fs-5" style="text-align: justify;">You want to build something meaningful — with
                            support, systems, and sustainability.
                        </p>
                        <p class="fs-5" style="text-align: justify;">We help you:
                        </p>
                        <ul class="list-items fs-5">
                            <li class="list-item">Form your own troup or team under a Prime Body</li>
                            <li class="list-item">Access support from BCS, PBs, and platform-wide tools</li>
                            <li class="list-item">Get equity structuring & long-term ecosystem alignment</li>
                            <li class="list-item">Launch domain-specific solutions or IP-based startups</li>
                            <li class="list-item">Entry Route: TBBIM | Prime Body Path | Domain-Based Projects</li>
                        </ul>
                        <a href="#!" class="link-intern">
                            Click to Start Your Troup or Founder Path
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- busyAge End -->


    <?php require './components/footer.php' ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

    <?php require './components/scripts.php' ?>
</body>

</html>