<?php
include "../model/control_user.php";
session_start();
if(isset($_POST['txtlog'])){
    if(empty($_POST['txtname']) || empty($_POST['txtpass'])){
        echo"Vui lòng nhập đủ thông tin";
    }
    else{
        $model = new data_account();
        $tmp = $model->sl_username($_POST['txtname']);
        $tmp = $tmp->fetch_assoc(); 
        if($_POST['txtpass'] == $tmp['pass']){
            $_SESSION['user_name'] = $_POST['txtname'];
            echo"
            <script>alert('Đăng nhập thành công!');
            window.location.href = '../Guest/index.php'; </script>";
        }
        else{
            echo"<script>alert('Sai tài khoản hoặc mật khẩu!');
            window.location.href = '../Guest/login.php'; 
            </script>";
        }

    }
}

if(isset($_POST['login'])){
    if(empty($_POST['username'])||empty($_POST['pass'])){
        echo "Vui lòng nhập đủ";
    }
    else{
        $model = new data_account();
        $tmp = $model->sl_username($_POST['username']);
        $tmp = $tmp->fetch_assoc(); 
        if($_POST['pass']==$tmp['pass']){
            $_SESSION['username'] = $_POST['username'];
            echo "<script>alert('Đăng nhập thành công!');
            window.location.href='../advance-admin/index.php'; </script>";
        }
        else{
            echo"<script>alert('Sai tài khoản hoặc mật khẩu!');
            window.location.href = '../advance-admin/login.php'; 
            </script>";
        }
    }
}

?>