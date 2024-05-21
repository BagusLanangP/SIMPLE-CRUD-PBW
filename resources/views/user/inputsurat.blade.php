@extends('layouts.mainlayouts')

@section('tittle', 'Input surat')


@section('content')
    
        
        <form method="post" action="/buatsurat/store" >
          <div class="mb-3">
            @csrf
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" aria-label="Default select example" name="jenissurat">
                @foreach( $jenisSurat as $jenis)
                    @if( old('category_id') == $jenis->id)
                        <option value="{{ $jenis->id }}" selected>{{ $jenis->name }}</option>
                    @else
                        <option value="{{ $jenis->id }}" selected>{{ $jenis->name }}</option>
                    @endif
                @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>             
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Nik</label>
            <input type="text" class="form-control" id="naik" name="nik" required>             
          </div>
          <button type="submit" class="btn btn-primary">Buat surat</button>
        </form>
      

@endsection


{{-- <div class="row">
  <div class="col-lg-4 col-md-6 ml-auto mr-auto">
    <div class="card card-login">
      <form class="form" method="post" action="">
        <div class="card-header card-header-primary text-center">
          <h4 class="card-title">Buat Surat</h4>
        </div>
        <p class="description text-center">Isi form dibawah</p>
        <div class="card-body">
            <div class="input-group">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" aria-label="Default select example" name="category_id">
                    @foreach( $categories as $category)
                        @if( old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->productName }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->productName }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <input type="text" class="form-control" id="name" name="name">
              </span>
            </div>
            <input type="text" class="form-control" placeholder="First Name...">
          </div>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="material-icons">mail</i>
              </span>
            </div>
            <input type="email" class="form-control" placeholder="Email...">
          </div>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="material-icons">lock_outline</i>
              </span>
            </div>
            <input type="password" class="form-control" placeholder="Password...">
          </div>
        </div>
        <div class="footer text-center">
          <a href="#pablo" class="btn btn-primary btn-link btn-wd btn-lg">Get Started</a>
        </div>
      </form>
    </div>
  </div>
</div> --}}