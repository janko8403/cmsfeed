@extends('page.header')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-12 col-xs-12">
                <h1 class="text-center">Newsletter</h1> 

                <a href="{!! url('auth/facebook') !!}" class="btn btn-primary btn-block">
                    Login with facebook
                </a>

                <form action="{{ route('send') }}" role="form" method="post">
                	{{ csrf_field() }}
                	<div class="col-md-6 col-xs-offset-3{{ $errors->has('email') ? ' has-error' : '' }}">
	                	<div class="input-group">
							<input type="email" class="form-control" name="email" placeholder="Podaj adres e-mail">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-theme">Subskrybuj</button>
							</span>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
						</div>

                        @if (Session::has('save_newsletter'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('save_newsletter')}}
                            </div>
                        @endif

					</div>
                </form>
            </div>

        </div>
    </div>

@endsection