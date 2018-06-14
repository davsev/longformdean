$(document).ready( function () {
    $('#datatablecheckbox').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Hebrew.json"
        }
    });
} );


$(document).ready(function(){
    $(document).on('mouseout','td[data-type="file"]', function(e){
        $('body').remove('div.xxx');
    });
});