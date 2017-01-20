@extends('layouts.gentelella.auth')

@section('content')
    <div class="row">
        <div class="col-md-offset-3 col-md-5">
            <div id="register" class="form registration_form" style="opacity: 1;">
                <section class="login_content">
                    <form method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <h1>Create Account</h1>
                        <div>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                            @endif
                        </div>
                        <div>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                            @endif
                        </div>
                        <div>
                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                            @endif
                        </div>
                        <div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default submit">Register</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="/login" class="to_register"> Log in </a>
                            </p>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection