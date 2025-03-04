<?php
if (isset($_GET['name'])) {
    $name = trim($_GET['name']);
    $known_names = ["Rohit", "Virat", "Dhoni", "Ashwin", "Harbhajan"];

    if ($name == "") {
        echo "Stranger, please tell me your name!";
    } elseif (in_array($name, $known_names)) {
        echo "Hello, master $name!";
    } else {
        echo "$name, I don’t know you!";
    }
}
?>
