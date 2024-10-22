<?php
session_start();
?>
<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                                <?php
                                    if(isset($_SESSION['username'])){
                                        echo'<img src="../upload/irenememe.jpg" class="img-thumbnail" />';
                                    }
                                ?>
                            

                            <div class="inner-text">
                                <?php
                                    if(isset($_SESSION['username'])){
                                        echo"Happiness :  ". $_SESSION['username'];
                                    }
                                ?>
                            <br />
                                <?php
                                    if(isset($_SESSION['username'])){
                                        echo'<small>Last Login : Today </small>';
                                    }
                                ?>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Manage Product <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="product.php"><i class="fa fa-toggle-on"></i>Insert Product</a>
                            </li>
                            <li>
                                <a href="product_select.php"><i class="fa fa-toggle-on"></i>View Product</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i> Manage Account<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="account_select.php"><i class="fa fa-toggle-on"></i>View Account</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                    <li>
                   <a href="changepass.php"><i class="fa fa-toggle-on"></i>Change Password</a>
                    </li>
                   <li>
                                    <?php
                                        if(isset($_SESSION['username'])){
                                            echo '<a href="logout.php"><i class="fa fa-toggle-on"></i>Log out</a>';
                                        }
                                        else{
                                            echo
                                                '<li>
                                                <a href="login.php"><i class="fa fa-toggle-on"></i>Log in</a>
                                                </li>';
                                        }
                                    ?>
                   </li>
                   

                </ul>

            </div>

        </nav>