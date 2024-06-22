<?php

$sample = [
    'test' => [
        'test-again' => [
            'a',
            'b',
            'c',
            'd'
        ]
    ]
];

print_r($sample);
echo $sample['test']['test-again'][2];

echo PHP_EOL;
$sample2 = [
    [1,2,3,4],
    [5,6,7,8],
    [11,22,33,[10,20,30]]
];
print_r($sample2);
echo $sample2[2][3][2];