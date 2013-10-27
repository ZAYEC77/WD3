<?php
const A = 3.3333;
const F = 1;
const R = 2.22;
const Q = 6.33;
function y($x) 
{ 
	if ($x < 1)
		return $x*$x/(sqrt(F-$x*$x));
	elseif ($x <= 2.5) 
		return R * (Q - sin(A*$x));
	else 
		return cos(A*$x) + F;
} 
	?>
	<h2>Function:</h2>
	<style type="text/css">
	table {
		border-spacing: 30px 20px;
   		border-collapse: separate;
	}
	</style>
	<? 
		$h = 0.25;
		$x = -1;
		$xk = 3.5;
	?>
	<table>
		<tr>
			<td>X</td>
			<td>Y</td>
		</tr>
	<?php while ($x + $h/2 < $xk ): ?> 
			<tr>
				<td>
					<? echo number_format($x, 2, ',', ' '); ?>
				</td>
				<td>
					<? echo number_format(y($x), 2, ',', ' '); ?>
				</td>
			</tr>
			<?php 
				$x += $h; 
			?>
	<?php endwhile; ?>
	</table>