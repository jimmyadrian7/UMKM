@extends('template.MasterTemplate')

@section('content')


    <div class="mb-4 font-weight-bold">DASHBOARD</div>

    <div class="row">
        <div class="col-4">
            <div class="card umkm-rounded shadow">
                <div class="card-body text-center p-0">
                    <div class="umkm-header umkm-bg-cyan text-white font-weight-bold py-2">
                        PESANAN BARU
                    </div>
                    <div class="umkm-big-text p-3">23</div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card umkm-rounded shadow">
                <div class="card-body text-center p-0">
                    <div class="umkm-header umkm-bg-creme text-white font-weight-bold py-2">
                        PESANAN DIKIRIM
                    </div>
                    <div class="umkm-big-text p-3">23</div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card umkm-rounded shadow">
                <div class="card-body text-center p-0">
                    <div class="umkm-header umkm-bg-orange text-white font-weight-bold py-2">
                        PESANAN SELESAI
                    </div>
                    <div class="umkm-big-text p-3">23</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <div class="card umkm-rounded shadow">
                <div class="card-body p-0">
                    <div class="umkm-header umkm-bg-red text-white font-weight-bold py-2 px-4">
                        PESANAN BARU
                    </div>
                    <table class="table">
                        <thead>
                            <th>Order ID</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Order Date</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="">Order ID</td>
                                <td id="">Kategori</td>
                                <td id="">Status</td>
                                <td id="">Order Date</td>
                            </tr>
                            <tr>
                                <td id="">Order ID</td>
                                <td id="">Kategori</td>
                                <td id="">Status</td>
                                <td id="">Order Date</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <div class="card umkm-rounded shadow">
                <div class="card-body p-0">
                    <div class="umkm-header umkm-bg-red text-white font-weight-bold py-2 px-4">
                        PENGIRIMAN
                    </div>
                    <table class="table">
                        <thead>
                            <th>Order ID</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Order Date</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="">Order ID</td>
                                <td id="">Kategori</td>
                                <td id="">Status</td>
                                <td id="">Order Date</td>
                            </tr>
                            <tr>
                                <td id="">Order ID</td>
                                <td id="">Kategori</td>
                                <td id="">Status</td>
                                <td id="">Order Date</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection