<b>  22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
<pre>
xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx </pre></b> 
</br> </br> </br>
<?php
	$tring = null;
	$number = 1;
		for ($i = 0; $i < 5; ++$i)
		{
			$tring .= 'xx';
			echo $tring.'---------'.$number.'</br>';
			$number++;	
		}

?>