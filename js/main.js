$("[name='my-checkbox']").bootstrapSwitch();
$("[name='my-checkbox']").on('switchChange.bootstrapSwitch', function(event, state) {
	var colNama = $("#tbl-mahasiswa td[class!='header']:nth-child(2)");
	var colNilai = $("#tbl-mahasiswa td[class!='header']:nth-child(3)");
	if (state) {
		console.log("Checkbox dicentang");
		colNama.each(function() {
			var currentVal = $(this).text();
			$(this).html("<input type='text' value='"+currentVal+"'>");
		});
		colNilai.each(function(){
			var currentNilai = $(this).text();
			$(this).html("<input type='number' min='0' max='100' value='"+currentNilai+"'>");
		});
	} else {
		console.log("Edit Mode Off");
		colNama.each(function() {
			
		});
	}
});