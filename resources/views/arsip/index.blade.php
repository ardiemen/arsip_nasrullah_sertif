@extends('layouts.adminApp')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
            <div class="card-header py-3">
                      <h3>Arsip Surat</h3>
                      <p class="text-subtitle text-muted">Berikut ini adalah surat-surat yang telah terbit dan diarsipkan <br>
                          Klik "Lihat" pada kolom aksi untuk menampilkan surat
                      </p>
                    </div>
                    <div class="card-body">
                    
                                <form action="{{ route('arsips.index') }}" method="get">
                                    <div class="row m-1">
                                    <h3> Cari Surat </h3>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="search"
                                                placeholder="Masukkan Judul Surat">
                                        </div>
                                        <div class="col-md-3 p-0">

                                            <button type="submit" class="btn btn-primary">Cari</button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                <div class="card  shadow mb-4">
                
                    <div class="card-body">
                        
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>Nomor Surat</th>
                                            <th>Kategori</th>
                                            <th>Judul</th>
                                            <th>Waktu Pengerjaan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($arsips as $arsip)
                                            <tr>
                                                <td>{{ $arsip->nomor_surat }}</td>
                                                <td>{{ $arsip->kategori }}</td>
                                                <td>{{ $arsip->judul }}</td>
                                                <td>{{ $arsip->created_at }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ route('arsips.destroy', $arsip->id) }}" name="delete"
                                                            class="btn btn-danger"
                                                            onclick="return confirm('Lanjut hapus data arsip {{ $arsip->judul }}?')">Hapus</a>
                                                        <a href="{{ asset('arsip') }}/{{ $arsip->nama_file }}"
                                                            download="{{ $arsip->nomor_surat }}"
                                                            class="btn btn-warning">Unduh</a>
                                                        <a href="{{ route('arsips.show', $arsip->id) }}"
                                                            class="btn btn-info">Lihat >></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <td class="text-center" colspan="5">Data tidak ada</td>
                                        @endforelse
                                    </tbody>
                            </table>
                            <div class="d-sm-flex align-item-center justify-content-start mb-3 mt-3">
                                    <a href="{{ route('arsips.create') }}" class="btn btn-default border-dark">Arsipkan
                                        Surat</a>
                                </div>
                        </div>
                    </div>
                </div>
                <div style="float: right">
                {{ $arsips->links('vendor.pagination.bootstrap-4') }}
            </div>
            </div>
        </div>
</section>
@endsection

@push('js')
@endpush
