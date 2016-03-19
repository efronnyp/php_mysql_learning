$("[name='my-checkbox']").bootstrapSwitch();
$("input[name='my-checkbox']").on('switchChange.bootstrapSwitch', function(event, state) {
	var colNama = $("#tbl-mahasiswa td:nth-child(2)");
	if (state) {
		console.log("Edit Mode On");
		colNama.each(function() {
			var currentVal = $(this).text();
			$(this).html("<input type='text' value='"+currentVal+"'>");
		});
	} else {
		console.log("Edit Mode Off");
		colNama.each(function() {
			
		});
	}
});