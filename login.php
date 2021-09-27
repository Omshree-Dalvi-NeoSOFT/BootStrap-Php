<?php 
    error_reporting(0);
    // define variables 
    $erremail=$errpass=$crtemail=$crtpass="";
    $status=0;
    $details =[
        "emailid"=>"om@gmail.com",
        "pass"=>"Om@31"
    ];
    if(isset($_POST['submit'])){
        $email=input_field($_POST['email']);
        $pass=input_field($_POST['pass']);

        //validate email
        if(empty($email)){
            $erremail = "Please Enter Email !";
        }
        elseif(empty($pass)){
            $errpass="Please Enter Password !";
        }
        else{
            if($email == $details['emailid']){
                if(empty($pass)){
                    $errpass = "Please Enter Password !";
                }
                else{
                    if($pass == $details['pass']){
                        $crtpass = "Looks good !";
                        $crtemail = "Looks good !";
                        $status = 1;
                    }
                    else{
                        $errpass ="Incorrect Password !";
                    }
                }
            }
            else{
                $erremail="Incorrect Email !";
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
    <section class="p-4"></section>
    <?php include('nav.php')?>
    <section class="container">
        <h1 class="text-center">Login Here</h1><br>
        <?php 
        if($status == 1){
          echo '<div class="alert alert-success" role="alert">
            logged-in successfully !. welcome '.$email.'. 
            </div>';
        }
      ?>
            <form method="post">
            <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">Email - ID</span>
            <input type="email" class="form-control" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" >
            </div><span class="text-danger"><?php echo $erremail;?></span><span class="text-success"><?php echo $crtemail?></span><br>
            <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">Password</span>
            <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="pass">
            </div><span class="text-danger"><?php echo $errpass?></span><span class="text-success"><?php echo $crtpass?></span><br>
            <button type="submit" class="btn btn-primary form-control p-2" name="submit">Sign in</button>
            </form>
    </section>
    <section class="container-fluid">
        <?php include('footer.php')?>
    </section>
    <?php include('foot.php')?>
</body>
</html>