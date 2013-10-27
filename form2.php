<?php function y($x) { return $x * exp(2*$x); } ?>
<?php function errorMessage($value='') { echo "<h2>" . $value . "</h2>"; exit;} ?>

<?php 
	if (isset($_POST['a']) && 
		isset($_POST['b']) && 
		isset($_POST['n']) && 
		($_POST['a'] != '') && 
		($_POST['b'] != '') && 
		($_POST['n'] != '')): 
	?>
	<?php 
		if ($_POST['a'] >= $_POST['b']) {
			errorMessage("a must be less than b");
		}
		if ($_POST['n'] <= 0) {
			errorMessage("N must be greater than 0");
		}
	?>
	<h2>Function(y = xe^2x):</h2>
	<style type="text/css">
	table {
		border-spacing: 30px 20px;
   		border-collapse: separate;
	}
	</style>
	<? 
		$a = $_POST['a'];
		$b = $_POST['b'];
		$n = $_POST['n'];
		$h = ($b-$a) / $n;
		$x = $a;
		$sx = 0;
	?>
	<table>
		<tr>
			<td>X</td>
			<td>Y</td>
		</tr>
	<?php while ($x + $h/2 < $b ): ?> 
			<tr>
				<td>
					<? echo number_format($x, 2, ',', ' '); ?>
				</td>
				<td>
					<? echo number_format(y($x), 2, ',', ' '); ?>
				</td>
			</tr>
			<?php 
				$sx += $x*$x;
				$x += $h; 
			?>
	<?php endwhile; ?>
	</table>
	<h2>sum of squares of X <? echo $sx;?></h2>
<? else: ?>

	<h2>Error, pleas, enter all numbers</h2>

<? endif; ?>