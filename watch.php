<?php
while (true) {
    $javascripts = glob('./*.js');
    if (count($javascripts) > 1) {
        unlink('./main.js');
        $javascripts = glob('./*.js');
        copy($javascripts[0], 'main.js');
        unlink($javascripts[0]);
    }

    sleep(1);
}