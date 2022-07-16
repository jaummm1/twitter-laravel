@extends('layouts.app')

@section('content')

<div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">

<h1 class="mb-4">Registre-se</h1>
    <form action="/signup" method="post" class="d-flex flex-column">
        @csrf
        <input name="name" placeholder="Nome" class="form-control mb-3">
        <input name="email" name="email" placeholder="E-mail" class="form-control mb-3">
        <input type="password" name="password" placeholder="Senha" class="form-control mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <a href="/login" class="mt-3">Login</a>
</div>
    @endsection