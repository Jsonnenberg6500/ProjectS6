<?php
    session_start();

    if (isset($_SESSION['username'])) {
        require 'index.html';
        echo "You're in the members area now.... Enjoy!</br></br>";
    } else {
        require 'index.html';
    }

?>
