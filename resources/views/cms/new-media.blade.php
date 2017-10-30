@extends('cms.header')

@section('content')

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><i class="fa fa-picture-o" aria-hidden="true"></i> Dodaj nowe</li>
            </ol>

            <!-- Icon Cards -->
            <div class="row">

                <div class="col-md-12">

                <div class="card mb-3">
                    
                    <div class="card-body">

                        @if (Session::has('media_created'))
                            <div class="alert-message" role="alert">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="message">
                                            {{Session::get('media_created')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/media') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}


                            <div class="form-group">
                                <label for ="images" class="col-md-4 control-label">Dodaj nowy</label>

                                <div class="col-md-12">
                                    <input type="file" name="images" class="form-control" id="images">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        Dodaj nowy
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
