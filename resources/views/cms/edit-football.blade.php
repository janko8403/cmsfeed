@extends('cms.header')

@section('content')

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><i class="fa fa-futbol-o" aria-hidden="true"></i> Edytuj zawodnika</li>
            </ol>

            <!-- Icon Cards -->
            <div class="row">

                <div class="col-md-12">

                <div class="card mb-3">
                    
                    <div class="card-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/top-five/' . $football->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Imię i Nazwisko zawodnika</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $football->name }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('football_club') ? ' has-error' : '' }}">
                                <label for="football_club" class="col-md-4 control-label">Klub piłkarski</label>

                                <div class="col-md-12">
                                    <input id="football_club" type="text" class="form-control" name="football_club" value="{{ $football->football_club }}">
                                    @if ($errors->has('football_club'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('football_club') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <img class="img-responsive" src="{{ asset('storage/top/' . $football->name . '/img/' . $football->images) }}">
                            </div>

                            <div class="form-group">
                                <label for ="images" class="col-md-4 control-label">Zdjęcie zawodnika</label>

                                <div class="col-md-12">
                                    <input type="file" name="images" class="form-control" id="images">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        Edytuj zawodnika
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>
    
    </div>

@endsection
