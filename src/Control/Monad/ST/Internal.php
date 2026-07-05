<?php
if (!function_exists('phpurs_uncurry2')) {
function phpurs_uncurry2($fn) {
    return function($a, $b = null) use ($fn) {
        if (func_num_args() < 2) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry2($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b);
    };
}
function phpurs_uncurry3($fn) {
    return function($a, $b = null, $c = null) use ($fn) {
        if (func_num_args() < 3) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry3($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c);
    };
}
function phpurs_uncurry4($fn) {
    return function($a, $b = null, $c = null, $d = null) use ($fn) {
        if (func_num_args() < 4) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry4($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d);
    };
}
function phpurs_uncurry5($fn) {
    return function($a, $b = null, $c = null, $d = null, $e = null) use ($fn) {
        if (func_num_args() < 5) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry5($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d)($e);
    };
}
}



$Control_Monad_ST_Internal_map_ = phpurs_uncurry2(function($f) { return function($a) use(&$f) { return function() use(&$f, &$a) { return $f($a()); }; }; });
$Control_Monad_ST_Internal_bind_ = phpurs_uncurry2(function($a) { return function($f) use(&$a) { return function() use(&$a, &$f) { return $f($a())(); }; }; });
$Control_Monad_ST_Internal_pure_ = function($a) { return function() use(&$a) { return $a; }; };
$Control_Monad_ST_Internal_new = function($val) { return function() use(&$val) { return (object)['value' => $val]; }; };
$Control_Monad_ST_Internal_read = function($ref) { return function() use(&$ref) { return $ref->value; }; };
$Control_Monad_ST_Internal_modifyImpl = phpurs_uncurry2(function($f) { return function($ref) use(&$f) { return function() use(&$f, &$ref) { $t = $f($ref->value); $ref->value = $t->state; return $t->value; }; }; });
$Control_Monad_ST_Internal_write = phpurs_uncurry2(function($val) { return function($ref) use(&$val) { return function() use(&$val, &$ref) { $ref->value = $val; return $val; }; }; });
$Control_Monad_ST_Internal_run = function($f) { return $f(); };
$Control_Monad_ST_Internal_while = phpurs_uncurry2(function($f) { return function($a) use(&$f) { return function() use(&$f, &$a) { while ($f()) { $a(); } return null; }; }; });
$Control_Monad_ST_Internal_for = phpurs_uncurry3(function($lo) { return function($hi) use(&$lo) { return function($f) use(&$lo, &$hi) { return function() use(&$lo, &$hi, &$f) { for ($i = $lo; $i < $hi; $i++) { $f($i)(); } return null; }; }; }; });
$Control_Monad_ST_Internal_foreach = phpurs_uncurry2(function($as) { return function($f) use(&$as) { return function() use(&$as, &$f) { foreach ($as as $a) { $f($a)(); } return null; }; }; });