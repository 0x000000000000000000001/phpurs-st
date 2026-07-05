<?php

$Control_Monad_ST_Internal_map_ = function($f, $a = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Internal_map_;
            return $Control_Monad_ST_Internal_map_(...array_merge($__args, $more));
        };
    }
    return function() use(&$f, &$a) { return $f($a()); };
};
$Control_Monad_ST_Internal_bind_ = function($a, $f = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Internal_bind_;
            return $Control_Monad_ST_Internal_bind_(...array_merge($__args, $more));
        };
    }
    return function() use(&$a, &$f) { return $f($a())(); };
};
$Control_Monad_ST_Internal_pure_ = function($a) { return function() use(&$a) { return $a; }; };
$Control_Monad_ST_Internal_new = function($val) { return function() use(&$val) { return (object)['value' => $val]; }; };
$Control_Monad_ST_Internal_read = function($ref) { return function() use(&$ref) { return $ref->value; }; };
$Control_Monad_ST_Internal_modifyImpl = function($f, $ref = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Internal_modifyImpl;
            return $Control_Monad_ST_Internal_modifyImpl(...array_merge($__args, $more));
        };
    }
    return function() use(&$f, &$ref) { $t = $f($ref->value); $ref->value = $t->state; return $t->value; };
};
$Control_Monad_ST_Internal_write = function($val, $ref = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Internal_write;
            return $Control_Monad_ST_Internal_write(...array_merge($__args, $more));
        };
    }
    return function() use(&$val, &$ref) { $ref->value = $val; return $val; };
};
$Control_Monad_ST_Internal_run = function($f) { return $f(); };
$Control_Monad_ST_Internal_while = function($f, $a = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Internal_while;
            return $Control_Monad_ST_Internal_while(...array_merge($__args, $more));
        };
    }
    return function() use(&$f, &$a) { while ($f()) { $a(); } return null; };
};
$Control_Monad_ST_Internal_for = function($lo, $hi = null, $f = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Internal_for;
            return $Control_Monad_ST_Internal_for(...array_merge($__args, $more));
        };
    }
    return function() use(&$lo, &$hi, &$f) { for ($i = $lo; $i < $hi; $i++) { $f($i)(); } return null; };
};
$Control_Monad_ST_Internal_foreach = function($as, $f = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Internal_foreach;
            return $Control_Monad_ST_Internal_foreach(...array_merge($__args, $more));
        };
    }
    return function() use(&$as, &$f) { foreach ($as as $a) { $f($a)(); } return null; };
};