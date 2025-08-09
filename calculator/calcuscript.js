




let firstNum = "";
let calculation = "";

function calculate() {
    switch (calculation) {
        case "addition":
            let sumx = parseFloat(firstNum);
            let sumy = parseFloat(document.getElementById('display').value);
            let sumz = sumx + sumy;
            document.getElementById('display').value = sumz;
            break;
        case "subtraction":
            let subx = parseFloat(firstNum);
            let suby = parseFloat(document.getElementById('display').value);
            let subz = subx - suby;
            document.getElementById('display').value = subz;
            break;
        case "multiply":
            let multix = parseFloat(firstNum);
            let multiy = parseFloat(document.getElementById('display').value);
            let multiz = multix * multiy;
            document.getElementById('display').value = multiz;
            break;
        case "divide":
            let dividex = parseFloat(firstNum);
            let dividey = parseFloat(document.getElementById('display').value);
            let dividez = dividex / dividey;
            document.getElementById('display').value = dividez;
            break;
        default:
    }
}
//math
function addition() {
    let dnum = document.getElementById('display').value;
    if (dnum == "0") {

    } else {
        firstNum = document.getElementById('display').value;
        document.getElementById('display').value = 0;
        calculation = "addition";
    }
}
function subtraction() {
    let dnum = document.getElementById('display').value;
    if (dnum == "0") {

    } else {
        firstNum = document.getElementById('display').value;
        document.getElementById('display').value = 0;
        calculation = "subtraction";
    }
}
function multiply() {
    let dnum = document.getElementById('display').value;
    if (dnum == "0") {

    } else {
        firstNum = document.getElementById('display').value;
        document.getElementById('display').value = 0;
        calculation = "multiply"
    }
}
function divide(){
    let dnum = document.getElementById('display').value;
    if (dnum == "0") {

    } else {
        firstNum = document.getElementById('display').value;
        document.getElementById('display').value = 0;
        calculation = "divide";
    }
}



//numbers
function one() {
    let dnum = document.getElementById('display').value;
    if (dnum == "0") {
        document.getElementById('display').value = 1;
    } else {
        document.getElementById('display').value = dnum +1;
    }
}

function two() {
    let dnum = document.getElementById('display').value;
    if (dnum == "0") {
        document.getElementById('display').value = 2;
    } else {
        document.getElementById('display').value = dnum + 2;
    }
}

function three() {
    let dnum = document.getElementById('display').value;
    if (dnum == "0") {
        document.getElementById('display').value = 3;
    } else {
        document.getElementById('display').value = dnum + 3;
    }
}

function four() {
    let dnum = document.getElementById('display').value;
    if (dnum == "0") {
        document.getElementById('display').value = 4;
    } else {
        document.getElementById('display').value = dnum + 4;
    }
}

function five() {
    let dnum = document.getElementById('display').value;
    if (dnum == "0") {
        document.getElementById('display').value = 5;
    } else {
        document.getElementById('display').value = dnum + 5;
    }
}

function six() {
    let dnum = document.getElementById('display').value;
    if (dnum == "0") {
        document.getElementById('display').value = 6;
    } else {
        document.getElementById('display').value = dnum + 6;
    }
}

function seven() {
    let dnum = document.getElementById('display').value;
    if (dnum == "0") {
        document.getElementById('display').value = 7;
    } else {
        document.getElementById('display').value = dnum + 7;
    }
}

function eight() {
    let dnum = document.getElementById('display').value;
    if (dnum == "0") {
        document.getElementById('display').value = 8;
    } else {
        document.getElementById('display').value = dnum + 8;
    }
}

function nine() {
    let dnum = document.getElementById('display').value;
    if (dnum == "0") {
        document.getElementById('display').value = 9;
    } else {
        document.getElementById('display').value = dnum + 9;
    }
}

function zero() {
    let dnum = document.getElementById('display').value;
    if (dnum == "0") {
       
    } else {
        document.getElementById('display').value = dnum + 0;
    }
}

function point() {
    let dnum = document.getElementById('display').value;
    if (dnum.includes(".")) {
       
    } else {
        document.getElementById('display').value = dnum + ".";
    }
}

//clear
function reset() {
    firstNum = "";
    document.getElementById('display').value = 0;
}