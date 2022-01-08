<?php
function compareTriplets(array $a, array $b){
    if(count($a) !== count($b)){
        echo "wrong input";
        return;
    }
    $scoreA = $scoreB = 0;

    array_walk($a, function($item, $index) use ($b, &$scoreA, &$scoreB){
        $scoreA += (int)($item > $b[$index]);
        $scoreB += (int)($item < $b[$index]);
    });
    print_r([$scoreA, $scoreB]);
}

print_r(compareTriplets([1, 2, 3], [3, 2, 1]));
print_r(compareTriplets([1, 2, 3, 4], [3, 2, 1, 1]));
print_r(compareTriplets([17, 28, 30], [99, 16, 8]));