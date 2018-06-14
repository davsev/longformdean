$(function(){
    $(document).on('mouseover','td[data-type="file"]', function(e){
        var me = this;
        var id = $(me).attr('data-id');
        var fileType = $(me).attr('data-filetype');
        var year = $(me).attr('data-year');
    
        
        $.ajax({
            type: 'POST',
            url: './api/ajax/loadfileonhover.php',
            data: ({id: id, type: fileType, year: year}),  
            dataType: 'text',
            success: function(data){
                // console.log(data);
                // console.log('aa');
                $('body').append('<div class="xxx"><img src="'+ data +'"> <iframe id="iframepdf" src="'+ data +'"></iframe></div>');
               
                  
            }
        });
    });

});




