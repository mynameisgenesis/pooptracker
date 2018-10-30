<?php
$whichField = $_POST['whichField'];
$event = $_POST['event'];
$valueOfEvent = $_POST['valueOfEvent'];
$dependant = $_POST['dependant'];

if ($whichField == "saleToCampaign") {
  $script="
  $('#tfa_2260').dependsOn({
  	'#$event': {
  		values: ['$valueOfEvent']
  	}
  }, {
  	valueTarget: '#tfa_2260',
  	valueOnEnable: '$dependant',
  	valueOnDisable: '',
  	hide: false
  });
  ";
} else if ($whichField == "eventId") {
  $script="
  $('#tfa_2273').dependsOn({
  	'#$event': {
  		values: ['$valueOfEvent']
  	}
  }, {
  	valueTarget: '#tfa_2273',
  	valueOnEnable: '$dependant',
  	valueOnDisable: '',
  	hide: false
  });
  ";
}

$fileName="js/form.js";
file_put_contents($fileName, $script, FILE_APPEND);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/dependsOn-1.0.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Success</title>
  </head>
  <body>
    <div style="margin-top:5%;" class="container">
      <div class="row justify-content-lg-center">
        <form class="col-4">
          <h1>Create Dependents</h1>
          <br>
          <div class="form-group">
            <div style="margin-top:15px;" class="alert alert-success" role="alert">
              <strong>Success!</strong> You successfully created a dependant.
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
