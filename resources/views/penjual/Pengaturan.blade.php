@extends('template.PenjualTemplate')

@once
    @push('scripts')
        <script src="{{ asset('/assets/js/form.js') }}" defer="true"></script>
    @endpush
@endonce

@section('content')

    <div class="mb-4 umkm-title">PENGATURAN</div>

	<div class="card umkm-rounded shadow mb-3">
        <div class="card-body p-0">
            <div class="umkm-header py-3 px-4 umkm-flex-between align-items-center border-bottom border-dark">
                <h3 class="px-3 pt-3 pb-1">Informasi Toko</h3>
            </div>

            <div class="p-4">
                <div class="text-danger small font-weight-bold">*Wajib</div>
                <div class="mt-3">
                    <label for="">Nama Toko</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="">Deskripsi Toko</label>
                    <textarea class="form-control"></textarea>
                </div>
                <div class="mt-3">
                    <label for="">Status</label>
                    <div class="col-12">
                        <label class="radio-style"><input type="radio" name="status" id="status" value="buka" data-labelauty="Buka"></label>
                        <label class="radio-style"><input type="radio" name="status" id="tutup" value="tutup" data-labelauty="Tutup"></label>
                    </div>
                </div>

                <div class="mt-3 border border-dark d-flex row m-3 p-3">
                    <div class="col-sm-6">
                        <div class="col-12 text-center mb-3">
                            Pilih Hari
                        </div>
                        <div class="row">
                            <div class="col-6"><button class="btn border btn-block">Senin</button></div>
                            <div class="col-6"><button class="btn border btn-block">Selasa</button></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6"><button class="btn border btn-block">Rabu</button></div>
                            <div class="col-6"><button class="btn border btn-block">Kamis</button></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6"><button class="btn border btn-block">Jumat</button></div>
                            <div class="col-6"><button class="btn border btn-block">Sabtu</button></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6"><button class="btn border btn-block">Minggu</button></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="col-12 text-center mb-3">
                            Pilih Jam
                        </div>
                        <div class="row">
                            <div class="col-12"><button class="btn border btn-block">Pilih Jam</button></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="col-12 text-center mb-3">
                            Jam Tutup
                        </div>
                        <div class="row">
                            <div class="col-12"><button class="btn border btn-block">Pilih Jam</button></div>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>

                <div class="mt-3 ml-3">
                    <label for="">Foto Toko</label>
                    <div class="border" style="height: 100px;width: 200px;"></div>
                    <button class="btn btn-dark rounded-pill py-2 px-4 mt-4">
                       <i class="fa fa-plus"></i>
                       Tambah Gambar
                    </button>
                </div>


                <div class="mb-4"></div>
                <div class="text-right">
                    <button class="btn btn-dark px-4">Simpan</button>
                </div>
                <div class="mb-4"></div>
            </div>
            
        </div>
    </div>


@endsection