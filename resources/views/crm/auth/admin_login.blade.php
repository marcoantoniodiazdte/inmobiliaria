@extends('crm.layouts.base_crm')
@section('title', 'Admin Login')

@section('contenido_inmobiliaria')
    <div class="login-page m-auto ">
        <div class="login-box">
            <div class="logo">
                <a href="javascript:void(0);">Admin<b>Inmobiliaria</b></a>
                {{-- <small>Admin BootStrap Based - Material Design</small>--}}
            </div>
            <div class="card">
                <div class="body">
                    {!! Form::open(['route' => 'admin.login.submit', 'method' => 'post']) !!}
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">person</i>
                                    </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock</i>
                                    </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">Log In</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

@endsection
