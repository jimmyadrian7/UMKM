<script src="{{ asset('/assets/js/select.js') }}" defer="true"></script>

<div class="umkm-popup-header umkm-bg-green">
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
			<textarea name="tujuan" id="tujuan" placeholder="Alamat Tujuan" class="umkm-textarea"></textarea>
			{{-- <label for="">Ongkos Kirim</label>
			<div class="mt-2">
				<input type="range" id="ongkos" name="ongkos" min="0" max="50000" class="w-100" value="0">
			</div> --}}
		</div>
		<div class="col-10 mt-3">
			<button class="btn umkm-btn-green btn-block">Beritahu Driver</button>
		</div>
	</div>
</div>