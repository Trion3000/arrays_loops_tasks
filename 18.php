<b>  18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, 
выходные дни следует вывести жирным. </b> 
</br> </br> </br>
<?php
	$i = 0;
	$arr = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
		foreach ( $arr as $key => $day)
		{
			++$i;
				if ($i > 5)
				{
					echo '<b>'.$day.'</b>'.'</br>';
				}	
				else
				{
					echo $day.'</br>';
				}
		}	


?>