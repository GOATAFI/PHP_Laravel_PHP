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