function getSubjectsBasedOnCategory() {
    $("#subjects").empty();
    let input_data = $("#categories").val();
    
    $.ajax({
		url: base_url + "get-subjects-based-on-category",
		type: "POST",
		data: {
			input_data: input_data,
		},
		success: function (data) {
            // console.log('function getSubjectsBasedOnCategory', data);
			$('#subjects').append('<option value="default_option">Choose options</option>');
			for (let index = 0; index < data.length; index++) {
				var newOption = new Option(data[index].title,data[index].subject_id)
				$('#subjects').append(newOption).trigger('change');
			}
		},
	});
}
