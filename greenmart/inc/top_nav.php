<div class="navbar navbar-inverse navbar-static-top" style="margin-bottom: 0; padding-bottom: 0;">
        <div class="container">
            <a href="index.php" class="navbar-brand">Green Mart</a>
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse navHeaderCollapse" style="width: 100%;">
                <ul class="nav navbar-nav navbar-right">
                <?php 
                    if (isset($_SESSION["uid"])) {
                        echo '<li><a href="#" class="hidden-md hidden-lg"><span class="glyphicon glyphicon-map-marker"></span>Where`s my order</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                    <!--not login show reg & login else show account & cart-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>MyAccount <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">MYorders</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="inc/logout.php"><span class="glyphicon glyphicon-log-out"></span>Sign-out</a></li>
                        </ul>
                    </li>';
                    }
                    else
                    {
                        echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="register.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Register</a></li>';
                    }
                 ?>
                    
                </ul>
            </div>
        </div>
    </div>
    <!--end navbar top -->