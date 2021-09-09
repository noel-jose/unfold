<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Unf01d</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Unfo1d</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#rules">rules</a></li>
                        <li class="nav-item"><a class="nav-link" href="#question">Questions</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Timeline</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Masthead-->
        <header class="masthead">
            <x-alert />           
            <div class="container">
                <div class="masthead-subheading">Welcome To </div>
                <div class="masthead-heading ">Unf01d</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#rules">Tell Me More</a>
            </div>
        </header>
        <!-- rules-->
        <section class="page-section" id="rules">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">rules</h2>
                </div>
                <div class="mx-5">
                    <div>
                        <ul class="diamond d-flex flex-column justify-content-around">
                            <li>You will be given two questions each day and a fixed time window to solve each.</li>
                            <li>Once the time for a specific question is up, you will no longer be able to attend it. </li>
                            <li>Points will be awarded if the answer is correct. There will be no negative marking.</li>
                            <li>In case of a tie while choosing winners, the individual who took lesser time will be declared winner.</li>
                            <li>Solve the questions by yourself and refrain from seeking help.</li>
                            <li>You can submit the answer only once.</li>
                            <li>The decision of the judging panel will be final.</li>
                            <li>In case of any doubts or queries, please contact the organizers.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- question Grid-->
        <section class="page-section bg-light" id="question">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase mb-5">Questions</h2>
                    <p class="section-subheading text-uppercase mb-5">The questions will be available soon...</p>
                </div>
                <div class="row">
                    @foreach($questions as $question)
                    @if($question->showQuestion)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Question 6-->
                        <div class="question-item">
                            <a href="/question/{{$question->questionNo}}">
                                <div class="question-caption">
                                    <div class="question-caption-heading">Question {{$question->questionNo}}</div>
                                    @if($question->showAnswer)
                                    <div class="question-caption-subheading text-muted">View Answer</div>
                                    @endif
                                </div>
                            </a>                            
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase mb-5">Timeline</h2>
                </div>
                <ul class="timeline">
                    <li>
                    <div class="timeline-image">
                            <h4>
                                
                                <br />
                                Day 1
                                <br />
                                
                            </h4>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading mt-md-1  ">
                                <h4>23rd August</h4>
                                <h4 class="subheading">Question 1 and Question 2</h4>
                            </div>
                            <!-- <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div> -->
                        </div>
                    </li>
                    <li class="timeline-inverted">
                    <div class="timeline-image">
                            <h4>
                                
                                <br />
                                Day 2
                                <br />
                                
                            </h4>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>24th August</h4>
                                <h4 class="subheading">Question 3 and Question 4</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                    <div class="timeline-image">
                            <h4>
                                
                                <br />
                                Day 3
                                <br />
                                
                            </h4>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>25th August</h4>
                                <h4 class="subheading">Question 5 and Question 6</h4>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                
                                <br />
                                Unf01d ends
                                <br />
                                
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <div class="text-justify mt-5">
                        <h3 class="section-subheading m-2">Noel : ----------</h3>
                        <h3 class="section-subheading m-2">George : ------------</h3>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-lg-center">By Noel</div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
