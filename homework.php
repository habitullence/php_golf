<?php
$a = 99;

while ($a > 0) {
	if ($a > 1) {
		$c = $a - 1;
		$d = 'Take one down and pass it around';
	}
	else {
		$c = 99;
		$d = 'Go to the store and buy some more';
	}
	$e = $f = 'bottle';
	$e .= ($a > 1) ? 's' : '';
	$f .= ($c > 1) ? 's' : '';
	$g = 'of beer';
	$h = 'on the wall';
	
	echo "$a $e $g $h, $a $e $g.\n$d, $c $f $g $h.\n\n";
	$a --;
}