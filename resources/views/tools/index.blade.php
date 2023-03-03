@extends('layouts.main')

@section('title', 'TOOLS')

@section('content')

@include ('includes.alert')

<section id="contents-space" class="container">

    <div class="row my-3 g-5 justify-content-between">
        <h1>Tools List</h1>
        @foreach ($tools as $tool)
        <div class="my-card col-12 col-md-6 col-lg-2 d-flex flex-column align-items-center justify-content-between">
        
            <img class="img-fluid" src="{{ $tool->thumb }}" alt="{{ $tool->name }}">
            
            <p>{{ $tool->name }}</p>
            <p>{{$tool->category}}</p>

            {{-- LOGIC STARS VOTE --}}
            <div class="text-warning">
                @for($i = 1; $i <= $tool->vote; $i++)
                    <i class="fa-solid fa-star"></i>
                @endfor
            </div>

            <p>{{$tool->supported_os}}</p>
       
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