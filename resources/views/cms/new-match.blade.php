@extends('cms.header')

@section('content')

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><i class="fa fa-futbol-o" aria-hidden="true"></i> Dodaj nowy mecz</li>
            </ol>

            <!-- Icon Cards -->
            <div class="row">

                <div class="col-md-12">

                <div class="card mb-3">
                    
                    <div class="card-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/match') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Nazwa wpisu</label>

                                <div class="col-md-12">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('short_description') ? ' has-error' : '' }}">
                                <label for="short_description" class="col-md-4 control-label">Krótki opis (max 110 znaków)</label>

                                <div class="col-md-12">
                                    <input id="short_description" type="text" class="form-control" name="short_description" value="{{ old('short_description') }}">

                                    @if ($errors->has('short_description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('short_description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <input type="hidden" class="form-control" name="author" value="{{ Auth::user()->name }}">

                            <div class="form-group">
                                <label for="description" class="col-md-4 control-label">Treść</label>

                                <div class="col-md-12">
                                    <textarea id="description" type="text" class="form-control" name="description">
                                        {{ old('description') }}
                                    </textarea>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <h4></h4>Kluby i bramki</h4>
                                    <hr>
                                </div>
                            </div>

                            <div class="form-group">

                                <label for="league_id" class="col-md-12 control-label">Wybierz ligę</label>

                                <div class="col-md-12">
                                    <select name="league_id" class="form-control" id="league_id">
                                        <option value="1">Champions League</option>
                                        <option value="2">Ekstraklasa</option>
                                        <option value="3">Bundesliga</option>
                                        <option value="4">Premier League</option>
                                        <option value="5">Ligue 1</option>
                                        <option value="6">LaLiga</option>
                                    </select>

                                    <br>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">

                                    <div class="col-md-3 col-xs-offset-2 box-match">

                                        <label for="first_name" class="col-md-12 control-label">Nazwa pierwszego klubu</label>

                                        <div class="col-md-12">
                                            <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                                        </div>

                                        <br>

                                        <label for="first_score" class="col-md-4 control-label">Wynik</label>

                                        <div class="col-md-12">
                                            <input id="first_score" type="text" class="form-control" name="first_score" value="{{ old('first_score') }}">
                                        </div>

                                        <br>

                                        <label for ="first_club" class="col-md-12 control-label">Pierwszy klub</label>

                                        <div class="col-md-12">
                                            <input type="file" name="first_club" class="form-control" id="first_club">
                                        </div>

                                    </div>

                                    <div class="col-md-3 col-xs-offset-1 box-match">

                                        <label for="second_name" class="col-md-12 control-label">Nazwa drugiego klubu</label>

                                        <div class="col-md-12">
                                            <input id="second_name" type="text" class="form-control" name="second_name" value="{{ old('second_name') }}">
                                        </div>

                                        <br>

                                        <label for="second_score" class="col-md-4 control-label">Wynik</label>

                                        <div class="col-md-12">
                                            <input id="second_score" type="text" class="form-control" name="second_score" value="{{ old('second_score') }}">
                                        </div>

                                        <br>

                                        <label for ="second_club" class="col-md-12 control-label">Drugi klub</label>

                                        <div class="col-md-12">
                                            <input type="file" name="second_club" class="form-control" id="second_club">
                                        </div>

                                    </div>

                                </div>
                                
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <br>
                                    <hr>
                                    <br>
                                </div>
                            </div>

                            <div id="seo" class="collapse">
                                
                                <div class="form-group">
                                    <label for="title_seo" class="col-md-4 control-label">Tytuł strony</label>

                                    <div class="col-md-12">
                                        <input id="title_seo" type="text" class="form-control" name="title_seo" value="{{ old('title_seo') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description_seo" class="col-md-4 control-label">Opis strony</label>

                                    <div class="col-md-12">
                                        <input id="description_seo" type="text" class="form-control" name="description_seo" value="{{ old('description_seo') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="key_seo" class="col-md-4 control-label">Słowa kuczowe</label>

                                    <div class="col-md-12">
                                        <input id="key_seo" type="text" class="form-control" name="key_seo" value="{{ old('key_seo') }}">
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        Dodaj wpis
                                    </button>
                
                                    <button data-toggle="collapse" data-target="#seo" class="btn btn-primary pull-right">SEO</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>
    
    </div>

@endsection
