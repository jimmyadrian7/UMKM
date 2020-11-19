@extends('template.AdminTemplate')

@once
    @push('scripts')
    <script src="{{ asset('/assets/js/banner.js') }}" defer="true"></script>
    @endpush
@endonce

@section('content')
    <div class="mb-4 umkm-title">KELOLA AKSES</div>

	{{-- <button class="btn umkm-btn umkm-btn-white px-4 mb-4 shadow" data-popup="admin/tambah_user">Tambah User</button> --}}

	<div class="card umkm-rounded shadow mb-3">
        <div class="card-body p-0">
            <div class="umkm-header py-3 px-4 umkm-flex-between align-items-center">
                <div class="font-weight-bold">AKSES USER</div>
                <div class="d-flex align-items-center col-3">
	                <input type="text" name="search" class="form-control rounded-pill border-dark" placeholder="search...">
	            </div>
            </div>

            <table class="table table-borderless">
                <thead class="border-bottom">
                    <th>Full Name</th>
                    <th>Join Date</th>
                    <th class="text-center">Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Djunaedi</td>
                        <td>Kurir</td>
                        <td class="text-center">
                            <button class="btn" data-popup="admin/edit_user">Edit</button>
                            |
                            <button class="btn" data-popup="admin/delete_user">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Seron</td>
                        <td>Pedagang</td>
                        <td class="text-center">
                            <button class="btn" data-popup="admin/edit_user">Edit</button>
                            |
                            <button class="btn" data-popup="admin/delete_user">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Romli</td>
                        <td>Pembeli</td>
                        <td class="text-center">
                            <button class="btn" data-popup="admin/edit_user">Edit</button>
                            |
                            <button class="btn" data-popup="admin/delete_user">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Ramzi</td>
                        <td>Admin</td>
                        <td class="text-center">
                            <button class="btn" data-popup="admin/edit_user">Edit</button>
                            |
                            <button class="btn" data-popup="admin/delete_user">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td class="text-center">
                        	<div class="btn-group mt-3">
                                <button class="btn btn-sm border border-dark rounded-0"><i class="fa fa-angle-double-left"></i></button>
                                <button class="btn btn-sm border border-dark active rounded-0">1</button>
                                <button class="btn btn-sm border border-dark rounded-0">2</button>
                                <button class="btn btn-sm border border-dark rounded-0"><i class="fa fa-angle-double-right"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <form enctype="multipart/form-data" action="addBanner" method="POST" id="form-banner">
        @csrf
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="card umkm-rounded shadow mb-3">
            <div class="card-body p-0">
                <div class="umkm-header py-3 px-4 umkm-flex-between align-items-center">
                    <div class="font-weight-bold">SLIDING BANNER GALLERY</div>
                </div>
                <div class="py-3 px-4 align-items-center umkm-flex-between">
                    <div class="col-sm-5 col-md-4 col-lg-5 d-flex mb-3 mb-sm-0">                    
                        @if ($TotalBanner < 6)
                            <div class="col-4 d-lg-block d-none umkm-bg-light-green umkm-rounded banner-add" id="divBanner">
                                <div class="text-xl-center text-white">
                                    <i class="fa fa-plus-circle mt-3"></i>
                                    <h5>Tambahkan Banner</h5>
                                </div>
                            </div>
                            <input type="file" name="banner" id="banner" style="display: none" accept="image/*">
                            <input type="submit" name="submit" id="submit" style="display: none">
                        @endif
                    
                        @foreach ($banner as $banner)
                        <div class="col-4 d-lg-block d-none banner-image umkm-rounded">
                            <img src="{{ asset($banner->BannerImage) }}" alt="Banner" class="w-100 h-100 umkm-rounded">
                            <div class="delete-icon-banner" id="{{$banner->BannerId }}">
                                <i class="fa fa-trash" id="{{$banner->BannerId }}"></i>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection