<?php
function compareTriplets(array $a, array $b){
	if(count($a) !== count($b)){
    	echo "wrong input";
        return;
    }
	$index = 0;
    return array_reduce($a, function($score, $item) use($b, &$index){
    	$score[0] += (int)($item > $b[$index]);
    	$score[1] += (int)($item < $b[$index]);
    	$index++;
    	return $score;
    });
}

print_r(compareTriplets([1, 2, 3], [3, 2, 1]));
print_r(compareTriplets([1, 2, 3, 4], [3, 2, 1, 1]));
print_r(compareTriplets([17, 28, 30], [99, 16, 8]));