@extends('layouts.template')

@section('content')

  <div>
    <h2>Mahasiswa</h2>
  </div> 
  <div class="container mt-3">
    <div class="card p-3">
        <div class="mb-2"> 
          <a href="{{ route('form_add_mahasiswa') }}" class="btn btn-primary btn-sm">Tambah Data Mahasiswa</a>
        </div>
    
    <table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col" class="text-center">NO</th>
      <th scope="col">NPM</th>
      <th scope="col">NIDN</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($dataMahasiswa as $item)
        <tr>
            <td scope="row" class="text-center">{{ $loop->iteration }}</td>
            <td>{{ $item->npm }}</td>
            <td>{{ $item->nidn }}</td>
            <td>{{ $item->nama }}</td>
            <td>
                <button class="btn btn-primary btn-sm">Edit</button>
                <button class="btn btn-danger btn-sm">Hapus</button>
            </td>
        </tr>
    @endforeach
    

  </tbody>
</table>
    </div>
  </div>

@endsection