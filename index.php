<!DOCTYPE html>
<html>
<head>
	<title>My First Calculator</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- EXtra style-->
    <link rel="stylesheet" type="text/css" href="styling/style.css">
</head>
<body background="calc.jpg">
<div id="topper">
	<h1 class="heading">Calculator</h1>
	<h2><i class="heading">Value is a perception, not a calculation!</i>
	<br>
	<br>
</div>

<div id="calc-container">
	<form name="calculator">
		<input type="text" class="form-control" name="answer" />

		<input type="button" value="DELETE" onclick="calculator.answer.value = ''" class="btn btn-danger" id="delete" />
		<input type="button" value="BACK"onclick="calculator.answer.value=calculator.answer.value.substring(0,calculator.answer.value.length-1)" class="btn btn-primary" id="back"/>


		<br/>

		<input type="button" value=" 1 " onclick="calculator.answer.value += '1'" class="btn btn-default"/>
		<input type="button" value=" 2 " onclick="calculator.answer.value += '2'" class="btn btn-default"/>
		<input type="button" value=" 3 " onclick="calculator.answer.value += '3'" class="btn btn-default"/>
		<input type="button" value=" + " onclick="calculator.answer.value += '+'" class="btn btn-default"/>

		<br/>

		<input type="button" value=" 4 " onclick="calculator.answer.value += '4'" class="btn btn-default"/>
		<input type="button" value=" 5 " onclick="calculator.answer.value += '5'" class="btn btn-default"/>
		<input type="button" value=" 6 " onclick="calculator.answer.value += '6'" class="btn btn-default"/>
		<input type="button" value=" - " onclick="calculator.answer.value += '-'" class="btn btn-default"/>

		<br/>

		<input type="button" value=" 7 " onclick="calculator.answer.value += '7'" class="btn btn-default"/>
		<input type="button" value=" 8 " onclick="calculator.answer.value += '8'" class="btn btn-default"/>
		<input type="button" value=" 9 " onclick="calculator.answer.value += '9'" class="btn btn-default"/>
		<input type="button" value=" x " onclick="calculator.answer.value += '*'" class="btn btn-default"/>

		<br/>

		<input type="button" value=" 0 " onclick="calculator.answer.value += '0'" class="btn btn-default"/>
		<input type="button" value=" . " onclick="calculator.answer.value += '.'" class="btn btn-default"/>
		<input type="button" value=" / " onclick="calculator.answer.value += '/'" class="btn btn-default"/>
		<input type="button" value=" = " onclick="calculator.answer.value= eval(calculator.answer.value)" class="btn"/>

		

	</form>
	
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


</body>
</html>