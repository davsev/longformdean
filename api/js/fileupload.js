$(function () {
    $('.custom-file-input').on('change', function(e) {
        var id = $(this).attr('id');
        // e.preventDefault();
        var $thisFormObj = $(this).closest('form');
        var formdata = new FormData ($thisFormObj[0]);
        formdata.append("fieldId", id);
       
        var listName = $(this).closest('.custom-file').find('.file-list');
        var fieldName = $(this).closest('.custom-file').find('.custom-file-input').attr('id');
        formdata.append("fieldName", fieldName);
    
        $.ajax({
            type: 'POST',
            url: '../api/ajax/uploadfile.php',
            data: formdata,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (data){        
                $(listName).append('<li><a href="./../uploads/'+data.tz+'/'+data.name+'" target="_blank"> '+data.name+' </a><span class="item-file" id="'+data.year+'-'+data.tz+'-'+data.id+'-'+data.place+'">הסר קובץ</span></li>');                  
            },         
        });
    });
});