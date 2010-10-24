<?while($n++<541){preg_match('/^1?$|^(11+?)\1+$/',str_repeat(1,$n),$m);$m[0]||print"
$n";}