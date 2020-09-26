@extends('template.MasterTemplate')

@section('content')

    <div class="mb-4 font-weight-bold">KELOLA AKSES</div>

	<button class="btn umkm-border-green py-2 font-weight-bold mb-4">Tambah User</button>

	<div class="card umkm-rounded shadow mb-3">
        <div class="card-body p-0">
            <div class="umkm-header umkm-bg-creme text-white py-3 px-4 d-flex justify-content-between align-items-center">
                <div>AKSES USER</div>
                <div class="d-flex align-items-center col-3">
	                <input type="text" name="search" class="form-control rounded-pill border-0" placeholder="search...">
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
                        <td class="text-center">Edit | Remove</td>
                    </tr>
                    <tr>
                        <td>Seron</td>
                        <td>Pedagang</td>
                        <td class="text-center">Edit | Remove</td>
                    </tr>
                    <tr>
                        <td>Romli</td>
                        <td>Pembeli</td>
                        <td class="text-center">Edit | Remove</td>
                    </tr>
                    <tr>
                        <td>Ramzi</td>
                        <td>Admin</td>
                        <td class="text-center">Edit | Remove</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">
                        	<div class="btn-group mr-5 mt-3">
                        		<button class="btn border"><<</button>
                        		<button class="btn border">1</button>
                        		<button class="btn border">2</button>
                        		<button class="btn border">3</button>
                        		<button class="btn border">>></button>
                        	</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


@endsection