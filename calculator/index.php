<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Calculator</title>
    <?php include('../inc/header.php'); ?>
    <script src='calcuscript.js'></script>
</head>
<body>
<style>
.body {
    height: 100%;
    margin:0;
}
.calc-btn{
    width: 55px;
    margin: 2.5px;

}
.calc-container{
    width: 300px;
}
.buttons{
  text-align:center;
}
</style>

<div class='container-fluid main-cont-p '>

    <div class='container calc-container bg-dark'>
            <div class='container a-link-h' style='padding:8px 0 0 0;'>
            <a href='../' class='a-link'><span class='btn-x'>x</span></a>
            </div>
            <H1 class='text-center' style='color:white;'>JAVASCRIPT CALCULATOR</h1>
            <br>

            <input type='text' id='display' class='form-control' value='0' style="text-align:right;font-size:25px;" disabled>
            <br>
            <div class='buttons'>
            <input type='button' value='1' id='one' onclick='one()' class='btn btn-primary calc-btn'/>
            <input type='button' value='2' id='two' onclick='two()' class='btn btn-primary calc-btn'/>
            <input type='button' value='3' id='three' onclick='three()' class='btn btn-primary calc-btn'/>
            <input type='button' value='+' id='addition' onclick='addition()' class='btn btn-primary calc-btn'/>
            <br>

            <input type='button' value='4' id='four' onclick='four()' class='btn btn-primary calc-btn'/>
            <input type='button' value='5' id='five' onclick='five()' class='btn btn-primary calc-btn'/>
            <input type='button' value='6' id='six' onclick='six()' class='btn btn-primary calc-btn'/>
            <input type='button' value='-' id='subtraction' onclick='subtraction()' class='btn btn-primary calc-btn'/>
            <br>

            <input type='button' value='7' id='seven' onclick='seven()' class='btn btn-primary calc-btn'/>
            <input type='button' value='8' id='eight' onclick='eight()' class='btn btn-primary calc-btn'/>
            <input type='button' value='9' id='nine' onclick='nine()' class='btn btn-primary calc-btn'/>
            <input type='button' value='*' id='multiply' onclick='multiply()' class='btn btn-primary calc-btn'/>
            <br>

            <input type='button' value='0' id='zero' onclick='zero()' class='btn btn-primary calc-btn'/>
            <input type='button' value='.' id='point' onclick='point()' class='btn btn-primary calc-btn'/>
            <input type='button' value='=' id='calculate' onclick='calculate()' class='btn btn-primary calc-btn'/>
            <input type='button' value='/' id='divide' onclick='divide()' class='btn btn-primary calc-btn'/>
            <br>
            <input type='button' value='clear' id='reset' onclick='reset()' class='btn btn-primary' style='margin:2.5px;width:100%' />
            </div>
    </div>
</div>
</body>
</html>