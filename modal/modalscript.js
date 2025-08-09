





//view time
function viewtime() {
    let modalTime = document.getElementById('myModalTime');
    modalTime.style.display = 'block';
}

closeBtnTime.onclick = function () {
    let cmodalTime = document.getElementById('myModalTime');
    cmodalTime.style.display = 'none';
}


//set alarm
function setalarm() {
    let modalAlarm = document.getElementById('myModalAlarm');
    modalAlarm.style.display = 'block';
}

closeBtnAlarm.onclick = function () {
    let modalAlarm = document.getElementById('myModalAlarm');
    modalAlarm.style.display = 'none';
}

//count down timer
function stopwatch() {
    let modalStopwatch = document.getElementById('myModalStowatch');
    modalStopwatch.style.display = 'block';
}

closeBtnSW.onclick = function () {
    let modalStopwatch = document.getElementById('myModalStowatch');
    modalStopwatch.style.display = 'none';
}