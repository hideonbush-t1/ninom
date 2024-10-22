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
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
    <?php
            include("navtop.php");
        ?>
        <!-- /. NAV TOP  -->
        <?php
            include("navside.php");
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Data Table</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-6" style="width: 100%">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mô tả sản phẩm
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <?php
                                include('../model/control_product.php');
                                $get_data=new product();
                                $select=$get_data->select_product();
                            ?>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>NamePro</th>
                                            <th>NumberPro</th>
                                            <th>Picture</th>
                                            <th>CategoryPro</th>
                                            <th>DatePro</th>
                                            <th>PricePro</th>
                                            <th>DesPro</th>
                                            <th colspan="2">Option</th>
                                        </tr>
                                    </thead>

                                        
                                    <tbody>
                                    <?php foreach($select as $row){ ?>
                                            <tr>
                                                <td><?php echo $row['NamePro'] ?></td>
                                                <td><?php echo $row['NumberPro'] ?></td>
                                                <td><img src="../upload/<?php echo $row['Picture'] ?>" width="200px" height="200px" ></td>
                                                <td><?php echo $row['CategoryPro'] ?></td>
                                                <td><?php echo $row['DatePro'] ?></td>
                                                <td><?php echo $row['PricePro'] ?></td>
                                                <td><?php echo $row['DesPro'] ?></td>
                                                <td><a href="product_delete.php?del=<?php echo $row['ID_Pro']?>"
                                                         onClick="if(confirm('Bạn có chắc chắn xóa')) return true; 
                                                                   else return fale;">Delete</td>
                                                <td><a href="product_update.php?up=<?php echo $row['ID_Pro']?>"
                                                         onClick="if(confirm('Bạn có muốn sửa')) return true; 
                                                                   else return fale;">Update</td>
                                            </tr>
                                    <?php } ?>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
     <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
