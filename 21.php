<b>  21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.
<pre>
1
22
333
4444
55555 </pre></b> 
</br> </br> </br>
<?php
	$tring = null;
	for ($i = 1; $i <= 9; $i++)
	{
		for ($x = 0; $x < $i; $x++)
		{
			$tring .= $i;
		}
		echo $tring.'<br>';
		$tring = null;
		$x = 0;
	}

?>