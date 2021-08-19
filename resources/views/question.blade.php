@extends('layout')
@section('title','question 1')
@section('content')

<!-- Contact-->
<section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Question . {{ $question->questionNo}}</h2>
                    <h4 class="question text-center p-2">{{$question->question}}                    </h4>
                    <h5 class="question text-center p-1">Hint: {{$question->hint}}</h5>
                </div>
                <form id="contactForm">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-12">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name "/>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="ieeeid" type="number" placeholder="Your IEEE membership ID" />
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="answer" type="text" placeholder="Your Answer"/>
                            </div>
                        </div>
                        
                    </div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Submit</button></div>
                </form>
            </div>
        </section>

@endsection