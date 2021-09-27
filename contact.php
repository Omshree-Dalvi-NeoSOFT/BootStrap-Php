<?php 

error_reporting(0);
//define variables
$errfname=$errlname=$erruname=$errcity=$errstate=$errzip=$errfeedback=$erremail=$errcnumber="";

if(isset($_POST['sub'])){
    $fname=input_field($_POST['fname']);
    $lname=input_field($_POST['lname']);
    $uname=input_field($_POST['uname']);
    $city=input_field($_POST['city']);
    $state=input_field($_POST['state']);
    $zip=input_field($_POST['zip']);
    $feedback=input_field($_POST['feedback']);
    $cnum=input_field($_POST['cnumber']);
    $email=input_field($_POST['email']);
    
    // validate fname
    if(empty($fname)){
       $errfname = "is-invalid";
    }
    else{
      if(!(preg_match("/^(?=.{1,50}$)[a-z]+(?:['_.\s][a-z]+)*$/i",$fname))){
        $errfname = "is-invalid";
      }
      else{
        $errfname = "is-valid";
      }
        
    }

    // validate lname
    if(empty($lname)){
        $errlname = "is-invalid";
    }
    else{
      if(!(preg_match("/^(?=.{1,50}$)[a-z]+(?:['_.\s][a-z]+)*$/i",$lname))){
        $errlname = "is-invalid";
      }
      else{
        $errlname = "is-valid";
      }
    }

    // validate uname
    if(empty($uname)){
        $erruname = "is-invalid";
    }
    else{
      if(!(preg_match("/^[a-zA-Z0-9_-]{3,16}$/",$uname))){
        $erruname = "is-invalid";
      }
      else{
        $erruname = "is-valid";
      }
    }

    // validate city
    if(empty($city)){
        $errcity = "is-invalid";
    }
    else{
      if(!(preg_match("/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/",$city))){
        $errcity = "is-invalid";
      }
      else{
        $errcity = "is-valid";
      }
       
    }

    // validate state
    if(empty($state)){
        $errstate = "is-invalid";
    }
    else{
        $errstate = "is-valid";
    }

    // validate zip
    if(empty($zip)){
        $errzip = "is-invalid";
    }
    else{
      if(!(preg_match("/^[0-9]{6}$/",$zip))){
        $errzip = "is-invalid";
      }
      else{
        $errzip = "is-valid";
      }
    }

    // validate feedback
    if(empty($feedback)){
        $errfeedback = "is-invalid";
    }
    else{
        $errfeedback = "is-valid";
      }

    // validate Contact Number

    if(empty($cnum)){
      $errcnumber = "is-invalid";
    }
    else{
      if(!(preg_match("/^[6-9][0-9]{9}+$/",$cnum))){
        $errcnumber = "is-invalid";
      }
      else{
        $errcnumber = "is-valid";
      }
    }

    // validate Email

    if(empty($email)){
      $erremail = "is-invalid";
    }
    else{
      if(!(preg_match("/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/",$email))){
        $erremail = "is-invalid";
      }
      else{
        $erremail = "is-valid";
      }
    }

  }

function input_field($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php')?>

</head>
<body>
    <?php include('nav.php')?>
    <section class="p-4"></section>
    <section class="container">
    <h1 class="text-center">Contact Us</h1><br>
      <?php 
        if(($errfname != 'is-invalid' && $errlname != 'is-invalid' && $erruname != 'is-invalid' && $errcity != 'is-invalid' && $errstate != 'is-invalid' && $errzip != 'is-invalid' && $errfeedback != 'is-invalid' && $erremail != 'is-invalid' && $errcnumber != 'is-invalid') && ($fname != '')){
          echo '<div class="alert alert-success" role="alert">
            Form Submitted Successfully ! We will contact you on '.$email.'. Have a nice day ! 
            </div>';
        }
      ?>
    <form method="post" class="row g-3">
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">First name</label>
    <input type="text" class="form-control <?php echo $errfname; ?>" name="fname" id="validationServer01"  >
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Invalid First Name!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Last name</label>
    <input type="text" class="form-control <?php echo $errlname; ?>" id="validationServer02" name="lname" >
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Invalid Last Name!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="text" class="form-control <?php echo $erruname; ?>" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" name="uname" >
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        Please choose a username.
      </div>
      <div id="validationServerUsernameFeedback" class="valid-feedback">
        Welcome <?php echo $uname; ?> !.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">City</label>
    <input type="text" class="form-control <?php echo $errcity; ?>" id="validationServer03" aria-describedby="validationServer03Feedback" name="city" >
    <div id="validationServer03Feedback" class="invalid-feedback">
      Please provide a valid city.
    </div>
    <div id="validationServer03Feedback" class="valid-feedback">
      WOW ! <?php echo $city; ?> is Very nice !.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer04" class="form-label">State</label>
    <select class="form-select <?php echo $errstate; ?>" id="validationServer04" aria-describedby="validationServer04Feedback" name="state" >
      <option selected disabled value="Null">Choose...</option>
      <option value="Andhra Pradesh">Andhra Pradesh</option>
      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
      <option value="Assam">Assam</option>
      <option value="Bihar">Bihar</option>
      <option value="Chandigarh">Chandigarh</option>
      <option value="Chhattisgarh">Chhattisgarh</option>
      <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
      <option value="Daman and Diu">Daman and Diu</option>
      <option value="Delhi">Delhi</option>
      <option value="Lakshadweep">Lakshadweep</option>
      <option value="Puducherry">Puducherry</option>
      <option value="Goa">Goa</option>
      <option value="Gujarat">Gujarat</option>
      <option value="Haryana">Haryana</option>
      <option value="Himachal Pradesh">Himachal Pradesh</option>
      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
      <option value="Jharkhand">Jharkhand</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
      <option value="Madhya Pradesh">Madhya Pradesh</option>
      <option value="Maharashtra">Maharashtra</option>
      <option value="Manipur">Manipur</option>
      <option value="Meghalaya">Meghalaya</option>
      <option value="Mizoram">Mizoram</option>
      <option value="Nagaland">Nagaland</option>
      <option value="Odisha">Odisha</option>
      <option value="Punjab">Punjab</option>
      <option value="Rajasthan">Rajasthan</option>
      <option value="Sikkim">Sikkim</option>
      <option value="Tamil Nadu">Tamil Nadu</option>
      <option value="Telangana">Telangana</option>
      <option value="Tripura">Tripura</option>
      <option value="Uttar Pradesh">Uttar Pradesh</option>
      <option value="Uttarakhand">Uttarakhand</option>
      <option value="West Bengal">West Bengal</option>
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
      Please select a valid state.
    </div>
    <div id="validationServer04Feedback" class="valid-feedback">
      Welcome.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">Zip</label>
    <input type="text" class="form-control <?php echo $errzip; ?>" id="validationServer05" aria-describedby="validationServer05Feedback" name="zip" >
    <div id="validationServer05Feedback" class="invalid-feedback">
      Please provide a valid zip.
    </div>
    <div id="validationServer05Feedback" class="valid-feedback">
      Valid zip code.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer01" class="form-label">Contact Number</label>
    <input type="text" class="form-control <?php echo $errcnumber; ?>" name="cnumber" id="validationServer01"  >
    <div class="valid-feedback">
      Looks good !
    </div>
    <div class="invalid-feedback">
      Invalid Number only 10 digits allowed !
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer02" class="form-label">Email ID</label>
    <input type="email" class="form-control <?php echo $erremail; ?>" id="validationServer02" name="email" >
    <div class="valid-feedback">
      Looks good !
    </div>
    <div class="invalid-feedback">
      Invalid Email id !
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer05" class="form-label">Feedback</label>
    <textarea class="form-control <?php echo $errfeedback; ?>" id="validationTextarea" placeholder=" example textarea" name="feedback" ></textarea>
    <div id="validationServer05Feedback" class="invalid-feedback">
      Please provide a Feedback !.
    </div>
    <div id="validationServer05Feedback" class="valid-feedback">
      Thank you for your valuable Feedback !.
    </div>
  </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="sub">Submit form</button>
  </div>
</form>
    </section>
    <section class="container-fluid">
        <?php include('footer.php')?>
    </section>
    <?php include('foot.php')?>
</body>
</html>