<?php
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 7; $j++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 5; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>