      <!-- The Modal -->
                <div id="myModalAlarm" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content alarm-p">
                    <div style="display: inline-block; text-align: right; width: 100%"><input type='button' class='btn-close' id='closeBtnAlarm'/></div>
                    <p>Set Alarm</p>
                     <div class='container' id='clocka'> </div>
                     <div class='container' id='tester'> </div>
                    <div>
                            <input type='button' class='btn btn-secondary setalarm-btn' value='Set Alarm' onclick='setAlarm()' />
                            </div>
                            <div class='row alarm-c'>

                                <div class='col-md-3 alam-data'>
                                    <div><h1>Hour</h1></div>
                                    <div><button class='btn border' onclick='btnUpHr()'><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">  <path fill-rule="evenodd" d="M5.575 13.729C4.501 15.033 5.43 17 7.12 17h9.762c1.69 0 2.618-1.967 1.544-3.271l-4.881-5.927a2 2 0 0 0-3.088 0l-4.88 5.927Z" clip-rule="evenodd"/></svg></button></div>
                                    <div class='digits alarm-hr' id='alarmHr'>00</div>
                                    <div><button class='btn border' onclick='btnDownHr()'><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">  <path fill-rule="evenodd" d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z" clip-rule="evenodd"/></svg></button></div>
                                </div>

                                <div class="col-md-1 colon"><div><div><div></div></div></div></div>

                                 <div class='col-md-3 alam-data'>
                                 <div><h1>Minute</h1></div>
                                    <div><button class='btn border' onclick='btnUpMin()'><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">  <path fill-rule="evenodd" d="M5.575 13.729C4.501 15.033 5.43 17 7.12 17h9.762c1.69 0 2.618-1.967 1.544-3.271l-4.881-5.927a2 2 0 0 0-3.088 0l-4.88 5.927Z" clip-rule="evenodd"/></svg></button></div>
                                   <div class='digits alarm-min' id='alarmMin'>00</div>
                                   <div><button class='btn border'onclick='btnDownMin()'><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">  <path fill-rule="evenodd" d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z" clip-rule="evenodd"/></svg></button></div>
                                </div>

                                <div class="col-md-1"><div><div><div></div></div></div></div>

                                 <div class='col-md-3 alam-data'>
                                 <div><h1>Second</h1></div>
                                    <div><button class='btn border' onclick='btnUpSec()'><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">  <path fill-rule="evenodd" d="M5.575 13.729C4.501 15.033 5.43 17 7.12 17h9.762c1.69 0 2.618-1.967 1.544-3.271l-4.881-5.927a2 2 0 0 0-3.088 0l-4.88 5.927Z" clip-rule="evenodd"/></svg></button></div>
                                    <div class='digits alarm-sec'id='alarmSec'>00</div>
                                   <div><button class='btn border' onclick='btnDownSec()'><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">  <path fill-rule="evenodd" d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z" clip-rule="evenodd"/></svg></button></div>
                                </div>

                            </div>
                           
                  </div>

                </div>
                <script>
                

                let isSet = false;
                let isRunning = false;
                let date = new Date();
                let getHours = date.getHours();
                
             
                let getDay = date.getDay();
                let run = "";




                
                let hours = 0;
                let minutes = 0;
                let seconds = 0;
                const displayHr = document.getElementById('alarmHr');
                const displayMin = document.getElementById('alarmMin');
                const displaySec = document.getElementById('alarmSec');
                let currentValueHr = parseInt(document.getElementById('alarmHr').innerHTML);

                //hour
                function btnUpHr(){
                    if (hours <= 22){
                        hours = hours + 1;
                        hoursV = String(hours).padStart(2,0);
                        displayHr.innerHTML = hoursV;
                        
                    }else if(hours == 23){
                        hours = hours - 23;
                        hoursV = String(hours).padStart(2,0);
                        displayHr.innerHTML = hoursV;
                        
                    }
                }
                function btnDownHr(){
                    if (hours == 0){
                        hours = hours + 23;
                        hoursV = String(hours).padStart(2,0);
                        displayHr.innerHTML = hoursV;
                        
                    }else if(hours >= 1 | hours <= 23){
                        hours = hours - 1;
                        hoursV = String(hours).padStart(2,0);
                        displayHr.innerHTML = hoursV;
                        
                    }
                }
                
                //minute
                 function btnUpMin(){
                    if (minutes <= 58){
                        minutes = minutes + 1;
                        minutesV = String(minutes).padStart(2,0);
                        displayMin.innerHTML = minutesV;
                        
                    }else if(minutes == 59){
                        minutes = minutes - 59;
                        minutesV = String(minutes).padStart(2,0);
                        displayMin.innerHTML = minutesV;
                        
                    }
                }
                function btnDownMin(){
                    if (minutes == 0){
                        minutes = minutes + 59;
                        minutesV = String(minutes).padStart(2,0);
                        displayMin.innerHTML = minutesV;
                        
                    }else if(minutes >= 1 | minutes <= 59){
                        minutes = minutes - 1;
                        minutesV = String(minutes).padStart(2,0);
                        displayMin.innerHTML = minutesV;
                        
                    }
                }
                //seconds
                 function btnUpSec(){
                    if (seconds <= 58){
                        seconds = seconds + 1;
                        secondsV = String(seconds).padStart(2,0);
                        displaySec.innerHTML = secondsV;
                        
                    }else if(seconds == 59){
                        seconds = seconds - 59;
                        secondsV = String(seconds).padStart(2,0);
                        displaySec.innerHTML = secondsV;
                        
                    }
                }
                function btnDownSec(){
                    if (seconds == 0){
                        seconds = seconds + 59;
                        secondsV = String(seconds).padStart(2,0);
                        displaySec.innerHTML = secondsV;
                        
                    }else if(seconds >= 1 | seconds <= 59){
                        seconds = seconds - 1;
                        secondsV = String(seconds).padStart(2,0);
                        displaySec.innerHTML = secondsV;
                        
                    }
                }

               
                const testera = document.getElementById('tester');
               function setAlarm(){
                    if(!isRunning){
                      //  alert("alam set!");
                        run = setInterval(checking,1000);
                        isRunning = true;

                    }else if(isRunning){
                        alert("already running");
                      
                        }

                }

                

                function checking(){
                        let ndate = new Date();
                       let getSeconds = ndate.getSeconds();
                       let getMinutes = ndate.getMinutes();
                       let dis = `${getMinutes}:${getSeconds}`;
                        testera.innerHTML = dis;
                        if(minutes == getMinutes){
                            alert("alarm!");
                            clearInterval(run);
                        }
                }
                
                 

                function updateclocka(){
                        const months = ['January','February','March','April','May','June','July','August','September','October','November','December']
                        const weekDays = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday']
                        let dateNow = new Date();
                        let month = months[dateNow.getMonth()];
                        let weekday = weekDays[dateNow.getDay()];
                        let time = dateNow.getTime();
                        let hour = String(dateNow.getHours()).padStart(2,'0');
                        let minute = String(dateNow.getMinutes()).padStart(2,'0');
                        let second = String(dateNow.getSeconds()).padStart(2,'0');
                        let clock = `${hour}:${minute}:${second}`;
                        document.getElementById('clocka').innerHTML = clock;
                 }
                 
                 setInterval(updateclocka,1000);

                </script>