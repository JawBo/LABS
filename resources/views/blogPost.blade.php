<!DOCTYPE html>
<html lang="en">

<head>
    <title>Labs - Design Studio</title>
    <meta charset="UTF-8">
    <meta name="description" content="Labs - Design Studio">
    <meta name="keywords" content="lab, onepage, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,600" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/flaticon.css" />
    <link rel="stylesheet" href="/css/owl.carousel.css" />
    <link rel="stylesheet" href="/css/style.css" />


    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    {{--
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader">
            <img src="img/logo.png" alt="">
            <h2>Loading.....</h2>
        </div>
    </div> --}}


    <!-- Header section -->
    <header class="header-section">
        <div class="logo">
            <img src="/img/logo.png" alt=""><!-- Logo -->
        </div>
        <!-- Navigation -->
        <div class="responsive"><i class="fa fa-bars"></i></div>
        <nav>
            <ul class="menu-list">
                <li><a href="/">Home</a></li>
                <li><a href="/services">Services</a></li>
                <li class="active"><a href="/blog">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- Header section end -->


    <!-- Page header -->
    <div class="page-top-section">
        <div class="overlay"></div>
        <div class="container text-right">
            <div class="page-info">
                <h2>Blog</h2>
                <div class="page-links">
                    <a href="#">Home</a>
                    <span>Blog</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Page header end-->


    <!-- page section -->
    <div class="page-section spad">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 blog-posts">
                    <!-- Single Post -->
                        @include('partials/article')
                    
                        <!-- Post Comments -->
                       @include('partials/commentsection')

                        <!-- Commert Form -->
                        <div class="row">
                            <div class="col-md-9 comment-from">
                                <h2>Leave a comment</h2>

                                @if ($errors->any())
						<div class="alert alert-danger ">
								<ul >
										@foreach ($errors->all() as $error)
												<li id="errorContact">{{ $error }}</li>
										@endforeach
								</ul>
						</div>
						@endif

                            <form class="form-class" action="/createcomment/{{$contenuComments[0]->article->id}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" name="name" placeholder="Your name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="email" placeholder="Your email">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea name="comment" placeholder="Comment"></textarea>
                                            <button class="site-btn " type="submit">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar area -->
                {{-- <div class="col-md-4 col-sm-5 sidebar">
                    <!-- Single widget -->
                    <div class="widget-item">
                        <form action="#" class="search-form">
                            <input type="text" placeholder="Search">
                            <button class="search-btn"><i class="flaticon-026-search"></i></button>
                        </form>
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Categories</h2>
                        <ul>
                            <li><a href="#">Vestibulum maximus</a></li>
                            <li><a href="#">Nisi eu lobortis pharetra</a></li>
                            <li><a href="#">Orci quam accumsan </a></li>
                            <li><a href="#">Auguen pharetra massa</a></li>
                            <li><a href="#">Tellus ut nulla</a></li>
                            <li><a href="#">Etiam egestas viverra </a></li>
                        </ul>
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Instagram</h2>
                        <ul class="instagram">
                            @foreach ($insta as $item)
                            <li><img src="{{'/'.$item->image}}" alt=""></li>

                            @endforeach
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Tags</h2>
                        <ul class="tag">
                            @foreach ($tags as $item)

                            <li><a href="">{{$item->tag}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Quote</h2>
                        <div class="quote">
                            <span class="quotation">‘​‌‘​‌</span>
                            <p>{{$quote[0]->quote}}</p>
                            <p>{{$quote[0]->author}}</p>
                        </div>
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Add</h2>
                        <div class="add">
                            <a href=""><img src="/img/add.jpg" alt=""></a>
                        </div>
                    </div>
                </div> --}}
                @include('partials.sidebar')
            </div>
        </div>
    </div>
    <!-- page section end-->


    <!-- newsletter section -->
    @include('partials/newsletter')
    <!-- newsletter section end-->


    <!-- Footer section -->
    <footer class="footer-section">
        <h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
    </footer>
    <!-- Footer section end -->



    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
