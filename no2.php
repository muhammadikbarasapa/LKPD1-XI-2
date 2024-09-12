<?php

for ($i=1; $i < 30; $i++) { //untuk meluping berulang ulang dari sebuah nilai
    if (120 % $i == 0) { //memeriksa sisa pembagian dari 120
        echo "120 : $i = " .round(120 / $i) . "<br>"; //round untuk membulatkan angka
    }
} 