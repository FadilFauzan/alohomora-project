@extends('layouts.main')

@section('container')
<div class="login-page">
    <div class="wrapper">
        <div class="form-box login">
            <form action= "/login" method="post">
                @csrf
                <h2>Login</h2>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" autofocus required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" name="remember">Remember me</label>
                    <a href="#">Forgot Password</a>
                </div>
                <button type="submit" class="submit-btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? 
                    <a href="/register" >Register</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
