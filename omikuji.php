//確認先のアドレスは、
<?php
$num = rand(0, 2); //0,1,2いずれかの数字が出力　jsだとmath.random, math.floor
if($num == 0){
    echo "大吉";
}else if($num ==1){
    echo"吉";
}else{
    echo "凶";
}
?>