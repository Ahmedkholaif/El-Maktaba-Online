<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homePage.css') }}" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Parisienne|Courgette" rel="stylesheet">
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

        <div class="search-box">
            <input type="text" placeholder="Search by name or author .." class="search-txt">
            <a href="" class="search-btn">
                <i class="fas fa-search"></i>
            </a>
        </div>
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

                                <div class="col-md-4">
                                    <div class="pricingTable">
                                        <div class="pricingTable-header">
                                            <h3 class="title"><a href="/books/{{ $book->id }}">{{ $book->title }}</a></h3>
                                        </div>
                                        <div class="pricing-content">
                                            <div class="price-value">

                                                    {{-- <a href="/books/{{ $book->id }}"><img src='data:image/jpeg;base64,{{  base64_encode( $book->image )}}' alt="Circle Image" class="img-raised rounded-circle img-fluid"/></a> --}}
                                                <div class="heartpadding">
                                                    <input type="checkbox" />
                                                </div>
                                                <hr>
                                                <div class="rating">
                                                    <div class="rating__star" title="5 stars" name="1star">⭐</div>
                                                    <div class="rating__star" title="4 stars" name="2star">⭐</div>
                                                    <div class="rating__star" title="3 stars" name="3star">⭐</div>
                                                    <div class="rating__star" title="2 stars" name="4star">⭐</div>
                                                    <div class="rating__star" title="2 stars" name="5star">⭐</div>
                                                </div>
                                                <span class="amount">${{ $book->fees_per_day }} </span>
                                            </div>
                                            <ul>
                                                <li>{{ $book->description }}</li>
                                                <li>{{ $book->copies_number }} copies available  </li>

                                            </ul>
                                        </div>
                                        <a href="#" class="pricingTable-signup">Lease</a>
                                    </div>
                                </div>

                                @endforeach





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
