@extends('cms.header')

@section('content')

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><i class="fa fa-cogs" aria-hidden="true"></i> Ustawienia</li>
            </ol>

            <!-- Icon Cards -->
            <div class="row">

            <div class="col-xl-12 col-sm-6">

                <form role="form" method="POST" action="{{ url('/settings/1') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="col-xl-12 col-sm-6 mb-3">
                        <div class="card o-hidden">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </div>
                                <div class="card-title">
                                    Nazwa strony
                                </div>
                                
                                <input type="text" class="form-control" name="title" value="{{ $settings->title }}">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-sm-6 mb-3">
                        <div class="card o-hidden">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                </div>
                                <div class="card-title">
                                    Favicon
                                </div>

                                @if (!empty($settings->favicon))
                                    <img src="{{ asset('storage/setting/' . $settings->title . '/img/' . $settings->favicon) }}">
                                @endif

                                <input type="file" name="favicon" class="form-control">
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-sm-6 mb-3">
                        <div class="card o-hidden">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-copyright" aria-hidden="true"></i>
                                </div>
                                <div class="card-title">
                                    Copyright
                                </div>

                                <input type="text" class="form-control" name="copyright" value="{{ $settings->copyright }}">
                                
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Zapisz ustawienia
                            </button>
                        </div>
                    </div>

                    {{-- <div class="col-xl-12 col-sm-6 mb-3">
                        <a class="btn-navy" href="{{ url('/settings/1') }}">Zapisz ustawienia</a>
                    </div> --}}

                </form>

            </div>

            </div>

        </div>
    
    </div>

@endsection
