<?php

$map_ = function($f, $a) use (&$map_) {
    return function() use($f, $a) { return $f($a()); };
};
$bind_ = function($a, $f) use (&$bind_) {
    return function() use($a, $f) { return $f($a())(); };
};
$pure_ = function($a) { return function() use($a) { return $a; }; };
$new = function($val) { return function() use($val) { return (object)['value' => $val]; }; };
$read = function($ref) { return function() use($ref) { return $ref->value; }; };
$modifyImpl = function($f, $ref) use (&$modifyImpl) {
    return function() use($f, $ref) { $t = $f($ref->value); $ref->value = $t->state; return $t->value; };
};
$write = function($val, $ref) use (&$write) {
    return function() use($val, $ref) { $ref->value = $val; return $val; };
};
$run = function($f) { return $f(); };
$while = function($f, $a) use (&$while) {
    return function() use($f, $a) { while ($f()) { $a(); } return null; };
};
$for = function($lo, $hi, $f) use (&$for) {
    return function() use($lo, $hi, $f) { for ($i = $lo; $i < $hi; $i++) { $f($i)(); } return null; };
};
$foreach = function($as, $f) use (&$foreach) {
    return function() use($as, $f) { foreach ($as as $a) { $f($a)(); } return null; };
};

$exports['map_'] = $map_;
$exports['bind_'] = $bind_;
$exports['pure_'] = $pure_;
$exports['new'] = $new;
$exports['read'] = $read;
$exports['modifyImpl'] = $modifyImpl;
$exports['write'] = $write;
$exports['run'] = $run;
$exports['while'] = $while;
$exports['for'] = $for;
$exports['foreach'] = $foreach;
return $exports;
