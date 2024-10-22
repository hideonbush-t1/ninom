<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/img/logo-invoice.png" />
            </div>
        </div>
         <div class="row ">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">     
                            <form method="post" action="../controller/admin_register.php">
      <div  style="width: 400px; margin-top: 100px; margin-bottom: 100px;" class="border p-3 mx-auto">
        <h2 class="text-center">Sign Up</h2>
        <div class="mt-3 mb-3 form-floating">
          <input type="text" class="form-control" name="txtname" placeholder="UserName" id="txtname">
          <label for="txtname"></label>
        </div>
        <div class="mt-3 mb-3 form-floating">
          <input type="text" class="form-control" name="txtmail" placeholder="Email" id="txtmail">
          <label for="txtmail"></label>
        </div>
        <div  class="mt-3 mb-3 form-floating">      
          <input type="password" class="form-control" name="txtpass" placeholder="Password"  id="txtpass">
          <label for="txtpass"></label>
        </div>
        <div  class="mt-3 mb-3 form-floating">      
          <input type="password" class="form-control" name="txtconfirm" placeholder="Confirm Password"  id="txtconfirm">
          <label for="txtpass"></label>
        </div>
        <div class="text-center mt-3">
          <input type="submit" class="btn btn-primary" style="width: 100% ;" value="Sign Up" name="txtsub">
          <p class=" d-inline">Have an account? </p> <a class="text-decoration-none" href="login.php"> Sign in</a>
        </div>
    </form>
                 
                           

                


</body>
</html>
