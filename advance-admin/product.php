﻿<!DOCTYPE html>
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
                        <h1 class="page-head-line">Basic Forms</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Sản phẩm
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="../controller/Product.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Tên sản phẩm </label>
                                            <input class="form-control" type="text" name="NamePro">
                                            <p class="help-block">Nhập tên vào đây.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Số lượng sản phẩm</label>
                                            <input class="form-control" type="text" name="NumberPro">
                                            <p class="help-block">Nhập số vào đây.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Hình ảnh sản phẩm </label>
                                            <input class="form-control" type="file" name="Picture">
                                            <p class="help-block">Nhập hình ảnh vào đây.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Thể loại sản phẩm </label>
                                            <select class="form-control" id="" name="CategoryPro">
                                            <option value="">--Chọn loại sản phẩm--</option>
                                            <option value="Watermelon">Dưa hấu </option>
                                            <option value="Grape">Nho </option>
                                            <option value="Kiwi">Kiwi </option>
                                            <option value="Pineapple">Dứa </option>
                                            <option value="Orange">Cam </option>
                                            <option value="Broccoli">Bông cải xanh </option>
                                            </select>
                                            <p class="help-block">Nhập số lượng sản phẩm ở đây</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Ngày nhập sản phẩm </label>
                                            <input class="form-control" type="date" name="DatePro">
                                            <p class="help-block">Nhập ngày vào đây</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Giá sản phẩm </label>
                                            <input class="form-control" type="text" id="" name="PricePro">
                                            <p class="help-block">Nhập số vào đây.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Mô tả sản phẩm</label>
                                            <textarea class="form-control" rows="3" name="DesPro"></textarea>
                                        </div>
                                 
                                        <button type="submit" class="btn btn-info" name="txtinsert">Thực hiện </button>
                                    </form>
                            </div>
                        </div>
                            </div>
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
