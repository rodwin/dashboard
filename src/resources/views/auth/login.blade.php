@extends('layouts.login')

@section('content')
<div class="center-vertical">
    <div class="center-content">

        <form class="col-md-3 center-margin" id="login-validation" method="POST" action="{{ url('/login') }}" data-parsley-validate="">
            {{ csrf_field() }}

            <h3 class="text-center pad25B font-gray text-transform-upr font-size-23">Admin <span
                        class="opacity-80">v1.0</span></h3>
            <div id="login-form" class="content-box bg-default">
                <div class="content-box-wrapper pad20A">
                    @if ($errors->has('email'))
                        <div class="alert alert-danger">
                            <p>{{ $errors->first('email') }}</p>
                        </div>
                        <br/>
                    @endif
                    <div class="form-group">
                        <div class="input-group">
                        <span class="input-group-addon addon-inside bg-gray">
                            <i class="glyph-icon icon-envelope-o"></i>
                        </span>
                            <input id="email" type="email" class="form-control" name="email" placeholder="Enter email" value="{{ old('email') }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                        <span class="input-group-addon addon-inside bg-gray">
                            <i class="glyph-icon icon-unlock-alt"></i>
                        </span>
                            <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                    </div>
                    <div class="row">
                        <div class="checkbox-primary col-md-6" style="height: 20px;">
                            <label>
                                <input type="checkbox" id="loginCheckbox1" name="remember" class="custom-checkbox">
                                Remember me
                            </label>
                        </div>
                        <div class="text-right col-md-6">
                            <a href="#" class="switch-button" switch-target="#login-forgot" switch-parent="#login-form"
                               title="Recover password">Forgot your password?</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="login-forgot" class="content-box bg-default hide">
                <div class="content-box-wrapper pad20A">

                    <div class="form-group">
                        <label for="exampleInputEmail2">Email address:</label>
                        <div class="input-group">
                        <span class="input-group-addon addon-inside bg-gray">
                            <i class="glyph-icon icon-envelope-o"></i>
                        </span>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                        </div>
                    </div>
                </div>
                <div class="button-pane text-center">
                    <button type="submit" class="btn btn-md btn-primary">Recover Password</button>
                    <a href="#" class="btn btn-md btn-link switch-button" switch-target="#login-form"
                       switch-parent="#login-forgot" title="Cancel">Cancel</a>
                </div>
            </div>

        </form>

    </div>
</div>

@endsection
