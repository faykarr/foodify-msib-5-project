@extends('themes.template')
@section('content')
<div class="page-content" align="left">
    <div class="container-fluid" style="padding:0px 50px 0px 50px">
        <h3>Proses Donasi</h3>

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <i class="fas fa-home"></i>
                <a href="{{ route('penerima.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('proses_donasi_penerima') }}">Proses Donasi</a>
            </li>
            <li class="breadcrumb-item active">Detail Proses Donasi</li>
        </ol>

        <!-- main -->
        <div class="row">
            <div class="col-md-8">
                <div class="card border shadow-none">
                    <div class="card-body p-3">

                        <div class="d-flex align-items-start border-bottom pb-3">
                            <!-- Foto penerima -->
                            <div class="me-4">
                                <img src="{{ asset('backend/assets/images/users/nofoto.png') }}" alt="" class="avatar-lg rounded">
                            </div>
                            <div class="flex-grow-1 align-self-center overflow-hidden">
                                <div>
                                    <h5 class="text-truncate font-size-18">
                                        <a href="ecommerce-product-detail-2.html" class="text-body">{{ $donasi->penerima->nama_penerima }} </a>
                                        @if ($donasi->status === 'Diterima')
                                        <span class="badge bg-success-subtle text-success  mb-0">Diterima</span>
                                        @elseif ($donasi->status === 'Ditolak')
                                        <span class="badge bg-danger-subtle text-danger  mb-0">Ditolak</span>
                                        @elseif ($donasi->status === 'Pending')
                                        <span class="badge bg-secondary-subtle text-secondary  mb-0">Pending</span>
                                        @endif
                                    </h5>
                                    <p class="mb-0 mt-1">Alamat : <span class="fw-medium">{{ $donasi->penerima->alamat }}</span></p>
                                    <p class="mb-0 mt-1">No HP : <span class="fw-medium">{{ $donasi->penerima->no_hp }}</span></p>
                                    <p class="mb-0 mt-1">Deskripsi : <span class="fw-medium">{{ $donasi->penerima->deskripsi }}</span></p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mt-3">
                                        <p class="text-muted mb-2">Jumlah</p>
                                        <h5 class="mb-0 mt-2">{{ $donasi->jumlah }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mt-3">
                                        <p class="text-muted mb-2">Tanggal Mulai</p>
                                        <h5 class="mb-0 mt-2">{{ $donasi->tgl_mulai }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mt-3">
                                        <p class="text-muted mb-2">Tanggal Akhir</p>
                                        <h5 class="mb-0 mt-2">{{ $donasi->tgl_akhir }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mt-4">
                                        <p class="text-muted mb-2">Keterangan</p>
                                        <h7 style="text-align: justify;">{{ $donasi->keterangan }}</h7>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mt-4">
                                        <p class="text-muted mb-2">Foto</p>
                                        <img src="{{ asset($donasi->foto) }}" alt="" class="img-thumbnail me-2">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <hr>
                                    <div class="mt-3">
                                        <a href="{{ route('edit_donasi', $donasi->id) }}" class="btn btn-warning btn-md" type="button">Edit</a>
                                        <a href="javascript:history.back()" class="btn btn-secondary">Kembali</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end card -->

            </div>

        </div>
        <!-- end row -->

    </div>
</div>
@endsection