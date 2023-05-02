<!DOCTYPE html>
<html>
	<head>
		<title>TGS6 FR</title>
		<link rel="stylesheet" type="text/css" href="tgs6.css">
	</head>
	<body>
		<?php
			function Hasil($num1, $num2, $operator) {
				switch($operator){
					case "-":
						$result = $num1 - $num2;
						break;
					case "*":
						$result = $num1 * $num2;
						break;
					case "/":
						$result = $num1 / $num2;
						break;
					case "+":
						$result = $num1 + $num2;
						break;
				}
				return $result;
			}
			
			if(isset($_POST['Hasil'])){
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				$operator = $_POST['operator'];
				$result = Hasil($num1, $num2, $operator);
				echo "<h2>Hasil Operator: $num1 $operator $num2 adalah $result</h2>";
			}
		?>
		<h1>KALKULATOR SEDERHANA</h1> <br>
		<h4>(By: Fera Defi)</h4>
		<form method="post">
			<input type="number" name="num1" placeholder="Masukkan Angka Pertama"><br>
			<input type="number" name="num2" placeholder="Masukkan Angka Kedua"><br>
			<select name="operator">
				<option value="+">+ : (Penjumlahan)</option>
				<option value="-">- : (Pengurangan)</option>
				<option value="*">* : (Perkalian)</option>
				<option value="/">/ : (Pembagian)</option>
			</select>
			<input type="submit" name="Hasil" value="Hasil">
		</form>
	</body>
</html>