<?php $page = 'home';
require './components/head.php' ?>
<title>Link to Major Menu</title>
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
            <h1 class="display-2 text-white mb-4 animated slideInDown">Link to Major Menu</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Link to Major Menu</li>
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
                            Start Exploring</h5>
                        <p class="fs-5" style="text-align: justify;">Navigate the Ourown Ecosystem Through Key Pathways
                        </p>
                        <p class="fs-5" style="text-align: justify;">
                            At BusyAge, we believe clarity fuels action. That’s why we’ve structured our ecosystem into
                            clear, distinct pathways that allow you to explore, discover, and contribute—based on who
                            you are and where you want to go.
                        </p>
                        <p class="fs-5" style="text-align: justify;">Below are curated entry points into our ecosystem's
                            most powerful areas—each leading to its own set of solutions, structures, and opportunities.
                            Whether you are an individual, a team, an institution, or a company, you’ll find a route
                            tailored to your context.
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
                        <h5 class="mb-1 py-1 text-dark d-inline-block">
                            Explore Based On What You’re Looking For:</h5>
                        <ul class="list-items fs-5">
                            <li class="list-item">Services & Solutions:
                                View all short-term & long-term offerings, plug-in options, managed services, and
                                domain-specific assistance.
                            </li>
                            <li class="list-item">Ecosystem & Structure:
                                Understand how the Ourown Ecosystem works, how Troups, PBs, AOBs, AOPs are formed, and
                                the layered design of growth.
                            </li>
                            <li class="list-item">Partner With Us:
                                Explore how to collaborate as a professional, co-founder, institution, MSME, investor,
                                or consultant.
                            </li>
                            <li class="list-item">Join As an Individual:
                                Join via Internships, Contributor Roles, AOP/AVC Programs, Leadership Tracks, or
                                Skill-Specific Entry Routes.
                            </li>
                            <li class="list-item">Build a Team or Troup:
                                Form your own team or join an existing one—get guided roles, structured growth, equity
                                eligibility, and startup-like work zones.
                            </li>
                            <li class="list-item">Institutional & Campus Model:
                                See how your institution can form AOBs, conduct skill-building programs, and enable
                                PR/Research/Startup projects.
                            </li>
                            <li class="list-item">Industry & MSME Collaboration:
                                Co-develop services, deploy sectoral solutions, or integrate your body into the
                                ecosystem as an AOB or strategic body.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-item overflow-hidden">
                        <ul class="list-items fs-5">
                            <li class="list-item">Mentoring & Consulting:
                                Experienced professionals and CXOs can become mentors, ecosystem builders, or
                                domain-level consultants.
                            </li>
                            <li class="list-item">Tech & R&D Projects:
                                Submit your project, join innovation troupes, become part of TRIIC, or explore
                                research-to-business frameworks.
                            </li>
                        </ul>
                        <p class="fs-5" style="text-align: justify;">Full Navigation Directory
                        </p>
                        <ul class="list-items fs-5">
                            <li class="list-item">Live project links</li>
                            <li class="list-item">Major program dashboards</li>
                            <li class="list-item">PDF downloads</li>
                            <li class="list-item">Connect options with active troup coordinators</li>
                            <li class="list-item">Recommendations based on your domain and interest</li>
                        </ul>
                        <p class="fs-5" style="text-align: justify;">This navigation model will allow any visitor to
                            take the first concrete step that leads them into the real working structure of the Ourown
                            Ecosystem.
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