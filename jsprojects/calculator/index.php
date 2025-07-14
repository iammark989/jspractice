<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>calculator</title>

    <link rel='stylesheet' href='../lib/css/bootstrap.min.css'>
    <script src='../lib/js/bootstrap.bundle.min.js'></script>

    <script src='script.js'></script>
</head>
<body>
<style>
.calc-btn{
    width: 35px;
    margin: 1.5px;
}
</style>

<H1>JAVASCRIPT CALCULATOR</h1>
<br>

<input type='text' id='display' class='form-control' value='0' active='false'>
<br>

<input type='button' value='1' id='one' onclick='one()' class='btn btn-primary calc-btn'/>
<input type='button' value='2' id='two' onclick='two()' class='btn btn-primary calc-btn'/>
<input type='button' value='3' id='three' onclick='three()' class='btn btn-primary calc-btn'/>
<input type='button' value='+' id='addition' onclick='addition()' class='btn btn-primary calc-btn'/>
<br>

<input type='button' value='4' id='four' onclick='four()' class='btn btn-primary calc-btn'/>
<input type='button' value='5' id='five' onclick='five()' class='btn btn-primary calc-btn'/>
<input type='button' value='6' id='six' onclick='six()' class='btn btn-primary calc-btn'/>
<input type='button' value='-' id='addition' onclick='addition()' class='btn btn-primary calc-btn'/>
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


</body>
</html>