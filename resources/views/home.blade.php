@extends('layouts.main')

@section('title', 'HOME')

{{-- HERO INCLUDE --}}
@section('content')
<div class="container text-center">
    <h1>Welcome on DEV MAGAZINE!</h1>
    <a class="btn btn-primary @if (Route::is('tools.index')) active @endif" href="{{ route('tools.index') }}">Go to Tools Page</a>
</div>
@endsection