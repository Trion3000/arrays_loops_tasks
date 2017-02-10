<b>  20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.
<pre>
x
xx
xxx
xxxx
xxxxx </pre></b> 
</br> </br> </br>
<?php
	$tring = ' ';
	$number = 1;
		for ($i = 0; $i < 20; ++$i)
		{
			$tring .= 'x';
			echo $tring.'---------'.$number.'</br>';
			$number++;	
		}

?>