@extends('layouts.main')

@section('content')
<div>
    @foreach ($fumetti as $comics)
        <img src="{{ $comics['thumb'] }}">
        <p>
        {{ $comics['title'] }}
        </p>
    @endforeach
</div>
@endsection
