<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Create Dependents</title>
  </head>
  <body>
    <div id="main" class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Poop Tracker</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Features</a>
            <a class="nav-item nav-link" href="#">Pricing</a>
          </div>
        </div>
      </nav>
      <!-- Nav End -->
      <div class="row justify-content-center mt-3" align="center">
        <div class="col-2">
          <img id="addNewPuppy" src="images/charity.svg" width="50" alt="Kiwi standing on oval" title="New Puppy">
          <!-- <button id="addNewPuppy" class="btn btn-primary" type="submit">Button</button> -->
        </div>
        <div class="col-2" align="center">
          <img src="images/shit.svg" width="50" alt="Kiwi standing on oval" title="New Poop">
        </div>
      </div>
      <div class="row justify-content-center mt-3" align="center">
        <div class="col-2">

        </div>
      </div>
      <!-- Form -->
      <div class="row justify-content-center">
        <form style="display:none;" id="newPuppyForm" class="newPuppyForm p-3 mb-3" action="index.html" method="post">
          <div  class="form-group">
            <label for="puppyName">Puppy Name</label>
            <input class="form-control" type="text" name="puppyName" value="">
          </div>
        </form>
      </div>
    </div>
    <footer>
      <script type="text/javascript">
        $(document).ready(function(){
          //$("#newPuppyForm").hide();
          $("#addNewPuppy").click(function(){
            $("#newPuppyForm").show("slow");
          });
        });
      </script>
    </footer>
  </body>
</html>
