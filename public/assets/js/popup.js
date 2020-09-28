$(function(){

	$('[data-popup]').on('click', function(){
		var popup_type = $(this).data('popup');

		$.get('/get/popup/'+popup_type, function(result){
			var dialog_id = "dialog_" + Math.floor((Math.random() * 100) + 1); // random number between 1 to 100
			var dialog_popup = '<div class="modal fade" id="'+dialog_id+'"><div class="modal-dialog"><div class="modal-content umkm-modal">'+result+'</div></div></div>';
			$('body').append(dialog_popup);
			$('#'+dialog_id).modal('show');

			// add event listener to destroy popup when close
			$('#'+dialog_id).on('hidden.bs.modal', function (e) {
				$('#'+dialog_id).remove();
			});
		})
	});

})