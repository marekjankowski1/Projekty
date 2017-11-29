<?php


function is_year_leap($year = null) {
    
    if (isset($year)) {
        $leap = date('L', mktime(0, 0, 0, 1, 1, $year));
        echo $year . ' ' . ($leap ? 'is' : 'is not') . ' a leap year.';
        return $leap ? true : false;
    } else {
        return false;
    }
}