<!DOCTYPE html>
<head>
<title> 
 </title>
</head>
<?php
$FirstNumber = $_POST['FirstNumber'];
$SecondNumber = $_POST['SecondNumber'];
$operator = $_POST['operator'];
$CalculatorResult = '';
if (is_numeric($FirstNumber) && is_numeric($SecondNumber)) {
switch ($operator) {
case "+":
$CalculatorResult = $FirstNumber + $SecondNumber;
break;
case "-":
 $CalculatorResult = $FirstNumber - $SecondNumber;
break;
case "*":
$CalculatorResult = $FirstNumber * $SecondNumber;
break;
case "/":
$CalculatorResult = $FirstNumber / $SecondNumber;
}
}
?>
 
<body>
<div id="page-wrap">
<h1>Simple Calculator</h1>
<form action="" method="post" id="quiz-form">
<p>
<input type="number" name="FirstNumber" id="FirstNumber" required="required" value="<?php echo $FirstNumber; ?>" />
</p>
<p>
<input type="number" name="SecondNumber" id="SecondNumber" required="required" value="<?php echo $SecondNumber; ?>" />
</p>
<p>
<input readonly="readonly" name="CalculatorResult" value="<?php echo $CalculatorResult; ?>"> 
</p>
<input type="submit" name="operator" value="+" />
<input type="submit" name="operator" value="-" />
<input type="submit" name="operator" value="*" />
<input type="submit" name="operator" value="/" />
</form>
</div>
</body>
</html>