<?php
header('Content-Type: text/plain');

function draw_kotak($panjang) {
    for($x=1; $x<=$panjang; $x++) {
        for($i=1; $i<=$panjang; $i++) {
            if($x%2==0) {
                if($i%2==0) {
                    echo('*   ');
                } else {
                    echo('    ');
                }
            } else {
                if($i%2==0) {
                    echo('    ');
                } else {
                    echo('*   ');
                }
            }
        }
        echo("\r\n\r\n");
    }
}

draw_kotak(7);
echo("\r\n\r\n");
draw_kotak(5);
