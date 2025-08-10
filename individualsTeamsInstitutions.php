<?php $page = 'home';
require './components/head.php' ?>
<title>Individuals, Teams, Institutions</title>
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
            <h1 class="display-2 text-white mb-4 animated slideInDown">Welcome to Individuals, Teams, Institutions</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Individuals, Teams, Institutions</li>
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
                        <img src="img/home/2.jpg" class="img-fluid h-100" alt="img">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-2 py-1 text-dark rounded-pill d-inline-block ">
                            Individuals, Teams, Institutions</h5>
                        <p class="fs-5" style="text-align: justify;">No matter who you are — a student, a professional,
                            a startup founder, or a college director — there’s a place for you in the Ourown Ecosystem.
                            We believe inclusive growth comes from structured collaboration. That’s why our doors are
                            open to all who wish to learn, build, contribute, or co-create a meaningful venture.
                        </p>
                        <p class="fs-5" style="text-align: justify;">
                            You can join as:
                        </p>
                        <ul class="list-items fs-5">
                            <li class="list-item">An intern or trainee to work with real-world projects under
                                mentoring bodies and troup models</li>
                            <li class="list-item">A skilled individual contributor or service provider to take
                                freelance, consulting, or coordination roles</li>
                            <li class="list-item">A full-fledged team forming a Troup to take responsibility for
                                execution, development, or outreach</li>
                            <li class="list-item">A college or institution forming an AOB (Associate Operating Body)
                                or AOA (Associate Outreach Alliance)</li>
                            <li class="list-item">A corporate or MSME becoming part of our extended value chain,
                                forming an AOC or directly integrating with PBs</li>
                        </ul>
                        <p class="fs-5" style="text-align: justify;">Every role has clarity, mentorship, and future
                            scale. You can begin where you are and grow across levels — from contributor to co-founder
                            to core vital contributor. Learn. Collaborate. Lead.
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
                            For Individuals</h5>
                        <p class="fs-5" style="text-align: justify;">The Ourown Ecosystem doesn’t merely offer
                            opportunities. It provides a structure where your growth becomes an integral part of a
                            shared mission. Whether you're exploring, transitioning, or already thriving in your career,
                            here’s how you can join us:
                        </p>
                        <p class="fs-5" style="text-align: justify;">For Individuals</p>
                        <ul class="list-items fs-5">
                            <li class="list-item">L0 → L9 Onboarding Levels: We initiate you with entry-level tasks,
                                exposure, or projects as per your interest, skill, and role. Each level prepares you for
                                the next — growing your confidence and competency.</li>
                            <li class="list-item">Role Options: Join as an Intern, Trainee, AEO (Associate Executive
                                Officer), or directly as a Project-Based Consultant.</li>
                            <li class="list-item">Domain Pathways: Choose from Tech, Content, PR, Project Management,
                                Ecosystem Coordination, Research, etc.</li>
                            <li class="list-item">Certification & Growth: Earn real badges and future eligibility to
                                be part of AVC (Associate Vital Contributor) groups or leadership troupes.</li>
                        </ul>
                        <h5 class="mb-1 py-1 text-dark d-inline-block">
                            For Teams</h5>
                        <ul class="list-items fs-5">
                            <li class="list-item">Troup Formation Model: Bring your team or build one with our help.
                                Once onboarded, you form a PB (Prime Body) through performance.</li>
                            <li class="list-item">Sector Choice: Choose your industry, domain, or ecosystem role —
                                Cybersecurity, SaaS Development, Policy Research, Field Operations, etc.</li>
                            <li class="list-item">Support System: Get access to SOPs, mentoring bodies, equity
                                frameworks, and scalable collaboration options.</li>
                            <li class="list-item">PB-to-AOB Growth: Qualified Troups can become AOBs with
                                investor/corporate alignment or sectoral integration.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-1 py-1 text-dark d-inline-block">
                            For Institutions</h5>
                        <ul class="list-items fs-5">
                            <li class="list-item">AOB Creation: Educational institutions, research centers, or
                                outreach groups can form an AOB in partnership with BCS or OESIL.</li>
                            <li class="list-item">Mentoring & Training: Enable your students to get real mentorship
                                under BCS-certified programs.</li>
                            <li class="list-item">IP & Project-Based Learning: Collaborate to develop live research,
                                entrepreneurship, and incubation pipelines within your own campus.</li>
                            <li class="list-item">Faculty & Alumni Integration: Nominate faculty members or alumni to
                                become mentors, guides, or ecosystem contributors.</li>
                        </ul>
                        <h5 class="mb-1 py-1 text-dark d-inline-block">
                            Pathways to Start</h5>
                        <ul class="list-items fs-5">
                            <li class="list-item">Register via our Join Page and fill your role form.</li>
                            <li class="list-item">Book a call with a coordinator or ecosystem partner.</li>
                            <li class="list-item">Begin with a task, micro role, or observation sprint.</li>
                            <li class="list-item">Attend an orientation or domain briefing session.</li>
                        </ul>
                        <p class="fs-5" style="text-align: justify;">Once you're in, the ecosystem opens up to you. You
                            don’t need big capital, only clarity and commitment. From there — your journey, role, and
                            scale are supported by structure, not just luck.
                        </p>
                        <a href="#!" class="d-block text-end">
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-2">View
                                More</button>
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