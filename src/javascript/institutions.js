"use strict";


function getInstitutions(id, values = []) {
    $.ajax({
        url: base_url + "get-institutions",
        type: 'POST',
        success: function (data) {
            for (let index = 0; index < data.length; index++) {
                var newOption = new Option(data[index].title,data[index].institution_id)
                $('#institutions').append(newOption).trigger('change');
            }
        },
    });
}