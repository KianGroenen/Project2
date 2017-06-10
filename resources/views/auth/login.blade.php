@extends('layouts.app')

@section('content')
<div class="container">
<div id="topfloatright">

                        <div class="loginregisterbtntop">
                        <p class="whitebtntxt">Nog geen account?</p>
                            <a class="loginregisterlink" href="{{ url('/register') }}"><span class="redspan">Registreer</span> <span class="yellowspan">hier !</span></a>
                            
                          
                        </div>
</div>

            <div class="clear"></div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="loginregisterform">
                <h2 class="formtitle">Inloggen</h2>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="email" type="email" class="loginregister" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="password" type="password" class="loginregister" name="password" placeholder="Wachtwoord" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <a class="forgotbtn" href="{{ url('/password/reset') }}">
                                    Wachtwoord vergeten?
                                </a>
<!--
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
-->
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="loginregisterbtn">
                                    Druk om <br/>verder te gaan >>
                                </button>
<br/>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
