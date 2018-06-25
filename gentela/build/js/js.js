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

/**
 * Open file on cloick in studentdata.php page
 */
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


/**
 * Army
 */
// $(document).ready(function(){
//     $('#is_army').on('change', function(){
//         const armyVal = $('#is_army').val();
//         console.log(armyVal);
       
//         switch (armyVal) {
//             case 'צבאי':
//                 $('.is_army_ptor_tr').addClass('hidden');
//                 document.getElementById('selectid').value == 
//                 $('.is_army_ptor_tr .yes').prop('selected', false);
//                 $('.is_army_ptor_tr .no').prop('selected', true);
                

//                 break;

//             case 'לאומי':
//                 $('.is_army_ptor_tr').addClass('hidden');
//                 $('.is_army_ptor_tr .yes').prop('selected', false);
//                 $('.is_army_ptor_tr .no').prop('selected', true);

//                 break;

//             case 'ללא':
//                 $('.is_army_ptor_tr').removeClass('hidden');


//                 break;

//             default:
            
//                 break;
//         }
//      });

//      $('#is_army').trigger('change');
// });


$(document).ready(function(){
    $('#asked_schol').on('change', function(){
        if ($(this).val == "0") {
          console.log($(this));
          console.log('0');

        
        } else {
            console.log($(this));
            console.log('1');
        
        }
    });

    $('#is_army').trigger('change');
});

