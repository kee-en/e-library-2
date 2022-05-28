'use strict';

document.getElementById('add-book-modal').addEventListener('click', (e) => {
  getInstitutions();
});

document.getElementById('institutions').addEventListener('change', (e) => {
  getCoursesBasedOnInstitution();
});

document.getElementById('courses').addEventListener('change', (e) => {
  getCategoriesBasedOnCourse();
});

document.getElementById('categories').addEventListener('change', (e) => {
  getSubjectsBasedOnCategory();
});

// document.getElementById('btn_add_e_book').addEventListener('click', (e) => {
//   alert('add_e_book_form');
// });

document.getElementById('btn_add_e_book').addEventListener('click', (e) => {
    var form_data = new FormData(document.getElementById("add_e_book_form"));
    
    $.ajax({
		url: base_url + "post-ebook",
		type: "POST",
		dataType: "JSON",
        encode: true,
		data: form_data,
		cache: false,
		contentType: false,
		processData: false,

		beforeSend: function () {
			$("#btn_add_e_book").attr("disabled", true);
			$("#btn_add_e_book").html(
				'<span class="spinner-border spinner-border-sm" mr-1" role="status" aria-hidden="true"></span> Please wait...'
			);
		},
		success: function (data) {
			console.log(data);
			if (data.type === "success") {
				$("#AddEbookModal").modal("hide");
			}

			$("#btn_add_e_book").html("Book Saved");
			$("#btn_add_e_book").prop("disabled", false);
		},
	});
});


// $("#add_e_book_form").submit(function () {
//     alert("add_e_book_form");

// 	let formData = new FormData(this);
//     alert(formData)
    
// 	$.ajax({
// 		url: base_url + "post-ebook",
// 		type: "POST",
// 		dataType: "JSON",
// 		data: formData,
// 		cache: false,
// 		contentType: false,
// 		processData: false,

// 		beforeSend: function () {
// 			$("#btn_add_e_book").attr("disabled", true);
// 			$("#btn_add_e_book").html(
// 				'<span class="spinner-border spinner-border-sm" mr-1" role="status" aria-hidden="true"></span> Please wait...'
// 			);
// 		},
// 		success: function (data) {
// 			// validationInput(data.institutions, "institutions");
// 			// validationInput(data.courses, "courses");
// 			// validationInput(data.categories, "categories");
// 			// validationInput(data.subjects, "subjects");
// 			// validationInput(data.book_title, "book_title");
// 			// validationInput(data.download_link, "download_link");

// 			// if (data.type === "success") {
// 			// 	$("#kt_modal_add_user").modal("hide");
// 			// }

// 			// Swal.fire({
// 			// 	title: data.title,
// 			// 	text: data.text,
// 			// 	icon: data.type,
// 			// 	confirmButtonText: "Close",
// 			// 	confirmButtonColor: "#004aad",
// 			// 	allowOutsideClick: false,
// 			// 	allowEscapeKey: false,
// 			// }).then(function () { });

// 			// $("#BtnSaveBook").html("Book Saved");
// 			// $("#BtnSaveBook").prop("disabled", false);
// 		},
// 	});
// });