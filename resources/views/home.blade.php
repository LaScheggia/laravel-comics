@extends('layouts.main')

@section('content')
    <main>
        <div class="fumetti">
            @foreach ($fumetti as $comics)
                <img src="{{ $comics['thumb'] }}">
                <p>
                {{ $comics['title'] }}
                </p>
            @endforeach
        </div>
    </main>

@endsection
