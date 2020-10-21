<!DOCTYPE html>
<html>
<head>
    <!-- Custom styling -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <!-- Font awesome icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title> National ID Form </title>
</head>
<body>
  <!-- Backend code -->
  <?php
      $fullName = $dateOfBirth = $gender = $districtOfBirth = $placeOfIssue = $dateOfIssue = $district = $division = $location = $subLocation = "";
      $fullNameErr = $districtOfBirthErr = $placeOfIssueErr = $districtErr = $divisionErr = $locationErr = $subLocationErr = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullName = test_input($_POST["fullName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fullName)) {
          $fullNameErr = "Only letters and white space allowed";
        }

        $dateOfBirth = test_input($_POST["dateOfBirth"]);

        $gender = test_input($_POST["gender"]);

        $districtOfBirth = test_input($_POST["districtOfBirth"]);
        // check if district of birth only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$districtOfBirth)) {
          $districtOfBirthErr = "Only letters and white space allowed";
        }

        $placeOfIssue = test_input($_POST["placeOfIssue"]);
        // check if place of issue only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$placeOfIssue)) {
          $placeOfIssueErr = "Only letters and white space allowed";
        }

        $dateOfIssue = test_input($_POST["dateOfIssue"]);

        $district = test_input($_POST["district"]);
        // check if district only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$district)) {
          $districtErr = "Only letters and white space allowed";
        }

        $division = test_input($_POST["division"]);
        // check if division only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$division)) {
          $divisionErr = "Only letters and white space allowed";
        }

        $location = test_input($_POST["location"]);
        // check if location only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$location)) {
          $locationErr = "Only letters and white space allowed";
        }

        $subLocation = test_input($_POST["subLocation"]);
        // check if sub location only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$subLocation)) {
          $subLocationErr = "Only letters and white space allowed";
        }

      }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
  ?>
<main>
<div class="header mb-3">
      <h2> <i class="fas fa-id-card"></i> National ID Details</h2>
</div>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"> Register </div>

                <div class="card-body">
                      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                          <div class="form-group row">
                              <label for="fullName" class="col-md-4 col-form-label text-md-right"> Full Name: </label>
                              <div class="col-md-6">
                                <input id="fullName" type="text" class="form-control" name="fullName" value="<?php echo $fullName;?>" required>
                              </div>
                              <span class="error">  <?php echo $fullNameErr;?> </span>
                          </div>

                          <div class="form-group row">
                              <label for="dateOfBirth" class="col-md-4 col-form-label text-md-right"> Date of Birth: </label>
                              <div class="col-md-6">
                                <input id="dateOfBirth" type="date" class="form-control" name="dateOfBirth" value="<?php echo $dateOfBirth;?>" required>
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="gender" class="col-md-4 col-form-label text-md-right"> Gender </label>
                              <div class="col-md-6">
                                  <select class="form-control" name="gender" style="width: 100%" value="<?php echo $gender;?>">
                                      <option value="Male"> Male </option>
                                      <option value="Female"> Female </option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="districtOfBirth" class="col-md-4 col-form-label text-md-right"> District of Birth: </label>
                              <div class="col-md-6">
                                <input id="districtOfBirth" type="text" class="form-control" name="districtOfBirth" value="<?php echo $districtOfBirth;?>" required>
                              </div>
                              <span class="error"> <?php echo $districtOfBirthErr;?></span>
                          </div>
                          

                          <div class="form-group row">
                              <label for="placeOfIssue" class="col-md-4 col-form-label text-md-right"> Place of issue: </label>
                              <div class="col-md-6">
                                <input id="placeOfIssue" type="text" class="form-control" name="placeOfIssue" value="<?php echo $placeOfIssue;?>" required>
                              </div>
                              <span class="error"> <?php echo $placeOfIssueErr;?></span>
                          </div>

                          <div class="form-group row">
                              <label for="dateOfIssue" class="col-md-4 col-form-label text-md-right"> Date of issue: </label>
                              <div class="col-md-6">
                                <input id="dateOfIssue" type="date" class="form-control" name="dateOfIssue" value="<?php echo $dateOfIssue;?>" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="district" class="col-md-4 col-form-label text-md-right"> District: </label>
                              <div class="col-md-6">
                                <input id="district" type="text" class="form-control" name="district" value="<?php echo $district;?>" required>
                              </div>
                              <span class="error"> <?php echo $districtErr;?></span>
                          </div>

                          <div class="form-group row">
                              <label for="division" class="col-md-4 col-form-label text-md-right"> Division: </label>
                              <div class="col-md-6">
                                <input id="division" type="text" class="form-control" name="division" value="<?php echo $division;?>" required>
                              </div>
                              <span class="error"> <?php echo $divisionErr;?></span>
                          </div>
                          
                          <div class="form-group row">
                              <label for="location" class="col-md-4 col-form-label text-md-right"> Location: </label>
                              <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" value="<?php echo $location;?>" required>
                              </div>
                              <span class="error"> <?php echo $locationErr;?></span>
                          </div>

                          <div class="form-group row">
                              <label for="subLocation" class="col-md-4 col-form-label text-md-right"> Sub-Location: </label>
                              <div class="col-md-6">
                                <input id="subLocation" type="text" class="form-control" name="subLocation" value="<?php echo $subLocation;?>" required>
                              </div>
                              <span class="error"> <?php echo $subLocationErr;?></span>
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                <input type="submit" class="btn btn-outline-primary">
                              </div>
                          </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="display-input mt-4 mb-4">
    <div class="container">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header text-center"> Your National ID Details </div>
          <div class="card-body">
             <b>Full Name:</b> <br> <?php echo " ".$fullName; ?> 
             <br><br>
             <b>Date of birth: </b> <br> <?php echo " ".$dateOfBirth; ?>
             <br><br>
             <b> Gender: </b> <br> <?php echo " ".$gender; ?>
             <br><br>
             <b> District of birth: </b> <br> <?php echo " ".$districtOfBirth; ?>
             <br><br>
             <b> Place of issue: </b> <br> <?php echo " ".$placeOfIssue; ?>
             <br><br>
             <b> Date of issue: </b> <br> <?php echo " ".$dateOfIssue; ?>
             <br><br>
             <b> District: </b> <br> <?php echo " ".$district; ?>
             <br><br>
             <b> Division: </b> <br> <?php echo " ".$division; ?>
             <br><br>
             <b> Location: </b> <br> <?php echo " ".$location; ?>
             <br><br>
             <b> Sub-Location: </b> <br> <?php echo " ".$subLocation; ?>
           </div>
        </div>
      </div>
    </div>
  </div>
</main>
<div class="footer">
    &copy NationalID-Details 2020
 </div>
</div>
</body>
</html>
