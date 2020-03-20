<?php

function longestConsec($strarr, $k) {

    $agrege;
    for($i=0;$i<=count($strarr)-$k;$i++){
        $sol='';
        for($j=0;$j<$k;$j++) {
            $sol.=$strarr[$i+$j];
        }
        $agrege[]=$sol;
    }
    usort($agrege,"sortLen");
    return $agrege[0];

}

function sortLen($x,$y)
{
    if (strlen($x) == strlen($y)) {
        return 0;
    }

    if (strlen($x) > strlen($y)) {
        return -1;
    }

    return 1;
}

function longestConsec2($strarr, $k) {
    $arr=[];$n=count($strarr);
    if($strarr==null ||  $n = 0 || $k > $n || $k <= 0 ) return '';
    foreach ($strarr as $key => $value)
        array_push($arr, implode('', array_slice($strarr, $key,$k)));
    return $arr[array_search(max(array_map('strlen',$arr)), array_map('strlen',$arr))];
}
echo(longestConsec(["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"], 1));