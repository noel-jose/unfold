<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Unf01d" />
        <meta name="author" content="WEBTEAM CEC" />
        <title>Question {{$question->questionNo}}</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="question/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;300;400;700&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        
        <section class="page-section" id="contact">
            @if(!$question->showAnswer)
            <!-- counter code -->
            <div class="counter">
                <h4>Time left : </h4>
                <ul id="demo">
                    <li class="d-flex flex-column"><span class="circle hours"></span><span>Hours</span></li>
                    <li class="d-flex flex-column"><span class="circle minutes"></span><span>Minutes</span></li>
                    <li class="d-flex flex-column"><span class="circle seconds"></span><span>Seconds</span></li>
                </ul>
            </div>
            @endif
            <div class="container">
                <div class="text-center">
                    <div class="question m-3">
                        <h2 class="mb-4">Question {{$question->questionNo}}</h2>
                        {!! $question->question !!}
                    </div>
                    @if($question->hasHint)
                    <div class="hint m-3">
                        <h2 class="m-4">Hint</h2>
                        {!!$question->hint!!}
                    </div>
                    @endif
                </div>
                @if(!$question->showAnswer)
                <div class="form mt-5">
                <form id="contactForm" action="{{route('question.submit',$question)}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-12">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" name = "name" id="name" type="text" placeholder="Your Name "/>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" name = "ieeeid" id="ieeeid" type="number" placeholder="Your IEEE membership ID" />
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" name = "answer" id="answer" type="text" placeholder="Your Answer"/>
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button-->
                    <div class="form-buttons">
                        <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Submit</button></div>
                        <a class="text-center btn btn-primary btn-xl text-uppercase" href="/">Go Back</a>
                    </div>
                    
                    
                </form>
                </div>
                @else
                <div class="answer text-center m-3">
                    <h2 class="m-4">Answer</h2>
                    {!! $question->answer !!}
                    <a class="btn btn-primary btn-xl text-uppercase" href="/">Go Back</a>
                </div>
                @endif
                
            </div>
        </section>
        <div id="endtime" style="display: none;">{{$question->endTime}}</div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        @if(!$question->showAnswer)
        <script src="{{ asset('js/counter.js') }}"></script>
        @endif
    </body>
</html>


