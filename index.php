<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pooptracker";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Poop Tracker</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">Poop Tracker</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Features</a>
          <a class="nav-item nav-link" href="#">Pricing</a>
        </div>
      </div>
    </nav>
    <div id="main" class="container">

      <!-- Nav End -->
      <div class="row justify-content-center mt-3" align="center">
        <div class="col-2">
          <img id="addNewPuppy" src="images/charity.svg" width="50" alt="Kiwi standing on oval" title="New Puppy">
          <!-- <button id="addNewPuppy" class="btn btn-primary" type="submit">Button</button> -->
        </div>
        <div class="col-2" align="center">
          <img id="addNewPoop" src="images/shit.svg" width="50" alt="Poop" title="New Poop">
        </div>
      </div>
      <div class="row justify-content-center mt-3" align="center">
        <div class="col-2">

        </div>
      </div>
      <!-- Form -->
      <div class="row justify-content-center">
        <form style="display:none;" id="puppyForm" class="puppyForm p-3 mb-3" action="index.php" method="post">
          <div  class="form-group">
            <label for="puppyName">Puppy Name</label>
            <input class="form-control" type="text" name="puppyName" value="">
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit" name="button">Submit</button>
          </div>
        </form>
        <?php
          if (isset($_POST['puppyName'])) {
            $puppyName = $_POST['puppyName'];
            $addPuppyName = "INSERT INTO puppy (`name`) VALUES ('$puppyName')";
            //var_dump($addPuppyName);
            if ($conn->query($addPuppyName) === TRUE) {
                echo '<div id="success" style="margin-top:15px;" class="alert alert-success" role="alert">
                  <strong>Success!</strong> You successfully created a new record.
                </div>';
            } else {
                echo "Error: " . $addPuppyName . "<br>" . $conn->error;
            }
          }
        ?>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <table class="table table-bordered">

            <thead class="thead-dark">
              <tr>
                <th scope="col">Name</th>
              </tr>
            </thead>
            <tbody>
                <!-- <th scope="row">1</th> -->
                <?php
                  $selectAll = "SELECT name FROM puppy";
                  $result = $conn->query($selectAll);
                  if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["name"] . "</td></tr>";
                    }
                  } else {
                  echo "0 results";
                  }
                ?>
            </tbody>
          </table>
        </div>
      </div>
      <?php $conn->close(); ?>
    </div>

    <footer>
      <script type="text/javascript">
        $(document).ready(function(){
          //$("#newPuppyForm").hide();
          $("#addNewPuppy").click(function(){
            $("#puppyForm").toggle("slow");
          });
          setTimeout(function() {
              $('#success').fadeOut('fast');
          }, 1000);
        });
      </script>
    </footer>
  </body>
</html>
