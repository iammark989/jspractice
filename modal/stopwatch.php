      <!-- The Modal -->
                <div id="myModalStowatch" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content modal-p">
                    <div style="display: inline-block; text-align: right; width: 100%"><input type='button' class='btn-close' id='closeBtnSW'/></div>
                        <div class='sw-container modal-c' id='swcontainer'>00:00:00:00</div>
                       
                        <input type='button' class='btn btn-secondary sw-btn' value='Start' onclick='swstart()'/>
                        <input type='button' class='btn btn-secondary sw-btn' value='Pause' onclick='swpause()'/>
                        <input type='button' class='btn btn-secondary sw-btn' value='Stop' onclick='swstop()'/>
                    </div>

                  </div>

                   <script>
                const display = document.getElementById('swcontainer');
                
                let startTime = 0;
                let elapsedTime = 0;
                let timer = "";
                //let isRunning= false;              

                function swstart(){
                    if(!isRunning){
                        startTime = Date.now() - elapsedTime;
                        timer = setInterval(update,10);
                        isRunning = true;
                    }

                }

                function swpause(){
                    if(isRunning){
                        clearInterval(timer);
                        elapsedTime = Date.now() - startTime;  
                        isRunning = false;
                    }
                }

                function swstop() {
                    clearInterval(timer);
                    startTime = 0;
                    elapsedTime = 0;
                    timer = "";
                    isRunning=false;
                    display.innerHTML = "00:00:00:00";
                }
                function update(){

                    const currentTime = Date.now();
                    elapsedTime = currentTime - startTime;
                    let hours = Math.floor(elapsedTime / (1000 * 60 * 60));
                    let minutes = Math.floor(elapsedTime / (1000 * 60) % 60);
                    let seconds = Math.floor(elapsedTime / 1000 % 60);
                    let milliseconds = Math.floor(elapsedTime % 1000 / 10);

                    hours = String(hours).padStart(2,0);
                    minutes = String(minutes).padStart(2,0);
                    seconds = String(seconds).padStart(2,0);
                    milliseconds = String(milliseconds).padStart(2,0);

                    display.innerHTML = `${hours}:${minutes}:${seconds}:${milliseconds}`;
                }
          
                </script>