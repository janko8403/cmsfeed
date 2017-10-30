@extends('cms.header')

@section('content')

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><i class="fa fa-futbol-o" aria-hidden="true"></i> Wszystkie mecze</li>
            </ol>

            <!-- Icon Cards -->
            <div class="row">

                <div class="col-md-12">

                <div class="card mb-3">
                    
                    <div class="card-body">

                        @if (Session::has('match_created'))
                            <div class="alert-message" role="alert">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="message">
                                            {{Session::get('match_created')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if (Session::has('match_destroy'))
                            <div class="alert-message" role="alert">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="message">
                                            {{Session::get('match_destroy')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="table-responsive">

                            @if ($matches->count() === 0)
                                <div class="alert alert-danger" role="alert">
                                    Brak meczy
                                </div>
                            @else

                                <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Tytuł</th>
                                            <th>Autor</th>
                                            <th>Data utworzenia</th>
                                            <th>Ostatnia modyfikacja</th>
                                            <th>Akcja</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Tytuł</th>
                                            <th>Autor</th>
                                            <th>Data utworzenia</th>
                                            <th>Ostatnia modyfikacja</th>
                                            <th>Akcja</th>
                                        </tr>
                                    </tfoot>

                                    <tbody>

                                        @foreach ($matches as $match)
                                            <tr>
                                                <td>{{ $match->id }}</td>
                                                <td>{{ $match->title }}</td>
                                                <td>{{ $match->author }}</td>
                                                <td>{{ $match->created_at }}</td>
                                                <td>{{ $match->updated_at }}</td>

                                                @if (Auth::user()->id === Auth::id())
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-xs-3 col-xs-offset-4">
                                                                <a class="btn-action edit" href="{{ url('/match/' . $match->id . '/edit') }}">
                                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                </a> 
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <form class="form-horizontal" role="form" method="POST" action="{{ url('match/' . $match->id) }}">
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
                        Ostatnio dodano o 11:59 PM
                    </div>

                </div>

            </div>

        </div>
    
    </div>

@endsection
