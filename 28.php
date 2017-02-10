<b>  28. Вывести таблицу умножения с помощью двух циклов for. </b> 
</br> </br> </br>
<?php

echo '<table border = "2" cellspacing = "0" cellpadding="5">';
	for( $x=1; $x <= 10; $x++ )
	{	
		echo '<td>';
			for($y=1; $y <= 10; $y++)
			{
				echo "{$x} * {$y} = ".$x * $y.'</br>';
			}
		echo '</td>';	
	}
echo '</table>';
?>