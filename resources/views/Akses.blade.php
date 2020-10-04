@extends('template.MasterTemplate')

@section('content')

    <div class="mb-4 umkm-title">KELOLA AKSES</div>

	<button class="btn umkm-btn umkm-bg-white px-4 mb-4" data-popup="tambah_user">Tambah User</button>

	<div class="card umkm-rounded shadow mb-3">
        <div class="card-body p-0">
            <div class="umkm-header py-3 px-4 umkm-flex-between align-items-center">
                <div>AKSES USER</div>
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
                            <button class="btn" data-popup="edit_user">Edit</button>
                            |
                            <button class="btn" data-popup="delete_user">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Seron</td>
                        <td>Pedagang</td>
                        <td class="text-center">
                            <button class="btn" data-popup="edit_user">Edit</button>
                            |
                            <button class="btn" data-popup="delete_user">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Romli</td>
                        <td>Pembeli</td>
                        <td class="text-center">
                            <button class="btn" data-popup="edit_user">Edit</button>
                            |
                            <button class="btn" data-popup="delete_user">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Ramzi</td>
                        <td>Admin</td>
                        <td class="text-center">
                            <button class="btn" data-popup="edit_user">Edit</button>
                            |
                            <button class="btn" data-popup="delete_user">Remove</button>
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


@endsection