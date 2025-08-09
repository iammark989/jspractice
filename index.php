<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>JAVASCRIPT PROJECT</title>
    <link rel='stylesheet' href='lib/css/bootstrap.min.css'>
    <script src='lib/js/bootstrap.bundle.min.js'></script>
    <link rel='stylesheet' href='lib/custom/cstyle.css'>
    <script src='script/jquery37.min.js'></script>
    <script src='script/javascript.js'></script>
    
</head>

<body class='main-body'>

<div class='container-fluid main-cont-p'>

        <div class='container main-cont-c'>
            <span>Javascript Project</span><br>
           
            <input type='button' class='btn btn-secondary btn-mainindex' value='Calculator' onclick='gotocalculator()'/>
            <br>
            <input type='button' class='btn btn-secondary btn-mainindex' value='Modal' onclick='gotomodal()'/>
            <br>
            <input type='button' class='btn btn-secondary btn-mainindex' value='Change Background Color' id='btnbgchanger' onclick='changeBgColor()'>
        </div>
  
</div>
     
<div class='modal' id='bgcolor'>

    <div class='modal-content'>
        <div style="display: inline-block; text-align: right; width: 100%"><input type='button' class='btn-close' id='cBtnClose'/></div>
            <div class='row'>
                <div class='col-sm-4' style='background-color:red;'><input type='range' min='0' max='255' id='redslider' /><p>value:<span id='redvalue'></span></p></div>
                 <div class='col-sm-4' style='background-color:green;'><input type='range' min='0' max='255' /><p id='greenvalue'></p></div>
                  <div class='col-sm-4' style='background-color:blue;'><input type='range' min='0' max='255' /><p id='bluevalue'></p></div>
            <div>
    </div>


</div>

</body>
</html>