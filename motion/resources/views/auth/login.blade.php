@extends('layouts.app')

@section('content')
<!-- Login wrapper -->
    <div class="login-wrapper">
            <div class="popup-header">
                <span class="text-semibold">User Login</span>
                <div class="btn-group pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs"></i></a>
                    <ul class="dropdown-menu icons-right dropdown-menu-right">
                        <li><a href="{{ url('/password/reset') }}"><i class="icon-info"></i> Forgot password?</a></li>
                        <li><a href="#"><i class="icon-support"></i> Contact admin</a></li>
                    </ul>
                </div>
            </div>
            <div class="well">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                    <label>E-Mail Address</label>
                    <input id="email" type="email" class="form-control" name="email" placeholder="E-mail" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                    @else
                        <i class="icon-envelop form-control-feedback"></i>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                    <label>Password</label>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @else
                        <i class="icon-lock form-control-feedback"></i>
                    @endif
                    
                </div>

                <div class="row form-actions">
                    <div class="col-xs-6">
                        <div class="checkbox checkbox-success">
                        <label>
                            <input type="checkbox" class="styled" name="remember">
                            Remember me
                        </label>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-warning pull-right"><i class="icon-menu2"></i> Sign in</button>
                    </div>
                </div>
            </form>
        </div> 
    </div>  
<!-- /login wrapper -->

@endsection
