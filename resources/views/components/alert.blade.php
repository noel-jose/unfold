<div class="d-flex justify-content-center">
   @if(session()->has('message'))
   <div class="alert alert-success " style="max-width: 250px;">
       {{session()->get('message')}}
   </div>
   @elseif(session()->has('error'))
   <div class="alert alert-danger">
       {{session()->get('error')}}
   </div>
   @endif

   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="list-style:none">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>