<b>  24. Вам нужно разработать программу, которая считала бы количество вхождений 
какой-нибуть выбранной вами цифры в выбранном вами числе. 
Например: цифра 5 в числе 442158755745 встречается 4 раза. </b> 
</br> </br> </br>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8"> 
	</head>
<body>
<form action="" method="post">
Введите ваше число:</br> 
<input type="textbox" name="input" required> </br> </br>
Введите число для поиска:</br> 
<input type="textbox" name="compare_to" required> </br> 
<input type="submit" name="submit"> </br> </br> 
</form>
<?php
	$output = 0;
	$counter = 0;
		if ( $_POST['submit'] ) //Почему вылетает нотис на этой строке до первого ввода? Notice: Undefined index: submit in C:\xampp\htdocs\24.php on line 21
		{
			$temp = $_POST['input'];
			$c = $_POST ['compare_to'];
			$arr = str_split ($temp);
				foreach ($arr as $value)
				{
					if ( $c == $value)
					$counter++;
				}	
			
		}
?>
<?php
	if ($counter)
	{
		echo $counter.'</br>';
		
	}
?>

</body>
</html>