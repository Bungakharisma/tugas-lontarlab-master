@extends('layouts.home')

@section('content')
<div class="col-md-8 col-xl-6 align-self-center">
    <h1 class="font-weight-bold">Selamat Datang</h1>
    <p class="text-secondary">Masukkan kredensial Anda untuk mengakses akun.</p>

    <form action="{{ url('auth') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        </div>
    
        <button type="submit" class="btn btn-custom mr-3" name="type" value="login">Login</button>
        <button type="submit" class="btn btn-custom_underline mr-3" name="type" value="register">Register</button>
    </form>
</div>
@endsection