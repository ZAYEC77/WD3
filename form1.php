
<? if(
	isset($_POST['a']) && 
	isset($_POST['b']) && 
	isset($_POST['c']) && 
	($_POST['c'] != '') && 
	($_POST['b'] != '') && 
	($_POST['a'] != '')): ?>
<h2>Sorted numbers:</h2>
<?
	$form = $_POST;
	arsort($form);
	foreach ($form as $key => $value) {
		echo $value."  ";
	}
 ?>
<? else: ?>
<h2>Error, please, enter all numbers</h2>
<? endif; ?>