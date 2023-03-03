@php
// LINKS IMPORTATI DA config ma non usati qui
  $links = config('menu'); 
@endphp

<header class="w-100">
    <nav class="navbar navbar-expand-lg bg-light">
        <figure id="logo-header">
            <a href="{{ route('home') }}">
                {{-- <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Magazine_logo"> --}}
            </a>
        </figure>
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li>
                    <a class="nav-link @if (Route::is('home')) active @endif" href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a class="nav-link @if (Route::is('tools.index')) active @endif" href="{{ route('tools.index') }}">Tools</a>
                </li>
                <li>
                  <a class="nav-link @if (Route::is('dashboard')) active @endif" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                  <a class="nav-link @if (Route::is('about')) active @endif" href="{{ route('about') }}">About us</a>
                </li>
                <li>
                  <a class="nav-link @if (Route::is('contacts')) active @endif" href="{{ route('contacts') }}">Contact us</a>
                </li>
                <li>
                  <a class="nav-link @if (Route::is('privacy')) active @endif" href="{{ route('privacy') }}">Privacy Policy</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
</header>