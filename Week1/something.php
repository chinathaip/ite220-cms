<?php

function showCopyright($year) {
    $current = date("Y");
    return $year != date("Y") ? "$year-$current" : $current;
}
