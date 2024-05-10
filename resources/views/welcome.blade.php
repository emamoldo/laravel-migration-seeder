@extends('layouts.app')

@section('content')

<div class="container py-4">
    <h1>Welcome</h1>

    <a href="{{route('guests.trains.index')}}">
        <p>
            Check the trains here
        </p>
    </a>

</div>

@endsection