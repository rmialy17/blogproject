// fichier table.js

$(document).ready(function () {
 $('#tab').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"  
        },
        // "filter": true,
        // "destroy": true
    });

});

//Destroy the old Datatable
// $('#tab').DataTable().clear().destroy();


$(document).ready(function () {
 $('#tab2').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"  
        },
        "filter": true,
        "destroy": true
    });
});



$(document).ready(function () {
 $('#tab3').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"  
        },
        "filter": true,
        "destroy": true
    });
});






// var table = $('#tab').DataTable();
// table.ajax.reload();



