function getCoursesBasedOnInstitution() {
    $("#courses").empty();
    let input_data = $("#institutions").val();
    
    $.ajax({
		url: base_url + "get-courses-based-on-institution",
		type: "POST",
		data: {
			input_data: input_data,
		},
		success: function (data) {
			$('#courses').append('<option value="default_option">Choose options</option>');
			for (let index = 0; index < data.length; index++) {
				var newOption = new Option(data[index].title,data[index].course_id)
				$('#courses').append(newOption).trigger('change');
			}
		},
	});
}