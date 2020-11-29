<?php

namespace mmaurice\apigate\classes;

abstract class Format
{
    public static function valide(&$field, $callback = null, $options = [])
    {
        $field = self::format($field, $callback, $options);

        return true;
    }

    protected static function format($field, $callback = null, $options = [])
    {
        if (!is_null($callback)) {
            $field = $callback($field, $options);
        }

        return $field;
    }
}
