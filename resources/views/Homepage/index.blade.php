@extends('layouts.mainlayouts')

@section('tittle', 'Input surat')

@section('content')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

    <div class="homecontainer m-5 p-5 container">
        <h2 class="text-center">Welcome to Homepage!</h2>
        <h6 class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, a.!</h6>
        <hr>
        <div class="row">
            <div class="col-6 p-5">
                <div class="linkCreateSurat shadow bg-primary rounded p-3 text-white text-center">
                    <div class="row">
                        <i data-feather="edit"  class="icons-home" style="width: 204px; height: 90px;"></i>
                    </div>
                    <a href="/buatsurat" class=" text-white text-decoration-none" >Buat Surat</a>
                </div>
            </div>
            <div class="col-6 p-5">
                <div class="linkViewAllSurat shadow bg-primary rounded p-3 text-white text-center">
                    <div class="row">
                        <i data-feather="eye" class="icons-home" style="width: 204px; height: 90px;"></i>
                    </div>   
                    <a href="/historysurat" class=" text-white text-decoration-none">History Surat</a>
                </div>
            </div>
        </div>        
    </div>

@endsection