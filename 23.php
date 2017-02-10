<b> 23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. 
Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6. 
По желанию можете сделать проверку на корректность введения данных пользователем. </b> 
</br> </br> </br>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8"> 
	</head>
<body>
<form action="" method="post">
<input type="textbox" name="input" required> </br> 
<input type="submit" name="submit"> </br> </br> 
</form>
<?php
// Посмотрел записи вебинаров и ютуб, попробовал основные моменты запомнить и сюда перенести. 
	$output = 0;
		if ( $_POST['submit'] )
		{
			$temp = $_POST['input'];
			$arr = str_split ($temp);
				foreach ($arr as $value)
				{
					$output += $value;
				}	
			
		}
?>
<?php
	if ($output)
	{
		echo $output.'</br>';
		
	}
?>

</body>
</html>