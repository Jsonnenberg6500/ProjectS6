<?php
  echo "<body style='background-color: lightgrey'>";
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Elevator Control</title>
  <meta charset="utf-8">
  <meta name="author" content="James Sonnenberg">
  <meta name="description" content="Elevator control page for Project 6">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="-1">
  <meta name="viewport" content="width=device-width, initial-scale=1" />


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/control_style.css" />

  <script type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/controlJS.js"></script>

</head>

<body onload="javascript:updateData()" >

  <div class="container-fluid page text-align-center">
       <div class="row">
            <div id = "displayQueue" class="col-md-4 col-xs-12 block">
                 <h3><b>Elevator Status</b></h3>
                 <br>
                 <p>Current Floor: </p>
                 <p>Door State: </p>
                 <p>Moving: </p>
            </div>
            <div class="col-xs-12 block col-md-4">
                 <h3><b>Floor Nodes</b></h3>
                 <br>
                 <p></p>
                  <form action="member.php" method="POST">
                    <div id="ajaxButton1">
                      <input type="submit" class="button" name="Request1" value="Request 1"/>
                    </div>
                  </form>

                 <p></p>
                 <form action="member.php" method="POST">
                   <div id="ajaxButton2">
                     <input type="submit" class="button" name="Request2" value="Request 2" />
                   </div>
                 </form>

                 <p></p>
                 <form action="member.php" method="POST">
                   <div id="ajaxButton3">
                    <input type="submit" class="button" name="Request3" value="Request 3" />
                   </div>
                 </form>
            </div>


            <div class="col-md-4 col-xs-12 block">
              <h3><b>Elevator Controller</b></h3>
              <br>
              <p></p>
              <form action="member.php" method="POST">
                <div id="ajaxButton4">
                <input type="submit" class="button" name="Floor1" value="Floor 1" />
              </div>
              </form>

              <p></p>
              <form action="member.php" method="POST">
                <div id="ajaxButton5">
                <input type="submit" class="button" name="Floor2" value="Floor 2" />
              </div>
              </form>

              <p></p>
              <form action="member.php" method="POST">
                <div id="ajaxButton6">
                <input type="submit" class="button" name="Floor3" value="Floor 3" />
              </div>
              </form>

              <p></p>
              <form action="member.php" method="POST">
                <div id="ajaxButton7">
                <input type="submit" class="button" name="DoorOpen" value="Door Open" />
              </div>
              </form>

              <p></p>
              <form action="member.php" method="POST">
                <div id="ajaxButton8">
                <input type="submit" class="button" name="DoorClose" value="Door Close" />
              </div>
              </form>
            </div>
</div>
      <div class="row block">
          <h3>CANLOG DATABASE</h3>
            <textarea id="demo" style="width: 100%; height: 300px;">
              <h3><b>Supervisor</b></h3>
              <br>
              <p>Current Request</p>
              <p>CAN BUS: </p>
          </textarea>
       </div>


  </div>
</body>
</html>



    <?php
    error_reporting(0);
/**********************************************************
*
*             This updates clientQueue
*
**************************************************************/
    if (isset($_SESSION['username'])) {
        $query = 'INSERT INTO clientQueue(activeID)
                  VALUES(:requestID)';
        $statement = $db->prepare($query);
    //    $status = $_POST['status'];

        if($_POST['Request1']){
            $requestID = 1;
        }
        else if($_POST['Request2']){
            $requestID = 2;
        }
        else if($_POST['Request3']){
            $requestID = 3;
        }
        else if($_POST['Floor1']){
            $requestID = 4;
        }
        else if($_POST['Floor2']){
            $requestID = 5;
        }
        else if($_POST['Floor3']){
            $requestID = 6;
        }
        else if($_POST['DoorOpen']){
            $requestID = 7;
        }
        else if($_POST['DoorClose']){
            $requestID = 8;
        }
        $params = [
        //    'status' => $status,
            'requestID' => $requestID
        ];
        $result = $statement->execute($params);


        $query =  'UPDATE clientRequests
                   SET status=1
                   WHERE requestID ='.$requestID;

        $statement2 = $db->prepare($query);

        $params2 = [
        //    'status' => $status,
            'ID' => $requestID
        ];
        $result2 = $statement2->execute($params2);

    }
    ?>
