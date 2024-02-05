@extends('layouts.main')
@section('container')
<div class="login-page">
    <div class="wrapper">
        <div class="form-box login">
            <form action= "/register" method="post">
                @csrf
                <h2>Registration</h2>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="name" autocomplete="off" required autofocus>
                    <label>Name</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="username" autocomplete="off" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" autocomplete="off" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" autocomplete="off" required>
                    <label>Password</label>
                </div>

                <button type="submit" class="submit-btn">Register</button>
                <div class="login-register">
                    <p>Have an account? 
                    <a href="/login" >login</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection