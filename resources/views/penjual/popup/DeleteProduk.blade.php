<div class="bg-white umkm-rounded pb-4">
	<div class="row umkm-flex-center">
		<div class="col-9 mt-5 mb-2 text-center font-weight-bold">
			<h2>HAPUS PRODUK ?</h2>
			<h5>5 Packs Socks</h5>
			<div class="font-weight-normal">Penghapusan produk tidak dapat dibatalkan</div>
		</div>
		<div class="col-9 mb-3 umkm-flex-between">
			<form action="/penjual/produk/{{$id}}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn umkm-btn umkm-bg-black px-5">HAPUS</button>
			</form>
			<button class="btn umkm-btn umkm-bg-black px-5" >CANCEL</button>
		</div>
	</div>
</div>