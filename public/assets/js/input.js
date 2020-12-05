// Restricts input for each element in the set of matched elements to the given inputFilter.
// source: https://stackoverflow.com/questions/995183/how-to-allow-only-numeric-0-9-in-html-inputbox-using-jquery/995193#995193
(function($) {
  $.fn.inputFilter = function(inputFilter) {
    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
    });
  };
}(jQuery));


$(function(){

    $(".umkm-text-jumlah").inputFilter(function(value) {
      return /^\d*$/.test(value) && parseInt(value) > 0; // Allow digits only, using a RegExp and value must bigger than 0
    });

    $('.btn-remove').on('click', function(){
      var target = $('.umkm-text-jumlah');
      var current_value = 1;
      if (!isNaN(target.val())) {
        current_value = parseInt(target.val());
      }
      if (target.val() > 1) {
        target.val(target.val()-1);
      }else{
        target.val(1);
      }
    });

    $('.btn-add').on('click', function(){
      var target = $('.umkm-text-jumlah');
      var current_value = 0;
      if (!isNaN(target.val())) {
        var current_value = parseInt(target.val());
      }
      target.val(current_value+1);
    });

});