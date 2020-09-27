@extends('template.MasterTemplate')

@section('content')


    <div class="mb-3 umkm-title">DASHBOARD</div>

    <div class="row">
        <div class="col-4">
            <div class="card umkm-rounded shadow">
                <div class="card-body text-center p-0">
                    <div class="umkm-header border-bottom border-dark font-weight-bold py-2">
                        PESANAN BARU
                    </div>
                    <div class="umkm-big-text p-3">23</div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card umkm-rounded shadow">
                <div class="card-body text-center p-0">
                    <div class="umkm-header border-bottom border-dark font-weight-bold py-2">
                        PESANAN DIKIRIM
                    </div>
                    <div class="umkm-big-text p-3">23</div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card umkm-rounded shadow">
                <div class="card-body text-center p-0">
                    <div class="umkm-header border-bottom border-dark font-weight-bold py-2">
                        PESANAN SELESAI
                    </div>
                    <div class="umkm-big-text p-3">23</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card umkm-rounded shadow">
                <div class="card-body p-0">
                    <div class="umkm-header py-3 px-4">
                        <div class="umkm-flex-between">
                            <div>PESANAN BARU</div>
                            <div>
                                <i class="fa fa-print fa-lg mr-2"></i>
                                <input type="text" name="cari" placeholder="cari...." class="pl-2">
                            </div>
                        </div>
                    </div>
                    <table class="table table-borderless">
                        <thead class="border-bottom border-dark">
                            <th class="pl-5">Order ID</th>
                            <th class="text-center">Kategori</th>
                            <th class="text-center">Status</th>
                            <th class="text-right pr-5">Order Date</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pl-5">Order ID</td>
                                <td class="text-center">Kategori</td>
                                <td class="text-center">Status</td>
                                <td class="text-right pr-5">Order Date</td>
                            </tr>
                            <tr>
                                <td class="pl-5">Order ID</td>
                                <td class="text-center">Kategori</td>
                                <td class="text-center">Status</td>
                                <td class="text-right pr-5">Order Date</td>
                            </tr>
                            <tr>
                                <td class="pl-5">Order ID</td>
                                <td class="text-center">Kategori</td>
                                <td class="text-center">Status</td>
                                <td class="text-right pr-5">Order Date</td>
                            </tr>
                            <tr>
                                <td class="pl-5">Order ID</td>
                                <td class="text-center">Kategori</td>
                                <td class="text-center">Status</td>
                                <td class="text-right pr-5">Order Date</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="col-12 umkm-flex-between align-items-center mb-4 px-5">
                        <div class="small">Showing 1 to 20 of 20 entries</div>
                        <div class="btn-group">
                            <button class="btn btn-sm border border-dark rounded-0"><i class="fa fa-angle-double-left"></i></button>
                            <button class="btn btn-sm border border-dark active rounded-0">1</button>
                            <button class="btn btn-sm border border-dark rounded-0">2</button>
                            <button class="btn btn-sm border border-dark rounded-0"><i class="fa fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4 mb-3">
        <div class="col-12">
            <div class="card umkm-rounded shadow">
                <div class="card-body p-0">
                    <div class="umkm-header py-3 px-4">
                        <div class="umkm-flex-between">
                            <div>PENGIRIMAN</div>
                            <div>
                                <i class="fa fa-print fa-lg mr-2"></i>
                                <input type="text" name="cari" placeholder="cari...." class="pl-2">
                            </div>
                        </div>
                    </div>
                    <table class="table table-borderless">
                        <thead class="border-bottom border-dark">
                            <th class="pl-5">Order ID</th>
                            <th class="text-center">Kategori</th>
                            <th class="text-center">Status</th>
                            <th class="text-right pr-5">Delvery Date</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pl-5">Order ID</td>
                                <td class="text-center">Kategori</td>
                                <td class="text-center">Status</td>
                                <td class="text-right pr-5">Order Date</td>
                            </tr>
                            <tr>
                                <td class="pl-5">Order ID</td>
                                <td class="text-center">Kategori</td>
                                <td class="text-center">Status</td>
                                <td class="text-right pr-5">Order Date</td>
                            </tr>
                            <tr>
                                <td class="pl-5">Order ID</td>
                                <td class="text-center">Kategori</td>
                                <td class="text-center">Status</td>
                                <td class="text-right pr-5">Order Date</td>
                            </tr>
                            <tr>
                                <td class="pl-5">Order ID</td>
                                <td class="text-center">Kategori</td>
                                <td class="text-center">Status</td>
                                <td class="text-right pr-5">Order Date</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="col-12 umkm-flex-between align-items-center mb-4 px-5">
                        <div class="small">Showing 1 to 20 of 20 entries</div>
                        <div class="btn-group">
                            <button class="btn btn-sm border border-dark rounded-0"><i class="fa fa-angle-double-left"></i></button>
                            <button class="btn btn-sm border border-dark active rounded-0">1</button>
                            <button class="btn btn-sm border border-dark rounded-0">2</button>
                            <button class="btn btn-sm border border-dark rounded-0"><i class="fa fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection