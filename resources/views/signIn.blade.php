@extends('layouts.app')

@section('title', 'Sign In')
@section('content')
    <section class="auth">
        <input class="auth__login" placeholder="login"/>
        <input class="auth__password" placeholder="password"/>
        <button class="auth__button">Sign In</button>
    </section>
@endsection