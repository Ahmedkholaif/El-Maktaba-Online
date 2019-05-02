@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
<div class="col-2">col-4</div>

<div class='col-10'> 
    @if(isset($books))
   
   
    @foreach($books as $book)
    <div class="card " style="width: 20rem; text-align:center;display:inline-block;padding:2%;margin:2%">
  <img class="card-img-top" src="{{asset('storage/'.$book->image)}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$book->title}}</h5>
    <p class="card-text">{{$book->author}}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$book->copies_number}}</li>
    <li class="list-group-item">{{$book->fees_per_day}}</li>
  </ul>
</div>
@endforeach

    @endif
    </div>
</div>
</div>
@endsection