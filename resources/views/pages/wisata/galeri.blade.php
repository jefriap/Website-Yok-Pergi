@extends('layouts.master')

@section('title', 'Daftar Foto')

@section('content')
    @php
        $i = 1;
    @endphp
    <div class="wisata">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Daftar Foto Wisata</h4>
                        <small>{{ $wisata->nama_wisata}}</small>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Wisata</th>
                                        <th>Foto</th>
                                        <th>Default</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $item->WisataRelation->nama_wisata }}</td>
                                            <td>
                                                <img src="{{asset('uploads/foto-wisata')}}/{{$item->url_foto}}" alt="{{ $item->WisataRelation->nama_wisata }}"/>
                                            </td>
                                            <td>{{ $item->is_default ? 'Ya' : 'Tidak'}}</td>
                                            <td>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal" role="button">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                {{-- Modal Bootstrap --}}
                                                <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="row justify-content-center">
                                                                    <div class="col-2 ">
                                                                        <i class="fas fa-exclamation-circle text-danger display-3"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="row justify-content-center">
                                                                    <div class="col-auto align-self-center">
                                                                        <h4> Anda yakin menghapus data?</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Batal</button>
                                                                <form action="{{ route('galeri.destroy', $item->id) }}" method="POST" class="d-inline">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button class="btn btn-primary">Ya Hapus!</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- End Modal Bootstrap --}}
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