<?php

function includeIfExists($file)
{
    if (file_exists($file)) {
        $return = include $file;
        return $return;
    }
}
