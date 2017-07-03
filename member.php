<?php
    session_start();

    if (isset($_SESSION['username'])) {
        echo "Welcome, " . $_SESSION['username'] . "!<br />";

        require 'control.php';



        //JAMES MAKING EDITS FROM HERE DOWN
        echo "<h1>Entire Content of the clientRequests table</h1>";
        $db = new PDO(
            'mysql:host=127.0.0.1;dbname=elevator',
            'root',
            ''
        );
        $rows = $db->query('SELECT * FROM clientRequests');
        foreach($rows as $row){
            for($i=0; $i<sizeof($row)/2; $i++){
                echo $row[$i] . " | ";
            }
            echo "<br />";
        }

?>
    <h2>Input NEW data into the database using the form below!</h2>
    <form action="member.php" method="POST">
        status: <input type="text" name="status" /><br />
        requestID: <input type="text" name="requestID" /><br />
        <input type="submit" value="Add to database" />
    </form>

    <?php
    if (isset($_SESSION['username'])) {
        $query = 'INSERT INTO clientRequests (status, requestID)
                  VALUES(:status, :requestID)';
        $statement = $db->prepare($query);
        $status = $_POST['status'];
        $requestID = $_POST['requestID'];

        $params = [
            'status' => $status,
            'requestID' => $requestID
        ];
        $result = $statement->execute($params);
    }
    ?>


<?php
        echo "Click to <a href='logout.php'>Logout</a>";
    }
    else {
        echo "<p>You must be logged in!</p>";
    }

?>
