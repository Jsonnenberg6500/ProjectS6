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

  <link rel="stylesheet" type="text/css" href="css/control_style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


  <script type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
  <div class="container-fluid page">
    <h1>Welcome to the Elevator Control Panel! </h1>
       <div class="row">
            <div class="col-md-5 col-xs-12 block">
                 <p><b>Elevator Status</b></p>
                 <br>
                 <p>Current Floor: </p>
                 <p>Door State: </p>
                 <p>Moving: </p>
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-5 col-xs-12 block">
                 <p><b>Floor Nodes</b></p>
                 <br>
                 <p>Request Floor 1: </p>
                 <img src="images/floor1.png" title="Floor 1 Button" class="button"><img>

                 <script type="text/javascript">

                    function on_callPhp()
                    {
                      var result="<?php php_func();?>";
                      alert(result);
                      return false;
                    }
                  </script>

                 <form action="" method="POST">
                   <input type="submit" class="button" name="Request" value="Request 1" onclick="on_callPhp()"/>
                 </form>

                 <?php
                    function php_func()
                    {
                      echo "Hello PHP";
                    }
                 ?>

                 <p>Request Floor 2: </p>
                 <img src="images/Floor2.png" title="Floor 2 Button" class="button"><img>
                 <input type="submit" class="button" name="Request" value="Request 2" />
                 <p>Request Floor 3: </p>
                 <img src="images/Floor3.png" title="Floor 3 Button" class="button"><img>
                 <input type="submit" class="button" name="Request" value="Request 3" />
            </div>
       </div>

       <div class="row">
            <div class="col-md-5 col-xs-12 block">
              <p><b>Floor Nodes</b></p>
              <br>
              <p>Floor 1: </p>
              <img src="images/floor1.png" title="Floor 1 Button" class="button"><img>
              <p>Floor 2: </p>
              <img src="images/Floor2.png" title="Floor 2 Button" class="button"><img>
              <p>Floor 3: </p>
              <img src="images/Floor3.png" title="Floor 3 Button" class="button"><img>
              <p>Door Open </p>
              <img src="images/floor1.png" title="Door Open Button" class="button"><img>
              <p>Door Close </p>
              <img src="images/floor1.png" title="Door Close Button" class="button"><img>
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-5 col-xs-12 block">
              <p><b>Supervisor</b></p>
              <br>
              <p>Current Request</p>
              <p>CAN BUS: </p>
            </div>
       </div>

       
  </div>
</body>
</html>
