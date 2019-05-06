
                                <div class="col-md-4">
                                    <div class="pricingTable">
                                        <div class="pricingTable-header">
                                            <h3 class="title"><a href="/books/{{ $book->id }}">{{ $book->title }}</a></h3>
                                        </div>
                                        <div class="pricing-content">
                                            <div class="price-value">

                                                    <a href="/books/{{ $book->id }}"><img src='data:image/jpeg;base64,{{  base64_encode( $book->image )}}' alt="Circle Image" class="img-raised rounded-circle img-fluid"/></a>
                                                <div id="heartpadding-{{$book->id}}">

                                                </div>
                                                <hr>
                                                <div class="rating">

                                                    <input  disabled ="disabled" id= "input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step=".1" value="{{ $book->averageRating  }}" data-size="xs">

                                                    <input type="hidden" name="id" required="" value="{{ $book->id }}">


                                                    <br/>

                                                </div>
                                                <span class="amount">${{ $book->fees_per_day }} </span>
                                            </div>
                                            <ul>
                                                <li>{{ $book->description }}</li>
                                                <li>{{ $book->copies_number }} copies available  </li>

                                            </ul>
                                        </div>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            Lease
                                          </button>
                                        <!-- Button trigger modal -->



                                    </div>
                                </div>






 @if (auth()->user()->favorite_books()->get()->contains($book))
 <script>

    console.log( "favourite!" );

    document.getElementById('heartpadding-{{$book->id}}').innerHTML +=  '<span style="font-size: 48px; color: red; "> <i class="far fa-heart addFav" id="{{$book->id}}" ></i></span> <span style="font-size: 48px; color: red;"> <i class="fas fa-heart removeFav" id="{{$book->id}}" ></i> </span>';
    var $addFav = $(".addFav#{{$book->id}}");

     $addFav.hide();



 </script>
 @else
 <script>

   console.log( "non favourite!" );

   document.getElementById('heartpadding-{{$book->id}}').innerHTML +=  '<span style="font-size: 48px; color: red;"> <i class="fas fa-heart removeFav" id="{{$book->id}}" ></i> </span> <span style="font-size: 48px; color: red; "> <i class="far fa-heart addFav" id="{{$book->id}}" ></i></span> ';
   var $removeFav = $(".removeFav#{{$book->id}}");

    $removeFav.hide();



</script>



    @endif


</body>
