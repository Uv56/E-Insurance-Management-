<?php
error_reporting(0);
function assign_rand_value($num)
{
    switch ($num) {
        case "1":
            $rand_value = "a";
            break;
        case "2":
            $rand_value = "b";
            break;
        case "3":
            $rand_value = "c";
            break;
        case "4":
            $rand_value = "d";
            break;
        case "5":
            $rand_value = "e";
            break;
        case "6":
            $rand_value = "f";
            break;
        case "7":
            $rand_value = "g";
            break;
        case "8":
            $rand_value = "h";
            break;
        case "9":
            $rand_value = "i";
            break;
        case "10":
            $rand_value = "j";
            break;
        case "11":
            $rand_value = "k";
            break;
        case "12":
            $rand_value = "l";
            break;
        case "13":
            $rand_value = "m";
            break;
        case "14":
            $rand_value = "n";
            break;
        case "15":
            $rand_value = "o";
            break;
        case "16":
            $rand_value = "p";
            break;
        case "17":
            $rand_value = "q";
            break;
        case "18":
            $rand_value = "r";
            break;
        case "19":
            $rand_value = "s";
            break;
        case "20":
            $rand_value = "t";
            break;
        case "21":
            $rand_value = "u";
            break;
        case "22":
            $rand_value = "v";
            break;
        case "23":
            $rand_value = "w";
            break;
        case "24":
            $rand_value = "x";
            break;
        case "25":
            $rand_value = "y";
            break;
        case "26":
            $rand_value = "z";
            break;
        case "27":
            $rand_value = "0";
            break;
        case "28":
            $rand_value = "1";
            break;
        case "29":
            $rand_value = "2";
            break;
        case "30":
            $rand_value = "3";
            break;
        case "31":
            $rand_value = "4";
            break;
        case "32":
            $rand_value = "5";
            break;
        case "33":
            $rand_value = "6";
            break;
        case "34":
            $rand_value = "7";
            break;
        case "35":
            $rand_value = "8";
            break;
        case "36":
            $rand_value = "9";
            break;
    }
    return $rand_value;
}

function get_rand_alphanumeric($length)
{
    if ($length > 0) {
        $rand_id = "";
        for ($i = 1; $i <= $length; $i++) {
            mt_srand((float)microtime() * 1000000);
            $num = mt_rand(1, 36);
            $rand_id .= assign_rand_value($num);
        }
    }
    return $rand_id;
}

function get_rand_numbers($length)
{
    if ($length > 0) {
        $rand_id = "";
        for ($i = 1; $i <= $length; $i++) {
            mt_srand((float)microtime() * 1000000);
            $num = mt_rand(27, 36);
            $rand_id .= assign_rand_value($num);
        }
    }
    return $rand_id;
}

function get_rand_letters($length)
{
    if ($length > 0) {
        $rand_id = "";
        for ($i = 1; $i <= $length; $i++) {
            mt_srand((float)microtime() * 1000000);
            $num = mt_rand(1, 26);
            $rand_id .= assign_rand_value($num);
        }
    }
    return $rand_id;
}
