<?php
function generatePass($len) {
    $pass = '';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $number = '1234567890';
    $symbol = '!"^#[]@';
    $allCharacters = $uppercase.$lowercase.$number.$symbol;
    
    $firstIndex = 0;
    $lastIndex = strlen($allCharacters) -1;

    for ($i = 0; $i < $len; $i++) {
        $randomIndex = rand($firstIndex, $lastIndex);

        $pass .= $allCharacters[$randomIndex];
    }

    return $pass;
}
    ?>