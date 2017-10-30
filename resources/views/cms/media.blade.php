@extends('cms.header')

@section('content')

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><i class="fa fa-picture-o" aria-hidden="true"></i> Biblioteka</li>
            </ol>

            <!-- Icon Cards -->
            <div class="row">

                <div class="col-md-12">

                <div class="card mb-3">
                    
                    <div class="card-body">

                        @if (Session::has('alert-message'))
                            <div class="alert-message" role="alert">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="message">
                                            {{Session::get('media_destroy')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="row">

                            @if ($media->count() === 0)
                                <div class="col-md-12">
                                    <div class="alert alert-danger" role="alert">
                                        Brak obrazów
                                    </div>
                                </div>
                            @else

                                @foreach ($media as $img)

                                    <div class="col-md-2 col-xs-6">
                                        <div class="block">
                                            <a href="{{ url('media/' . $img->id) }}" class="loop">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>

                                            @if (Auth::user()->id === Auth::id())
                                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/media/' . $img->id) }}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="delete">

                                                    <button type="submit" class="close" href="#"><i class="fa fa-times" aria-hidden="true"></i></button>
                                                </form>
                                            @endif

                                            <img class="img-fluid img-thumbnail" src="{{ asset('storage/media/img/' . $img->images) }}">
            
                                        </div>
                                    </div>

                                @endforeach

                            @endif

                        </div>

                    </div>

                    <div class="card-footer small text-muted">
                        Ostatnio dodano o 11:59 PM
                    </div>

                </div>

            </div>

        </div>
    
    </div>

@endsection
