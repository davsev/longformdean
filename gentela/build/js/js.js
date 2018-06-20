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


$(document).ready(function(){
    $('input[type="checkbox"]').on('click', function(){
        if($(this).is(':checked')){
            console.log('cheked');
        }else{
            console.log('not cheked');
        }
    });
});


$(document).ready(function(){
    $('.open-file-near').on('click', function(){
        // console.log($(this).attr('data-url'));
        var filePath = $(this).attr('data-url');
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf)$/i;
        console.log(allowedExtensions.exec(filePath)[0]);
        fileExt = allowedExtensions.exec(filePath)[0];

        if(fileExt == '.pdf'){
            console.log('is a pdf file');
            $('#image-container').empty();
            // $('#image-container>div').addClass('elementToFadeOut')
            // setTimeout(function(){
            //     $('#image-container').empty();
            //   }, 1000);
            $('#image-container').append('<iframe class="full-width full-height" src="./' + filePath + '"></iframe>');
        

        }else{
            console.log('is a image file');
            $('#image-container').empty();
            // $('#image-container>div').addClass('elementToFadeOut')
            // setTimeout(function(){
            //     // $('#image-container').empty();
            //     $('#image-container').append('<img class="full-width elementToFadeIn" src="./' + filePath + '">');
            //   }, 1000);
            $('#image-container').append('<img class="full-width " src="./' + filePath + '">');
        }
    });
});


