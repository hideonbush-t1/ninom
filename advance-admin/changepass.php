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
                           
                            <div class="panel-body">
  <form method="post" action="../controller/admin_changepass.php">
      <div  style="width: 400px; margin-top: 100px; margin-bottom: 100px;" class="border p-3 mx-auto">
        <h4 class="text-center">Change Password</h4>

        <div  class="mt-3 mb-3 form-floating">      
          <input type="text" class="form-control" name="txtold" placeholder="Old Password"  id="txtoldpass">
          <label for="txtoldpass" ></label>
        </div>
        <div  class="mt-3 mb-3 form-floating">      
          <input type="text" class="form-control" name="txtnew" placeholder="New Password"  id="txtnewpass">
          <label for="txtnewpass" ></label>
        </div>
        <div  class="mt-3 mb-3 form-floating">      
          <input type="text" class="form-control" name="txtconfirm" placeholder="Confirm New Password"  id="txtconfirmpass">
          <label for="txtconfirmpass" ></label>
        </div>
        <div class="text-center mt-3">
          <input type="submit" class="btn btn-primary" style="width: 100% ;" value="Confirm" name="txtchangepass">
        </div>
        <hr>
         <a class="text-decoration-none" href="index.php"> No change password</a>
      </div>
    </form>
</body>

</html>