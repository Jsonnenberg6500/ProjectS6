<?php
    $email = $_POST['email'];
    $password = $_POST['password_signup'];
    $password2 = $_POST['passwordrepeat_signup'];
    $bio = $_POST['bio'];

    echo "Email: " . $email . "<br />";
    echo "Password: " . $password . "<br />";
    echo "Password(2): " . $password2 . "<br />";
    echo "bio: " . $bio . "<br />";

    echo "<a href='logout.php'>Click</a> to return home.";
?>
