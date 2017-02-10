<b>  17. Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным.
 Текущий месяц должен храниться в переменной $month. </b> 
</br> </br> </br>
<?php
	$month = 1;
	$arr = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
		foreach ($arr as $key => $m)
		{
				if ( $month == $key )
				{
				echo "<b>".$m."</b>"."</br>";
				}	
				else
				{
					echo $m.'</br>';
				}		
		}	


?>