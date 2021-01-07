@extends('layouts.master')

{{ $i = 1 }}
@section('content')
    <div class="wisata">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Daftar Wisata</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;" >#</th>
                                        <th style="width: 20%;">Nama Wisata</th>
                                        <th style="width: 25%;">Deskripsi</th>
                                        <th style="width: 10%;">Kategori</th>
                                        <th style="width: 25%;">Alamat</th>
                                        <th style="width: 15%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $item->nama_wisata }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td>{{ $item->kategori }}</td>
                                            <td>{{ $item->kecamatan }}, 
                                                {{ $item->kabupaten }}, 
                                                {{ $item->provinsi }}
                                            </td>
                                            <td>
                                                <a href="{{ route('wisata.edit', $item->id) }}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="Gambar">
                                                    <i class="fas fa-image"></i>
                                                </a>
                                                <a href="{{ route('wisata.edit', $item->id) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('wisata.destroy', $item->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center p-5">
                                                Data Tidak Tersedia
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-script')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endpush