<html>
 <head><title>Task#02</title></head>
 <body>
	<?php
		$num;
		$sum;
		for($i=2; $i<10001; $i++):
			$num = $i;
			$sum=0;
			while($num):
				$sum += ($num%10)*($num%10)*($num%10)*($num%10);
				$num /= 10;
			endwhile;
			if($i!=1634 && $sum==$i):
				echo $i . "<br />";
			endif;
		endfor;
	?>
 </body>
</html>