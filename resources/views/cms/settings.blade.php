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
                    @if (Session::has('settings_updated'))
                        <div class="alert-message" role="alert">
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-10">
                                    <div class="message">
                                        {{Session::get('settings_updated')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="col-xl-12 col-sm-6 mb-3">
                    <div class="card o-hidden">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </div>
                            <div class="card-title">
                                Nazwa strony
                            </div>
                            <div class="mr-5">
                                {{ $settings->title }}
                            </div>
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
                            <div class="mr-5">

                                @if (!empty($settings->favicon))
                                    <img src="{{ asset('storage/setting/' . $settings->title . '/img/' . $settings->favicon) }}">
                                @else 
                                    Brak favicon
                                @endif
                                
                            </div>
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
                            <div class="mr-5">
                                @if (!empty($settings->copyright))
                                    {{ $settings->copyright }} {{ date('Y') }}
                                @else 
                                    Brak opisu
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-sm-6 mb-3">
                    <a class="btn btn-primary" href="{{ url('/settings/1/edit') }}">Edytuj ustawienia</a>
                </div>

            </div>

        </div>
    
    </div>

@endsection
