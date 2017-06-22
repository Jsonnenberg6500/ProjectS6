<?php
    session_start();

    if (isset($_SESSION['username'])) {
        echo "Welcome, " . $_SESSION['username'] . "!<br />";

        echo "<p>This is where our elevator control panel will be.</p>";

        echo "Click to <a href='logout.php'>Logout</a>";
    } else {
        echo "<p>You must be logged in!</p>";
    }
