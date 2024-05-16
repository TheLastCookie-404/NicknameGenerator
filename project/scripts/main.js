function Random(min, max) {
    return Math.floor(Math.random() * (max - min) ) + min;
}

function CreateNickname(array, tableCell){
    let firstWord = array[0][Random(0, (array[0].length))][tableCell];
    let secondWord = array[1][Random(0, (array[1].length))][tableCell];
    return `${firstWord} ${secondWord}`;
}

function Btn(formId, formAction, submitBtnId, submitBtnNewColor, submitBtnNewText){
    form = document.getElementById(formId);
    submitBtn = document.getElementById(submitBtnId);
    submitBtn.style.backgroundColor = submitBtnNewColor;
    submitBtn.style.borderColor = submitBtnNewColor;
    submitBtn.value = submitBtnNewText;
    form.setAttribute('action', formAction);
}

function AllCheckboxesDisable(){
    document.querySelectorAll('.checkbox').forEach(_checkbox=>{(_checkbox).checked = false;});
}

function DisplaySelectedWords(array, tableCell, outputId, checkboxClass){
    let str = "";
    let checkboxes = document.getElementsByClassName(checkboxClass);
    output = document.getElementById(outputId);
    output.value = str;
    
    console.log(checkboxes);
    document.querySelectorAll(`.${checkboxClass}`).forEach(_checkbox=>{
        if((_checkbox).checked == true){
            array.forEach(_arrelem=>{
                if(_arrelem[0] == _checkbox.value){
                    str += `${_arrelem[tableCell]} `;
                }
            });
        }
    });

    output.value = str;
}

function HideSelectedWords(outputId){
    output = document.getElementById(outputId).value = "";
}



// checkboxes.forEach(_checkbox=>{
//     if((_checkbox).checked == true){
//         array.forEach(_arrelem=>{
//             if(_arrelem[0] == _checkbox.value){
//                 str += `${_arrelem[tableCell]} `;
//             }
//         });
//     }
// });