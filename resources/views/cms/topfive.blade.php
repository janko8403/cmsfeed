@extends('cms.header')

@section('content')

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><i class="fa fa-child" aria-hidden="true"></i> Top 5 zawodników</li>
            </ol>

            <!-- Icon Cards -->
            <div class="row">

                <div class="col-md-12">

                <div class="card mb-3">
                    
                    <div class="card-body">

                        @if (Session::has('football_created'))
                            <div class="alert-message" role="alert">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="message">
                                            {{Session::get('football_created')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if (Session::has('football_destroy'))
                            <div class="alert-message" role="alert">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="message">
                                            {{Session::get('football_destroy')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="table-responsive">

                            @if ($footballs->count() === 0)
                                <div class="alert alert-danger" role="alert">
                                    Brak zawodników
                                </div>
                            @else

                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Imię i Nazwisko</th>
                                            <th>Klub</th>
                                            <th>Akcja</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Imię i Nazwisko</th>
                                            <th>Klub</th>
                                            <th>Akcja</th>
                                        </tr>
                                    </tfoot>

                                    <tbody>

                                        @foreach ($footballs as $football)
                                            <tr>
                                                <td>{{ $football->id }}</td>
                                                <td>{{ $football->name }}</td>
                                                <td>{{ $football->football_club }}</td>  

                                                @if (Auth::user()->id === Auth::id())
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-xs-3 col-xs-offset-4">
                                                                <a class="btn-action edit" href="{{ url('/top-five/' . $football->id . '/edit') }}">
                                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                </a> 
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/top-five/' . $football->id) }}">
                                                                    {{ csrf_field() }}
                                                                    <input type="hidden" name="_method" value="delete">
                                                    
                                                                    <button type="submit" class="btn-action delete">
                                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                @endif
                                                
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                                
                            @endif

                        </div>
                    </div>

                    <div class="card-footer small text-muted">
                        Zapisani zawodnicy
                    </div>

                </div>

            </div>

        </div>
    
    </div>

@endsection
