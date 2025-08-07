<?php
$file_url = 'https://cheatku.vercel.app/cheat.cbm';
$random_name = str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.$random_name.'.cbm"');

// Stream file dari URL
readfile($file_url);
exit;
?>
