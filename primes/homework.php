<?
while($n++<541){
    for($x=0,$t=2;$t<=541/2;$t++) {
        if($n%$t==0)$x++;
    }
    if($x<2)echo"$x";
}
// Python nested for statement
// 
// r=range(2,99)
// [x for x in r if sum(x%d<1 for d in r)<2]