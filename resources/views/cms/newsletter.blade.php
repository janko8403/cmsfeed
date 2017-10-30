@extends('cms.header')

@section('content')

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><i class="fa fa-envelope" aria-hidden="true"></i> Zapisani subskrybenci</li>
            </ol>

            <!-- Icon Cards -->
            <div class="row">

                <div class="col-md-12">

                <div class="card mb-3">
                    
                    <div class="card-body">

                        @if (Session::has('send_newsletter'))
                            <div class="alert-message" role="alert">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="message">
                                            {{Session::get('send_newsletter')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="table-responsive">

                            @if ($newsletters->count() === 0)
                                <div class="alert alert-danger" role="alert">
                                    Brak subskrybentów
                                </div>
                            @else

                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>E-mail</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>E-mail</th>
                                        </tr>
                                    </tfoot>

                                    <tbody>

                                        @foreach ($newsletters as $newsletter)
                                            <tr>
                                                <td>{{ $newsletter->id }}</td>
                                                <td>{{ $newsletter->email }}</td>  
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                                
                            @endif

                        </div>
                    </div>

                    <div class="card-footer small text-muted">
                        Ostatnio zapisany subskrybent: {{ $data->created_at }}
                    </div>

                </div>

            </div>

        </div>
    
    </div>

@endsection
