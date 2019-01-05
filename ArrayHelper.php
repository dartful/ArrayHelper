<?php

namespace Dartful\ArrayHelper;


class ArrayHelper
{
    /**
     * @param array  $array
     * @param string $key
     * @return array
     */
    public static function indexByKeyUnique(array $array, string $key): array
    {
        $indexed = [];

        foreach ($array as $item) {
            $indexed[$item[$key]] = $item;
        }

        return $indexed;
    }
}