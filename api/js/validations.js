function preventD(e) {
    e.preventDefault();
}

/**
 * validation
 */
$('#savebtn').click(function () {
    $('input, select').removeAttr('required');
});

$(document).ready(function () {
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
document.onload = showIsAloneFile();


document.onload = hideFileOnRadio('social_harig_file_cont', 'social_harig', 'social_harig_file');
document.onload = hideFileOnRadio('medical_harig_file_cont', 'medical_harig', 'medical_harig_file');
document.onload = hideFileOnRadio('family_harig_file_cont', 'family_harig', 'family_harig_file');
document.onload = hideFileOnRadio('self_soldier_files_cont', 'self_soldier', 'self_soldier_files');
document.onload = hideFileOnRadio('self_student_files_cont', 'self_student', 'self_student_files');

document.onload = hideFileOnRadio('is-lochem-file', 'is_lochem', 'islochemfile');
document.onload = hideFileOnRadio('is-miluim-file', 'is_miluim', 'is_miluim_file');
document.onload = hideFileOnRadio('is_army_ptor_file_cont', 'is_army_ptor', 'is_army_ptor_file');


document.onload = is_army();

document.onload = familyState();

document.onload = mezonotState();

document.onload = isFileInLi();

document.onload = showIsSiua();
document.onload = familyandSiua();

document.onload = fileRequired('self_children', 'input#self_children_files');

document.getElementById('self_children_files').addEventListener('change', function () {
    fileRequired('self_children', 'input#self_children_files');
}, false);

document.getElementById("asked_schol").addEventListener("click", showReceivedSchol);
document.getElementById("not_asked_schol").addEventListener("click", showReceivedSchol);

document.onload = tasu('#taasukati_state');

document.getElementById("alone").addEventListener("click", showIsAloneFile);

document.getElementById("notalone").addEventListener("click", showIsAloneFile);

document.getElementById("is_army").addEventListener("change", is_army);

document.getElementById("family_state").addEventListener("change", familyState);

document.getElementById("mezonot_state").addEventListener("change", mezonotState);

document.getElementById("yes_siua").addEventListener("click", showIsSiua);
document.getElementById("no_siua").addEventListener("click", showIsSiua);


document.getElementById("yes_siua").addEventListener("click", familyandSiua);
document.getElementById("no_siua").addEventListener("click", familyandSiua);
document.getElementById("family_state").addEventListener("change", familyandSiua);

//לוחם
document.getElementsByName('is_lochem')[0].addEventListener('change', function () {
    hideFileOnRadio('is-lochem-file', 'is_lochem', 'islochemfile');
}, false);
document.getElementsByName('is_lochem')[1].addEventListener('change', function () {
    hideFileOnRadio('is-lochem-file', 'is_lochem', 'islochemfile');
}, false);

//מילואים
document.getElementsByName('is_miluim')[0].addEventListener('change', function () {
    hideFileOnRadio('is-miluim-file', 'is_miluim', 'is_miluim_file');
}, false);
document.getElementsByName('is_miluim')[1].addEventListener('change', function () {
    hideFileOnRadio('is-miluim-file', 'is_miluim', 'is_miluim_file');
}, false);

//פטור מצהל מסיבה רפואית
document.getElementsByName('is_army_ptor')[0].addEventListener('change', function () {
    hideFileOnRadio('is_army_ptor_file_cont', 'is_army_ptor', 'is_army_ptor_file');
}, false);
document.getElementsByName('is_army_ptor')[1].addEventListener('change', function () {
    hideFileOnRadio('is_army_ptor_file_cont', 'is_army_ptor', 'is_army_ptor_file');
}, false);



// בן/אח במוסד להשכלה גבוהה
document.getElementsByName('self_student')[0].addEventListener('change', function () {
    hideFileOnRadio('self_student_files_cont', 'self_student', 'self_student_files');
}, false);
document.getElementsByName('self_student')[1].addEventListener('change', function () {
    hideFileOnRadio('self_student_files_cont', 'self_student', 'self_student_files');
}, false);

// בן/אח חייל
document.getElementsByName('self_soldier')[0].addEventListener('change', function () {
    hideFileOnRadio('self_soldier_files_cont', 'self_soldier', 'self_soldier_files');
}, false);
document.getElementsByName('self_soldier')[1].addEventListener('change', function () {
    hideFileOnRadio('self_soldier_files_cont', 'self_soldier', 'self_soldier_files');
}, false);

//harig file
document.getElementsByName('social_harig')[0].addEventListener('change', function () {
    hideFileOnRadio('social_harig_file_cont', 'social_harig', 'social_harig_file');
}, false);
document.getElementsByName('social_harig')[1].addEventListener('change', function () {
    hideFileOnRadio('social_harig_file_cont', 'social_harig', 'social_harig_file');
}, false);

//
document.getElementsByName('medical_harig')[0].addEventListener('change', function () {
    hideFileOnRadio('medical_harig_file_cont', 'medical_harig', 'medical_harig_file');
}, false);
document.getElementsByName('medical_harig')[1].addEventListener('change', function () {
    hideFileOnRadio('medical_harig_file_cont', 'medical_harig', 'medical_harig_file');
}, false);

//
document.getElementsByName('family_harig')[0].addEventListener('change', function () {
    hideFileOnRadio('family_harig_file_cont', 'family_harig', 'family_harig_file');
}, false);
document.getElementsByName('family_harig')[1].addEventListener('change', function () {
    hideFileOnRadio('family_harig_file_cont', 'family_harig', 'family_harig_file');
}, false);



function showIsAloneFile() {

    const input = document.getElementById('iisalonefile');
    const isLi = input.parentElement.querySelectorAll('li').length;


    if (document.getElementById('alone').checked) {
        document.getElementById('is_alone_file').classList.remove('hidden');
        if (isLi == 0) {
            document.getElementById("isalonefile").required = true;

        }

    } else {

        document.getElementById('is_alone_file').className += ' hidden';

        // document.getElementById('notalone').checked = true;
        document.getElementById("isalonefile").required = false;

    }
}



/**
 * hides radio field that is depend on radio btn result
 * works only for harig_file
 */
function hideFileOnRadio(fileCont, radioName, fileId) {
    const input = document.getElementById(fileCont);
    const isLi = input.querySelectorAll('li').length;


    if ($('input:radio[name="' + radioName + '"]:checked').val() == 1) {
        document.getElementById(fileCont).classList.remove('hidden');
        if (isLi == 0) {
            document.getElementById(fileId).required = true;
        }
    } else {
        document.getElementById(fileCont).className += ' hidden';
        document.getElementById(fileId).required = false;

    }


}


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

console.log('dav');
function is_army() {
    var isArmy = $('#is_army');

    switch (isArmy.val()) {
        case 'צבאי':
            $('#the-army-state').text('צבאי');
            $('.army').removeClass('hidden');
            $('#is_lochem').removeClass('hidden');

            // $('#is-lochem-file').removeClass('hidden');
            $('#miluim_pail').removeClass('hidden');

            $('#is_army_no_ptor').prop("checked", true);
            $('#army_ptor').addClass('hidden');
            $('#is_army_ptor_file_cont').addClass('hidden');

			$('#is-army-file').removeClass('hidden');
            document.getElementsByName('length_army')[0].required = true;

            break;

        case 'לאומי':
            $('#the-army-state').text('לאומי');
            $('.army').removeClass('hidden');
            $('#is_lochem').addClass('hidden');
            $('#lo_lochem').prop("checked", true);
            $('#lo_miluim').prop("checked", true);
            $('#is-lochem-file').addClass('hidden');

            $('#is-miluim-file').addClass('hidden');

            $('#miluim_pail').addClass('hidden');
            $('#is_army_ptor_file_cont').addClass('hidden');

            $('#is_army_no_ptor').prop("checked", true);
            $('#army_ptor').addClass('hidden');
            $('#is_army_ptor_file_cont').addClass('hidden');

			$('#is-army-file').removeClass('hidden');
            document.getElementsByName('length_army')[0].required = true;

            break;

        case 'ללא':
            $('#the-army-state').text('ללא שירות צבאי');
            $('.army').addClass('hidden');
            $('#is_lochem').addClass('hidden');
            $('#lo_lochem').prop("checked", true);
            $('#lo_miluim').prop("checked", true);
            $('#army_ptor').removeClass('hidden');

            $('#is-lochem-file').addClass('hidden');
            $('#miluim_pail').addClass('hidden');
            $('#is-miluim-file').addClass('hidden');

			$('#is-army-file').addClass('hidden');
            document.getElementsByName('length_army')[0].required = false;


            break;

        default:
            $('.army').addClass('hidden');
            $('#is_lochem').addClass('hidden');

            $('#is-lochem-file').addClass('hidden');

            $('#miluim_pail').addClass('hidden');
            $('#is-miluim-file').addClass('hidden');
            $('#lo_lochem').prop("checked", true);
            $('#lo_miluim').prop("checked", true);

            $('#is_army_no_ptor').prop("checked", true);
            $('#army_ptor').addClass('hidden');
            $('#is_army_ptor_file_cont').addClass('hidden');

			$('#is-army-file').addClass('hidden');
            document.getElementsByName('length_army')[0].required = false;
            break;
    }
}


// function isLochem() {
//     const inputLochem = document.getElementById('is-lochem-file');
//     const isLiLochem = inputLochem.querySelectorAll('li').length;
//     if (document.getElementById('lochem').checked) {
//         document.getElementById('is-lochem-file').classList.remove('hidden');
//         if (isLiLochem == 0) {
//             document.getElementById('islochemfile').required = true;
//         }
//     } else {
//         document.getElementById('is-lochem-file').className += ' hidden';
//         // document.getElementById('lo_lochem').checked = true;
//         document.getElementById('islochemfile').required = false;
//     }

// };


// function isArmyPtor() {
//     const inputPtor = document.getElementById('is_army_ptor_file_cont');
//     const isLiPtor = inputPtor.parentElement.querySelectorAll('li').length;
//     if (document.getElementById('is_army_ptor').checked) {
//         document.getElementById('is_army_ptor_file_cont').classList.remove('hidden');
//         if (isLiPtor == 0) {
//             document.getElementById('is_army_ptor_file').required = true;
//         }
//     } else {
//         document.getElementById('is_army_ptor_file_cont').className += ' hidden';
//         // document.getElementById('is_army_no_ptor').checked = true;
//         document.getElementById('is_army_ptor_file').required = false;
//     }
// };


// function showIsMiluim() {
//     const inputMiluim = document.getElementById('is-miluim-file');
//     const isLiMiluim = inputMiluim.parentElement.querySelectorAll('li').length;
//     if (document.getElementById('is_miluim').checked) {
//         document.getElementById('is-miluim-file').classList.remove('hidden');
//         if (isLiMiluim == 0) {
//             document.getElementById('is_miluim_file').required = true;
//         }

//     } else {
//         document.getElementById('is-miluim-file').className += ' hidden';
//         // document.getElementById('lo_miluim').checked = true;
//         document.getElementById('is_miluim_file').required = false;

//     }
// };




/*
    פונקציות לאזור הכנסה
 */

function tasu() {

    $('.taas').change(function () {
        var selectId = $(this).attr('id');

        // var specialAtt = $('option:selected', this).attr('data-name');
        //console.log(selectId, 'selectIdx');
		debugger;
        // console.log('specialAtt -' + selectId);

        var selectValue = $(this).val();
        console.log(selectValue, 'selectValue');
        switch (selectValue) {
            case '':
                // $(this).closest('.taasuka').find('.starthidden').addClass('hidden');
                $('.salary-' + selectId).addClass('hidden');
                $('.employ-' + selectId).addClass('hidden');
                $('.lo-oved-' + selectId).addClass('hidden');

                $('#salary_avg-' + selectId).prop('required', false);
                $('#employ_avg-' + selectId).prop('required', false);

                $('.salary-' + selectId).find('input[type=file]').prop('required', false);
                $('.employ-' + selectId).find('input[type=file]').prop('required', false);
                $('.lo-oved-' + selectId).find('input[type=file]').prop('required', false);

                break;

                //שכיר
            case '1':
                $('.salary-' + selectId).removeClass('hidden');

                $('.employ-' + selectId).addClass('hidden');
                $('.lo-oved-' + selectId).addClass('hidden');

                /** remove required fom other file fields that are not selected */
                $('.employ-' + selectId).find('input[type=file]').prop('required', false);
                $('.lo-oved-' + selectId).find('input[type=file]').prop('required', false);

                /**text fields */
                $('#salary_avg-' + selectId).prop('required', true);
                $('#employ_avg-' + selectId).prop('required', false);
                $('#lo-oved-self-' + selectId).prop('required', false);


                $('#self_employ_files').prop('required', false);

                // $(this).closest('.taasuka').find('div.salary').find('input[type=text]').prop('required', true);

                var lastFile = $('.salary-' + selectId).find('.file-list li:last-child a').html();
                if (!lastFile ? $('.salary-' + selectId).find('input[type=file]').prop('required', true) : '');

                $('#the-taa-state').text('שכיר');


                break;

                //עצמאי
            case '2':
                $('.employ-' + selectId).removeClass('hidden');

                $('.lo-oved-' + selectId).addClass('hidden');
                $('.salary-' + selectId).addClass('hidden');

                /** remove required fom other file fields that are not selected */
                $('.salary-' + selectId).find('input[type=file]').prop('required', false);
                $('.lo-oved-' + selectId).find('input[type=file]').prop('required', false);


                /**text fields */
                $('#salary_avg-' + selectId).prop('required', false);
                $('#employ_avg-' + selectId).prop('required', true);
                $('#lo-oved-self-' + selectId).prop('required', false);
            
                $('#self_salary_files').prop('required', false);

                var lastFile = $('.employ-' + selectId).find('.file-list li:last-child a').html();
                if (!lastFile ? $('.employ-' + selectId).find('input[type=file]').prop('required', true) : '');


                break;

                //לא עובד
            case '3':
                $('.lo-oved-' + selectId).removeClass('hidden');

                $('.salary-' + selectId).addClass('hidden');
                $('.employ-' + selectId).addClass('hidden');

                /** remove required fom other file fields that are not selected */
                $('.salary-' + selectId).find('input[type=file]').prop('required', false);
                $('.employ-' + selectId).find('input[type=file]').prop('required', false);

                /**text fields */
                $('#salary_avg-' + selectId).prop('required', false);
                $('#employ_avg-' + selectId).prop('required', false);
                $('#lo-oved-self-' + selectId).prop('required', true);


                /*hide lo kitsba input field if ravak and unemployed*/
                var fs = $('#family_state').val();
                console.log('fs');
                debugger;
                if( fs === 1){
                    $(".lo-oved-taasukati_state").addClass("hidden");
                // console.log('#lo-oved-self-' + selectId);
                }
                var lastFile = $('.lo-oved-' + selectId).find('.file-list li:last-child a').html();
                if (!lastFile ? $('.lo-oved-' + selectId).find('input[type=file]').prop('required', true) : '');

                break;
        }
    });
    $('.taas').trigger("change");
};


// function tas(val) {
//     $('.taas').change(function () {
//         $(this).closest('.taasuka').find('input').prop('required', false);

//         val = $(this).val();

//         switch (val) {

//             case '0':
//                 $(this).closest('.taasuka').find('.starthidden').addClass('hidden');

//                 break;
//                 //שכיר
//             case '1':
//                 $('#the-taa-state').text('שכיר');

//                 $(this).closest('.taasuka').find('.starthidden').addClass('hidden');
//                 $(this).closest('.taasuka').find('.salary').removeClass('hidden');
//                 $(this).closest('.taasuka').find('div.salary').find('input[type=text]').prop('required', true);
//                 //בןדק אם יש קבצים ברשימת הקבצים לאותו שדה, במידה ואים מוסיף רקוויירד לשדה הקובץ הקרוב
//                 var lastFile = $(this).closest('.taasuka').find('div.salary').find('.file-list li:last-child a').html();
//                 if (!lastFile ? $(this).closest('.taasuka').find('div.salary').find('input[type=file]').prop('required', true) : '');
//                 // console.log(val, 'xxx');


//                 break;
//                 //עצמאי
//             case '2':
//                 $('#the-taa-state').text('עצמאי');
//                 $(this).closest('.taasuka').find('.starthidden').addClass('hidden');
//                 $(this).closest('.taasuka').find('.employ').removeClass('hidden');
//                 $(this).closest('.taasuka').find('div.employ').find('input[type=text]').prop('required', true);

//                 //בןדק אם יש קבצים ברשימת הקבצים לאותו שדה, במידה ואים מוסיף רקוויירד לשדה הקובץ הקרוב
//                 var lastFile = $(this).closest('.taasuka').find('div.employ').find('.file-list li:last-child a').html();
//                 if (!lastFile ? $(this).closest('.taasuka').find('div.employ').find('input[type=file]').prop('required', true) : '');



//                 break;

//                 //לא עובד
//             case '3':
//                 $('#the-taa-state').text('לא עובד');
//                 $(this).closest('.taasuka').find('.starthidden').addClass('hidden');
//                 $(this).closest('.taasuka').find('.lo-oved').removeClass('hidden');

//                 $(this).closest('.taasuka').find('div.lo-oved').find('input[type=text]').prop('required', true);

//                 //בןדק אם יש קבצים ברשימת הקבצים לאותו שדה, במידה ואים מוסיף רקוויירד לשדה הקובץ הקרוב
//                 var lastFile = $(this).closest('.taasuka').find('div.lo-oved').find('.file-list li:last-child a').html();
//                 if (!lastFile ? $(this).closest('.taasuka').find('div.lo-oved').find('input[type=file]').prop('required', true) : '');
//                 break;
//             default:
//                 $(this).closest('.taasuka').find('.starthidden').addClass('hidden');

//                 console.log('this is default');
//                 //  יש לבחור ערך


//         }
//     });

//     $('.taas').trigger("change");
// };


function familyState() {
    switch ($('#family_state').val()) {
        //רווק
        case '1':

            $('#the-family-state').text('רווק');
            $('#is_siua_cont').removeClass('hidden');
            $('#mezonot_state_row_cont').addClass('hidden');
            $('.mezonot_height_cont').addClass('hidden');
            $('#mezonot_state option[value=0]').attr('selected', 'selected');

                /*hide lo kitsba input field if ravak and unemployed*/
            $(".lo-oved-taasukati_state").addClass("hidden");

            $(".taasuka-zug").addClass("hidden");
            $(".taasuka-zug-select").addClass("hidden");
            $('#taasukati_zug_state').val('');
            $('#taasukati_zug_state').prop('required', false);
            $('.taasuka-zug input[type="file"]').prop('required', false);

            //remove required from mezonot files 
            $('.mezonot_files_req input[type="file"]').prop('required', false);
            $('.mezonot_files_req').addClass('hidden');
            // $(".taasuka-parents").removeClass("hidden");

            document.getElementsByName('is_siua')[0].required = true;
            document.getElementsByName('is_siua')[1].required = true;

            $('.children_cont').removeClass('hidden');

            $("#children").text('אחים מתחת לגיל 18');
            $("#soldier").text('אח בשירות צבאי סדיר');
            $("#student").text('אח הלומד במוסד להשכלה גבוהה בארץ');
            $("#self_children_cont_label").text('מספר אחים מתחת לגיל 18');
            $("#self_soldier_cont_label").text('האם יש לך אח בשירות צבאי סדיר?');
            $("#self_student_cont_label").text('האם יש לך אח הלומד במוסד להשכלה גבוהה בארץ?');
            $("#is_siua_cont").removeClass("hidden");



            


            // console.log('ravak');
            break;

            //נשוי  
        case '2':
            $('#the-family-state').text('נשוי');
            $('#mezonot_state_row_cont').addClass('hidden');
            $('.mezonot_height_cont').addClass('hidden');
            $('#mezonot_state option[value=0]').attr('selected', 'selected');
            $(".taasuka-zug-select").removeClass("hidden");
            $(".taasuka-parents").addClass("hidden");
            $("#is_siua_cont").addClass("hidden");
            $('#taasukati_zug_state').prop('required', true);

            $("#student").text('ילד הלומד במוסד להשכלה גבוהה בארץ');
            $("#children").text('ילדים מתחת לגיל 18');
            $("#soldier").text('ילד בשירות צבאי סדיר');
            $("#self_children_cont_label").text('מספר ילדים מתחת לגיל 18');
            $("#self_soldier_cont_label").text('האם יש לך ילדים בשירות צבאי סדיר?');
            $("#self_student_cont_label").text('האם יש לך ילד הלומד במוסד להשכלה גבוהה בארץ?');

            //remove required from parent files 
            $('.taasuka-parents-files input[type="file"]').prop('required', false);

            //remove required from mezonot files 
            $('.mezonot_files_req input[type="file"]').prop('required', false);
            $('.mezonot_files_req').addClass('hidden');
            //remove required from is siua if fam state is not ravak
            document.getElementsByName('is_siua')[0].required = false;
            document.getElementsByName('is_siua')[1].required = false;
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
            $('#taasukati_zug_state').prop('required', false);
            $(".taasuka-zug-select").addClass("hidden");

            //remove required from zug files 
            $('.taasuka-zug input[type="file"]').prop('required', false);

            //remove required from parent files 
            $('.taasuka-parents-files input[type="file"]').prop('required', false);

            //remove required from is siua if fam state is not ravak
            document.getElementsByName('is_siua')[0].required = false;
            document.getElementsByName('is_siua')[1].required = false;
            // console.log('garush');
            break;


            // אלמן
        default:

            $('#mezonot_state_row_cont').addClass('hidden');
            $('.mezonot_height_cont').addClass('hidden');
            $('#mezonot_state option[value=0]').attr('selected', 'selected');
            $('#is_siua_cont').addClass('hidden');
            $(".taasuka-zug").addClass("hidden");
            $('#taasukati_zug_state').prop('required', false);
            $(".taasuka-zug-select").addClass("hidden");
            //remove required from zug files 
            $('.taasuka-zug input[type="file"]').prop('required', false);

            //remove required from mezonot files 
            $('.mezonot_files_req input[type="file"]').prop('required', false);
            $('.mezonot_files_req').addClass('hidden');


            //remove required from is siua if fam state is not ravak
            document.getElementsByName('is_siua')[0].required = false;
            document.getElementsByName('is_siua')[1].required = false;

            //remove required from parent files 
            $('.taasuka-parents-files input[type="file"]').prop('required', false);


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
            //ללא מזונות
            const input = document.getElementById('mezonot_files_div');
            const isLi = input.parentElement.querySelectorAll('li').length;


            $('#mezonot_files_div').removeClass('hidden');
            $('.mezonot_height_cont').addClass('hidden');
            $('#mezonot_height_files_cont').addClass('hidden');

            if (isLi == 0) {
                $('#mezonot_files').prop('required', true);
            }

            break;

            //מקבלת מזונות
        case '2':
            const input3 = document.getElementById('mezonot_height_files_div');
            const isLi3 = input3.parentElement.querySelectorAll('li').length;
            $('#mezonot_files_div').addClass('hidden');
            $('#mezonot_height_files_cont').removeClass('hidden');
            $('.mezonot_height_cont').removeClass('hidden');

            $('#mezonot_files').prop('required', false);




            if (isLi3 == 0) {
                $('#mezonot_height_files').prop('required', true);
            }
            break;

            //משלם מזונות
        case '3':
            const input2 = document.getElementById('mezonot_height_files_div');
            const isLi2 = input2.parentElement.querySelectorAll('li').length;
            $('#mezonot_files_div').addClass('hidden');
            $('.mezonot_height_cont').removeClass('hidden');
            $('#mezonot_files').prop('required', false);

            $('#mezonot_height_files_cont').removeClass('hidden');
            if (isLi2 == 0) {
                $('#mezonot_height_files').prop('required', true);
            }
            break;

            //יש לבחור ערך
        default:
            $('#mezonot_files_div').addClass('hidden');
            $('.mezonot_height_cont').addClass('hidden');
            $('#mezonot_files').prop('required', false);
            $('#mezonot_height_files_cont').addClass('hidden');
            break;

    }
}




function showIsSiua() {
    const inputSiua = document.getElementById('is_siua_file_cont');
    const isLiSiua = inputSiua.querySelectorAll('li').length;
    if ($('#no_siua').is(':checked')) {
        // $(".taasuka-parents").find('select').required = true;
        // console.log('yes');
        $('#is_siua_file_cont').removeClass('hidden');
        if (isLiSiua == 0) {
            document.getElementById("is_siua_file").required = true;

        }


    } else {
        // console.log('no');
        $('#is_siua_file_cont').addClass('hidden');
        document.getElementById("is_siua_file").required = false;


    }
};

//שילוב של מצב משפחתי ומקבל סיוע
function familyandSiua() {
    var select = $("#family_state").val();
        // console.log(select);
    if ($("#yes_siua").is(":checked") && select == 1) {



        $('.taasuka-parents').removeClass('hidden');
        $('.taasuka-parents').find('.taas').prop('required', true);




    } else {
        $('.taasuka-parents').addClass("hidden");
        $('.taasuka-parents').find('select').prop('required', false);
        $('#taasukati_av_state').val('');
        $('#taasukati_em_state').val('');

        $('.employ-taasukati_em_state').addClass("hidden");
        $('.employ-taasukati_av_state').addClass("hidden");
        $('.salary-taasukati_av_state').addClass("hidden");
        $('.salary-taasukati_em_state').addClass("hidden");
        $('#self_av_salary').addClass("hidden");
        $('#self_em_salary').addClass("hidden");

    }
};


function fileRequired(field, target) {
    
    const inputSelfChildren = document.getElementById('self_children_files_cont');
    const isLiSelfChildren = inputSelfChildren.querySelectorAll('li').length;
    // console.log('isLiSelfChildren', isLiSelfChildren);
    $('#'+field).on('keyup', function () {
        
        if ($(this).val().length > 0 && $(this).val() != 0){
            $('#'+field+'_files_cont').removeClass('hidden');
            if(isLiSelfChildren == 0){
                $(target).prop('required', true);
                console.log('truess');
            }
        } else {
            $(target).prop('required', false);
            $('#'+field+'_files_cont').addClass('hidden');
            // console.log('false');
        }
    });

    $('#'+field).trigger('keyup');
}



/**
 * this function check all inputs witsh class `reqOnLoad` and adds required
 * to them depending if they have li's in the list or not.
 */
function isFileInLi() {
    var allInputs = document.querySelectorAll('.reqOnLoad');
    // console.log('allInputs ', allInputs[0]);
    var nameArray = new Array();
    // var nameArray = allInputs.map(InputName =>
    //     nameArray.push(InputName)
    // )
    // console.log(nameArray);
    
    // $.each(allInputs, function( Input ){
    //     console.log('Input ', Input);
    var Input = allInputs[0];
        if (Input) {
            
            var isLi = Input.parentElement.getElementsByTagName("li");
            // console.log(isLi.length);
            // console.log(Input.required);

            if (isLi.length == 0 ? Input.required = true : Input.required = false);
        }
    // });
}


//add or remove requred property from file field depends on the .file-list content
// function MutationObservers()
//For now there are onley tfo files tham use this condition:
//tzfile and isalonefile
const observer = new MutationObserver(function (mutations) {
    mutations.forEach(function (mutation) {
        let liLength = mutation.target.getElementsByTagName("li").length;
        console.log('liLength ', liLength);
        if (mutation.addedNodes.length) {
            // console.log('added',mutation);
            if (liLength != 0) {
                // console.log('added ',liLength);
                mutation.target.parentElement.getElementsByClassName('alwaysRequired')[0].required = false;
            }
        }
        if (mutation.removedNodes.length) {
            if (liLength == 0) {
                // console.log('removed ',liLength);
                mutation.target.parentElement.getElementsByClassName('alwaysRequired')[0].required = true;
            }
        }
    });
});


const fileList = document.querySelector('form');
observer.observe(fileList, {
    childList: true,
    subtree: true
})

