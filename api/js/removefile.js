$(function(){
    $(document).on('click','.item-file', function(e){
        var me = this;
        var id = $(me).attr('id');
        //Get the I d of the file field.
        //The Id match the column name in the database
        var fieldName = $(me).closest('.custom-file').find('.custom-file-input').attr('id');
        //console.log(fieldName);
       
        var res = id.split("-");
        // console.log(res[0], res[1], res[2], res[3], fieldName);
        $.ajax({
            type: 'POST',
            url: './../api/ajax/removefile.php',
            data: ({year: res[0], tz: res[1], id: res[2], itemPos: res[3], fieldName: fieldName}),  
            // dataType: 'json',
            success: function (data){
                console.log(data);
             
                $('#'+fieldName).val('');
                $(me).parent().remove().animate({
                    opacity: 0.25,
                  });
                  
            },
            error: function(req, err){ console.log('upload file message ' + err); },

        });
    });
});