@extends('page.header')

@section('carousel')

    <!-- Carousel -->
    @if ($matches->count() >= 1)

	    <div id="carousel-liga" class="carousel slide carousel-fade" data-ride="carousel">
	        <div class="carousel-inner" role="listbox">

				@foreach($matches as $match)

		            <div class="item {{ $loop->first ? 'active' : '' }}">

		                <div class="slider-article">

		                    <div class="box-top">
		                        <div class="liga">
		                        	@if ($match->league_id == 1)
		                            	<img src="images/liga.jpg">
		                            @elseif ($match->league_id == 2)
		                            	<img src="images/liga.jpg">
	                            	@elseif ($match->league_id == 3)
	                            		<img src="images/liga.jpg">
	                            	@elseif ($match->league_id == 4)
	                            		<img src="images/liga.jpg">
	                            	@elseif ($match->league_id == 5)
	                            		<img src="images/liga.jpg">
	                            	@elseif ($match->league_id == 6)
	                            		<img src="images/liga.jpg">
                            		@endif
		                        </div>

		                        <div class="who-play">
		                            <div class="row">
		                                <div class="col-md-3 col-xs-12">
		                                    <img class="img-responsive img-center hidden-xs" src="{{ asset('storage/match/' . str_slug($match->title, '-') . '/img/' . $match->first_club) }}" alt="">   
		                                    <div class="title-club">
		                                        {{ $match->first_name }}
		                                    </div> 
		                                </div>
		                                <div class="col-md-2 col-xs-12">
		                                    <div class="pkt">
		                                        {{ $match->first_score }}
		                                    </div>
		                                </div>
		                                <div class="col-md-2 col-xs-12">
		                                    <div class="pkt">
		                                        -
		                                    </div>
		                                </div>
		                                <div class="col-md-2 col-xs-12">
		                                    <div class="pkt">
		                                        {{ $match->second_score }}
		                                    </div>
		                                </div>
		                                <div class="col-md-3 col-xs-12">
		                                    <img class="img-responsive img-center hidden-xs" src="{{ asset('storage/match/' . str_slug($match->title, '-') . '/img/' . $match->second_club) }}" alt="">   
		                                    <div class="title-club">
		                                        {{ $match->second_name }}
		                                    </div> 
		                                </div>
		                            </div> 
		                        </div>

		                    </div>

		                    <div class="clearfix"></div>

		                    <div class="hr"></div>

		                    <div class="box-title">
		                        <h3>{{ $match->title }}</h3>
		                    </div>

		                    <div class="box-body">
		                        <p>{{ $match->short_description }}</p>

		                        <div class="time">{{ $match->created_at->format('Y/m/d') }}</div>

		                        <p><a class="btn-article" href="{{ url('/post-match/' . $match->id ) }}">Czytaj artykuł</a></p>

		                    </div>
		                </div>
		                <!-- Controls -->
		                <a class="left carousel-control" href="#carousel-liga" role="button" data-slide="prev">
		                    <i class="fa fa-angle-left" aria-hidden="true"></i>
		                </a>
		                <a class="right carousel-control" href="#carousel-liga" role="button" data-slide="next">
		                    <i class="fa fa-angle-right" aria-hidden="true"></i>
		                </a>
		            </div>

	            @endforeach

	        </div>
	    </div>

    @endif
    <!-- End Carousel -->

@endsection

@section('section-1')

	<div class="row">

		@foreach($posts_1 as $post1)

	        <div class="col-md-6 col-xs-12">

	            <div class="second-article">
	                <a href="{{ url('/post/' . $post1->id ) }}">
	                    <div class="img-article">
	                        <img src="{{ asset('storage/post/' . str_slug($post1->name, '-') . '/img/' . $post1->images) }}" class="img-responsive img-center" alt="{{ $post1->name }}">
	                    </div>
	                </a>
	                <div class="article-body">
	                    <div class="title">{{ $post1->name }}</div>
	                    <p><a class="button arrow" href="{{ url('/post/' . $post1->id ) }}">zobacz</a></p>
	                </div>
	            </div>

	        </div>

        @endforeach

    </div>

@endsection

@section('section-2')

	<div class="row">

		@foreach($posts_2 as $post2)

	        <div class="col-md-6 col-xs-12">
	            <div class="mini-article mini">
	                <a href="{{ url('/post/' . $post2->id ) }}">
	                    <div class="img-article">
	                        <img src="{{ asset('storage/post/' . str_slug($post2->name, '-') . '/img/' . $post2->images) }}" alt="{{ $post2->name }}" class="img-responsive img-center">
	                    </div>
	                </a>                                        
	                <div class="article-body">
	                    <div class="date">{{ $post2->created_at->format('Y/m/d') }}</div>
	                    <div class="title">{{ $post2->name }}</div>
	                    <p><a class="btn-arrow" href="{{ url('/post/' . $post2->id ) }}"><img src="images/arrow-right.png"></a></p>
	                </div>
	            </div>
	        </div>

        @endforeach

    </div>

@endsection

@section('section-3')

	<section>
        <div class="container">
            <div class="row">

            	@foreach($posts_3 as $post3)
        
	                <div class="col-md-4 col-xs-12">
	                    <div class="second-article">
	                        <a href="{{ url('/post/' . $post3->id ) }}">
	                            <div class="img-article">
	                                <img src="{{ asset('storage/post/' . str_slug($post3->name, '-') . '/img/' . $post3->images) }}" alt="" class="img-responsive img-center">
	                            </div>
	                        </a>
	                        <div class="article-body">
	                            <div class="title">{{ $post3->name }}</div>
	                            <p><a class="button arrow" href="{{ url('/post/' . $post3->id ) }}">zobacz</a></p>
	                        </div>
	                    </div>
	                </div>

                @endforeach
        
            </div>
        </div>
    </section>

@endsection

@section('top-five')

	<section class="top-five">
        <div class="container">
            <div class="row">
        
                <div class="col-md-12">
                    <h3 class="text-center">TOP 5 zawodników tygodnia</h3>
                </div>

                @foreach($footballs as $football)
        
	                <div class="col-md-2 col-xs-12 {{ $loop->first ? 'col-md-offset-1' : '' }}">
	                    <img src="{{ asset('storage/top/' . $football->name . '/img/' . $football->images) }}" alt="" class="img-responsive img-center face">
	                    <div class="img-club"><img src="{{ asset('images/mini-bayern.png') }}" alt=""></div>
	                    <div class="name">{{ $football->name }}</div>
	                    <div class="club">{{ $football->football_club }}</div>
	                </div>

                @endforeach
        
            </div>
        </div>
    </section>

@endsection

@section('section-4')
	
	<div class="row">

		@foreach($posts_4 as $post4)
            
	        <div class="col-md-3 col-xs-12">
	            <div class="third-article">
	                <a href="{{ url('/post/' . $post4->id ) }}">
	                    <div class="img-article">
	                        <img src="{{ asset('storage/post/' . str_slug($post4->name, '-') . '/img/' . $post4->images) }}" alt="{{ $post4->name }}" class="img-responsive img-center">
	                    </div>
	                </a>
	                <div class="article-body">
	                    <div class="date">{{ $post4->created_at->format('Y/m/d') }}</div>
	                    <div class="title">{{ $post4->name }}</div>
	                    <p><a class="button arrow" href="{{ url('/post/' . $post4->id ) }}">zobacz</a></p>
	                </div>
	            </div>
	        </div>

        @endforeach

    </div>

@endsection

@section('section-5')
	<div class="row">

		@foreach($posts_5 as $post5)
            
	        <div class="col-md-2 col-xs-12">
	            <div class="four-article">
	                <a href="{{ url('/post/' . $post5->id ) }}">
	                    <div class="img-article">
	                        <img src="{{ asset('storage/post/' . str_slug($post5->name, '-') . '/img/' . $post5->images) }}" alt="{{ $post4->name }}" alt="" class="img-responsive img-center">
	                    </div>
	                </a>
	                <div class="article-body">
	                    <div class="date">{{ $post5->created_at->format('Y/m/d') }}</div>
	                    <div class="title">{{ $post5->name }}</div>
	                    <p><a class="button arrow" href="{{ url('/post/' . $post5->id ) }}">zobacz</a></p>
	                </div>
	            </div>
	        </div>

        @endforeach

    </div>
@endsection

@section('section-6')

	@foreach($posts_6 as $post6)

		<div class="col-md-4 col-xs-12">
	        <div class="second-article">
	            <a href="{{ url('/post/' . $post6->id ) }}">
	                <div class="img-article">
	                    <img src="{{ asset('storage/post/' . str_slug($post6->name, '-') . '/img/' . $post6->images) }}" alt="{{ $post6->name }}" class="img-responsive img-center">
	                </div>
	            </a>
	            <div class="article-body">
	                <div class="title">{{ $post6->name }}</div>
	                <p><a class="button arrow" href="{{ url('/post/' . $post6->id ) }}">zobacz</a></p>
	            </div>
	        </div>
	    </div>

    @endforeach

@endsection

@section('section-7')

	@foreach($posts_7 as $post7)
	
		<div class="mini-article mini">
		    <a href="{{ url('/post/' . $post7->id ) }}">
		        <div class="img-article">
		            <img src="{{ asset('storage/post/' . str_slug($post7->name, '-') . '/img/' . $post7->images) }}" alt="{{ $post7->name }}" class="img-responsive img-center">
		        </div>
		    </a> 
		    <div class="article-body">
		        <div class="date">{{ $post7->created_at->format('Y/m/d') }}</div>
		        <div class="title">{{ $post7->name }}</div>
		        <p><a class="btn-arrow" href="{{ url('/post/' . $post7->id ) }}"><img src="images/arrow-right.png"></a></p>
		    </div>
		</div>

	@endforeach

@endsection