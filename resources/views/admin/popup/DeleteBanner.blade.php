<div class="bg-white umkm-rounded pb-4">
	<div class="row umkm-flex-center">
		<div class="col-9 mt-5 mb-2 text-center font-weight-bold">
			<h2>Anda Yakin Ingin Menghapus Banner?</h2>
			<div class="font-weight-normal">Penghapusan banner tidak dapat dibatalkan</div>
		</div>
		<div class="col-9 mb-3 umkm-flex-between">
			<form action="delBanner/{{$id}}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn umkm-btn umkm-bg-black px-5 text-light">HAPUS</button>
			</form>
			<button class="btn umkm-btn umkm-bg-black px-5 text-light" data-dismiss="modal">CANCEL</button>
		</div>
	</div>
</div>