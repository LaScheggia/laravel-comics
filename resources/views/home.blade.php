@extends('layouts.main')

@section('content')
    <main class="">
        <div class="fumetti container">
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
