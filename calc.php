<form action = "calc.php" method = "post"> 
	<table> 
	<tr>
		<td>Enter the first number: </td>
		<td><input type = "number" name = "num1"></td>
	</tr>
	
	<tr>
		<td>Enter the second number: </td>
		<td><input type = "number" name = "num2"></td>
	</tr>
	
	<tr>
		<td> </td>
		<td><input type = "submit" name = "calculation" value = "Calculation"></td>
	</tr>
	</table>
</form>

<?php
	include "func.php";
	if(isset($_POST['calculation'])) {
		$number1 = $_POST['num1'];
		$number2 = $_POST['num2'];
	}
	
	if(empty($number1) or empty($number2)) {
		echo "<span style = 'color: #00ff00'>Field must not be empty</span>";
	} else {
		echo "First number is: ".$number1." Second number is: ".$number2."<br>";
		$cal = new Calculation;
		$cal->add($number1, $number2);
		$cal->sub($number1, $number2);
		$cal->mul($number1, $number2);
		$cal->div($number1, $number2);
	}
?>