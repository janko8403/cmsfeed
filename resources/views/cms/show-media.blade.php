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

                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="input-group">
                                    <input id="foo" type="text" class="form-control" value="{{ asset('storage/media/img/' . $media->images) }}">
                                    <button class="btn input-group-addon" data-clipboard-action="copy" data-clipboard-target="#foo">Skopiuj link</button>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-md-2 col-xs-12">
                                <div class="block">
                                    <img class="img-fluid img-thumbnail" src="{{ asset('storage/media/img/' . $media->images) }}">
                                </div>
                            </div>
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
