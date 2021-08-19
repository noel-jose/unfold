<ul>
@foreach ($questions as $question)
    @if($question->showQuestion)
        <li>{{$question->question}}</li>
        @if($question->hasHint)
            <p>{{$question->hint}}</p>
        @endif
        @if($question->showAnswer)
            <p>{{$question->answer}}</p>
        @endif
    @else
        <li>Cant show this list</li>
    @endif
@endforeach
</ul>