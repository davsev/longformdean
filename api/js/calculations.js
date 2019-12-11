// Initial vars
var isArmy = '';
var isAlone = '';
var isLochemTomech = '';
var isArmyPtor = '';
var isMiluim = '';
var selfTaasukati = '';
var isMezonot = '';
var isSiua = '';
var selfSoldier = ''; 
var selfStudent = ''; 
var medicalHarig = ''; 
var familyHarig = ''; 
var familyIncome = '';
var socialHarig = '';
var points ='';

//self income according taasukati_state selected value
// var selfIncomeAvg = '';
//Event Listenenrs

document.getElementById("is_army").addEventListener("change", armyScore);
document.getElementById("is_army").addEventListener("change", pointsSum);

document.getElementById("taasukati_state").addEventListener("change", selfTaasukatiScore);
document.getElementById("taasukati_state").addEventListener("change", pointsSum);

document.getElementById("mezonot_state").addEventListener("change", mezonotScore);
document.getElementById("taasukati_state").addEventListener("change", mezonotScore);
document.getElementById("mezonot_state").addEventListener("change", pointsSum);


document.getElementById("family_state").addEventListener("change", familyIncomeScore);
document.getElementById("mezonot_height").addEventListener("keyup", familyIncomeScore);
document.getElementById("self_children").addEventListener("keyup", familyIncomeScore);
document.getElementById("self_employ_avg").addEventListener("keyup", familyIncomeScore);
document.getElementById("self_salary_avg").addEventListener("keyup", familyIncomeScore);
document.getElementById("family_state").addEventListener("change", pointsSum);

document.getElementById("taasukati_state").addEventListener("change", familyIncomeScore);
document.getElementById("taasukati_state").addEventListener("change", pointsSum);
document.getElementsByTagName("body")[0].addEventListener("click", pointsSum);

document.getElementById("thebody").addEventListener("click", familyIncomePoints);
document.getElementById("thebody").addEventListener("change", pointsSum);

//isAlone
document.getElementsByName('isalone')[0].addEventListener('change', function () {
    radioScore('alone', 5, 'alone_input', isAlone);
}, false);
document.getElementsByName('isalone')[1].addEventListener('change', function () {
    radioScore('alone', 5, 'alone_input', isAlone);
}, false);
//    pointsSum();
document.getElementsByName('isalone')[0].addEventListener('change', function () {
    pointsSum();
}, false);
document.getElementsByName('isalone')[1].addEventListener('change', function () {
   pointsSum();
}, false);

//isLochemTomech
document.getElementsByName('is_lochem')[1].addEventListener('change', function () {
    radioScore('lochem', 10, 'isLochemTomech_input', isLochemTomech);
}, false);
document.getElementsByName('is_lochem')[0].addEventListener('change', function () {
    radioScore('lochem', 10, 'isLochemTomech_input', isLochemTomech);
}, false);

//    pointsSum();
document.getElementsByName('is_lochem')[1].addEventListener('change', function () {
    pointsSum();
}, false);
document.getElementsByName('is_lochem')[0].addEventListener('change', function () {
    pointsSum();
}, false);

//isMiluim
document.getElementsByName('is_miluim')[1].addEventListener('change', function () {
    radioScore('is_miluim', 5, 'isMiluim_input', isMiluim);
}, false);
document.getElementsByName('is_miluim')[0].addEventListener('change', function () {
    radioScore('is_miluim', 5, 'isMiluim_input', isMiluim);
}, false);

//isArmyPtor
document.getElementsByName('is_army_ptor')[1].addEventListener('change', function () {
    radioScore('is_army_ptor', 15, 'isArmyPtor_input', isArmyPtor);
}, false);
document.getElementsByName('is_army_ptor')[0].addEventListener('change', function () {
    radioScore('is_army_ptor', 15, 'isArmyPtor_input', isArmyPtor);
}, false);


//מצב סוציאלי חריג
document.getElementsByName('social_harig')[1].addEventListener('change', function () {
    radioScore('yes_social_harig', 5, 'isSiua_input', isSiua);
}, false);
document.getElementsByName('social_harig')[0].addEventListener('change', function () {
    radioScore('yes_social_harig', 5, 'isSiua_input', isSiua);
}, false);

//selfSoldier 
//is a child or brother serves as a soldier
document.getElementsByName('self_soldier')[1].addEventListener('change', function () {
    radioScore('yes_self_soldier', 5, 'selfSoldier_input', selfSoldier);
}, false);
document.getElementsByName('self_soldier')[0].addEventListener('change', function () {
    radioScore('yes_self_soldier', 5, 'selfSoldier_input', selfSoldier);
}, false);

//selfStudent
//is a child or brother studies in a collage or university
document.getElementsByName('self_student')[1].addEventListener('change', function () {
    radioScore('yes_self_student', 5, 'selfStudent_input', selfStudent);
}, false);
document.getElementsByName('self_student')[0].addEventListener('change', function () {
    radioScore('yes_self_student', 5, 'selfStudent_input', selfStudent);
}, false);

//self medical state || medical_harig
document.getElementsByName('medical_harig')[1].addEventListener('change', function () {
    radioScore('yes_medical_harig', 10, 'medicalHarig_input', medicalHarig);
}, false);
document.getElementsByName('medical_harig')[0].addEventListener('change', function () {
    radioScore('yes_medical_harig', 10, 'medicalHarig_input', medicalHarig);
}, false);

//Family medical state || family_Harig
document.getElementsByName('family_harig')[1].addEventListener('change', function () {
    radioScore('yes_family_harig', 5, 'familyHarig_input', familyHarig);
}, false);
document.getElementsByName('family_harig')[0].addEventListener('change', function () {
    radioScore('yes_family_harig', 5, 'familyHarig_input', familyHarig);
}, false);



//Onload function
window.onload = function () {

    radioScore('alone', 5, 'alone_input', isAlone);
    isAlone;

    armyScore();
    isArmy;
    
    radioScore('lochem', 10, 'isLochemTomech_input', isLochemTomech);
    isLochemTomech;

    radioScore('is_army_ptor', 15, 'isArmyPtor_input', isArmyPtor);
    isArmyPtor;

    radioScore('is_miluim', 5, 'isMiluim_input', isMiluim);
    isMiluim;

    selfTaasukatiScore();
    selfTaasukati;

    mezonotScore();
    isMezonot;

    radioScore('yes_social_harig', 5, 'isSiua_input', isSiua);
    isSiua;

    radioScore('yes_self_soldier', 5, 'selfSoldier_input', selfSoldier);
    selfSoldier;

    radioScore('yes_self_student', 5, 'selfStudent_input', selfStudent);
    selfStudent;

    radioScore('yes_medical_harig', 10, 'medicalHarig_input', medicalHarig);
    medicalHarig;

    radioScore('yes_family_harig', 5, 'familyHarig_input', familyHarig);
    familyHarig;

    familyIncomeScore();
    familyIncome;

  

    familyIncomePoints();
    points;


    pointsSum();

}



function armyScore(){
    switch(document.getElementById('is_army').value){
        case 'צבאי':
        case 'לאומי':
            isArmy = 15;
            // console.log(isArmy)
            document.getElementById('isarmy_input').value = isArmy;
            return isArmy;
            
            break;
        case 'ללא':
            isArmy = 0;
            // console.log(isArmy)
            document.getElementById('isarmy_input').value = isArmy;
            return isArmy;
            
            break;
    }
    
};


function selfTaasukatiScore(){
    switch(document.getElementById('taasukati_state').value){
        case '1':
        case '2':
            selfTaasukati = 5;
            // console.log(isArmy)
            document.getElementById('selfTaasukati_input').value = selfTaasukati;
            return selfTaasukati;
            
            break;
        default:
            selfTaasukati = 0;
            // console.log(isArmy)
            document.getElementById('selfTaasukati_input').value = selfTaasukati;
            return selfTaasukati;
            
            break;
    }
    
};

function mezonotScore(){
    switch(document.getElementById('mezonot_state').value){
        case '1':
            isMezonot = 5;
            document.getElementById('isMezonot_input').value = isMezonot;
            break;

        default:
            isMezonot = 0;
            document.getElementById('isMezonot_input').value = isMezonot;   
            break;
    }
     return isMezonot;
    
};
 
//RETURNS THE INCOME OF THE STUDENT PER MONTH
function selfIncomeAvg (){
      switch(document.getElementById('taasukati_state').value){
                case '1':
                    selfIncome = document.getElementById('self_salary_avg').value;
                    break;

                case '2':
                    selfIncome = document.getElementById('self_employ_avg').value / 12;
                    break;
                case '3':
                    selfIncome = document.getElementById('lo_oved_self_avg').value;
                    break;
                default:
                    selfIncome = 0;
                    break;
            }
        return selfIncome;
}

function parentIncomeAvg (parent){
      switch(document.getElementById('taasukati_'+parent+'_state').value){
                case '1':
                    avIncome = document.getElementById('self_'+parent+'_salary_avg').value;
                    break;
                case '2':
                    avIncome = document.getElementById('self_'+parent+'_employ_avgs').value / 12;;
                    break;
                case '3':
                    avIncome = document.getElementById('self_'+parent+'_lo_oved_avg').value;
                    break;
                default:
                    avIncome = 0;
                    break;
            }
        return avIncome;
}


console.log('test 291');
function familyIncomeScore(){
    var kidsNum = Number(document.getElementById('self_children').value);
    var familySate = document.getElementById('family_state').value;
     (kidsNum != undefined || kidsNum != null ? kidsNum : 0);
    switch(familySate){
        // רווק
        case '1':
            
            var fatherInc = Number(parentIncomeAvg('av'));
            var motherInc = Number(parentIncomeAvg('em'));
        
            familyIncome = document.getElementById('familyIncome_input').value = (fatherInc + motherInc)/(kidsNum+3) ;
            break;
        //נשוי
        case '2':
        console.log(familySate);
            var zugInc = Number(parentIncomeAvg('zug'));
            var studentInc = Number(selfIncomeAvg());
            
            familyIncome = document.getElementById('familyIncome_input').value = Math.round((studentInc + zugInc)/(kidsNum+2));
            console.log(familyIncome);
            break;

        //גרוש
        case '3':
            console.log(familySate);
            var mezonot =  Number(document.getElementById('mezonot_height').value);
            var studentInc = Number(selfIncomeAvg());    
                   
            if( document.getElementById('mezonot_state').value == 1){
                familyIncome = document.getElementById('familyIncome_input').value = Math.round((studentInc)/(kidsNum+1));
                console.log(familyIncome);
             };


            if( document.getElementById('mezonot_state').value == 2){
                familyIncome = document.getElementById('familyIncome_input').value = (studentInc + mezonot)/(kidsNum+1);
                console.log(familyIncome);
             };

            if (document.getElementById('mezonot_state').value == 3 ){
                familyIncome = document.getElementById('familyIncome_input').value = (studentInc - mezonot)/(kidsNum+1);
                console.log(familyIncome);
            }
            break;

        //אלמן
         case '4':
            var studentInc = Number(selfIncomeAvg());
            
            document.getElementById('familyIncome_input').value = (studentInc)/(kidsNum+1);
            break;

    }
    return familyIncome;

    $('#family_state').trigger("change");
};

function familyIncomePoints(){
    var sum = Number(familyIncomeScore());
    // console.log(Number(sum));
    switch(true){
        case (sum < 1500):
            points = '30';
            break;
        case (sum < 2000):
            points = '25';
            break;
        case (sum < 2500):
            points = '20';
            break;
        default:
            points = '0';
            break;
    }

    // return points
    document.getElementById('familyIncome_input_per_person').value = points;
}

//Calculate radio button fields
function radioScore(id, score, input, variable){
     variable = (document.getElementById(id).checked ? score : 0);
    document.getElementById(input).value = variable;
    return  variable;
}


//sum all values


function pointsSum(){
        var sum=0;
        $(".calc").each(function(){
            if($(this).val() != "")
            sum += parseInt($(this).val()); 
            // console.log(sum);  
        });
        
    points = $("#poins").html(sum);
    points = $("#total_inc").val(sum);
};






