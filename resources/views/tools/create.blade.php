{{-- METTERE CONTAINER --}}
@extends('layouts.main')

@section('title', 'Edit Tool')

@section('content')
<section id="tool-edit" class="container">
    <h3>Create a new Tool</h3>
    {{-- RETURN TO INDEX TOOLS --}}
    <a class="btn btn-secondary my-3" href="{{ route('tools.index')}}">Back</a>
    
    @include('includes.tools.form')
</section>




@endsection