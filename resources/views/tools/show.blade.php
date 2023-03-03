@extends('layouts.main')

@section('title', $tool->title)

@section('content')
  {{-- BUTTON --}}
  <div class="d-flex justify-content-between">
    <a class="btn btn-primary px-4 m-3" href="{{ route('tools.index') }}">Back</a>
    <a class="btn btn-secondary px-4 m-3" href="{{ route('tools.edit', $tool->id) }}">Edit Tool</a>
    <form action="{{route('tools.destroy', $tool->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger m-3">Delete Tool</button>
    </form>
  </div>
 

<section id="tool-show" class="d-flex justify-content-center text-white">
    <div class="col-12 col-md-10 col-lg-8">
        <img class="img-fluid w-50" src="{{ $tool->thumb }}" alt="{{ $tool->name }}">
        <h2>{{ $tool->name }}</h2>
        <p>{{$tool->description }}</p>
        <ul>
            <li>Category : {{$tool->category }}</li>
            <li>Release Year: {{$tool->release_year }}</li>
            <li>Latest Version : {{$tool->latest_version }}</li>
            <li>Download Link : {{$tool->download_link }}</li>
            <li>Supported OS : {{$tool->supported_os }}</li>
            <li>Vote : {{$tool->vote }}</li>
        </ul>
    </div>
</section>

@endsection
