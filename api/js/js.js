function preventD(e) {
    e.preventDefault();
}

/**
 * validation
 */
$('#savebtn').click(function () { 
    $('input, select').removeAttr('required');
});

function init(){
    
}

document.onload = showReceivedSchol();
document.onload = showIsAloneFile();
document.onload = is_army();
document.onload = isLochem();
document.onload = isArmyPtor();
document.onload = showIsMiluim();
// document.onload = taasukati();
document.onload = familyState();
document.onload = mezonotState();

document.onload = isFileInLi();

document.onload = showIsSiua();
document.onload = familyandSiua();
document.onload = fileRequired('#self_children', 'input#self_children_files');
document.onload = fileRequired('#self_soldier', 'input#self_soldier_files');
document.onload = fileRequired('#self_student', 'input#self_student_files');
// document.onload = ifFileUploaded();
// document.onload = ifFileRemoved();


// document.onload = whenFileChanged();


// $(document).ready(function(){
//     $('.file-list').on("DOMSubtreeModified", whenFileChanged);
// });



  
// $(document).ready(function(){
//     $('input[type="file"]').bind("click", whenFileAdded);
// });

document.getElementById("asked_schol").addEventListener("click", showReceivedSchol);
document.getElementById("not_asked_schol").addEventListener("click", showReceivedSchol);

document.onload = tas($('#taasukati_av_state').val());

document.getElementById("asked_schol").addEventListener("click", showReceivedSchol);
document.getElementById("not_asked_schol").addEventListener("click", showReceivedSchol);

document.getElementById("alone").addEventListener("click", showIsAloneFile);
document.getElementById("notalone").addEventListener("click", showIsAloneFile);

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


function showIsAloneFile() {
    if (document.getElementById('alone').checked) {
        document.getElementById('is_alone_file').style.display = 'block';
        document.getElementById("isalonefile").required = true;

    } else {
        document.getElementById('is_alone_file').style.display = 'none';
        document.getElementById('notalone').checked = true;
        document.getElementById("isalonefile").required = false;
    }
}



function showReceivedSchol() {
    if (document.getElementById('asked_schol').checked) {
        document.getElementById('asked-schol-div').style.display = 'block';
        document.getElementById("received_schol").attributes.required = "required";
        document.getElementById("not_received_schol").attributes.required = "required";
    } else {
        document.getElementById('asked-schol-div').style.display = 'none';
        document.getElementById('not_received_schol').checked = true;
        document.getElementById("received_schol").attributes.required = "";
        document.getElementById("not_received_schol").attributes.required = "";
    }
}



function is_army() {
    var isArmy = $('#is_army');

    switch (isArmy.val()) {
        case 'צבאי':
            $('.army').removeClass('hidden');
            $('#is_lochem').removeClass('hidden');
            $('#army_ptor').addClass('hidden');
            $('#is-lochem-file').removeClass('hidden');
            $('#miluim_pail').removeClass('hidden');

            break;

        case 'לאומי':
            $('.army').removeClass('hidden');
            $('#is_lochem').addClass('hidden');
            $('#lo_lochem').prop("checked", true);
            $('#is-lochem-file').css("display", "none");

            $('#army_ptor').addClass('hidden');
            $('#is-miluim-file').css("display", "none");

            $('#miluim_pail').addClass('hidden');
            $('#is_army_ptor_file').css("display", "none");
            break;

        case 'ללא':
            $('.army').addClass('hidden');
            $('#is_lochem').addClass('hidden');
            $('#lo_lochem').prop("checked", true)
            $('#army_ptor').removeClass('hidden');
            $('#length_army input').val('0');
            $('#is-lochem-file').addClass('hidden');
            $('#miluim_pail').addClass('hidden');


            break;

        default:
            $('.army').addClass('hidden');
            $('#is_lochem').removeClass('hidden');
            $('#army_ptor').removeClass('hidden');
            $('#is-lochem-file').removeClass('hidden');
            $('#length_army input').val('0');
            $('#miluim_pail').removeClass('hidden');
            break;
    }
}


function isLochem() {
    if (document.getElementById('lochem').checked) {
        document.getElementById('is-lochem-file').style.display = 'block';
        document.getElementById('is-lochem-file').attributes.required = 'required';
    } else {
        document.getElementById('is-lochem-file').style.display = 'none';
        document.getElementById('lo_lochem').checked = true;
        document.getElementById('is-lochem-file').attributes.required = '';
    }
};


function isArmyPtor() {
    if (document.getElementById('is_army_ptor').checked) {
        document.getElementById('is_army_ptor_file').style.display = 'block';
        document.getElementById('is_army_ptor_file').attributes.required = 'required';
    } else {
        document.getElementById('is_army_ptor_file').style.display = 'none';
        document.getElementById('is_army_no_ptor').checked = true;
        document.getElementById('is_army_ptor_file').attributes.required = '';
    }
};


function showIsMiluim() {
    if (document.getElementById('is_miluim').checked) {
        document.getElementById('is-miluim-file').style.display = 'block';
        document.getElementById('is-miluim-file').attributes.required = 'required';
    } else {
        document.getElementById('is-miluim-file').style.display = 'none';
        document.getElementById('lo_miluim').checked = true;
        document.getElementById('is-miluim-file').attributes.required = '';
    }
};


/*
    פונקציות לאזור הכנסה
 */
function tas(val) {
    console.log(val);
    $('.taas').change(function () {
      
        $(this).closest('.taasuka').find('input').prop('required', false);
      

        // $(this).closest('.taasuka').find('input[type=file]').text(lastFile);
       
        if ($(this).val()) {
            val = $(this).val();
            console.log(val);

        };

        switch (val) {
            //יש לבחור ערך
            case '0':
                $(this).closest('.taasuka').find('div.starthidden').addClass('hidden');
               
                break;
            //שכיר
            case '1':
                $(this).closest('.taasuka').find('div.starthidden').addClass('hidden');
                $(this).closest('.taasuka').find('div.salary').removeClass('hidden');
                $(this).closest('.taasuka').find('div.salary').find('input[type=text]').prop('required', true);
                //בןדק אם יש קבצים ברשימת הקבצים לאותו שדה, במידה ואים מוסיף רקוויירד לשדה הקובץ הקרוב
                var lastFile =  $(this).closest('.taasuka').find('div.salary').find('.file-list li:last-child a').html();
                if(!lastFile ? $(this).closest('.taasuka').find('div.salary').find('input[type=file]').prop('required', true) : '');
                

                
                break;
             //עצמאי
            case '2':
                $(this).closest('.taasuka').find('div.starthidden').addClass('hidden');
                $(this).closest('.taasuka').find('div.employ').removeClass('hidden');
                $(this).closest('.taasuka').find('div.employ').find('input[type=text]').prop('required', true);

                //בןדק אם יש קבצים ברשימת הקבצים לאותו שדה, במידה ואים מוסיף רקוויירד לשדה הקובץ הקרוב
                var lastFile =  $(this).closest('.taasuka').find('div.employ').find('.file-list li:last-child a').html();
                if(!lastFile ? $(this).closest('.taasuka').find('div.employ').find('input[type=file]').prop('required', true) : '');
              

               
                break;

                  //לא עובד
            case '3':
                $(this).closest('.taasuka').find('div.starthidden').addClass('hidden');
                $(this).closest('.taasuka').find('div.lo-oved').removeClass('hidden');

                $(this).closest('.taasuka').find('div.lo-oved').find('input[type=text]').prop('required', true);
                
                //בןדק אם יש קבצים ברשימת הקבצים לאותו שדה, במידה ואים מוסיף רקוויירד לשדה הקובץ הקרוב
                var lastFile =  $(this).closest('.taasuka').find('div.lo-oved').find('.file-list li:last-child a').html();
                if(!lastFile ? $(this).closest('.taasuka').find('div.lo-oved').find('input[type=file]').prop('required', true) : '');
               

                
                break;
        }
    });

    $('.taas').trigger( "change" );
};



// function taasukati() {

//     var taasukati = $('#taasukati_state');
//     switch (taasukati.val()) {
//         //יש לבחור ערך
//         case '0':

//             $('#lo_oved_files_cont').addClass('hidden');
//             $('#self_salary').addClass('hidden');
//             $('#self_employ_cont').addClass('hidden');
//             break;

//             //שכיר
//         case '1':

//             $('#lo_oved_files_cont').addClass('hidden');
//             $('#self_salary').removeClass('hidden');
//             $('#self_employ_cont').addClass('hidden');
//             break;

//             //עצמאי
//         case '2':

//             $('#lo_oved_files_cont').addClass('hidden');
//             $('#self_salary').addClass('hidden');
//             $('#self_employ_cont').removeClass('hidden');

//             break;

//             //לא עובד
//         default:

//             $('#lo_oved_files_cont').removeClass('hidden');
//             $('#self_salary').addClass('hidden');
//             $('#self_employ_cont').addClass('hidden');
//             break;

//     }
// };

function familyState() {
    switch ($('#family_state').val()) {
        //רווק
        case '1':
            
            $('#is_siua_cont').removeClass('hidden');
            $('#mezonot_state_row_cont').addClass('hidden');
            $('#mezonot_height_cont').addClass('hidden');
            $('#mezonot_state option[valeu=0]').attr('selected', 'selected');
            $(".taasuka-zug").addClass("hidden");

            $('#children_cont').removeClass('hidden');
            $("#self_children_cont_label").text('מספר אחים מתחת לגיל 18');
            $("#self_soldier_cont_label").text('האם יש לך אח בשירות צבאי סדיר?');
            $("#self_student_cont_label").text('האם יש לך אח הלומד במוסד להשכלה גבוהה בארץ?');
            console.log('ravak');
        break;

        //נשוי  
        case '2':
            $('#mezonot_state_row_cont').addClass('hidden');
            $('#mezonot_height_cont').addClass('hidden');
            $('#mezonot_state option[valeu=0]').attr('selected', 'selected');
            $(".taasuka-zug").removeClass("hidden");
            $("#self_children_cont_label").text('מספר ילדים מתחת לגיל 18');
            $("#self_soldier_cont_label").text('האם יש לך ילדים בשירות צבאי סדיר?');
            $("#self_student_cont_label").text('האם יש לך ילד הלומד במוסד להשכלה גבוהה בארץ?');
            console.log('nasui');
        break;

        //גרוש
        case '3':
            $('#mezonot_state_row_cont').removeClass('hidden');
            $('#mezonot_height_cont').removeClass('hidden');
            $(".taasuka-zug").addClass("hidden");
            $("#self_children_cont_label").text('מספר ילדים מתחת לגיל 18');
            $("#self_soldier_cont_label").text('האם יש לך ילדים בשירות צבאי סדיר?');
            $("#self_student_cont_label").text('האם יש לך ילד הלומד במוסד להשכלה גבוהה בארץ?');

            console.log('garush');
        break;


        //כל מה שלא גרוש
        default:
            $('#mezonot_state_row_cont').addClass('hidden');
            $('#mezonot_height_cont').addClass('hidden');
            $('#mezonot_state option[valeu=0]').attr('selected', 'selected');
            $('#is_siua_cont').addClass('hidden');
            $(".taasuka-zug").addClass("hidden");
            $("#self_children_cont_label").text('מספר ילדים מתחת לגיל 18');
            $("#self_soldier_cont_label").text('האם יש לך ילדים בשירות צבאי סדיר?');
            $("#self_student_cont_label").text('האם יש לך ילד הלומד במוסד להשכלה גבוהה בארץ?');

            console.log('else');
        break;

    };
};

function mezonotState() {
    var mezonotState = $('#mezonot_state');


    switch ($('#mezonot_state').val()) {
        //יש לבחור ערך
        case '1':
            $('#mezonot_files_div').removeClass('hidden');
            $('#mezonot_height_cont').addClass('hidden');
            
            break;

        case '2':
        case '3':
            $('#mezonot_files_div').addClass('hidden');
            $('#mezonot_height_cont').removeClass('hidden');
            break;

            //לא עובד
        default:
            $('#mezonot_files_div').addClass('hidden');
            $('#mezonot_height_cont').addClass('hidden');
            break;

    }
}




function showIsSiua() {
    if ($('#yes_siua').is(':checked')) {
        console.log('yes');
        $('#is_siua_file_cont').removeClass('hidden');
       
    } else {
        console.log('no');
        $('#is_siua_file_cont').addClass('hidden');
    }
};

//שילוב של מצב משפחתי ומקבל סיוע
function familyandSiua() {
    var select = $("#family_state").val();
  
    if ($("#yes_siua").is(":checked")) {
      if (select == 1) {
        $(".taasuka-parents").removeClass("hidden");
      }
    }else if($("#no_siua").is(":checked")){
       $(".taasuka-parents").addClass("hidden");
    }
  };
  
function fileRequired(field, target){
$(field).keyup(function(){
    if($(this).val().length > 0){
        $(target).prop('required', true);
        console.log('true');

        var lastFile =  $(this).closest('.row').find('.file-list li:last-child a').html();
        if(lastFile ? $(this).closest('.row').find('input[type=file]').prop('required', false) : '');
    }else{

        $(target).prop('required', false);
      
        // console.log('false');


    }
});

$(field).trigger('keyup');
}


//this function checks if there are lines in ul.file-list 
//if so it removes the reqired from the field
// var fileId = $('input[type="file"]').attr('id');


// function ifFileUploaded(){
  
//         var isItemInList = $(this).closest('.row').find('.file-list li:last-child a').html();
//         console.log(isItemInList);
//         if(isItemInList ? $(this).closest('.row').find('input[type=file]').prop('required', false) : '');
        
  
   
//     $('input[type="file"]').trigger( "click" );
// };



//add or remove requred property from file field depends on the .file-list content
//works in chrome only becouse we are using DOMSubtreeModified event handeler
// function whenFileChanged(){

//         var isItemInList = $(this).closest('.row').find('.file-list li').length;
//         console.log(isItemInList);

//         if(isItemInList != 0){
//              $(this).closest('.row').find('input[type=file]').prop('required', false);
//          }else{
//             $(this).closest('.row').find('input[type=file]').prop('required', true);

//          };

//         // $(this).closest('.row').find('input[type=file]').prop('required', true)
// };



//add or remove requred property from file field depends on the .file-list content
const observer = new MutationObserver(function(mutations){
    mutations.forEach(function(mutation){
        let liLength = mutation.target.getElementsByTagName("li").length;
        if(mutation.addedNodes.length){
            console.log('added',mutation.addedNodes[0]);
            if(liLength != 0){
                console.log(liLength);
                console.log( mutation.target.parentElement.getElementsByTagName('input'));
                
                mutation.target.parentElement.getElementsByTagName('input')[0].required = false;
            }
        }
        if(mutation.removedNodes.length){
            console.log('Removed',mutation.removedNodes[0]);
            if(liLength == 0){
                mutation.target.parentElement.getElementsByTagName('input')[0].required = true;
                console.log(liLength);
            }
        }
    });
});


const fileList = document.querySelector('ul.file-list');
observer.observe(fileList, {
    childList: true
})

//this function checks if there are files uploaded in the tzfile fields onpage load
//If there are files it tremoves the require prop

function isFileInLi(){  
    let theUl = document.querySelector('ul.file-list')
    let isLi = theUl.getElementsByTagName("li");
    if(isLi.length != 0 ? theUl.parentElement.getElementsByTagName('input')[0].required = false : theUl.parentElement.getElementsByTagName('input')[0].required = true )
    console.log(theUl.parentElement);
}

// selects all files 
// function isFileInLi(){  
//     let theUl = document.querySelectorAll('ul.file-list.active')
//     theUl.forEach(function(thisUl){
//         let isLi = thisUl.getElementsByTagName("li");
//         if(isLi.length != 0 ? thisUl.parentElement.getElementsByTagName('input')[0].required = false : thisUl.parentElement.getElementsByTagName('input')[0].required = true )
//         console.log(thisUl.parentElement);
//     });
    
  
// }
function whenFileAdded(){
    
    var isItemInList = $(this).closest('.row').find('.file-list li').length;
    console.log(isItemInList);
    if(isItemInList >= 1 ? $(this).closest('.row').find('input[type=file]').prop('required', false) : '');

    // $(this).closest('.row').find('input[type=file]').prop('required', true)

// $('input[type="file"]').trigger( "click" );
};

    
        

        // $('.item-file').trigger( "click" );
   




    // var siua = $('#yes_siua').is(':checked');
    // var famState = $('#family_state').val();
    // console.log($(this).val());


    // if(siua == true && $('#family_state').val() == '1'){
    //     console.log('11');
    //     $('.taasuka-parents').removeClass('hidden');
    // }



       


// $('input:radio').click(function(e){
//     console.log($(this));
// });


// $('.file-list').on('load click',function(e){
//     if($(this).empty()){
//         console.log('emptyttt');
//     }
// });