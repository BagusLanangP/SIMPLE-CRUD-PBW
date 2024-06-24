@extends('layouts.mainlayouts')

@section('tittle', 'History surat')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <hr>
            <table class="table table-striped table-hover shadow history-surat-content">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nomor</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Tgl</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($surat as $s)
                    <tr id="surat-{{ $s->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $s->nomorSurat }}</td>
                        <td>{{ $s->jenisSurat->namaJenisSurat }}</td>
                        <td>{{ $s->created_at }}</td>
                        <td>{{ $s->validate }}</td>
                        <td>
                            <form action="{{ route('surat.destroy', $s->id) }}" method="post" class="delete-form" data-id="{{ $s->id }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0 m-0"><i data-feather="trash" class="icons-home"></i></button>
                            </form>
                            <a href="{{ route('surat.detail', $s->id) }}" class="btn btn-link p-0 m-0"><i data-feather="eye" class="icons-home"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


@section('scripts')

    $('.delete-form').on('submit', function(e) {
    e.preventDefault();
    
    var form = $(this);
    var id = form.data('id');
    var url = form.attr('action');

    $.ajax({
        type: 'POST',
        url: url,
        data: form.serialize(),
        success: function(response) {
            if (response.success) {
                $('#surat-' + id).remove();
                alert('Item deleted successfully');
            } else {
                alert('Failed to delete item');
            }
        },
        error: function() {
            alert('An error occurred while deleting the item');
        }
    });
});


@endsection




{{-- @extends('layouts.mainlayouts')

@section('tittle', 'Input surat')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <hr>
            <table class="table table-striped table-hover shadow history-surat-content">
                <thead>
                    <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Jenis Surat</th>
                    <th scope="col">Name</th>
                    <th scope="col">Tgl</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($surat as $s)
                    <tr>
                        <th>{{ $s->kelas }}</th>
                        <td>{{ $s->jenissurat }}</td>
                        <td>{{ $s->name }}</td>
                        <td>sfsd</td>
                        <td>
                            <i data-feather="trash" class="icons-home"></i>
                            <i data-feather="eye" class="icons-home"></i>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        
        
        
            </table>
        </div>
    </div>
    
@endsection


<form action="{{ route('product.destroy', $product->id) }}" method="post" style="display:inline;">
    @csrf
   @method('delete')
      <button type="submit" class="badge bg-danger"><i class="bi bi-x-circle"></i>
      </button>                    
</form> --}}