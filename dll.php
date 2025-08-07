<?php

$cheatdll = 'cheat.cbm';

$randomfl = str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
$original = pathinfo($cheatdll, PATHINFO_EXTENSION);

if(file_exists($cheatdll)) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.$randomfl.'.'.$original.'"');
    readfile($cheatdll);
    exit;
} else {
    die("File tidak ditemukan");
}

?>