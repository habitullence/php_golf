<?
while($b<99){
    $p=$b++?es:e;
    $o="$b bottl$p of beer";
    $w="$o on the wall";
    $s="
Take one down and pass it around, $w.

$w, $o.$s";
}
echo substr("$s
Go to the store and buy some more, $w.",66);