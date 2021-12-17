<?php


function debug($vars)
{
    echo "<pre>";
    var_dump($vars);
    echo '</pre>';
    exit;
}

function printData($vars)
{
    echo "<pre>";
    print_r($vars);
    echo '</pre>';
    exit;
}
