@extends('layouts.main')

@section('content')
    <main class="container">
        <div class="fumetti">
            @foreach ($fumetti as $comics)
            <div class="carta">
                <img src="{{ $comics['thumb'] }}">
                <p>
                {{ $comics['title'] }}
                </p>
            </div>

            @endforeach
        </div>
    </main>

@endsection
