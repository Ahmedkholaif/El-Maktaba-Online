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
    
    <header class=" mainnav   navbar-fixed-top " role="banner">
        <div class="navbar-header">
            <a href="./" class="navbar-brand brandcolor">Mktabaty <img src='{{ asset("images/owl.png") }}' alt="Circle Image" class=" rounded-circle img-full" /> </a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav navbar-left">
                
                <li >
                    <a class="main-nav" href="#">MyBooks</a>
                </li>
                
                <li>
                    <a class="main-nav " href="#">Favourites</a>
                </li>
                <li>
                    <a class="main-nav navbarsession" href="#">user</a>
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
                <h3 class="orderbytext"> Order By</h3>
                <div class="tab" role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#rate" aria-controls="home" role="tab" data-toggle="tab">Rate</a></li>
                        <li role="presentation"><a href="#latest" aria-controls="profile" role="tab" data-toggle="tab">Latest</a></li>
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
                        <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Art</a></li>
                        <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Music</a></li>
                        <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">kids</a></li>
                        <li role="presentation"><a href="#Section4" aria-controls="messages" role="tab" data-toggle="tab">Bussines</a></li>
                        <li role="presentation"><a href="#Section5" aria-controls="messages" role="tab" data-toggle="tab">Computers</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabs ">
                        <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                            <div class="col-md-4">
                                <div class="pricingTable">
                                    <div class="pricingTable-header">
                                        <h3 class="title">Book Title</h3>
                                    </div>
                                    <div class="pricing-content">
                                        <div class="price-value">
                                            
                                            <img src='{{ asset("images/user.jpg") }}' alt="Circle Image" class="img-raised rounded-circle img-fluid"/>
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
                                            <span class="amount">$10 </span>
                                        </div>
                                        <ul>
                                            <li>info info info</li>
                                            <li>50 copies available  </li>
                                            
                                        </ul>
                                    </div>
                                    <a href="#" class="pricingTable-signup">Lease</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pricingTable">
                                    <div class="pricingTable-header">
                                        <h3 class="title">Book Title</h3>
                                    </div>
                                    <div class="pricing-content">
                                        <div class="price-value">
                                            
                                            <img src='{{ asset("images/user.jpg") }}' alt="Circle Image" class="img-raised rounded-circle img-fluid"/>
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
                                            <span class="amount">$10 </span>
                                        </div>
                                        <ul>
                                            <li>info info info</li>
                                            <li>50 copies available  </li>
                                            
                                        </ul>
                                    </div>
                                    <a href="#" class="pricingTable-signup">Lease</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pricingTable">
                                    <div class="pricingTable-header">
                                        <h3 class="title">Book Title</h3>
                                    </div>
                                    <div class="pricing-content">
                                        <div class="price-value">
                                            
                                            <img src='{{ asset("images/user.jpg") }}' alt="Circle Image" class="img-raised rounded-circle img-fluid"/>
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
                                            <span class="amount">$10 </span>
                                        </div>
                                        <ul>
                                            <li>info info info</li>
                                            <li>50 copies available  </li>
                                            
                                        </ul>
                                    </div>
                                    <a href="#" class="pricingTable-signup">Lease</a>
                                </div>
                            </div>
                            <center>
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            </center>
                        </div>
                    </div>
                </div>
            
            <div role="tabpanel" class="tab-pane fade" id="Section2">
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
            </div>
        </div>
        </div>
        <div class="hidebox"></div>
    </body>