@extends('layouts.template')

@section('content')

 
  <div class="container mt-3">
    <div>
        <h1>Form Mahasiswa</h1>
    </div>
    <div class="card">
        <div class="card-header">Tambah Data Mahasiswa</div>
        <div class="card-body">
            <form method="POST" action="{{ route('store_mahasiswa') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">NPM</label>
                    <input type="text" class="form-control" name="npm">
                    @error('npm')
                        <div class="form-text" text-danger>{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama">
                    @error('nama')
                        <div class="form-text" text-danger>{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
  </div>

@endsection