@extends('layout')
@section('title',"Question $question->questionNo")
@section('content')


<!-- Contact-->
<section class="page-section" id="contact">
            <div class="counter">
                <ul id="demo">
                    <li class="circle hours"></li>
                    :
                    <li class="circle minutes"></li>
                    :
                    <li class="circle seconds"></li>
                </ul>
            </div>
            <div class="container">
                <div class="text-center">
                    <!-- <h2 class="section-heading text-uppercase">Question . {!! $question->questionNo!!}</h2> -->
                    {!! $question->question!!}
                    <h4 class="question text-center p-2 m-4">{{$question->question}}                    </h4>
                    {!! $question->hint !!}
                </div>
                @if(!$question->showAnswer)
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
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Submit</button></div>
                </form>
                @endif
            </div>
        </section>

@endsection