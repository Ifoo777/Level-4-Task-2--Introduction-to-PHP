<?php

// Based on the length of the user name entered, give a different text output
if (strlen($_GET['user_name']) < 3) {
    echo "<h1 style='color:green;'>Hello, " . $_GET['user_name'] . "!</h>";
} else if (3 <= strlen($_GET['user_name']) and strlen($_GET['user_name']) <= 6) {
    echo "<h1 style='color:blue;'>What's up, " . $_GET['user_name'] . "!</h>";
} else if (strlen($_GET['user_name']) > 7) {
    echo "<h1 style='color:purple;'>Top of the morning to you, " . $_GET['user_name'] . "!</h>";
}
?>