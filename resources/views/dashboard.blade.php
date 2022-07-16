@extends('layouts.app')

@section('content')

<div class="d-flex flex-column align-items-center">
    <div class="border" style="width: 600px">
        <form action="/tweets" method="post" class="d-flex align-items-center justify-content-between p-3">
                @csrf
                <input name="content" placeholder="O que está acontecendo?" class="form-control">
                <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        @foreach ($tweets as $tweet)
            <div class="border-bottom p-3">
                <h4>{{ $tweet->user->name }}</h4>
                <p>{{ $tweet->content }}</p>
            </div>
        @endforeach
    </div>

</div>
@endsection