                     <!-- The Modal -->
                <div id="myModalTime" class="modal">
                
                  <!-- Modal content -->
                  <div class="modal-content">
                    <div style="display: inline-block; text-align: right; width: 100%"><input type='button' class='btn-close' id='closeBtnTime'/></div>
                        <div class='container clock-container' id='clock'> </div>
                       
                    

                    <!--<input type='button' value='click' onclick='aaaa()' /> -->
                  </div>

                </div>
                 <script>

                 function updateclock(){
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
                        document.getElementById('clock').innerHTML = clock;
                 }
                 
                 setInterval(updateclock,1000);
                       


                 </script>