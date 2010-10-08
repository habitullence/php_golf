<?php
$a = 99;

while ($a > 0) {
	$e = $f = 'bottle';
	if ($a > 1) {
		$c = $a - 1;
		$d = 'Take one down and pass it around';
		$e .= 's';
	}
	else {
		$c = 99;
		$d = 'Go to the store and buy some more';
	}
	if ($a != 2) $f .= 's'; 
	$g = 'of beer';
	$h = 'on the wall';
	echo "$a $e $g $h, $a $e $g.\n$d, $c $f $g $h.\n\n";
	$a --;
}