<?php
function cipher($plaintext, $key) {
    if (ctype_alpha($plaintext)) {
        $point = ord(ctype_upper($plaintext) ? 'A' : 'a');
        $ch = ord($plaintext);
        $formula = fmod($ch + $key - $point, 26);
        $result = chr($formula + $point);
        return $result;
    }
}

function encrypt($char, $key) {
    $output = "";
    $chars = str_split($char);
    foreach ($chars as $plaintext) {
        $output .= cipher($plaintext, $key);
    }
    return $output;
}

function decrypt($userencryption, $key) {
    return encrypt($userencryption, 26 - $key);
}
?>