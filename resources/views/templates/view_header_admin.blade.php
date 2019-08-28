<!DOCTYPE html>
<html>
  <head>
    <title>Desa - Cimuja</title>
    <meta charset="utf-8">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/material-dashboard.css?v=2.1.1')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="icon" href="{{asset('images/Sumedang.png')}}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <style type="text/css">
      label{
        color: black;
        margin-left: 20px;
      }
    </style>
  </head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <div class="logo">
        <div class="row align-items-center justify-content-center">
          <a href="">
            <h5>Dashboard Desa Cimuja</h5>
          </a>
        </div>
      </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item active  ">
          <a class="nav-link" href="{{asset('/home')}}">
            <p>Kategori Data Kepengurusan</p>
          </a>
        </li>

        <li class="nav-item active  ">
            <a class="nav-link" href="{{route('daftaraparaturlama')}}">
              <p>Data Kepengurusan Lama</p>
            </a>
        </li>

        <li class="nav-item active  ">
          <a class="nav-link" href="#0">
            <p>Cetak Data Kepengurusan</p>
          </a>
        </li>

        <li class="nav-item active  ">
          <a class="nav-link" href="{{url('/tambahjabatan')}}">
            <p>Tambah Data Jabatan</p>
          </a>
        </li>

        <li class="nav-item active  ">
          <a class="nav-link" href="{{url('/aparatur')}}">
            <p>Tambah Data Kepengurusan</p>
          </a>
        </li>
    </ul>
  </div>
</div>

<div class="main-panel">
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
    </div>
  </nav>

<div id="app">
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{asset('images/Sumedang.png')}}" style="width: 55px; height: 40px;">{{ config('app_name', 'Website Data Desa Cimuja') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav ml-auto">
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else
          Pengaturan
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>

  <main class="py-0">
    @yield('content')
  </main>
</body>
</html>