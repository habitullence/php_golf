<?php
$a = array_reverse(range(1, 99));
foreach ($a as $b) {
	if ($b > 1) {
		$c = $b - 1;
		$d = 'Take one down and pass it around';
	}
	else {
		$c = 99;
		$d = 'Go to the store and buy some more';
	}
	$e = $f = 'bottle';
	$e .= ($b > 1) ? 's' : '';
	$f .= ($c > 1) ? 's' : '';
	$g = 'of beer';
	$h = 'on the wall';
	
	echo "$b $e $g $h, $b $e $g.\n$d, $c $f $g $h.\n\n";
}