<b> 4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, 
с помощью второго — столбец элементов.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');  </b>
</br> </br> </br>
<?php
	$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
		foreach ( $arr as $keys => $value)
		{
			echo "$keys </br>";
		}	
			echo '</br>';
		foreach ( $arr as $keys => $value)
		{
			echo "$value </br>";
		}	

?>