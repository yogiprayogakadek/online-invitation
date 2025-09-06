<?php

function decodeHtmlEntities($str)
{
    return str_replace('&quot;', '"', $str);
}

function escapeForHtmlJson($string)
{
    $data = str_replace('"', '&quot;', $string);
    $new = str_replace("/", '\/', $data);

    return $new;
}
