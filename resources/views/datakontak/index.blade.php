@extends('datakontak.layout')
@section('content')
<div class="card mt-5">
  <h2 class="card-header">Daftar Kontak</h2>
  <div class="card-body">
          
        @if (session('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        @endif

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('datakontak.create') }}"> <i class="fa fa-plus"></i> Buat Kontak Baru</a>
        </div>
  
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th width="30px">No</th>
                    <th width="200px">Nama</th>
                    <th>Nomor</th>
                    <th>Email</th>
                    <th width="100px">Asal Kota</th>
                    <th>Instansi</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>
  
            <tbody>
            @if($kontaks->isEmpty())
                <tr>
                    <td colspan="7">There are no data.</td>
                </tr>
            @else
                @foreach ($kontaks as $kontak)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kontak->name }}</td>
                        <td>{{ $kontak->phone }}</td>
                        <td>{{ $kontak->email }}</td>
                        <td>{{ $kontak->city }}</td>
                        <td>{{ $kontak->work_info }}</td>
                        <td>
                            <form action="{{ route('datakontak.destroy', $kontak->id) }}" method="POST" style="display:inline;">
                                <a class="btn btn-info btn-sm" href="{{ route('datakontak.show', $kontak->id) }}"><i class="fa-solid fa-list"></i> Show</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('datakontak.edit', $kontak->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this contact?');"><i class="fa-solid fa-trash"></i>Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        {!! $kontaks->links() !!}
  </div>
</div>  
@endsection
