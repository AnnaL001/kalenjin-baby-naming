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
    <title> Baby Naming Form </title>
</head>
<body>
    <!-- Backend code -->
    <?php
        $gender = $circumstance = $babyName = " ";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $gender = $_POST["gender"];
            $circumstance = $_POST["circumstance"];
                switch(true){
                    case($gender == "male" && $circumstance == "outsideHouse"):
                        $circumstance = "born outside the house";
                        $babyName = "Kipsang";
                        break;
                    case($gender == "female" && $circumstance == "ousideHouse"):
                        $circumstance = "born outside the house";
                        $babyName = "Chesang";
                        break;
                    case($gender == "male" && $circumstance == "midday"):
                        $circumstance = "born at midday";
                        $babyName = "Kibet";
                        break;
                    case($gender == "female" && $circumstance == "midday"):
                        $circumstance = "born at midday";
                        $babyName = "Chebet";
                        break;
                    case($gender == "male" && $circumstance == "rainySeason"):
                        $circumstance = "born during the rainy season";
                        $babyName = "Kiprop";
                        break;
                    case($gender == "female" && $circumstance == "rainySeason"):
                        $circumstance = "born during the rainy season";
                        $babyName = "Cherop";
                        break;
                    case($gender == "male" && $circumstance == "earlyMorning"):
                        $circumstance = "born very early in the morning";
                        $babyName = "Kipkoech";
                        break;
                    case($gender == "female" && $circumstance == "earlyMorning"):
                        $circumstance = "born very early in the morning";
                        $babyName = "Chepkoech";
                        break;
                    case($gender == "male" && $circumstance == "cowsHomeComing"):
                        $circumstance = "born when cows are coming home";
                        $babyName = "Kiprotich";
                        break;
                    case($gender == "female" && $circumstance == "cowsHomeComing"):
                        $circumstance = "born when cows are coming home";
                        $babyName = "Cherotich";
                        break;
                    case($gender == "male" && $circumstance == "night"):
                        $circumstance = "born at night";
                        $babyName = "Kipkemoi";
                        break;
                    case($gender == "female" && $circumstance == "night"):
                        $circumstance = "born at night";
                        $babyName = "Chepkemoi";
                        break;
                    case($gender == "male" && $circumstance == "visitorsArrival"):
                        $circumstance = "born when the visitors arrived";
                        $babyName = "Kiptoo";
                        break;
                    case($gender == "female" && $circumstance == "visitorsArrival"):
                        $circumstance = "born when the visitors arrived";
                        $babyName = "Cheptoo";
                        break;
                    case($gender == "male" && $circumstance == "goatsHomeComing"):
                        $circumstance = "born when goats or sheep are coming from pasture";
                        $babyName = "Kiprono";
                        break;
                    case($gender == "female" && $circumstance == "goatsHomeComing"):
                        $circumstance = "born when goats or sheep are coming from pasture";
                        $babyName = "Cherono";
                        break;
                    case($gender == "male" && $circumstance == "afterSevenPM"):
                        $circumstance = "born after 7PM";
                        $babyName = "Kiplangat";
                        break;
                    case($gender == "female" && $circumstance == "afterSevenPM"):
                        $circumstance = "born after 7PM";
                        $babyName = "Chelangat";
                        break;
                    case($gender == "male" && $circumstance == "cowsHomeDeparture"):
                        $circumstance = "born when cows are being taken to pasture";
                        $babyName = "Kipngetich";
                        break;
                    case($gender == "female" && $circumstance == "cowsHomeDeparture"):
                        $circumstance = "born when cows are being taken to pasture";
                        $babyName = "Chepngetich";
                        break;
                    case($gender == "male" && $circumstance == "shortLabor"):
                        $circumstance = "born when mum's labor did not last long";
                        $babyName = "Kipchirchir";
                        break;
                    case($gender == "female" && $circumstance == "shortLabor"):
                        $circumstance = "born when mum's labor did not last long";
                        $babyName = "Chepchirchir";
                        break;
                    case($gender == "male" && $circumstance == "visitorsPresence"):
                        $circumstance = "born when visitors are around";
                        $babyName = "Kipchumba";
                        break;
                    case($gender == "female" && $circumstance == "visitorsPresence"):
                        $circumstance = "born when visitors are around";
                        $babyName = "Chepchumba";
                        break;
                    case($gender == "male" && $circumstance == "longLabor"):
                        $circumstance = "born when mum's labor lasted longer";
                        $babyName = "Kimutai";
                        break;
                    case($gender == "female" && $circumstance == "longLabor"):
                        $circumstance = "born when mum's labor lasted longer";
                        $babyName = "Chemutai";
                        break;
                    case($gender == "male" && $circumstance == "mumVisits"):
                        $circumstance = "born when mum went for a visit";
                        $babyName = "Kimutai";
                        break;
                    case($gender == "female" && $circumstance == "mumVisits"):
                        $circumstance = "born when mum went for a visit";
                        $babyName = "Chemutai";
                        break;
                    case($gender == "male" && $circumstance == "beforeSunrise"):
                        $circumstance = "born before sunrise";
                        $babyName = "Kipkorir";
                        break;
                    case($gender == "female" && $circumstance == "beforeSunrise"):
                        $circumstance = "born before sunrise";
                        $babyName = "Chepkorir";
                        break;
                    case($gender == "male" && $circumstance == "goatsAwaken"):
                        $circumstance = "born when goats were waking up";
                        $babyName = "Kipngeno";
                        break;
                    case($gender == "female" && $circumstance == "goatsAwaken"):
                        $circumstance = "born when goats were waking up";
                        $babyName = "Chepngeno";
                        break;
                    case($gender == "male" && $circumstance == "fainting"):
                        $circumstance = "born when someone fainted";
                        $babyName = "Kiptanui";
                        break;
                    case($gender == "female" && $circumstance == "fainting"):
                        $circumstance = "born when someone fainted";
                        $babyName = "Cheptanui";
                        break;
                    case($gender == "male" && $circumstance == "firstborn"):
                        $circumstance = "born as a firstborn child";
                        $babyName = "Kipyator";
                        break;
                    case($gender == "female" && $circumstance == "firstborn"):
                        $circumstance = "born as a firstborn child";
                        $babyName = "Chepyator";
                        break;
            
        }
    }
    ?>
    <div class="header mb-3">
        <h2> <i class="fas fa-baby"></i> KalenjinBabyNames </h2>
    </div>  
    <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"> Birth details </div>

                <div class="card-body">
                      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                          <div class="form-group row">
                              <label for="gender" class="col-md-4 col-form-label text-md-right"> Gender </label>
                              <div class="col-md-6">
                                  <select class="form-control" name="gender" style="width: 100%" id="gender" value="<?php echo $gender;?>">
                                      <option value="male"> Male </option>
                                      <option value="female"> Female </option>
                                  </select>
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label for="circumstance" class="col-md-4 col-form-label text-md-right"> Circumstance </label>
                              <div class="col-md-6">
                                  <select class="form-control" id="circumstance" name="circumstance" style="width: 100%" value="<?php echo $circumstance;?>">
                                      <option value="outsideHouse"> Born outside the house </option>
                                      <option value="midday"> Born midday </option>
                                      <option value="rainySeason"> Born during the rainy season </option>
                                      <option value="earlyMorning"> Born very early in the morning </option>
                                      <option value="cowsHomeComing"> Born when cows are coming home </option>
                                      <option value="night"> Born at night </option>
                                      <option value="visitorsArrival"> Born when the visitors arrived </option>
                                      <option value="goatsHomeComing"> Born when goats/sheep are coming from pastures </option>
                                      <option value="afterSevenPM"> Born after 7PM </option>
                                      <option value="cowsHomeDeparture"> Born when cows are being taken to pasture </option>
                                      <option value="shortLabor"> Born when mum's labor did not last long </option>
                                      <option value="visitorsPresence"> Born when visitors are around </option>
                                      <option value="longLabor"> Born when mum's labor lasted longer </option>
                                      <option value="mumVisits"> Born when mum went for a visit </option>
                                      <option value="beforeSunrise"> Born before sunrise </option>
                                      <option value="goatsAwaken"> Born when goats were waking up </option>
                                      <option value="fainting"> Born when someone fainted </option>
                                      <option value="firstborn"> Born as a firstborn child </option>
                                  </select>
                              </div>
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

  <div class="display-input mt-5 mb-5">
    <div class="container">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"> Baby Name </div>
                <div class="card-body">
                    <p>
                        If your are <strong> <?php echo " ".$gender ?> </strong> and you were <strong> <?php echo " ".$circumstance ?> </strong>
                        then your Kalenjin name is <strong> <?php echo " ".$babyName ?> </strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>
 </div>
 <div class="footer">
    &copy KalenjinBabyNames 2020
 </div>  
</body>
</html>