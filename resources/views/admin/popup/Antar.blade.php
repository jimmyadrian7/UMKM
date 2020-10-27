<script src="{{ asset('/assets/js/form.js') }}" defer="true"></script>

<div class="umkm-popup-header umkm-bg-black">
	Delivery Details
</div>


<div class="umkm-popup-body">
	<div class="row umkm-flex-center">
		<div class="col-10 mb-3">
			<select name="driver" id="driver" class="umkm-select">
				<option value="">Pilih Driver</option>
			</select>
		</div>
		<div class="col-10 mb-3">
			<textarea name="almat" id="alamat" placeholder="Alamat Pick-Up" class="umkm-textarea"></textarea>
		</div>
		<div class="col-10 mb-3">
			<textarea name="tujuan" id="tujuan" placeholder="Alamat Pengantaran" class="umkm-textarea"></textarea>
		</div>
		{{-- <div class="col-10 mb-3">
			<label for="">Ongkos Kirim</label>
			<div class="mt-2">
				<input type="text" id="ongkos" name="ongkos" data-min="0" data-max="50000" class="umkm-range">
			</div>
		</div> --}}
		<div class="col-10 mt-3">
			<button class="btn umkm-btn umkm-btn-black btn-block">Beritahu Driver</button>
		</div>
	</div>
</div>