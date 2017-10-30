@extends('cms.header')

@section('content')

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><i class="fa fa-users" aria-hidden="true"></i> Dodaj nowego użytkownika</li>
            </ol>

            <!-- Icon Cards -->
            <div class="row">

                <div class="col-md-12">

                <div class="card mb-3">
                    
                    <div class="card-body">

                        <form class="form-horizontal" id="add" method="POST" action="{{ url('users') }}">
                            {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Nazwa użytkownika</label>

                                    <div class="col-md-12">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Adres e-email</label>

                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Hasło</label>

                                    <div class="col-md-12">
                                        <input id="password" type="text" class="form-control" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-12 control-label">Powtórz hasło</label>

                                    <div class="col-md-12">
                                        <input id="password-confirm" type="text" class="form-control" name="password_confirmation">
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        Dodaj użytkownika
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