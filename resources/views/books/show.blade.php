    
<html>   
   
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet"> 

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">  
    </head>
    
    
<body>

  <div class="jumbotron  p-5 row">
    <div class="col-sm-8 col-md-8 col-xs-8  row">


        <div class="col-sm-4 col-md-4 col-xs-12 image-container">
          <img data-src="holder.js/32x32?theme=thumb&amp;bg=6f42c1&amp;fg=6f42c1&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 150px; height: 150px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16a5b84e308%20text%20%7B%20fill%3A%236f42c1%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16a5b84e308%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%236f42c1%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2212.666666746139526%22%20y%3D%2216.999999976158144%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
        </div>

        <div class="col-sm-6 col-md-6 col-xs-12 m-0"> 
            <div><h2 class=" pb-2 mb-0">{{$book->title}} </h2></div>
            <form   class ="my-5 p-5" >
              
              <div class="rating">

                <input  disabled ="disabled" id= "input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step=".1" value="{{ $book->averageRating  }}" data-size="xs">

                <input type="hidden" name="id" required="" value="{{ $book->id }}">


                <br/>

              

                </div>
              </form>


            <div>
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                {{$book->description}}
                </p>
                <p>{{$book->copies_number}} copies available</p>
                <button class="btn btn-primary">Lease</button>
            </div>
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

      <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step=".1" value="{{ $book->userAverageRating }}" data-size="xs">

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
          <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 45px; height: 45px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16a5b84e2ff%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16a5b84e2ff%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2212.666666746139526%22%20y%3D%2216.999999976158144%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">{{$comment->user->name}}</strong>
            {{$comment->body}}

          </p>
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
          <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16a5b84e2ff%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16a5b84e2ff%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2212.666666746139526%22%20y%3D%2216.999999976158144%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="card-img-top" alt="16x16">
          <div class="card-body">
            <h3 class="card-title">{{$relatedBook->title}}</h3>
    
          </div>
        </div>
      @endforeach  
      
  
      </div>


<script type="text/javascript">

    $("#input-id").rating();

</script>



      </body>



</html>      