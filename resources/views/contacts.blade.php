@extends('layouts.main')

@section('title', 'Contacts')

{{-- HERO INCLUDE --}}
@section('content')
<div class="container text-center">
    <h3>Contacts us!</h3>
<div class="row justify-content-center m-3">
    <div class="col-3 d-flex justify-content-between">
        <a href="#">
            <i class="fa-brands fa-2x fa-facebook"></i>
        </a>
        
        <a href="#">
            <i class="fa-brands fa-2x fa-instagram"></i>
        </a>
    
        <a href="#">
            <i class="fa-brands fa-2x fa-square-twitter"></i>
        </a>
        
        <a href="#">
            <i class="fa-brands fa-2x fa-pinterest"></i>
        </a>
    </div>
</div>
    
</div>
@endsection