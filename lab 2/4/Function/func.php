<?php
function my_sin($x) {
    return sin($x);
}
function my_cos($x) {
    return cos($x);
}
function my_tan($x) {
    return tan($x);
}
function my_factorial($x) {
    if ($x <= 1) {
        return 1;
    } else {
        return $x * my_factorial($x - 1);
    }
}
function my_power($x, $y) {
    return pow($x, $y);
}
?>