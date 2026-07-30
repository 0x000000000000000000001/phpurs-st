<?php

$mkSTFn1 = function($fn) use (&$mkSTFn1) {
    return function($x) use ($fn) { return $fn($x)(); };
};
$mkSTFn2 = function($fn) use (&$mkSTFn2) {
    return function($a, $b) use ($fn) { return $fn($a, $b)(); };
};
$mkSTFn3 = function($fn) use (&$mkSTFn3) {
    return function($a, $b, $c) use ($fn) { return $fn($a, $b, $c)(); };
};
$mkSTFn4 = function($fn) use (&$mkSTFn4) {
    return function($a, $b, $c, $d) use ($fn) { return $fn($a, $b, $c, $d)(); };
};
$mkSTFn5 = function($fn) use (&$mkSTFn5) {
    return function($a, $b, $c, $d, $e) use ($fn) { return $fn($a, $b, $c, $d, $e)(); };
};
$mkSTFn6 = function($fn) use (&$mkSTFn6) {
    return function($a, $b, $c, $d, $e, $f) use ($fn) { return $fn($a, $b, $c, $d, $e, $f)(); };
};
$mkSTFn7 = function($fn) use (&$mkSTFn7) {
    return function($a, $b, $c, $d, $e, $f, $g) use ($fn) { return $fn($a, $b, $c, $d, $e, $f, $g)(); };
};
$mkSTFn8 = function($fn) use (&$mkSTFn8) {
    return function($a, $b, $c, $d, $e, $f, $g, $h) use ($fn) { return $fn($a, $b, $c, $d, $e, $f, $g, $h)(); };
};
$mkSTFn9 = function($fn) use (&$mkSTFn9) {
    return function($a, $b, $c, $d, $e, $f, $g, $h, $i) use ($fn) { return $fn($a, $b, $c, $d, $e, $f, $g, $h, $i)(); };
};
$mkSTFn10 = function($fn) use (&$mkSTFn10) {
    return function($a, $b, $c, $d, $e, $f, $g, $h, $i, $j) use ($fn) { return $fn($a, $b, $c, $d, $e, $f, $g, $h, $i, $j)(); };
};

$runSTFn1 = function($fn, $a) use (&$runSTFn1) {
    return function() use ($fn, $a) { return $fn($a); };
};
$runSTFn2 = function($fn, $a, $b) use (&$runSTFn2) {
    return function() use ($fn, $a, $b) { return $fn($a, $b); };
};
$runSTFn3 = function($fn, $a, $b, $c) use (&$runSTFn3) {
    return function() use ($fn, $a, $b, $c) { return $fn($a, $b, $c); };
};
$runSTFn4 = function($fn, $a, $b, $c, $d) use (&$runSTFn4) {
    return function() use ($fn, $a, $b, $c, $d) { return $fn($a, $b, $c, $d); };
};
$runSTFn5 = function($fn, $a, $b, $c, $d, $e) use (&$runSTFn5) {
    return function() use ($fn, $a, $b, $c, $d, $e) { return $fn($a, $b, $c, $d, $e); };
};
$runSTFn6 = function($fn, $a, $b, $c, $d, $e, $f) use (&$runSTFn6) {
    return function() use ($fn, $a, $b, $c, $d, $e, $f) { return $fn($a, $b, $c, $d, $e, $f); };
};
$runSTFn7 = function($fn, $a, $b, $c, $d, $e, $f, $g) use (&$runSTFn7) {
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g) { return $fn($a, $b, $c, $d, $e, $f, $g); };
};
$runSTFn8 = function($fn, $a, $b, $c, $d, $e, $f, $g, $h) use (&$runSTFn8) {
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g, $h) { return $fn($a, $b, $c, $d, $e, $f, $g, $h); };
};
$runSTFn9 = function($fn, $a, $b, $c, $d, $e, $f, $g, $h, $i) use (&$runSTFn9) {
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g, $h, $i) { return $fn($a, $b, $c, $d, $e, $f, $g, $h, $i); };
};
$runSTFn10 = function($fn, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j) use (&$runSTFn10) {
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j) { return $fn($a, $b, $c, $d, $e, $f, $g, $h, $i, $j); };
};

$exports['mkSTFn1'] = $mkSTFn1;
$exports['mkSTFn2'] = $mkSTFn2;
$exports['mkSTFn3'] = $mkSTFn3;
$exports['mkSTFn4'] = $mkSTFn4;
$exports['mkSTFn5'] = $mkSTFn5;
$exports['mkSTFn6'] = $mkSTFn6;
$exports['mkSTFn7'] = $mkSTFn7;
$exports['mkSTFn8'] = $mkSTFn8;
$exports['mkSTFn9'] = $mkSTFn9;
$exports['mkSTFn10'] = $mkSTFn10;
$exports['runSTFn1'] = $runSTFn1;
$exports['runSTFn2'] = $runSTFn2;
$exports['runSTFn3'] = $runSTFn3;
$exports['runSTFn4'] = $runSTFn4;
$exports['runSTFn5'] = $runSTFn5;
$exports['runSTFn6'] = $runSTFn6;
$exports['runSTFn7'] = $runSTFn7;
$exports['runSTFn8'] = $runSTFn8;
$exports['runSTFn9'] = $runSTFn9;
$exports['runSTFn10'] = $runSTFn10;
return $exports;
