@extends('layouts.mainlayouts')

@section('tittle', 'Input surat')

@section('content')
<div class="container mt-5">
  <div class="row">
      <div class="col-lg-6 col-md-8 mx-auto form-surat-box shadow rounded p-5">
          <h2 class="text-center">FORM BUAT SURAT</h2>
          <p class="text-center">Isi form untuk membuat surat</p>
          <hr>
          <form id="suratForm" method="post" action="/buatsurat/store">
              @csrf
              <div class="mb-3">
                  <label for="kategori" class="form-label">Pilih Jenis Surat</label>
                  <select class="form-select form-control" id="kategori" name="jenissurat" required>
                      <option value="">Pilih jenis surat</option>
                      @foreach($jenisSurat as $jenis)
                          <option value="{{ $jenis->id }}" {{ old('category_id') == $jenis->id ? 'selected' : '' }}>{{ $jenis->name }}</option>
                      @endforeach
                  </select>
              </div>
              <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="mb-3">
                  <label for="kelas" class="form-label">Kelas</label>
                  <input type="text" class="form-control" id="kelas" name="kelas" required>
              </div>
              <div class="mb-3">
                  <label for="prodi" class="form-label">Prodi</label>
                  <input type="text" class="form-control" id="prodi" name="prodi" required>
              </div>
              <button type="submit" class="btn btn-primary">Buat surat</button>
          </form>
      </div>
  </div>
</div>
    {{-- <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto form-surat-box shadow rounded p-5">
                <h2 class="text-center">FORM BUAT SURAT</h2>
                <p class="text-center">Isi form untuk membuat surat</p>
                <hr>
                <form method="post" action="/buatsurat/store">
                    @csrf
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Pilih Jenis Surat</label>
                        <select class="form-select form-control" id="kategori" name="jenissurat">
                            @foreach($jenisSurat as $jenis)
                                <option value="{{ $jenis->id }}" {{ old('category_id') == $jenis->id ? 'selected' : '' }}>{{ $jenis->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" required>
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">prodi</label>
                        <input type="text" class="form-control" id="prodi" name="prodi" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Buat surat</button>
                </form>
            </div>
        </div>
    </div> --}}
@endsection
