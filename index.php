<?php
$page = 'home';
require './components/head.php';
?>
<title>BusyAge</title>
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


    <!-- Carousel Start -->
    <div class="container-fluid  px-0">
        <div id="hero">
            <img src="./img/bg.jpg" class="hero_bg" alt="Second slide">
            <div class="container carousel-content px-4">
                <h4 class="mb-4 animated slideInDown text-primary">Your Work, Your Sanctuary, Our Services</h4>
                <h1 class="text-white display-3 mb-4 animated slideInDown"> The Ecosystem That <span
                        class="text-primary"> Builds </span> With You, Not Just For You</h1>

                <a href="./service.php" class="me-2"><button type="button"
                        class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Explore
                        Services</button></a>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- busyAge Start -->
    <div class="container-fluid" id="about_us">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-12 orderSecond wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <img src="img/home/2.jpg" class="img-fluid h-100" alt="img">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 orderFirst wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                            Busy Age</h5>
                        <h1 class="display-6 mb-2">Opening to the our own Ecosystem</h1>
                        <p class="fs-5" style="text-align: justify;">BusyAge is more than a name — it’s a declaration.
                            This era belongs to those who
                            act, innovate, and build with purpose. As the first structural pillar of the Ourown
                            Ecosystem, BusyAge serves as a gateway for professionals, founders, students, and
                            institutions to co-create their future through structured services, shared systems, and
                            value-driven enterprise development.</p>
                        <p class="fs-5" style="text-align: justify;">This isn’t just a service hub — it’s a
                            participation platform. BusyAge enables you not just to hire a solution, but to become part
                            of the solution-design process itself. Whether you’re a student with ambition, a founder
                            with a goal, an investor with vision, or an institution aligned with national priorities —
                            BusyAge opens the door.</p>

                        <a href="welcomeBusyAge.php" class="d-block text-end">
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-2">Read
                                more</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- busyAge end -->

    <!-- ourownEcosystem start -->
    <div class="container-fluid" id="about_us">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                            Our own Ecosystem</h5>
                        <h1 class="display-6 mb-2">Origin & Evolution</h1>
                        <p class="fs-5" style="text-align: justify;">What began as a consulting initiative matured into
                            a platform that builds platforms. The Ourown Ecosystem is a decentralized yet highly
                            integrated framework — bringing together professionals, founders, institutions, investors,
                            and pods under one scalable vision.</p>
                        <p class="fs-5" style="text-align: justify;">Built around bodies like Z N Entrepreneur, Panda
                            Outsourcing, TBBIM, and TRIIC, this ecosystem doesn’t just incubate startups — it incubates
                            entire systems. From mentoring pipelines to revenue-sharing execution teams, from
                            institutional alliances to investor-ready AOBs, the ecosystem enables value creation with
                            shared responsibility and sustainable rewards.</p>

                        <a href="ourownEcosystem.php">
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-2">Read
                                more</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <img src="img/home/1.jpg" class="img-fluid h-100" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ourownEcosystem end -->

    <!-- ourMission start -->
    <div class="container-fluid" id="about_us">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-12 orderSecond wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <img src="img/home/3.jpg" class="img-fluid h-100" alt="img">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 orderFirst wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                            Our Mission & Vision</h5>
                        <h1 class="display-6 mb-2">Our Mission, Vision & Strategic Focus</h1>
                        <p class="fs-5" style="text-align: justify;">Our mission is simple: To turn individuals into
                            creators of value and institutions into platforms of change. We aim to decentralize
                            entrepreneurship — making structured growth accessible, transparent, and collaborative.</p>
                        <p class="fs-5" style="text-align: justify;">Our vision is to build a world where students solve
                            real problems, professionals grow into founders, and mentors receive structured rewards —
                            all within an ecosystem that values both ownership and service. BusyAge isn’t just about
                            outcomes — it’s about processes that scale and people who matter.</p>

                        <a href="missionAndVision.php" class="d-block text-end">
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-2">Read
                                more</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ourMission End -->

    <!-- whatWeDo start -->
    <div class="container-fluid" id="about_us">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                            What We Do</h5>
                        <h1 class="display-6 mb-2">Short Term & Long Term</h1>
                        <p class="fs-5" style="text-align: justify;">BusyAge offers layered engagement across two
                            primary service modes:</p>
                        <p class="fs-5" style="text-align: justify;">Short Term:
                            Consulting | Project Execution | SaaS & Tech | Hiring Pods | Back-Office | Digital Outreach
                        </p>
                        <p class="fs-5" style="text-align: justify;">Long Term:
                            Incubation | Team Formation | PB/AOB Structuring | Equity-Based Growth | Institutional
                            Alignment
                        </p>
                        <p class="fs-5" style="text-align: justify;">Each service is more than delivery — it’s a
                            potential seed for your next platform or career pathway. Our goal: From service →
                            collaboration → co-ownership.</p>

                        <a href="shortTermLongTerm.php">
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-2">Read
                                more</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <img src="img/home/4.jpg" class="img-fluid h-100" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- whatWeDo End -->


    <!-- ourMission start -->
    <div class="container-fluid" id="about_us">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-12 orderSecond wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <img src="img/home/5.jpg" class="img-fluid h-100" alt="img">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 orderFirst wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                            How we Work</h5>
                        <h1 class="display-6 mb-2">Troups, PBs, AOBs</h1>
                        <p class="fs-5" style="text-align: justify;">We don’t operate through departments. We operate
                            through bodies — agile, outcome-driven, and scalable.</p>
                        <ul class="list-items fs-5">
                            <li class="list-item">TROUPS: Small project-focused units led by individuals or teams.</li>
                            <li class="list-item">PBs (Prime Bodies): Structured startup teams matured into
                                co-founder-ready bodies.</li>
                            <li class="list-item">AOBs (Associate Operating Bodies): Sector- or institution-aligned
                                autonomous entities with defined equity, delivery, and strategic mandates.</li>
                        </ul>
                        <p class="fs-5" style="text-align: justify;">Our model enables people to grow from participants
                            to platform-builders — with structured roles, shared responsibilities, and layered rewards.
                        </p>

                        <a href="howWeWork.php" class="d-block text-end">
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-2">Read
                                more</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ourMission End -->

    <!--FeaturedBodies Start  -->
    <div class="container-fluid" id="about_us">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                            Featured Bodies </h5>
                        <h1 class="display-6 mb-2">Panda Outsourcing, Z N Entrepreneur, ETC.</h1>
                        <p class="fs-5" style="text-align: justify;">BusyAge is home to multiple verticals under the
                            larger Ourown Ecosystem. Each one is specialized, yet integrated:</p>
                        <ul class="list-items fs-5">
                            <li class="list-item">Panda Outsourcing: Open platform for students, freelancers, and
                                professionals to contribute, collaborate, and earn through live projects.</li>
                            <li class="list-item">Z N Entrepreneur: Promoter-driven body offering mentorship, PR
                                support, digital outreach, and team structuring to emerging founders.</li>
                            <li class="list-item">TBBIM: Troup-Based Business Incubation
                                Model that enables structured team formation and startup acceleration through shared
                                ownership.</li>
                            <li class="list-item">TRIIC: Tech & Research Innovation Integration Cell – connects
                                educational institutions with industrial R&D, project pipelines, and outcome-based
                                training.</li>
                        </ul>

                        <a href="featuredBodies.php">
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-2">Read
                                more</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <img src="img/home/6.jpg" class="img-fluid h-100" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FeaturedBodies End -->

    <!-- whyItMatters start -->
    <div class="container-fluid" id="about_us">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-12 orderSecond wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <img src="img/home/7.jpg" class="img-fluid h-100" alt="img">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 orderFirst wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                            Why it Matters </h5>
                        <h1 class="display-6 mb-2">Impact, Inclusion, Innovation</h1>
                        <ul class="list-items fs-5">
                            <li class="list-item">Impact:
                                Each troup, pod, and AOB addresses real problems — from supply chain to education, from
                                cybersecurity to rural deployment.
                            </li>
                            <li class="list-item">Inclusion:
                                Professionals, students, homemakers, freelancers, researchers, NGOs, and corporate
                                mentors — all find a path to contribute meaningfully.
                            </li>
                            <li class="list-item">Innovation:
                                Decentralized team structures, role-based equity, non-linear growth — this is innovation
                                with accountability and real-world stakes.
                            </li>
                        </ul>
                        <p class="fs-5" style="text-align: justify;">This isn’t just a business network — it’s a
                            value-creation engine.</p>

                        <a href="impactInclusionInnovation.php" class="d-block text-end">
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-2">Read
                                more</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- whyItMatters End -->

    <!--howToJoin Start  -->
    <div class="container-fluid" id="about_us">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                            How to Join</h5>
                        <h1 class="display-6 mb-2">Individuals, Teams, Institutions</h1>
                        <p class="fs-5" style="text-align: justify;">BusyAge is home to multiple verticals under the
                            larger Ourown Ecosystem. Each one is specialized, yet integrated:</p>
                        <ul class="list-items fs-5">
                            <li class="list-item">Individuals:
                                Join or form a troup, receive mentorship, grow with platform support.
                            </li>
                            <li class="list-item">Teams:
                                Register a pod, get ecosystem approval, and scale it into a PB with defined equity and
                                role charts.
                            </li>
                            <li class="list-item">Institutional:
                                Form an AOB, integrate with the TRIIC model, or align training programs with real-time
                                implementation.
                            </li>
                        </ul>
                        <p class="fs-5" style="text-align: justify;">Participation here is not loose. It’s structured,
                            traceable, and growth-ready.</p>

                        <a href="individualsTeamsInstitutions.php">
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-2">Read
                                more</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <img src="img/home/8.jpg" class="img-fluid h-100" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- howToJoin End -->

    <!-- startExploring start -->
    <div class="container-fluid" id="about_us">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-12 orderSecond wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <img src="img/home/9.jpg" class="img-fluid h-100" alt="img">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 orderFirst wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                            Start Exploring</h5>
                        <h1 class="display-6 mb-2">Link to Major Menus</h1>
                        <p class="fs-5" style="text-align: justify;">Dive into our structured website menus to explore:
                        </p>
                        <ul class="list-items fs-5">
                            <li class="list-item">Services (Tech, SaaS, Consulting, Automation, Cybersecurity)</li>
                            <li class="list-item">Ecosystem Structure & Case Studies</li>
                            <li class="list-item">Industry-Wise Troup Models (14+ sectors)</li>
                            <li class="list-item">Whitepapers for Institutions, Investors, and Researchers</li>
                            <li class="list-item">Featured Bodies & Software Products</li>
                            <li class="list-item">Internship & Mentorship Opportunities</li>
                        </ul>
                        <p class="fs-5" style="text-align: justify;">Start wherever you are. Grow wherever you choose.
                        </p>

                        <a href="linktoMajorMenu.php" class="d-block text-end">
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-2">Read
                                more</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- startExploring End -->

    <!--quickPath Start  -->
    <div class="container-fluid" id="about_us">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                            Quick Path </h5>
                        <h1 class="display-6 mb-2">Choose Your Profile</h1>
                        <p class="fs-5" style="text-align: justify;">You don’t have to know everything. Just start with
                            where you are:</p>
                        <ul class="list-items fs-5" style="list-style: none;">
                            <li class="list-item">👩🎓 Intern → Explore student-led troup formation
                            </li>
                            <li class="list-item">💼 Freelancer → Join Panda Outsourcing and earn while building
                            </li>
                            <li class="list-item">🧑💼 Founder → Structure your body, form a PB
                            </li>
                            <li class="list-item">🏫 Institution → Onboard into AOB structure or TRIIC alliance
                            </li>
                            <li class="list-item">💰 Investor → Support an AOB, acquire equity in verified ventures
                            </li>
                        </ul>
                        <a href="choseYourProfile.php">
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-2">Choose My
                                Path</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <img src="img/home/9.jpg" class="img-fluid h-100" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- quickPath End -->



    <!-- Blog Start -->
    <div class="container-fluid">
        <div class="container blog-flex py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Blog
                </h5>
                <h1 class="display-5">Latest Blog & News</h1>
            </div>
            <div class="owl-carousel blog-carousel wow fadeInUp col-md-4" data-wow-delay=".5s">
                <div class="blog-item">
                    <!-- <img src="./img/farmer.jpg" class="img-fluid w-100 rounded-top" alt=""> -->
                    <div class="rounded-bottom bg-light">
                        <div class="d-flex justify-content-between p-4 pb-2">
                            <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>By Admin</span>
                            <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>12/12/2005</span>
                        </div>
                        <div class="px-4 pb-0">
                            <h4>New Blog</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe minima iure natus!
                                Impedit quos possimus quae eligendi ducimus culpa repudiandae!</p>
                        </div>
                        <div class="p-4 py-2 d-flex justify-content-between bg-light rounded-bottom blog-btn">
                            <a href="#!" type="button" class="btn btn-primary border-0">Read More</a>
                            <a href="#" class="my-auto text-dark"><i class="fa fa-comments me-2"></i>23 Comments</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="./blog.php" class="d-block text-end">
                <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-4 wow fadeInUp"
                    data-wow-delay=".3s">More Blogs</button>
            </a>
        </div>
    </div>
    <!-- Blog End -->



    <!-- Contact Start -->
    <div class="container-fluid py-5 pb-0">
        <div class="container py-5 pb-0">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Get In
                    Touch</h5>
                <h1 class="display-5 w-50 mx-auto">Contact for any query</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="h-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235850.27042420284!2d88.18253565744779!3d22.535660583743923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1698202482559!5m2!1sen!2sin"
                            class="border-0 rounded w-100 h-100" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="rounded contact-form">
                        <div class="mb-4">
                            <input type="text" class="form-control p-3" placeholder="Your Name">
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control p-3" placeholder="Your Email">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control p-3" placeholder="Subject">
                        </div>
                        <div class="mb-4">
                            <textarea class="w-100 form-control p-3" rows="6" cols="10"
                                placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-primary border-0 py-3 px-4 rounded-pill" type="button">Send
                            Message</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact End -->

    <script>
        // Check if accessToken exists in localStorage
        const accessToken = localStorage.getItem("accessToken");

        // If accessToken exists, show Profile link and hide Login link
        if (accessToken) {
            document.getElementById("profileLink").style.display = "flex";
            document.getElementById("loginLink").style.display = "none";
        } else {
            // If no accessToken, show Login link and hide Profile link
            document.getElementById("loginLink").style.display = "flex";
            document.getElementById("profileLink").style.display = "none";
        }
    </script>

    <?php require './components/footer.php' ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>


    <?php require './components/scripts.php' ?>
</body>

</html>