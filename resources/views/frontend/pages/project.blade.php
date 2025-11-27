@extends('frontend.layout.app')
@section('content')

<div id="main-wrapper">
    <div class="site-wrapper-reveal">
        <!--===========  projects-wrapper  Start =============-->
        <div class="projects-wrapper section-space--ptb_100">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center">
                            <h3 class="heading">
                                Our IT Projects <br>
                                <span class="text-color-primary">Delivering Excellence in Technology</span>
                            </h3>
                        </div>
                        <!-- section-title-wrap End -->
                    </div>
                </div>

                <div class="row">

                    <!-- Project 1 -->
                    <div class="col-lg-4 col-md-6 wow move-up">
                        <div class="ht-box-images style-01 project-box">
                            <div class="image-box-wrap">
                                <div class="box-image">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/projects/project1.png') }}" alt="Cloud Migration Project">
                                </div>
                                <div class="content text-center">
                                    <h5 class="heading">Cloud Migration</h5>
                                    <div class="text">
                                        Successfully migrated enterprise data and applications to cloud platforms ensuring seamless workflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="col-lg-4 col-md-6 wow move-up">
                        <div class="ht-box-images style-01 project-box">
                            <div class="image-box-wrap">
                                <div class="box-image">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/projects/project2.jpg') }}" alt="Cybersecurity Upgrade Project">
                                </div>
                                <div class="content text-center">
                                    <h5 class="heading">Cybersecurity Upgrade</h5>
                                    <div class="text">
                                        Enhanced firewall and endpoint security to protect sensitive information across multiple networks.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="col-lg-4 col-md-6 wow move-up">
                        <div class="ht-box-images style-01 project-box">
                            <div class="image-box-wrap">
                                <div class="box-image">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/projects/project3.jpg') }}" alt="Enterprise Software Development">
                                </div>
                                <div class="content text-center">
                                    <h5 class="heading">Enterprise Software</h5>
                                    <div class="text">
                                        Developed a custom ERP solution streamlining business processes for global clients.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 4 -->
                    <div class="col-lg-4 col-md-6 wow move-up">
                        <div class="ht-box-images style-01 project-box">
                            <div class="image-box-wrap">
                                <div class="box-image">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/projects/project4.jpg') }}" alt="Mobile App Development">
                                </div>
                                <div class="content text-center">
                                    <h5 class="heading">Mobile App Development</h5>
                                    <div class="text">
                                        Created cross-platform mobile applications with intuitive UI and high performance.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 5 -->
                    <div class="col-lg-4 col-md-6 wow move-up">
                        <div class="ht-box-images style-01 project-box">
                            <div class="image-box-wrap">
                                <div class="box-image">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/projects/project5.jpg') }}" alt="Data Analytics Dashboard">
                                </div>
                                <div class="content text-center">
                                    <h5 class="heading">Data Analytics Dashboard</h5>
                                    <div class="text">
                                        Built interactive dashboards enabling businesses to track key metrics and insights in real-time.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 6 -->
                    <div class="col-lg-4 col-md-6 wow move-up">
                        <div class="ht-box-images style-01 project-box">
                            <div class="image-box-wrap">
                                <div class="box-image">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/projects/project6.jpg') }}" alt="IT Infrastructure Setup">
                                </div>
                                <div class="content text-center">
                                    <h5 class="heading">IT Infrastructure Setup</h5>
                                    <div class="text">
                                        Designed and deployed secure IT infrastructure for startups and corporate clients.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="section-under-heading text-center section-space--mt_80">
                    Explore more of our projects and see how we turn ideas into reality. <a href="#">View All Projects</a>
                </div>

            </div>
        </div>
        <!--===========  projects-wrapper  End =============-->

    </div>
</div>

@endsection
