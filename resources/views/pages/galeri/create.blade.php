@extends('layouts.master')

@section('title', 'Tambah Wisata')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Gambar wisata</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="wisata_id"
                           class="form-control-label">Nama Wisata</label>
                    <select name="wisata_id" class="form-select @error('wisata_id') is-invalid @enderror" id="">
                        <option selected>Pilih wisata...</option>
                        @foreach ($wst as $wisata)
                            <option value="{{ $wisata->id }}">{{ $wisata->nama_wisata }}</option>
                        @endforeach
                    </select>
                    @error('wisata_id')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="url_foto" 
                           class="form-control-label">Deskripsi</label>
                    <input type="file"
                           name="url_foto" 
                           value="{{ old('url_foto')}}"
                           accept="image/*"
                           class="form-control @error('url_foto') is-invalid @enderror">
                    @error('url_foto')
                        <div class="text-muted">{{ $message }}</div>
                     @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="is_default" class="form-check-label">Jadikan Default</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio"
                                   name="is_default"
                                   value="1"
                                   class="form-check-input @error('is_default') is-invalid @enderror">Ya
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio"
                                   name="is_default"
                                   value="0"
                                   class="form-check-input @error('is_default') is-invalid @enderror">Tidak
                        </label>
                        @error('is_default')
                            <div class="text-muted">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group d-grid gap-2 mt-2">
                        <button class="btn btn-primary btn-block" type="submit">
                            Tambah gambar wisata
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection