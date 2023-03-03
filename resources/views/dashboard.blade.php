@extends('layouts.main')

@section('title', 'TOOLS')

@section('content')

@include ('includes.alert')

<section id="contents-space" class="container">
    {{-- CREATE BTN to tools.create e settatto il ComicController con il return della view --}}
    <a class="btn btn-primary m-3" href="{{ route('tools.create')}}">Add Tool</a>

    <div class="row g-5 justify-content-between">
        @foreach ($tools as $tool)
        <div class="my-card col-12 col-md-6 col-lg-2 d-flex flex-column align-items-center justify-content-between">
            {{-- SHOW --}}
            <a href="{{ route('tools.show', $tool->id )}}">
                <img class="img-fluid" src="{{ $tool->thumb }}" alt="{{ $tool->name }}">
            </a>
            <p>{{ $tool->name }}</p>
            <p>{{$tool->category}}</p>

            {{-- LOGIC STARS VOTE --}}
            <div class="text-warning">
                @for($i = 1; $i <= $tool->vote; $i++)
                    <i class="fa-solid fa-star"></i>
                @endfor
            </div>

            <p>Supported OS : {{$tool->supported_os}}</p>

            {{-- EDIT --}}
            <a class="btn btn-warning m-3 w-100" href="{{ route('tools.edit', $tool->id)}}">Edit</a>
            {{-- DELETE --}}
            <form class="w-100 m-3" action="{{route('tools.destroy', $tool->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger w-100">Delete Tool</button>
            </form>
        </div>
        
        @endforeach
    </div>
</section>



@endsection

@section('scripts')
<script>
vote = getDocument
</script>
@endsection

<div class="vote m-0">
    <font-awesome-icon icon="fa-solid fa-star" v-for="i in fullStar" :key="i" class="text-warning" />
    <font-awesome-icon icon="fa-solid fa-star" v-for="i in hollowStar" :key="i" />
</div>