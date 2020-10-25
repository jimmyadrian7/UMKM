@extends('template.PenjualTemplate')

@section('content')


    <div class="mb-3 umkm-title">PRODUK</div>
    <div class="mb-4 umkm-subtitle">Tambah Produk</div>

    <div class="row">
        <form class="col-12" action="/penjual/produk/{{$data->ProductId ?? ''}}" method="POST">
            @csrf
            @method($mode)
            {{-- invisible input --}}
            <input type="hidden" class="form-control" name="StoreId" value="3">
            <input type="hidden" class="form-control" name="ProductId" value="{{$data->ProductId ?? ''}}">


            <div class="card umkm-rounded shadow mb-4">
                <div class="card-body">

                    <div class="font-weight-bold h4 mt-3">Upload Produk</div>
                    <div class="text-danger small font-weight-bold">*Wajib</div>

                    <input type="text" class="form-control" name="StoreImage" placeholder="boi, sementara dulu :)" value="{{$data->StoreImage ?? ''}}">

                    {{-- <div class="col-12 mt-3">
                        <img src="{{ asset('/assets/images/sock.jpg') }}" alt="5 Packs Socks" height="80">
                    </div>

                    <div class="col-12 mt-3 mb-4">
                        <a class="btn btn-dark rounded-pill py-2 px-4" href="/penjual/produk/tambah">
                           <i class="fa fa-plus"></i>
                           Tambah Gambar
                       </a>
                    </div> --}}

                </div>
            </div>
            
            <div class="card umkm-rounded shadow mb-4">
                <div class="card-body px-5">

                    <div class="font-weight-bold h4 mt-3">Informasi Produk</div>
                    <div class="text-danger small font-weight-bold">*Wajib</div>

                    <div class="mt-3 row">
                        <div class="col-sm-4">
                            Nama Produk
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="ProductName" value="{{$data->ProductName ?? ''}}">
                        </div>
                    </div>
                    <div class="mt-4 row">
                        <div class="col-sm-4">
                            Kategori
                        </div>
                        <div class="col-sm-8">
                            {{-- <input type="text" class="form-control" name="CategoryId"> --}}
                            <select class="form-control" name="CategoryId">
                                <option value=""></option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->CategoryId}}" {{ ($data->CategoryId ?? '') == $category->CategoryId ? 'selected' : '' }}>
                                        {{$category->CategoryName}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mt-4 row">
                        <div class="col-sm-4">
                            Deskripsi Produk
                        </div>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="ProductDesc">{{$data->ProductDesc ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mt-4 row">
                        <div class="col-sm-4">
                            Harga Satuan
                        </div>
                        <div class="col-sm-8">
                            {{-- <input type="text" class="form-control"> --}}
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-dark text-white">Rp</div>
                                </div>
                                <input type="text" class="form-control" name="ProductPrice" value="{{$data->ProductPrice ?? ''}}">
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 row">
                        <div class="col-sm-4">
                            Stok Produk
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="ProductStock" value="{{$data->ProductStock ?? ''}}">
                        </div>
                    </div>
                    <div class="mt-4 row">
                        <div class="col-sm-4">
                            Berat Produk
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="ProductWeight" value="{{$data->ProductWeight ?? ''}}">
                        </div>
                    </div>

                    <div class="mb-4"></div>

                </div>
            </div>
            <div class="col-12 mb-5 text-right">
                <button class="btn btn-dark px-4">Batal</button>
                <button type="submit" class="btn btn-dark px-4">Simpan</button>
            </div>

        </form>
    </div>

@endsection