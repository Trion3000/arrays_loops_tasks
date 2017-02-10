<b>  19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, 
а текущий день выведите курсивом. Текущий день должен храниться в переменной $day. </b> 
</br> </br> </br>
<?php
$day = 5;
	$arr = [ 1 => 'Mon', 2 => 'Tue', 3 => 'Wed', 4 => 'Thu', 5 => 'Fri', 6 => 'Sat', 7 => 'Sun'];
		foreach ( $arr as $day_number => $day_name)
		{
			
				if ($day == $day_number)
				{
					echo '<i>'.$day_name.'</i>'.'</br>';
				}	
				else
				{
					echo $day_name.'</br>';
				}
		}	




?>