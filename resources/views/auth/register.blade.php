@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">register</div>

                <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                
                <div class="form-group">
                    {{ Form::label('gender', 'Gender', ['class' => 'col-sm-2 control-label']) }}
                    <div class="col-sm-3">
                        {{ Form::select('gender', ['M' => 'Male', 'F' => 'Female'], 'M', 
                            ['class' => 'form-control']) }}
                    </div>
                    {{ Form::label('birthday', 'Birthday', ['class' => 'col-sm-3 control-label']) }}
                    <div class="col-sm-3">
                        {{ Form::date('birthday', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
                    </div>
                   
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-sm-2 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input id="name" type="text" placeholder="Full Name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-sm-2 control-label">E-Mail</label>

                    <div class="col-sm-9">
                        <input id="email" type="email" placeholder="E-Mail" class="form-control" name="email" value="{{ old('email') }}" required>
                        <span class="help-block">* required *format: example@example.com</span>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-9">
                        <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
                        <span class="help-block">* required</span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-sm-2 control-label">Confirm Password</label>

                    <div class="col-sm-9">
                        <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
                        <span class="help-block">* required</span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div>
    </div>
    </div>
</div>
</div>
<!-- ./container -->
@endsection
