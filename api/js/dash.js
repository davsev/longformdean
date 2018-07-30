function preventD(e) {
    e.preventDefault();
}





/**
 * validation
 */
$('#savebtn').click(function () { 
    $('input, select').removeAttr('required');
});




$(document).ready(function() {
    if ($("input.flat")[0]) {
        $(document).ready(function () {
            $('input.flat').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });
        });
    }
});

document.onload = showReceivedSchol();




// document.onload =  hideFileOnRadio('social_harig_file_cont', 'social_harig', 'social_harig_file');
// document.onload =  hideFileOnRadio('medical_harig_file_cont', 'medical_harig', 'medical_harig_file');
// document.onload =  hideFileOnRadio('family_harig_file_cont', 'family_harig', 'family_harig_file');


document.onload = is_army();
document.onload = isLochem();
document.onload = isArmyPtor();
document.onload = showIsMiluim();
document.onload = familyState();
document.onload = mezonotState();

document.onload = isFileInLi();

document.onload = showIsSiua();
document.onload = familyandSiua();
document.onload = fileRequired('#self_children', 'input#self_children_files');
document.onload = fileRequired('#self_soldier', 'input#self_soldier_files');
document.onload = fileRequired('#self_student', 'input#self_student_files');

document.getElementById("asked_schol").addEventListener("click", showReceivedSchol);
document.getElementById("not_asked_schol").addEventListener("click", showReceivedSchol);

document.onload = tas($('#taasukati_av_state').val());



document.getElementById("lochem").addEventListener("click", isLochem);
document.getElementById("lo_lochem").addEventListener("click", isLochem);

document.getElementById("is_army").addEventListener("change", is_army);

document.getElementById("is_army_ptor").addEventListener("click", isArmyPtor);
document.getElementById("is_army_no_ptor").addEventListener("click", isArmyPtor);


document.getElementById("is_miluim").addEventListener("click", showIsMiluim);
document.getElementById("lo_miluim").addEventListener("click", showIsMiluim);



// document.getElementById("taasukati_state").addEventListener("change", taasukati);

document.getElementById("family_state").addEventListener("change", familyState);

document.getElementById("mezonot_state").addEventListener("change", mezonotState);


document.getElementById("yes_siua").addEventListener("click", showIsSiua);
document.getElementById("no_siua").addEventListener("click", showIsSiua);


document.getElementById("yes_siua").addEventListener("click", familyandSiua);
document.getElementById("no_siua").addEventListener("click", familyandSiua);
document.getElementById("family_state").addEventListener("change", familyandSiua);

//harig file
document.getElementsByName('social_harig')[0].addEventListener('change', function(){
    hideFileOnRadio('social_harig_file_cont', 'social_harig', 'social_harig_file');
}, false);
document.getElementsByName('social_harig')[1].addEventListener('change', function(){
    hideFileOnRadio('social_harig_file_cont', 'social_harig', 'social_harig_file');
}, false);

//
document.getElementsByName('medical_harig')[0].addEventListener('change', function(){
    hideFileOnRadio('medical_harig_file_cont', 'medical_harig', 'medical_harig_file');
}, false);
document.getElementsByName('medical_harig')[1].addEventListener('change', function(){
    hideFileOnRadio('medical_harig_file_cont', 'medical_harig', 'medical_harig_file');
}, false);

//
document.getElementsByName('family_harig')[0].addEventListener('change', function(){
    hideFileOnRadio('family_harig_file_cont', 'family_harig', 'family_harig_file');
}, false);
document.getElementsByName('family_harig')[1].addEventListener('change', function(){
    hideFileOnRadio('family_harig_file_cont', 'family_harig', 'family_harig_file');
}, false);




// var harig_file_change = hideFileOnRadio('social_harig', 'social_harig_file', 'is_social_harig', 'social_harig_file_cont', 'yes_social_harig', 'no_social_harig');


// $('input:radio[name=social_harig]').change(harig_file_change;






/**
 * hides radio field that is depend on radio btn result
 * works only for harig_file
 */
// function hideFileOnRadio(fileCont, radioName, fileId){
//     const input = document.getElementById(fileCont);
//     const isLi = input.parentElement.querySelectorAll('li').length;

   
//     if ($('input:radio[name="' + radioName +'"]:checked').val() == 1){
//         document.getElementById(fileCont).classList.remove('hidden');
//         if(isLi == 0){
//             document.getElementById(fileId).required = true;
//         }
//     } else {
//         document.getElementById(fileCont).className += ' hidden';
//         document.getElementById(fileId).required = false;
 
//     }
   
   
// }




function showReceivedSchol() {
    if (document.getElementById('asked_schol').checked == true) {
        document.getElementById('asked-schol-div').classList.remove('hidden');
        document.getElementsByName("asked_schol")[0].attributes.required = "required";
       
    } else {
        document.getElementById('asked-schol-div').className += ' hidden';
        document.getElementById('not_received_schol').checked == true;
        document.getElementsByName("asked_schol")[0].attributes.required == "";
     
    }
}



function is_army() {
    var isArmy = $('#is_army');

    switch (isArmy.val()) {
        case 'צבאי':
            $('.army').removeClass('hidden');
            $('#is_lochem').removeClass('hidden');
            $('#army_ptor').addClass('hidden');
            // $('#is-lochem-file').removeClass('hidden');
            $('#miluim_pail').removeClass('hidden');

            break;

        case 'לאומי':
            $('.army').removeClass('hidden');
            $('#is_lochem').addClass('hidden');
            $('#lo_lochem').prop("checked", true);
            $('#is-lochem-file').addClass('hidden');

            $('#army_ptor').addClass('hidden');
            $('#is-miluim-file').addClass('hidden');

            $('#miluim_pail').addClass('hidden');
            $('#is_army_ptor_file_cont').addClass('hidden');
            break;

        case 'ללא':
            $('.army').addClass('hidden');
            $('#is_lochem').addClass('hidden');
            $('#lo_lochem').prop("checked", true)
            $('#army_ptor').removeClass('hidden');
            $('#length_army input').val('0');
            $('#is-lochem-file').addClass('hidden');
            $('#miluim_pail').addClass('hidden');
            $('#is-miluim-file').addClass('hidden');


            break;

        default:
            $('.army').addClass('hidden');
            $('#is_lochem').addClass('hidden');
            $('#army_ptor').addClass('hidden');
            $('#is-lochem-file').addClass('hidden');
            $('#length_army input').val('0');
            $('#miluim_pail').addClass('hidden');
            $('#is-miluim-file').addClass('hidden');
          

            break;
    }
}


function isLochem() {
        // const inputLochem = document.getElementById('is-lochem-file');
        // const isLiLochem = inputLochem.parentElement.querySelectorAll('li').length;
    if (document.getElementById('lochem').checked) {
        document.getElementById('is-lochem-file').classList.remove('hidden');
        // if(isLiLochem == 0){
        // document.getElementById('islochemfile').required = true;
        // }
    } else {
        document.getElementById('is-lochem-file').className += ' hidden';
        document.getElementById('lo_lochem').checked = true;
        // document.getElementById('islochemfile').required = false;
 
    }

};


function isArmyPtor() {
        // const inputPtor = document.getElementById('is_army_ptor_file_cont');
        // const isLiPtor = inputPtor.parentElement.querySelectorAll('li').length;
    if (document.getElementById('is_army_ptor').checked) {
        document.getElementById('is_army_ptor_file_cont').classList.remove('hidden');
        // if(isLiPtor == 0){
        // document.getElementById('is_army_ptor_file').required = true;
        // }
    } else {
        document.getElementById('is_army_ptor_file_cont').className += ' hidden';
        document.getElementById('is_army_no_ptor').checked = true;
        // document.getElementById('is_army_ptor_file').required = false;
    }
};


function showIsMiluim() {
    // const inputMiluim = document.getElementById('is-miluim-file');
    // const isLiMiluim = inputMiluim.parentElement.querySelectorAll('li').length;
    if (document.getElementById('is_miluim').checked) {
        document.getElementById('is-miluim-file').classList.remove('hidden');
        // if(isLiMiluim == 0){
        // document.getElementById('is_miluim_file').required = true;
        // }

    } else {
        document.getElementById('is-miluim-file').className += ' hidden';
        document.getElementById('lo_miluim').checked = true;
        // document.getElementById('is_miluim_file').required = false;
       
    }
};


/*
    פונקציות לאזור הכנסה
 */
function tas(val) {
    // console.log(val);
    $('.taas').change(function () {
      
        $(this).closest('.taasuka').find('input').prop('required', false);
      

        // $(this).closest('.taasuka').find('input[type=file]').text(lastFile);
       
        // if ($(this).val()) {
            val = $(this).val();
        // };


    

        // if(val != '1' || val != '2' ||val != '3' ){
        //     console.log($(this).closest('.taasuka').find('.starthidden'));
        //     $(this).closest('.taasuka').find('.starthidden').addClass('hidden');
        //     $(this).prop('required', true);


        // };

        switch (val) {
           
            case '0':
                $(this).closest('.taasuka').find('.starthidden').addClass('hidden');
                
            break;
            //שכיר
            case '1':
                $(this).closest('.taasuka').find('.starthidden').addClass('hidden');
                $(this).closest('.taasuka').find('.salary').removeClass('hidden');
                $(this).closest('.taasuka').find('div.salary').find('input[type=text]').prop('required', true);
                //בןדק אם יש קבצים ברשימת הקבצים לאותו שדה, במידה ואים מוסיף רקוויירד לשדה הקובץ הקרוב
                var lastFile =  $(this).closest('.taasuka').find('div.salary').find('.file-list li:last-child a').html();
                if(!lastFile ? $(this).closest('.taasuka').find('div.salary').find('input[type=file]').prop('required', true) : '');
                // console.log(val, 'xxx');

                
                break;
             //עצמאי
            case '2':
                $(this).closest('.taasuka').find('.starthidden').addClass('hidden');
                $(this).closest('.taasuka').find('.employ').removeClass('hidden');
                $(this).closest('.taasuka').find('div.employ').find('input[type=text]').prop('required', true);

                //בןדק אם יש קבצים ברשימת הקבצים לאותו שדה, במידה ואים מוסיף רקוויירד לשדה הקובץ הקרוב
                var lastFile =  $(this).closest('.taasuka').find('div.employ').find('.file-list li:last-child a').html();
                if(!lastFile ? $(this).closest('.taasuka').find('div.employ').find('input[type=file]').prop('required', true) : '');
              

               
                break;

                  //לא עובד
            case '3':
                $(this).closest('.taasuka').find('.starthidden').addClass('hidden');
                $(this).closest('.taasuka').find('.lo-oved').removeClass('hidden');

                $(this).closest('.taasuka').find('div.lo-oved').find('input[type=text]').prop('required', true);
                
                //בןדק אם יש קבצים ברשימת הקבצים לאותו שדה, במידה ואים מוסיף רקוויירד לשדה הקובץ הקרוב
                var lastFile =  $(this).closest('.taasuka').find('div.lo-oved').find('.file-list li:last-child a').html();
                if(!lastFile ? $(this).closest('.taasuka').find('div.lo-oved').find('input[type=file]').prop('required', true) : '');                
            break;
            default:
            $(this).closest('.taasuka').find('.starthidden').addClass('hidden');

            console.log('this is default');
//  יש לבחור ערך
           
            
        }
    });

    $('.taas').trigger( "change" );
};


function familyState() {
    switch ($('#family_state').val()) {
        //רווק
        case '1':
            
            $('#the-family-state').text('רווק');
            $('#is_siua_cont').removeClass('hidden');
            $('#mezonot_state_row_cont').addClass('hidden');
            $('.mezonot_height_cont').addClass('hidden');
            $('#mezonot_state option[value=0]').attr('selected', 'selected');
            $(".taasuka-zug").addClass("hidden");
            // $(".taasuka-parents").removeClass("hidden");
            
            $('.children_cont').removeClass('hidden');

            $("#children").text('אחים מתחת לגיל 18');
            $("#soldier").text('אח בשירות צבאי סדיר');
            $("#student").text('אח הלומד במוסד להשכלה גבוהה בארץ');
            $("#self_children_cont_label").text('מספר אחים מתחת לגיל 18');
            $("#self_soldier_cont_label").text('האם יש לך אח בשירות צבאי סדיר?');
            $("#self_student_cont_label").text('האם יש לך אח הלומד במוסד להשכלה גבוהה בארץ?');
            $("#is_siua_cont").removeClass("hidden");
            $('#taasukati_zug_state').prop('required',false);
            // console.log('ravak');
        break;

        //נשוי  
        case '2':
            $('#the-family-state').text('נשוי');
            $('#mezonot_state_row_cont').addClass('hidden');
            $('.mezonot_height_cont').addClass('hidden');
            $('#mezonot_state option[value=0]').attr('selected', 'selected');
            $(".taasuka-zug").removeClass("hidden");
            $(".taasuka-parents").addClass("hidden");
            $("#is_siua_cont").addClass("hidden");
            $('#taasukati_zug_state').prop('required',true);
           
            $("#student").text('ילד הלומד במוסד להשכלה גבוהה בארץ');
            $("#children").text('ילדים מתחת לגיל 18');
            $("#soldier").text('ילד בשירות צבאי סדיר');
            $("#self_children_cont_label").text('מספר ילדים מתחת לגיל 18');
            $("#self_soldier_cont_label").text('האם יש לך ילדים בשירות צבאי סדיר?');
            $("#self_student_cont_label").text('האם יש לך ילד הלומד במוסד להשכלה גבוהה בארץ?');
           
            // console.log('nasui');
        break;

        //גרוש
        case '3':
        $('#the-family-state').text('גרוש');
        $("#student").text('ילד הלומד במוסד להשכלה גבוהה בארץ');

        $("#soldier").text('ילד בשירות צבאי סדיר');
        $("#children").text('ילדים מתחת לגיל 18')
            $('#mezonot_state_row_cont').removeClass('hidden');
            $('.mezonot_height_cont').removeClass('hidden');
            $(".taasuka-zug").addClass("hidden");
            $("#self_children_cont_label").text('מספר ילדים מתחת לגיל 18');
            $("#self_soldier_cont_label").text('האם יש לך ילדים בשירות צבאי סדיר?');
            $("#self_student_cont_label").text('האם יש לך ילד הלומד במוסד להשכלה גבוהה בארץ?');
            $("#is_siua_cont").addClass("hidden");
            $('#taasukati_zug_state').prop('required',false);

            // console.log('garush');
        break;


        //כל מה שלא גרוש
        default:

            $('#mezonot_state_row_cont').addClass('hidden');
            $('.mezonot_height_cont').addClass('hidden');
            $('#mezonot_state option[value=0]').attr('selected', 'selected');
            $('#is_siua_cont').addClass('hidden');
            $(".taasuka-zug").addClass("hidden");
            $('#taasukati_zug_state').prop('required',false);


            $("#student").text('ילד הלומד במוסד להשכלה גבוהה בארץ');
            $("#children").text('ילדים מתחת לגיל 18');
            $("#soldier").text('ילד בשירות צבאי סדיר');
            $("#self_children_cont_label").text('מספר ילדים מתחת לגיל 18');
            $("#self_soldier_cont_label").text('האם יש לך ילדים בשירות צבאי סדיר?');
            $("#self_student_cont_label").text('האם יש לך ילד הלומד במוסד להשכלה גבוהה בארץ?');
            $("#is_siua_cont").addClass("hidden");
            // console.log('else');
        break;

    };
};

function mezonotState() {
    var mezonotState = $('#mezonot_state');


    switch ($('#mezonot_state').val()) {
        //יש לבחור ערך
        case '1':

            const input = document.getElementById('mezonot_files_div');
            const isLi = input.parentElement.querySelectorAll('li').length;

            $('#mezonot_files_div').removeClass('hidden');
            $('.mezonot_height_cont').addClass('hidden');
        
            if(isLi == 0){
                $('#mezonot_files').prop('required', true);
            }
            
            break;

        case '2':
        case '3':
            const input2 = document.getElementById('mezonot_height_files_div');
            const isLi2 = input.parentElement.querySelectorAll('li').length;
            $('#mezonot_files_div').addClass('hidden');
            $('.mezonot_height_cont').removeClass('hidden');
            $('#mezonot_files').prop('required', false);

            if(isLi2 == 0){
                $('#mezonot_height_files').prop('required', true);
            }
            break;

            //לא עובד
        default:
            $('#mezonot_files_div').addClass('hidden');
            $('.mezonot_height_cont').addClass('hidden');
            $('#mezonot_files').prop('required', false);
            break;

    }
}




function showIsSiua() {
    const inputSiua = document.getElementById('is_siua_file_cont');
    const isLiSiua = inputSiua.parentElement.querySelectorAll('li').length;
    if ($('#yes_siua').is(':checked')) {
        // $(".taasuka-parents").find('select').required = true;
        // console.log('yes');
        $('#is_siua_file_cont').removeClass('hidden');
        if(isLiSiua == 0){
            // document.getElementById("is_siua_file").required = true;

        }

       
    } else {
        // console.log('no');
        $('#is_siua_file_cont').addClass('hidden');
        // document.getElementById("is_siua_file").required = false;
      

    }
};

//שילוב של מצב משפחתי ומקבל סיוע
function familyandSiua() {
    var select = $("#family_state").val();
  
    if ($("#yes_siua").is(":checked") && select == 1) {

      
         
        $('.taasuka-parents').removeClass('hidden');
        $('.taasuka-parents').find('.taas').prop('required',true);

      
    }else {
       $('.taasuka-parents').addClass("hidden");
       $('.taasuka-parents').find('select').prop('required',false);
    }
  };
  

function fileRequired(field, target){
$(field).keyup(function(){
    if($(this).val().length > 0){
        $(target).prop('required', true);
        // console.log('true');

        var lastFile =  $(this).closest('.row').find('.file-list li:last-child a').html();
        if(lastFile ? $(this).closest('.row').find('input[type=file]').prop('required', false) : '');
    }else{

        $(target).prop('required', false);
      
        // console.log('false');


    }
});

$(field).trigger('keyup');
}



/**
 * this function check all inputs witsh class `reqOnLoad` and adds required
 * to them depending if they have liws in the list or not.
 */
function isFileInLi(){  
    const allInputs = document.querySelectorAll('input.reqOnLoad');
    // console.log(theUls);
    allInputs.forEach((Input) => {
        if(Input){
            const isLi = Input.parentElement.getElementsByTagName("li");
            // console.log(isLi.length);
            // console.log(Input.required);
            
            if(isLi.length == 0 ? Input.required = true : Input.required = false );
        }
    }); 
}


// //add or remove requred property from file field depends on the .file-list content
// // function MutationObservers()
// //For now there are onley tfo files tham use this condition:
// //tzfile and isalonefile
// const observer = new MutationObserver(function(mutations){
//     mutations.forEach(function(mutation){
//         let liLength = mutation.target.getElementsByTagName("li").length;
//           console.log('liLength ',liLength);
//         if(mutation.addedNodes.length){
//             // console.log('added',mutation);
//             if(liLength != 0){
//                 // console.log('added ',liLength);
//                 mutation.target.parentElement.getElementsByClassName('alwaysRequired')[0].required = false;
//             }
//         }
//         if(mutation.removedNodes.length){
//             if(liLength == 0){
//                 // console.log('removed ',liLength);
//                 mutation.target.parentElement.getElementsByClassName('alwaysRequired')[0].required = true;
//             }
//         }
//     });
// });



// // document.getElementById("myBtn").addEventListener("click", function(){
// //     document.getElementById("demo").innerHTML = "Hello World";
// // });


// const fileList = document.querySelector('form');
// observer.observe(fileList, {
//     childList: true,
//     subtree: true
// })

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

$(document).ready(function() {
    if ($("input.flat")[0]) {
        $(document).ready(function () {
            $('input.flat').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });
        });
    }
});
// /iCheck