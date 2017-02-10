<b>  25. Ваше задание создать массив, наполнить это случайными значениями (функция rand), 
найти максимальное и минимальное значение и поменять их местами. </b> 
</br> </br> </br>
<?php
	$arr = array ();
		for ($i = 0; $i < 10; $i++)
		{
			$arr[] = rand (-59, 123);
		}
	echo 'Элементы массива:'.'</br>';
		foreach ($arr as $temp)
		{
			echo $temp.'</br>';
		}
	$min = min ($arr);	
	$max = max ($arr);
	echo '</br>'.'Min: '.$min.'</br>';
	echo 'Max: '.$max.'</br>';
		foreach ($arr as $key => $temp)
		{
			if ($temp == $max)
			{				
				$arr[$key] = '<b>'.$min.'</b>';
			
			}				
			elseif ($temp == $min)
			{				
				$arr[$key] = '<b>'.$max.'</b>';
	
			}
		}
	echo '</br>'.'Элементы массива после замены:'.'</br>';
		foreach ($arr as $temp)
		{
			echo $temp.'</br>';
			
		}
?>