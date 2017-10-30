@extends('cms.header')

@section('content')

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
              <li class ="breadcrumb-item active"><i class="fa fa-share-alt-square" aria-hidden="true"></i> Media społecznościowe</li>
            </ol>

            <!-- Icon Cards -->
            <div class="row">

                <div class="col-md-12">

                <div class="card mb-3">
                    
                    <div class="card-body">

                        @if (Session::has('socials_created'))
                            <div class="alert-message" role="alert">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="message">
                                            {{Session::get('socials_created')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/social/' . $socials->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="form-group">
                                <label for="facebook" class="col-md-4 control-label">Adres facebook</label>

                                <div class="col-md-12">
                                    <input id="facebook" type="text" class="form-control" name="facebook" value="{{ $socials->facebook }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="instagram" class="col-md-4 control-label">Adres instagram</label>

                                <div class="col-md-12">
                                    <input id="instagram" type="text" class="form-control" name="instagram" value="{{ $socials->instagram }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="twitter" class="col-md-4 control-label">Adres twitter</label>

                                <div class="col-md-12">
                                    <input id="twitter" type="text" class="form-control" name="twitter" value="{{ $socials->twitter }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="youtube" class="col-md-4 control-label">Adres youtube</label>

                                <div class="col-md-12">
                                    <input id="youtube" type="text" class="form-control" name="youtube" value="{{ $socials->youtube }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Zapisz ustawienia
                                </button>
                            </div>

                        </form>
                    
                    </div>

                </div>

            </div>

        </div>
    
    </div>

@endsection
