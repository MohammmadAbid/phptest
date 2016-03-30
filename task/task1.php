<html>
 <head><title>Task#01</title></head>
 	<style type="text/css">
		.eqmod5{
			background-color: red;
		}
		.neqmod5{
			background-color: green;
		}
		table td{
			text-align: center;
		}
	</style>
 <body>
	<table border="1">
		<?php
		    
			$sum1=0;
			$sum2=0;
			$sum3;
			
			for($i=1; $i<101; $i++):
				$sum1 += $i*$i;
				$sum2 += $i;
				$sum3 = $sum2*$sum2;
				if(($sum3-$sum1)%5==0):?>
					<tr><td class="eqmod5"> <?php echo $sum3-$sum1; ?> </td></td><?php
				else:?>
					<tr><td class="neqmod5"> <?php echo $sum3-$sum1; ?> </td></td><?php
				endif;
			endfor;
		?>
	</table>
 </body>
</html>