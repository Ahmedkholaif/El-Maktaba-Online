@extends('layouts.app')

@section('content')



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  


 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet"> 
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
</head>


<body>

<div class="container">
<div class="row">


<div class='col-12 filter_data'> 
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


</body>
@endsection