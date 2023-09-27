<?php

/**
1. Declare two arrays of numbers x,y
    and declare x_count, y_count, x_sum, y_sum, x_avg, y_avg, a, sq_a, sq_b
2. Enter x_count value
3. Enter x values
4. Calculate x_sum
5. Calculate x_avg by dividing x_sum by x_count
6. Enter y_count value
7. Enter y values
8. Calculate y_sum
9. Calculate y_avg by dividing y_sum by y_count
10. Calculate (xi - x_avg) * (yi - y_avg) and store into a
11. Calculate (xi - x_avg)^2 and store into sq_a
12. Calculate (yi - y_avg)^2 and store into sq_b
13. Calculate a / sqr(sq_a*sq_b)
 */

/**
 * @var array $x
 * @var array $y
 */
function correlation(array $x, array $y): float
{
    $x_count = count($x);
    $y_count = count($y);

    $x_sum = 0;
    foreach ($x as $value) {
        $x_sum += $value;
    }

    $x_avg = $x_sum / $x_count;

    $y_sum = 0;
    foreach ($y as $value) {
        $y_sum += $value;
    }

    $y_avg = $y_sum / $y_count;

    $a = 0;
    $sq_a = 0;
    $sq_b = 0;
    for ($i = 0; $i < $x_count; $i++) {
        $a += ($x[$i] - $x_avg) * ($y[$i] - $y_avg);
        $sq_a += pow($x[$i] - $x_avg, 2);
        $sq_b += pow($y[$i] - $y_avg, 2);
    }

    return $a / sqrt($sq_a * $sq_b);
}

$x = [
    9.8,
    3.8,
    6.0,
    0.9,
    5.4,
    1.4,
    16.2,
    19.5,
    2.1,
    0.94,
    43.80,
    3.9,
    1.7,
];

$y = [
    7.6,
    1.7,
    2.4,
    0.49,
    4.7,
    1.4,
    12.20,
    10.8,
    3.27,
    2.16,
    28.3,
    2.0,
    1.41,
];

echo correlation($x, $y);
