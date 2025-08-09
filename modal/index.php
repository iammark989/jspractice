<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Modal</title>
    <?php include('../inc/header.php'); ?>
    <script src='../script/javascript.js'></script>
   <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
   <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>


<body>
<script>

</script>

<div class='containter main-cont-p'>

        <div class='container border main-cont-c bg-dark'>
            <div class='container a-link-h' style='padding:8px 0 0 0;'>
                <input type='button' class='btn-close btn-close-white' id='btnCloseModal' onclick='btnCloseModal()'/>
            </div>
        <h1 class='text-center' style='color:white;'>Modal</h1>
        <input type='button' id='viewtime' value='View Time' class='btn btn-primary btn-modal' onclick='viewtime()' />
        <br>
        <input type='button' id='setalarm' value='Set Alarm' class='btn btn-primary btn-modal' onclick='setalarm()' />
        <br>
        <input type='button' id='stopwatch' value='Stop Watch' class='btn btn-primary btn-modal' onclick='stopwatch()' />


         </div>



                     <?php include('viewtime.php'); ?>
                     <?php include('setalarm.php'); ?>
                     <?php include('stopwatch.php'); ?>
                 <!-- Modal Structure 
        <div class="modal fade" id="phpModal" tabindex="-1" aria-labelledby="phpModalLabel" aria-hidden="true" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="phpModalLabel">Modal Title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body" id="modalBody">
                 b.php content will be loaded here 
                asdasdsa
              </div>
            </div>
          </div>
        </div>
        -->

 </div>


 
   <script src='modalscript.js'></script>
 








</body>
</html>









