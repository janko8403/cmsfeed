<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{ asset('storage/setting/' . $settings->title . '/img/' . $settings->favicon) }}">

        <title>{{ $settings->title }}</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    </head>

    <body>

        <nav class="navbar navbar-fixed-top">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>    
                    <a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('images/logo.jpg') }}"></a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li ><a href="#">Start</a></li>     
                        <li class="active"><a href="#">Polska Extraklasa</a></li>
                        <li><a href="#">Premier League</a></li>
                        <li><a href="#">Bundesliga</a></li>
                        <li><a href="#">Serie A</a></li>
                        <li><a href="#">Primera Division</a></li>
                        <li><a href="#">Ligue 1</a></li>
                        <li><a target="_blank" href="{{ $socials->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="{{ $socials->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="{{ $socials->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

                {{-- <div class="social-menu">
                    <ul class="nav-soc">
                        <li>
                            <a target="_blank" href="{{ $socials->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>     
                        <li>
                            <a target="_blank" href="{{ $socials->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ $socials->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div> --}}

            </div>
        </nav>

        <section class="post-article">
            <div class="container">
                <div class="row">

                    <div class="col-md-8 col-xs-12">
                        <h1>{{ $post->name }}</h1>

                        <p><strong>{{ $post->short_description }}</strong></p>
                    </div>
            
                    <div class="col-md-8 col-xs-12">
                        <img class="img-post img-responsive top-news" src="{{ asset('storage/post/' . str_slug($post->name, '-') . '/img/' . $post->images) }}" alt="">

                        {!!$post->description!!}

                        <div class="share">
                            <div class="title">Udostępnij:</div>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=http://newsfeed.hekko24.pl/post/{{ $post->id }}">
                                <div class="icon-fb"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            </a>
                            <a href="https://twitter.com/home?status=http://newsfeed.hekko24.pl/post/{{ $post->id }}">
                                <div class="icon-tw"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-md-4 col-xs-12">
                        
                        <div class="second-article top-news">
                            <a href="{{ url('/post/' . $post->id ) }}">
                                <div class="img-article">
                                    <img src="{{ asset('storage/post/' . str_slug($post->name, '-') . '/img/' . $post->images) }}" class="img-responsive img-center" alt="{{ $post->name }}">
                                </div>
                            </a>
                            <div class="article-body">
                                <div class="title">{{ $post->name }}</div>
                                <p><a class="button arrow" href="{{ url('/post/' . $post->id ) }}">zobacz</a></p>
                            </div>
                        </div>

                        <div class="second-article top-news">
                            <a href="{{ url('/post/' . $post->id ) }}">
                                <div class="img-article">
                                    <img src="{{ asset('storage/post/' . str_slug($post->name, '-') . '/img/' . $post->images) }}" class="img-responsive img-center" alt="{{ $post->name }}">
                                </div>
                            </a>
                            <div class="article-body">
                                <div class="title">{{ $post->name }}</div>
                                <p><a class="button arrow" href="{{ url('/post/' . $post->id ) }}">zobacz</a></p>
                            </div>
                        </div>

                    </div>
            
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
            
                    <div class="col-md-12 col-xs-12">
                        <h3>PODOBNE WPISY</h3>
                    </div>
            
                    <div class="col-md-4 col-xs-12">
                        <div class="second-article">
                            <a href="{{ url('/post/' . $post->id ) }}">
                                <div class="img-article">
                                    <img src="{{ asset('storage/post/' . str_slug($post->name, '-') . '/img/' . $post->images) }}" class="img-responsive img-center" alt="{{ $post->name }}">
                                </div>
                            </a>
                            <div class="article-body">
                                <div class="title">{{ $post->name }}</div>
                                <p><a class="button arrow" href="{{ url('/post/' . $post->id ) }}">zobacz</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-12">
                        <div class="second-article">
                            <a href="{{ url('/post/' . $post->id ) }}">
                                <div class="img-article">
                                    <img src="{{ asset('storage/post/' . str_slug($post->name, '-') . '/img/' . $post->images) }}" class="img-responsive img-center" alt="{{ $post->name }}">
                                </div>
                            </a>
                            <div class="article-body">
                                <div class="title">{{ $post->name }}</div>
                                <p><a class="button arrow" href="{{ url('/post/' . $post->id ) }}">zobacz</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-12">
                        <div class="second-article">
                            <a href="{{ url('/post/' . $post->id ) }}">
                                <div class="img-article">
                                    <img src="{{ asset('storage/post/' . str_slug($post->name, '-') . '/img/' . $post->images) }}" class="img-responsive img-center" alt="{{ $post->name }}">
                                </div>
                            </a>
                            <div class="article-body">
                                <div class="title">{{ $post->name }}</div>
                                <p><a class="button arrow" href="{{ url('/post/' . $post->id ) }}">zobacz</a></p>
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
            
                    <div class="col-md-12">
                        {{ $settings->copyright }} <?php echo date('Y'); ?> 
                    </div>

                </div>
            </div>
            <a href="#" class="scrollToTop"><i class="fa fa-angle-double-up fa-2x"></i></a>
        </footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="{{ asset('js-page/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js-page/index.js') }}"></script>
        <script src="{{ asset('js-page/scrolltotop.js') }}"></script>

        <script>
            $(window).scroll(function(){
              $('.parallax').css('background-position','center calc(50% + '+($(window).scrollTop()*0.4)+'px');
              // $('h1').css('transform', 'translateY('+($window.scrollTop() * .3)+'px)');
            });
        </script>

    </body>
</html>   