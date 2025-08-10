<?php $page = 'home';
require './components/head.php' ?>
<title>Featured Bodies</title>
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
            <h1 class="display-2 text-white mb-4 animated slideInDown">Welcome to Featured Bodies</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Featured Bodies</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- busyAge Start -->
    <div class="container-fluid pb-0" id="about_us">
        <div class="container py-5 pb-0">
            <div class="row g-5">
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <img src="img/home/2.jpg" class="img-fluid h-100" alt="img">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-2 py-1 text-dark rounded-pill d-inline-block ">
                            Featured Bodies: Talent, Vision, and Execution in Motion</h5>
                        <p class="fs-5" style="text-align: justify;">BusyAge thrives because of the strong,
                            self-evolving bodies formed within the Ourown Ecosystem. These bodies are not just names —
                            they’re fully structured initiatives with distinct focus areas, leadership teams, and
                            scalable potential.
                        </p>
                        <p class="fs-5" style="text-align: justify;">Let’s introduce a few key players:
                        </p>
                        <ul class="list-items fs-5">
                            <li class="list-item">Panda Outsourcing:
                                Talent outsourcing and task force deployment body that ensures real delivery, domain
                                alignment, and responsible workforce mobilization — especially useful for field
                                operations, support services, interns, and remote teams.
                            </li>
                            <li class="list-item">Z N Entrepreneur:
                                Promoter-visionary platform that mentors and builds AOP bodies, helps unlock digital
                                potential, and leads ecosystem expansion through branding, digital outreach, and
                                entrepreneurial development.
                            </li>
                            <li class="list-item">Advait Media:
                                The ecosystem’s storytelling and PR engine. Designed to power influencers, creators, and
                                leaders — through media interviews, visibility frameworks, and community-driven
                                narratives.
                            </li>
                        </ul>
                        <p class="fs-5" style="text-align: justify;">These aren’t vendor firms — they’re integral
                            ecosystem participants with defined structures, ecosystem-aligned revenue models, and
                            co-ownership pathways.
                        </p>
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