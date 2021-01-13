@extends('layouts.master')

@section('title', 'Tambah Wisata')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah wisata</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('wisata.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_wisata"
                           class="form-control-label">Nama Wisata</label>
                    <input type="text" 
                           name="nama_wisata"
                           id="nama_wisata" 
                           value="{{ old('nama_wisata') }}" 
                           class="form-control @error('nama_wisata') is-invalid @enderror"/>
                    @error('nama_wisata')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="deskripsi" 
                           class="form-control-label">Deskripsi</label>
                    <textarea name="deskripsi" 
                              id="deskripsi" 
                              class="form-control @error('deskripsi') is-invalid @enderror"></textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="kategori">Kategori</label>
                    <select id="kategori" name="kategori" class="form-select">
                      <option selected>Pilih kategori</option>
                      <option>Pantai</option>
                      <option>Candi</option>
                      <option>Danau</option>
                      <option>Gunung</option>
                    </select>
                </div>
                <div class="row mt-2">
                    <div class="form-group col-md-4">
                        <label for="kecamatan" 
                               class="form-control-label">
                               Kecamatan</label>
                        <input type="text"
                            name="kecamatan" 
                            id="kecamatan" 
                            value="{{ old('kecamatan') }}" 
                            class="form-control @error('kecamatan') is-invalid @enderror"/>
                        @error('kecamatan')
                            <div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="kabupaten" 
                               class="form-control-label">
                               Kabupaten</label>
                        <input type="text"
                            name="kabupaten" 
                            id="kabupaten" 
                            value="{{ old('kabupaten') }}" 
                            class="form-control @error('kabupaten') is-invalid @enderror"/>
                        @error('kabupaten')
                            <div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="provinsi" 
                               class="form-control-label">
                               Provinsi</label>
                        <input type="text"
                            name="provinsi" 
                            id="provinsi" 
                            value="{{ old('provinsi') }}" 
                            class="form-control @error('provinsi') is-invalid @enderror"/>
                        @error('provinsi')
                            <div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                <div class="form-group d-grid gap-2 mt-2">
                    <button class="btn btn-primary btn-block" type="submit">
                        Tambah wisata
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection