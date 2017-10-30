@extends('cms.header')

@section('content')

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><i class="fa fa-folder-open" aria-hidden="true"></i> Dodaj nowy wpis</li>
            </ol>

            <!-- Icon Cards -->
            <div class="row">

                <div class="col-md-12">

                <div class="card mb-3">
                    
                    <div class="card-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/posts') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nazwa wpisu</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="short_description" class="col-md-4 control-label">Krótki opis</label>

                                <div class="col-md-12">
                                    <input id="short_description" type="text" class="form-control" name="short_description" value="{{ old('short_description') }}">
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
                                <label for ="images" class="col-md-4 control-label">Obrazek wyróżniający</label>

                                <div class="col-md-12">
                                    <input type="file" name="images" class="form-control" id="images">
                                </div>
                            </div>

                            @if ($media->count() != 0)

                            <div class="form-group">
                                <div class="col-md-12">

                                    <div class="checkbox">
                                        <label data-toggle="collapse" data-target="#gallery">
                                            <input type="checkbox"/> Galeria na stronie?
                                        </label>
                                    </div>
                                    
                                    <div id="gallery" class="collapse">

                                        <label for="chkveg" class="control-label">Wybierz zdjęcia do galerii</label>

                                        <select name="GalList[]" id="chkveg" class="form-control" multiple="multiple">
                                            @foreach ( $media as $medias)
                                                    <option value="{{ $medias->id }}">{{ $medias->images }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>

                            @endif

                            {{-- @if ($categories->count() != 0)

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Wybierz kategorie</label>

                                    <div class="col-md-12">

                                        <select name="CategoryList[]" class="form-control" multiple="multiple">
                                            @foreach ( $categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                            @endif --}}

                            @if ($categories->count() != 0)

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Wybierz kategorie</label>

                                    <div class="col-md-12">

                                        <div class="multiselect">
                                            <div class="selectBox" onclick="showCheckboxes()">
                                                <select class="form-control">
                                                    <option>Wybierz kategorię</option>
                                                </select>
                                                <div class="overSelect"></div>
                                            </div>
                                            <div id="checkboxes">
                                                @foreach ( $categories as $category)
                                                    <label for="{{ $category->id }}">
                                                        <input type="checkbox" name="CategoryList[]" value="{{ $category->id }}" id="{{ $category->id }}" />{{ $category->name }}
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                
                            @endif

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
