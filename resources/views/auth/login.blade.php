@extends('layouts.gentelella.auth')

@section('title')
    Login
@endsection

@section('content')
<div class="login_wrapper">
    <div class="form login_form">
        <div class="login_content">
            <form action="{{ url('/login') }}" method="post">
                <h1>Login Form</h1>
                <div>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">
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
                    <button type="submit" class="btn btn-default submit">
                        Log in
                    </button>
                    <a class="reset_pass" href="#">Lost your password?</a>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                    <p class="change_link"><a href="/register" class="to_register"> Create Account </a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection