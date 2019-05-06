<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Parisienne|Courgette" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Home</title>
</head>
<body>

    <header class=" mainnav navbar-fixed-top" role="banner">
        {{-- <div class="navbar-header">
            <a href="./" class="navbar-brand brandcolor">Mktabaty <img src='{{ asset("images/owl.png") }}' alt="Circle Image" class=" rounded-circle img-full" /> </a>
        </div> --}}
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav navbar-left">

                <li >
                    <a class="main-nav in active" href="#">MyBooks</a>
                </li>

                <li>
                    <a class="main-nav " href="#">Favourites</a>
                </li>
                <li>
                    <!--   <a class="main-nav navbarsession" href="#">
                        -->
                        <ul class="main-nav navbarsession navloginusersize">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle whiteheperlink" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>

                        <!-- </a> -->
                    </li>

                </ul>
            </nav>

        </header>
        <!-- sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss -->

        <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
            <div class="search-box">
                <input type="text" placeholder="Search by name or author .." class="search-txt" name="query">
                <a href="" class="search-btn">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </form>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="orderbytext"> Order By </h3>
                    <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            {{-- <li role="presentation" class="active"><a href="#rate" aria-controls="home" role="tab" data-toggle="tab">Rate</a></li>
                            <li role="presentation"><a href="#latest" aria-controls="profile" role="tab" data-toggle="tab">Latest</a></li> --}}
                            <li><a href="{{ parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)  }}{{ isset($_GET['cat']) ? '?cat='.$_GET['cat'] : '' }}" >Rate</a></li>
                            <li ><a href="{{ parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)}}{{ isset($_GET['cat']) ? '?cat='.$_GET['cat'].'&' : '?' }}order=latest" >Latest</a></li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade in active" id="rate">
                                <h3>Rate</h3>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="latest">
                                <h3>Latest</h3>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="vertical-tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">

                            @foreach ($categories as $cat)

                            <li>
                                <a href="{{ parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) }}?cat={{ $cat->id }}">{{$cat->name}}</a></li>

                            @endforeach
                            <!--
                            <li role="presentation"><a href="#Section1"  role="tab" data-toggle="tab">Music</a></li>
                            <li role="presentation"><a href="#Section2"  role="tab" data-toggle="tab">Music</a></li>
                            <li role="presentation"><a href="#Section3"  role="tab" data-toggle="tab">kids</a></li>
                            <li role="presentation"><a href="#Section4"  role="tab" data-toggle="tab">Bussines</a></li>
                            <li role="presentation"><a href="#Section5"  role="tab" data-toggle="tab">Computers</a></li>
							 -->

                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs ">
                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">

                                @foreach ($books as $book)
                                    @include('includes.one-book',['book'=> $book])


                                @endforeach
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>



            <form method="POST" action="{{ route('lease_book', ['book' => $book]) }}">
                <div class="modal-body">
                        <div class="form-group">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <label for="exampleInputEmail1">Number of Leaseing days</label>
                                <input type="number" name="number_of_days" class="form-control" id="no_of_days">
                                <input type="hidden" name="fees_per_day" value="{{ $book->fees_per_day }}">
                                <input type="hidden" name="book_id" value="{{ $book->id }}">
                              </div>

                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Lease</button>
                </div>
            </form>
          </div>
        </div>
      </div>




                            </div>
                            {{-- <div role="tabpanel" class="tab-pane fade" id="Section2">
                                <h3>Section 2</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section3">
                                <h3>Section 3</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section4">
                                <h3>Section 4</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section5">
                                <h3>Section 5</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                            </div> --}}
                        </div>
                    </div>
                    <div class="text-center">
                        {{ $books->links() }}
                    </div>
                </div>
            </div>
        </div>

        <div class="hidebox"></div>



</body>
