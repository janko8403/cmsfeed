@extends('cms.header')

@section('content')

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Wszystkie kategorie</li>
            </ol>

            <!-- Icon Cards -->
            <div class="row">

                <div class="col-md-12">

                <div class="card mb-3">
                    
                    <div class="card-body">

                        @if (Session::has('cat_created'))
                            <div class="alert-message" role="alert">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="message">
                                            {{Session::get('cat_created')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if (Session::has('cat_destroy'))
                            <div class="alert-message" role="alert">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="message">
                                            {{Session::get('cat_destroy')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="table-responsive">

                            @if ($categories->count() === 0)
                                
                                <div class="alert alert-danger" role="alert">
                                    Brak kategorii
                                </div>

                            @else

                                <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Nazwa kategorii</th>
                                            <th>Data utworzenia</th>
                                            <th>Ostatnia modyfikacja</th>
                                            <th>Akcja</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Nazwa kategorii</th>
                                            <th>Data utworzenia</th>
                                            <th>Ostatnia modyfikacja</th>
                                            <th>Akcja</th>
                                        </tr>
                                    </tfoot>

                                    <tbody>

                                        @foreach ($categories as $category)

                                            <tr>
                                                <td>{{ $category->id }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->created_at }}</td>
                                                <td>{{ $category->updated_at }}</td>
                                                
                                                @if (Auth::user()->id === Auth::id())
                                                    <td>
                                                        @if ($category->id != 1 && $category->id != 2 && $category->id != 3 && $category->id != 4 && $category->id != 5 && $category->id != 6 && $category->id != 7 && $category->id != 8)
                                                            <div class="row">
                                                                <div class="col-xs-3 col-xs-offset-4">
                                                                    <a class="btn-action edit" href="{{ url('/categories/' . $category->id . '/edit') }}"><i class="fa fa-pencil" aria-hidden="true"></i>
                                                                    </a> 
                                                                </div>
                                                                <div class="col-xs-3">
                                                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/categories/' . $category->id) }}">
                                                                         {{ csrf_field() }}
                                                                        <input type="hidden" name="_method" value="delete">
                                                    
                                                                        <button type="submit" class="btn-action delete">
                                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        @endif
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
