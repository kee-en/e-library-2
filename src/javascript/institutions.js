"use strict";


function getInstitutions(id, values = []) {
    $.ajax({
        url: base_url + "get-institutions",
        type: 'POST',
        success: function (data) {
            console.log(data);
        },
    });
}