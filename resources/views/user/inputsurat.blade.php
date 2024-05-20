@extends('layouts.mainlayouts')

@section('tittle', 'Input surat')


@section('content')
    <div class="page-header header-filter" style="background-image: url('https://images.unsplash.com/photo-1508144753681-9986d4df99b3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b3cf0ccc6287057b5a71b0ecdd6cf3f4&auto=format&fit=crop&w=6000&q=80 6000w'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-login">
              <form class="form" method="post" action="">
                <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">Buat Surat</h4>
                </div>
                <p class="description text-center">Isi form dibawah</p>
                <div class="card-body">
                    {{-- <div class="input-group">
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
                    </div> --}}
                    
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
        </div>
      </div>
       <footer class="footer text-center ">
          <p>Made with <a href="https://www.creative-tim.com/product/material-kit/?partner=101249">Material Kit</a> by Creative Tim</p>
      </footer>
    </div>

@endsection