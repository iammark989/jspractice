
let url = location.href;

function gotocalculator() {
   
    location.href = url + "/calculator";
}

function gotomodal() {
   
    location.href = url + "/modal";
}

function btnCloseModal() {
       location.href = url + "../";
}

//jquery

$(document).ready(function(){
    let bgcolorc = document.getElementById('bgcolor');
    
    
    $('#cBtnClose').click(function(){
        bgcolorc.style.display = 'none';
    })

    $('#btnbgchanger').click(function(){
      bgcolorc.style.display = 'block';
    })

})

// bgChangervalue
//let redSlider = document.getElementById('redslider');
let redValue = document.getElementById('redvalue');
    redValue.innerHTML = 111;
   