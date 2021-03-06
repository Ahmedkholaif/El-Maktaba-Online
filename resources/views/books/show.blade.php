
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Styles -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">


        @if (auth()->user()->favorite_books()->get()->contains($book))
        <style type="text/css">
          #addFav {
              display: none;
            }
         </style>
           @else
           <style type="text/css">

           #removeFav {
              display: none;
            }

            </style>
         @endif

    </head>


<body>

  <div class="jumbotron  p-5 row">
    <div class="col-sm-12 col-md-12 col-xs-12  row">


        <div class="col-sm-2 col-md-2 col-xs-12 p-5 image-container">
          <img data-src="holder.js/32x32?theme=thumb&amp;bg=6f42c1&amp;fg=6f42c1&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 150px; height: 150px;" src="data:image/jpeg;base64,{{  base64_encode( $book->image )}}" data-holder-rendered="true">
        </div>

        <div class="col-sm-7 col-md-7 col-xs-7 m-0">
            <div><h2 class=" pb-2 mb-0">{{$book->title}} </h2></div>


              <div class="rating">

                <input  disabled ="disabled" id= "input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step=".1" value="{{ $book->averageRating  }}" data-size="xs">

                <input type="hidden" name="id" required="" value="{{ $book->id }}">


                <br/>

                </div>



            <div>
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                {{$book->description}}
                </p>
                <p>{{$book->copies_number}} copies available</p>
                <button class="btn btn-primary">Lease</button>
            </div>
        </div>
        <div class="col-sm-1 col-md-1 col-xs-1 m-0">


        <span style="font-size: 48px; color: red; ">
        <i class="far fa-heart" id="addFav"></i>
        </span>

        <span style="font-size: 48px; color: red;">
        <i class="fas fa-heart" id="removeFav"></i>
        </span>


        </div>




    </div>
 </div>


     <div class="commentAndRating">
     <form method="post"  class ="my-5 p-5" action="{{ route('comments.store' , ['id' => $book->id]) }}">
       @csrf
          <div class="form-group">
             <textarea  name = "body" style="width: 500px " class="my-3 p-3 rounded" placeholder="your comment"></textarea>
          </div>


          <button type="submit" class="btn btn-primary">Add</button>
      </form>
    <div>
    <h2 class="border-bottom border-gray pb-2 mb-0">Rate this book :</h2>

    <form method="post"  class ="my-5 p-5" action="{{route ('books.saveRating'  , ['id' => $book->id] )}}">
    {{ csrf_field() }}

    <div class="rating">

      <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $book->userAverageRating }}" data-size="xs">

      <input type="hidden" name="id" required="" value="{{ $book->id }}">


      <br/>

      <button class="btn btn-success">Submit Review</button>

      </div>
    </form>

    </div>

     </div>





    <div class="my-3 p-3 bg-white rounded box-shadow">
     <h2 class="border-bottom border-gray pb-2 mb-0">Comments</h2>

     @foreach($comments as $comment)

        <div class="media text-muted pt-3">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">{{$comment->user->name}}</strong>
            {{$comment->body}}

          </p>
          @if ($comment->user_id == auth()->user()->id)
          <form action="{{ route('comments.destroy', ['id' => $book->id , 'comment'=>$comment->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
           </form>
           @endif
           &nbsp;&nbsp;




          <input  disabled ="disabled" id= "input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step=".1"

          value="{{ $book->ratings()->where('user_id', $comment->user->id)->avg('rating')  }}" data-size="xs">

          <input type="hidden" name="id" required="" value="{{ $book->id }}">


        </div>

     @endforeach

        <small class="d-block text-right mt-3">
          <a href="{{ route('comments.index' , ['id' => $book->id]) }}">All comments</a>
        </small>
      </div>
      <div><h2>Related Books: </h2></div>

      <div class="card-deck my-5 p-5 ">

      @foreach($relatedBooks as $relatedBook)
        <div class="card col-2">
          <img src="data:image/jpeg;base64,{{  base64_encode( $relatedBook->image )}}" class="card-img-top" alt="16x16">
          <div class="card-body">
            <h3 class="card-title">{{$relatedBook->title}}</h3>

          </div>
        </div>
      @endforeach


      </div>


<script type="text/javascript">

    $("#input-id").rating();

    var $addFav = $("#addFav");
    var $removeFav= $("#removeFav");
    $addFav.on("click",function(e){
      $addFav.hide();
      $removeFav.show();
      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
      $.ajax({
          method: 'POST', // Type of response and matches what we said in the route
          url: '/favourites/store', // This is the url we gave in the route
          data: { bookid :'{{ $book->id }}' }, // a JSON object to send back
          success: function(response){ // What to do if we succeed
              console.log(response);

          },
          error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
              console.log(JSON.stringify(jqXHR));
              console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
          }
      });



    })

    // $('#addFav').one('click', addFavHandeler);


    $removeFav.on("click",function(e){
      $removeFav.hide();
      $addFav.show();
      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
      $.ajax({
          method: 'POST', // Type of response and matches what we said in the route
          url: '/favourites/destroy', // This is the url we gave in the route
          data: { bookid :'{{ $book->id }}' }, // a JSON object to send back
          success: function(response){ // What to do if we succeed
              console.log(response);

          },
          error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
              console.log(JSON.stringify(jqXHR));
              console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
          }
      });



    })

    // $('#removeFav').one('click', removeFavHandeler);

</script>



      </body>



</html>
