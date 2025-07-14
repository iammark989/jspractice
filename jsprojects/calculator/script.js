




let firstNum = "";
let calculation = "";

function calculate() {
    switch (calculation) {
        case "sum":
            let a = parseInt(firstNum);
            let b = parseInt(document.getElementById('display').value);
            let sum = a + b;
            document.getElementById('display').value = sum;
            break;

        default:
    }
}
function addition() {
    let dnum = document.getElementById('display').value;
    if (dnum = 0) {

    } else {
        firstNum = document.getElementById('display').value;
        document.getElementById('display').value = 0;
        calculation = "sum";
    }

}


function one() {
    let dnum = document.getElementById('display').value;
    if (dnum == 0) {
        document.getElementById('display').value = 1;
    } else {
        document.getElementById('display').value = dnum +1;
    }
}

function two() {
    let dnum = document.getElementById('display').value;
    if (dnum == 0) {
        document.getElementById('display').value = 2;
    } else {
        document.getElementById('display').value = dnum + 2;
    }
}

function three() {
    let dnum = document.getElementById('display').value;
    if (dnum == 0) {
        document.getElementById('display').value = 3;
    } else {
        document.getElementById('display').value = dnum + 3;
    }
}

function four() {
    let dnum = document.getElementById('display').value;
    if (dnum == 0) {
        document.getElementById('display').value = 4;
    } else {
        document.getElementById('display').value = dnum + 4;
    }
}

function five() {
    let dnum = document.getElementById('display').value;
    if (dnum == 0) {
        document.getElementById('display').value = 5;
    } else {
        document.getElementById('display').value = dnum + 5;
    }
}

function six() {
    let dnum = document.getElementById('display').value;
    if (dnum == 0) {
        document.getElementById('display').value = 6;
    } else {
        document.getElementById('display').value = dnum + 6;
    }
}

function seven() {
    let dnum = document.getElementById('display').value;
    if (dnum == 0) {
        document.getElementById('display').value = 7;
    } else {
        document.getElementById('display').value = dnum + 7;
    }
}

function eight() {
    let dnum = document.getElementById('display').value;
    if (dnum == 0) {
        document.getElementById('display').value = 8;
    } else {
        document.getElementById('display').value = dnum + 8;
    }
}

function nine() {
    let dnum = document.getElementById('display').value;
    if (dnum == 0) {
        document.getElementById('display').value = 9;
    } else {
        document.getElementById('display').value = dnum + 9;
    }
}
