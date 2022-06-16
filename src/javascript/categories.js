function getCategoriesBasedOnCourse() {
    $("#categories").empty();
    let input_data = $("#courses").val();
    
    $.ajax({
		url: base_url + "get-categories-based-on-course",
		type: "POST",
		data: {
			input_data: input_data,
		},
		success: function (data) {
			// console.log(data);
			$('#categories').append('<option value="default_option">Choose options</option>');
			for (let index = 0; index < data.length; index++) {
				var newOption = new Option(data[index].title,data[index].category_id)
				$('#categories').append(newOption).trigger('change');
			}
		},
	});
}
