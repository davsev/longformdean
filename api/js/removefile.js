$(function(){
    $('.item-file').on('click', function(e){
        var me = this;
        var id = $(me).attr('id');
        //Get the I d of the file field.
        //The Id match the column name in the database
        var fieldName = $(me).closest('.custom-file').find('.custom-file-input').attr('id');
        //console.log(fieldName);
       
        var res = id.split("-");
        
        $.ajax({
            type: 'POST',
            url: './api/ajax/removefile.php',
            data: ({year: res[0], tz: res[1], id: res[2], itemPos: res[3], fieldName}),  
            dataType: 'json',
            success: function (data){
                //console.log(data);
                //console.log(el);
                $(me).parent().remove().animate({
                    opacity: 0.25,
                  });
            }
        });
    });
});