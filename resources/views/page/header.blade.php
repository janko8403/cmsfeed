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

        <header class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-xs-12">

                        @yield('carousel')

                    </div>
                </div>
            </div>
        </header>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 main-article">

                        @yield('section-1')

                        @yield('section-2')

                    </div>

                    <div class="col-md-4 col-xs-12 hidden-xs main-match">
                        <div class="match">

                            <div class="header">
                                Mecze
                            </div>

                            <div class="menu">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#a1" data-toggle="tab">Dzisiaj</a>
                                    </li>
                                    <li>
                                        <a href="#a2" data-toggle="tab">Jutro</a>
                                    </li>
                                    <li>
                                        <a href="#a3" data-toggle="tab">Pojutrze</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content tab-body">
                                <div class="tab-pane fade in active" id="a1">

                                    <div class="row no-padding">
                                        <div class="col-md-12 col-sm-12">
                                            <img src="images/liga.jpg" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <p>Jagiellonia</p>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <img src="images/jaga.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <p>20:30</p>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <img src="images/lecz.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <p>Lech Poznań</p>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row no-padding">
                                        <div class="col-md-12 col-sm-12">
                                            <img src="images/liga.jpg" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <p>Jagiellonia</p>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <img src="images/jaga.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <p>20:30</p>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <img src="images/lecz.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <p>Lech Poznań</p>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row no-padding">
                                        <div class="col-md-12 col-sm-12">
                                            <img src="images/liga.jpg" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <p>Jagiellonia</p>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <img src="images/jaga.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <p>20:30</p>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <img src="images/lecz.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <p>Lech Poznań</p>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                </div>
                                <div class="tab-pane fade" id="a2">

                                    <div class="row no-padding">
                                        <div class="col-md-12 col-sm-12">
                                            <img src="images/liga.jpg" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <p>Jagiellonia</p>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <img src="images/jaga.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <p>20:30</p>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <img src="images/lecz.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <p>Lech Poznań</p>
                                        </div>
                                    </div>
                                    <hr>

                                </div>
                                <div class="tab-pane fade" id="a3">

                                    <div class="row no-padding">
                                        <div class="col-md-12 col-sm-12">
                                            <img src="images/liga.jpg" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <p>Jagiellonia</p>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <img src="images/jaga.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <p>20:30</p>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <img src="images/lecz.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <p>Lech Poznań</p>
                                        </div>
                                    </div>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
        </section>

        <section class="ligs">
            <div class="container">
                <div class="row">

                    <div class="col-md-2 col-xs-12">
                        <img src="images/championleague.jpg" alt="" class="img-responsive img-center">
                    </div>
            
                    <div class="col-md-2 col-xs-12">
                        <img src="images/ekstraklasa.jpg" alt="" class="img-responsive img-center">
                    </div>

                    <div class="col-md-2 col-xs-12">
                        <img src="images/bundesliga.jpg" alt="" class="img-responsive img-center">
                    </div>

                    <div class="col-md-2 col-xs-12">
                        <img src="images/premierleague.jpg" alt="" class="img-responsive img-center">
                    </div>

                    <div class="col-md-2 col-xs-12">
                        <img src="images/ligue1.jpg" alt="" class="img-responsive img-center">
                    </div>

                    <div class="col-md-2 col-xs-12">
                        <img src="images/laliga.jpg" alt="" class="img-responsive img-center">
                    </div>
            
                </div>
            </div>
        </section>

        @yield('section-3')

        @yield('top-five')

        

        <section>
            <div class="container">

                @yield('section-4')

                @yield('section-5')

            </div>
        </section>

        <section class="carousel-liga hidden-xs">
            <div class="container">
                <div class="row">
            
                    <div class="col-md-8 col-xs-12">
                        
                        <div id="table-carousel" class="carousel slide">
                            <div class="carousel-inner">
                                    <a class="carousel-control left" href="#table-carousel" data-slide="prev">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    </a> 
                                    <a class="carousel-control right" href="#table-carousel" data-slide="next">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                <div class="item active">
                                    <div class="name-liga">Premier League 2016/2017 - <span>tabela ligi angielskiej</span></div>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>POZ</th>
                                                <th></th>
                                                <th>M</th>
                                                <th>Z</th>
                                                <th>R</th>
                                                <th>P</th>
                                                <th>G+</th>
                                                <th>G-</th>
                                                <th>RÓŻNICA</th>
                                                <th>PKT.</th>
                                                <th>Zmiana</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="images/czelsi.jpg">
                                                        </div>
                                                        <div class="col-md-8">
                                                            Chelsea Londyn
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>38</td>
                                                <td>30</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>85</td>
                                                <td>33</td>
                                                <td>52</td>
                                                <td>93</td>
                                                <td>
                                                    <div class="arrow-up">▲</div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="images/czelsi.jpg">
                                                        </div>
                                                        <div class="col-md-8">
                                                            Chelsea Londyn
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>38</td>
                                                <td>30</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>85</td>
                                                <td>33</td>
                                                <td>52</td>
                                                <td>93</td>
                                                <td>
                                                    <div class="arrow-down">▼</div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="images/czelsi.jpg">
                                                        </div>
                                                        <div class="col-md-8">
                                                            Chelsea Londyn
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>38</td>
                                                <td>30</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>85</td>
                                                <td>33</td>
                                                <td>52</td>
                                                <td>93</td>
                                                <td>
                                                    <div class="arrow-down">▼</div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="images/czelsi.jpg">
                                                        </div>
                                                        <div class="col-md-8">
                                                            Chelsea Londyn
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>38</td>
                                                <td>30</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>85</td>
                                                <td>33</td>
                                                <td>52</td>
                                                <td>93</td>
                                                <td>
                                                    <div class="arrow-down">▼</div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="images/czelsi.jpg">
                                                        </div>
                                                        <div class="col-md-8">
                                                            Chelsea Londyn
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>38</td>
                                                <td>30</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>85</td>
                                                <td>33</td>
                                                <td>52</td>
                                                <td>93</td>
                                                <td>
                                                    <div class="arrow-down">▼</div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="images/czelsi.jpg">
                                                        </div>
                                                        <div class="col-md-8">
                                                            Chelsea Londyn
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>38</td>
                                                <td>30</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>85</td>
                                                <td>33</td>
                                                <td>52</td>
                                                <td>93</td>
                                                <td>
                                                    <div class="arrow-down">▼</div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="images/czelsi.jpg">
                                                        </div>
                                                        <div class="col-md-8">
                                                            Chelsea Londyn
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>38</td>
                                                <td>30</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>85</td>
                                                <td>33</td>
                                                <td>52</td>
                                                <td>93</td>
                                                <td>
                                                    <div class="arrow-down">▼</div>
                                                </td>
                                            </tr>

                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <th>POZ</th>
                                                <th></th>
                                                <th>M</th>
                                                <th>Z</th>
                                                <th>R</th>
                                                <th>P</th>
                                                <th>G+</th>
                                                <th>G-</th>
                                                <th>RÓŻNICA</th>
                                                <th>PKT.</th>
                                                <th>Zmiana</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>​
                                <div class="item">
                                    <div class="name-liga">Premier League 2016/2017 - <span>tabela ligi niemieckiej</span></div>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>POZ</th>
                                                <th></th>
                                                <th>M</th>
                                                <th>Z</th>
                                                <th>R</th>
                                                <th>P</th>
                                                <th>G+</th>
                                                <th>G-</th>
                                                <th>RÓŻNICA</th>
                                                <th>PKT.</th>
                                                <th>Zmiana</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="images/czelsi.jpg">
                                                        </div>
                                                        <div class="col-md-8">
                                                            Chelsea Londyn
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>38</td>
                                                <td>30</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>85</td>
                                                <td>33</td>
                                                <td>52</td>
                                                <td>93</td>
                                                <td>
                                                    <div class="arrow-up">▲</div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="images/czelsi.jpg">
                                                        </div>
                                                        <div class="col-md-8">
                                                            Chelsea Londyn
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>38</td>
                                                <td>30</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>85</td>
                                                <td>33</td>
                                                <td>52</td>
                                                <td>93</td>
                                                <td>
                                                    <div class="arrow-down">▼</div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="images/czelsi.jpg">
                                                        </div>
                                                        <div class="col-md-8">
                                                            Chelsea Londyn
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>38</td>
                                                <td>30</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>85</td>
                                                <td>33</td>
                                                <td>52</td>
                                                <td>93</td>
                                                <td>
                                                    <div class="arrow-down">▼</div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="images/czelsi.jpg">
                                                        </div>
                                                        <div class="col-md-8">
                                                            Chelsea Londyn
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>38</td>
                                                <td>30</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>85</td>
                                                <td>33</td>
                                                <td>52</td>
                                                <td>93</td>
                                                <td>
                                                    <div class="arrow-down">▼</div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="images/czelsi.jpg">
                                                        </div>
                                                        <div class="col-md-8">
                                                            Chelsea Londyn
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>38</td>
                                                <td>30</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>85</td>
                                                <td>33</td>
                                                <td>52</td>
                                                <td>93</td>
                                                <td>
                                                    <div class="arrow-down">▼</div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="images/czelsi.jpg">
                                                        </div>
                                                        <div class="col-md-8">
                                                            Chelsea Londyn
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>38</td>
                                                <td>30</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>85</td>
                                                <td>33</td>
                                                <td>52</td>
                                                <td>93</td>
                                                <td>
                                                    <div class="arrow-down">▼</div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="images/czelsi.jpg">
                                                        </div>
                                                        <div class="col-md-8">
                                                            Chelsea Londyn
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>38</td>
                                                <td>30</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>85</td>
                                                <td>33</td>
                                                <td>52</td>
                                                <td>93</td>
                                                <td>
                                                    <div class="arrow-down">▼</div>
                                                </td>
                                            </tr>

                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <th>POZ</th>
                                                <th></th>
                                                <th>M</th>
                                                <th>Z</th>
                                                <th>R</th>
                                                <th>P</th>
                                                <th>G+</th>
                                                <th>G-</th>
                                                <th>RÓŻNICA</th>
                                                <th>PKT.</th>
                                                <th>Zmiana</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>​
                            </div>​
                        </div>​

                    </div>
            
                    <div class="col-md-4 col-xs-12">

                        <div class="match">

                            <div class="header">
                                Top strzelcy
                            </div>

                            <div class="menu">
                                <select class="select-tabs">
                                    <option data-target="#b1">
                                        Ekstraklasa
                                    </option>
                                    <option data-target="#b2">
                                        Bundesliga
                                    </option>
                                    <option data-target="#b3">
                                        Premiere League
                                    </option>
                                    <option data-target="#b4">
                                        Ligue 1
                                    </option>
                                    <option data-target="#b5">
                                        LaLiga
                                    </option>
                                </select>
                            </div>

                            <div class="tab-content tab-body">
                                <div class="tab-pane fade in active" id="b1">

                                    <div class="row no-padding">
                                        <div class="col-md-3 col-sm-4">
                                            <img src="images/messi.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-6 col-sm-4">
                                            <div class="name">Lionel Messi</div>
                                            <div class="club">FC Barcelona</div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="pkt">12</div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row no-padding">
                                        <div class="col-md-3 col-sm-4">
                                            <img src="images/messi.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-6 col-sm-4">
                                            <div class="name">Lionel Messi</div>
                                            <div class="club">FC Barcelona</div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="pkt">12</div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row no-padding">
                                        <div class="col-md-3 col-sm-4">
                                            <img src="images/messi.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-6 col-sm-4">
                                            <div class="name">Lionel Messi</div>
                                            <div class="club">FC Barcelona</div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="pkt">12</div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row no-padding">
                                        <div class="col-md-3 col-sm-4">
                                            <img src="images/messi.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-6 col-sm-4">
                                            <div class="name">Lionel Messi</div>
                                            <div class="club">FC Barcelona</div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="pkt">12</div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row no-padding">
                                        <div class="col-md-3 col-sm-4">
                                            <img src="images/messi.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-6 col-sm-4">
                                            <div class="name">Lionel Messi</div>
                                            <div class="club">FC Barcelona</div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="pkt">12</div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row no-padding">
                                        <div class="col-md-3 col-sm-4">
                                            <img src="images/messi.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-6 col-sm-4">
                                            <div class="name">Lionel Messi</div>
                                            <div class="club">FC Barcelona</div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="pkt">12</div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row no-padding">
                                        <div class="col-md-3 col-sm-4">
                                            <img src="images/messi.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-6 col-sm-4">
                                            <div class="name">Lionel Messi</div>
                                            <div class="club">FC Barcelona</div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="pkt">12</div>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                </div>
                                <div class="tab-pane fade" id="b2">

                                    <div class="row no-padding">
                                        <div class="col-md-3 col-sm-4">
                                            <img src="images/messi.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-6 col-sm-4">
                                            <div class="name">Lionel Messi</div>
                                            <div class="club">FC Barcelona</div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="pkt">12</div>
                                        </div>
                                    </div>
                                    <hr>

                                </div>
                                <div class="tab-pane fade" id="b3">

                                    <div class="row no-padding">
                                        <div class="col-md-3 col-sm-4">
                                            <img src="images/messi.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-6 col-sm-4">
                                            <div class="name">Lionel Messi</div>
                                            <div class="club">FC Barcelona</div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="pkt">12</div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row no-padding">
                                        <div class="col-md-3 col-sm-4">
                                            <img src="images/messi.png" alt="" class="img-responsive img-center">
                                        </div>
                                        <div class="col-md-6 col-sm-4">
                                            <div class="name">Lionel Messi</div>
                                            <div class="club">FC Barcelona</div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="pkt">12</div>
                                        </div>
                                    </div>
                                    <hr>

                                </div>
                            </div>
                        </div>

                    </div>
            
                </div>
            </div>
        </section>

        <section>
            <div class="container">

                <div class="row">

                    @yield('section-6')
            
                    <div class="col-md-4 col-xs-12">

                        @yield('section-7')

                    </div>
            
                </div>

            </div>
        </section>

        @yield('content')

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