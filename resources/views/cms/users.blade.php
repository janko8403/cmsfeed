@extends('cms.header')

@section('content')

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><i class="fa fa-users" aria-hidden="true"></i> Użytkownicy</li>
            </ol>

            <!-- Icon Cards -->
            <div class="row">

                <div class="col-md-12">

                <div class="card mb-3">
                    
                    <div class="card-body">

                        @if (Session::has('created_user'))
                            <div class="alert-message" role="alert">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="message">
                                            {{Session::get('created_user')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if (Session::has('user_destroy'))
                            <div class="alert-message" role="alert">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="message">
                                            {{Session::get('user_destroy')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="table-responsive">

                            @if ($users->count() === 0)
                                <div class="alert alert-danger" role="alert">
                                    Brak subskrybentów
                                </div>
                            @else

                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Nazwa</th>
                                            <th>E-mail</th>
                                            <th>Rola</th>
                                            <th>Akcja</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Nazwa</th>
                                            <th>E-mail</th>
                                            <th>Rola</th>
                                            <th>Akcja</th>
                                        </tr>
                                    </tfoot>

                                    <tbody>

                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>  

                                                <td>
                                                    @if ( $user->role_id == 1)
                                                        Super Admin
                                                    @endif
                                                    @if ( $user->role_id == 2)
                                                        Editor
                                                    @endif
                                                    @if ( $user->role_id == 3)
                                                        User
                                                    @endif
                                                </td>

                                                @if (Auth::user()->id === Auth::id())
                                                    <td>
                                                        @if ($user->id != 1 && $user->id != 2)
                                                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/users/' . $user->id) }}">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="_method" value="delete">
                                                
                                                                <button type="submit" class="btn-action delete">
                                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                                </button>
                                                            </form>
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
                        Zapisani użytkownicy
                    </div>

                </div>

            </div>

        </div>
    
    </div>

@endsection
