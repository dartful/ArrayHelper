<?php

namespace Dartful\ArrayHelper;


class ArrayHelper
{
    public static function indexByKeyUnique(array $array, string $key): array
    {
        $indexed = [];

        foreach ($array as $item) {
            $indexed[$item[$key]] = $item;
        }

        return $indexed;
    }
}