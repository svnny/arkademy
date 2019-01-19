<?php
header('Content-Type: text/plain');

function count_handshake($total_orang) {
  $total= 0;
  for($i=1; $i<=$total_orang; $i++) {
    for($ii=1; $ii<$total_orang; $ii++) {
      $total+= 1;
    }
  }
  echo($total/2);
}

count_handshake(3);
echo("\r\n");
count_handshake(6);
