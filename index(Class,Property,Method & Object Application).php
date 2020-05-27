<?php 
	include "inc/header.php";
	include "function.php";
?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
	<table>
		<tr>
			<td>Enter the First Number : </td>
			<td><input type="number" name="num1"/></td>
		</tr>
		
		<tr>
			<td>Enter the Second Number : </td>
			<td><input type="number" name="num2"/></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="calculation" value="Calculate"/></td>
		</tr>
	</table>
</form>

<?php 

if(isset($_POST['calculation'])){
	$numone = $_POST['num1'];
	$numtwo = $_POST['num2'];

	if(empty($numone) or empty($numtwo)){
		echo "<br/><span style='color:red'>Please Enter a Value in the Empty Field !</span><br/>";
	} else {
	echo "<br/>First Number is <b>".$numone."</b> and "."Second Number is <b>".$numtwo."</b><br/><br/>";
		$value = new Calculation;
		
		$value->sum($numone, $numtwo);
		$value->sub($numone, $numtwo);
		$value->mul($numone, $numtwo);
		$value->div($numone, $numtwo);
	}
}
?>










<?php include "inc/footer.php"; ?>