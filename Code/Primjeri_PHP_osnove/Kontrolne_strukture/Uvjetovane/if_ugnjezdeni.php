<?php
// nested if
if (4 > 5) {
    echo "Not printed";
} else {
    if (4 > 4) {
        echo "Not printed";
    } else {
        if (4 == 4) {
            echo "Printed.";
        } else {
            echo "ovo se ne ispisuje";
        }
    }
}

