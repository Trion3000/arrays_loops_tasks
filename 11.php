<b> 11. Выведите столбец четных чисел в промежутке от нуля до 100. </b>
</br> </br> </br>
<?php
	$temp = 0;
		while ($temp <=100)
		{
			$temp++;
				if (($temp % 2) == 0)
				{
					echo $temp.'</br>';
				}	
		}

?>