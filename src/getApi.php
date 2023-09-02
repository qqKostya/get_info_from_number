<?php
function getInfoForNumber(int $number): string
{
    $num = $_GET['num'];
    $getquery = "{$number}/math";
    $url = "http://numbersapi.com/{$getquery}";

    $res = file_get_contents($url);
    return $res;
}
