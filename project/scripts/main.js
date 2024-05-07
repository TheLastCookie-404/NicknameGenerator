function Random(min, max) {
    return Math.floor(Math.random() * (max - min) ) + min;
}

function CreateNickname(array){
    let firstWord = array[0][Random(0, (array[0].length))];
    let secondWord = array[1][Random(0, (array[1].length))];
    return `${firstWord} ${secondWord}`;
}