@extends('cms.header')

@section('content')

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
              <li class ="breadcrumb-item active"><i class="fa fa-folder-open-o" aria-hidden="true"></i></i> Dodaj nową kategorię</li>
            </ol>

            <!-- Icon Cards -->
            <div class="row">

                <div class="col-md-12">

                <div class="card mb-3">
                    
                    <div class="card-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/categories') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nazwa kategorii</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Dodaj kategorię
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
