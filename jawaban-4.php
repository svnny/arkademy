<?php
header('Content-Type: text/plain');

function print_abc($kolom, $baris) {
  $abjad= 'abcdefghijklmnopqrstuvwxyz';
  $index= 0;
  $string= '';
  for($x=1; $x<=$baris; $x++) {
    for($i=1; $i<=$kolom; $i++) {
      $string.= $abjad[$index].'  ';
      $index++;
    }
    $string.= "\r\n\r\n";
  }
  echo($string);
}

print_abc(3, 4);
