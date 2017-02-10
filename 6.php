<b> 6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, 
а русские — в массив $ru. $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 $en = array('green', 'red','blue'); $ru = array('зеленый', 'красный', 'голубой');  </b>
</br> </br> </br>
<?php
	$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
		foreach ( $arr as $keys => $value)
		{
				$ru[] = $value;
				$en[] = $keys;
		}
			echo '<pre>';
			print_r ($ru);
			echo '</br>';
			print_r ($en);
			echo '</pre>';
?>