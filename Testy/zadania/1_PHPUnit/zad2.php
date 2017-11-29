<?php

/**
 * Function change number to equivalent string format
 * @param int $number
 * @return boolean
 */
function numToTxt($number) {
    
    if (!is_int($number) || $number < 1 || $number > 999) {
        echo "Insert number from 1 to 999";
        return false;
    }
    
    $lengthNum = strlen(strval($number));
    
    if ($lengthNum == 3) {
        $hundreds = substr($number, 0, 1);
        $tens = substr($number, 1, 1);
        $ones = substr($number, 2, 3);
    }
    if ($lengthNum == 2) {
        $tens = substr($number, 0, 1);
        $ones = substr($number, 1, 1);
        $hundreds = 0;
    }
    if ($lengthNum == 1) {
        $ones = substr($number, 0, 1);
        $hundreds = 0;
        $tens = 0;
    }
    
    
    $numsOnes = ['', 'jeden', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć', 'siedem', 'osiem', 'dziewięć'];
    $numsHundreds = ['', 'sto', 'dwieście', 'trzysta', 'czterysta', 'pięćset', 'sześćset', 'siedemset', 'osiemset', 'dziewięćset'];
    $numsTens = ['', 'dziesięc', 'dwadzieścia', 'trzydzieści', 'czterydzieści', 'pięćdziesiąt', 'sześćdziesiąt', 'siedemdziesiąt', 'osiemdziesiąt', 'dziewięćdziesiąt'];
    $part1 = $numsHundreds[$hundreds];
    $part2 = $numsTens[$tens];
    
    $part3 = $numsOnes[$ones];
    
    if ($hundreds == 0) {
        $part1 = '';
    }
    if ($tens == 0) {
        $part2 = '';
    }
    if ($ones == 0) {
        $part3 = '';
    }
    if ($tens == 1) {
        $part3 = '';
        
        switch($ones) {
            case 0:
                $part2 = " dziesięć";
                break;
            case 1:
                $part2 = " jedenaście";
                break;
            case 2:
                $part2 = " dwanaście";
                break;
            case 3:
                $part2 = " trzynaście";
                break;
            case 4:
                $part2 = " czternaście";
                break;
            case 5:
                $part2 = " piętnaście";
                break;
            case 6:
                $part2 = " szesnaście";
                break;
            case 7:
                $part2 = " siedemnaście";
                break;
            case 8:
                $part2 = " osiemnaście";
                break;
            case 9:
                $part2 = " dziewiętnaście";
        }
    }
    
    return str_replace('  ', ' ', trim($sum = $part1 .' '. $part2 .' '. $part3));
}