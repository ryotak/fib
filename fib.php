<?php

// 第0～21項
$param = [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 4181, 6765, 10946]; 

// 関数の戻り値が正しいか確かめる
foreach ($param as $index => $value) {
    if (fib($index) === $value) {
        echo $index . ' ' . $value . ' OK' . PHP_EOL;
    } else {
        echo $index . ' ' . $value . ' NG' . PHP_EOL;
    }
}

/**
 * フィボナッチ数列を再起処理で求める
 * 
 * @param int $input
 * @return int
 */
function fib (int $input) {
    if ($input < 2) {
        return $input;
    }
    return fib($input - 2) + fib($input - 1);
}