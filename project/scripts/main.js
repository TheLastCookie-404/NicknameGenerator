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


// Отрубать чекбоксы
// 
