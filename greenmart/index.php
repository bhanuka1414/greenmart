
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/main.css">
    <link rel="shortcut icon" href="img/Artdesigner-Urban-Stories-Cart.ico" />
    <script src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/main.js"></script>
    <title>greenmart</title>
   
</head>

<body>
    <?php require_once('inc/top_nav.php'); ?>
    <!--end navbar top -->
    <div class="container">
        <div class="row">
            <?php require_once('inc/logo_bar.php'); ?>
         <!--start mobile categoty list -->
            <?php require_once('inc/mobile_cat.php'); ?>
            <!--end mobile categoty list -->
        <!--desktop menu-->
       <?php require_once('inc/desktop_cat.php'); ?>
        <!--desktop menu end-->
        </div>    
	</div>
	<div class="container">
        <div class="row">
			<div class="col-md-2 hidden-xs hidden-sm" style="height: 400px; background-color: #555;">Advertisements!</div>
			<div class="col-md-8 slider-frame" style="height: 400px;">
			<!--slider-->
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/slid2.jpg" alt="Chania" width="100%" height="345">
      </div>

      <div class="item">
        <img src="img/slid1.jpg" alt="Chania" width="100%" height="345">
      </div>
    
      <div class="item">
        <img src="img/slid2.jpg" alt="Flower" width="100%" height="345">
      </div>

      <div class="item">
        <img src="img/slid1.jpg" alt="Flower" width="100%" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!--slider end-->
			</div>
			<div class="col-md-2 hidden-xs hidden-sm" style="height: 400px; background-color: #EBEDEF;">Advertisements!</div>

		</div>
    </div>
    <!--container end-->
    <br>
    <div class="container">
    	<div class="row">
    		<div class="col-md-4" style="height: 200px; background-color: #EBEDEF;"></div>
    		<div class="col-md-4" style="height: 200px; background-color: #EBEDEF;"></div>
    		<div class="col-md-4" style="height: 200px; background-color: #EBEDEF;"></div>
    	</div>
							<center><h5>Hot Products</h5></center>
    	<div class="row">
    		<div class="col-md-6" style="height: 200px; background-color: #EBEDEF; margin-top: 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptate eius in esse odio aperiam tempore sit eveniet tempora officia? Ipsam natus error nam reprehenderit eum veniam temporibus, corporis, architecto.</div>
    		<div class="col-md-6" style="height: 200px; background-color: #EBEDEF; margin-top: 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit incidunt, debitis aliquid deserunt quos ratione excepturi quis optio quam distinctio architecto reprehenderit minima odit aspernatur corporis doloremque, beatae molestias similique.</div>
    		
    	</div>

    	<div class="row">
    		<div class="col-md-6" style="height: 200px; background-color: #EBEDEF; margin-top: 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptate eius in esse odio aperiam tempore sit eveniet tempora officia? Ipsam natus error nam reprehenderit eum veniam temporibus, corporis, architecto.</div>
    		<div class="col-md-6" style="height: 200px; background-color: #EBEDEF; margin-top: 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit incidunt, debitis aliquid deserunt quos ratione excepturi quis optio quam distinctio architecto reprehenderit minima odit aspernatur corporis doloremque, beatae molestias similique.</div>
    		
    	</div>


    	<div class="row">
    		<div class="col-md-12" style="height: 150px; background-color: #EBEDEF; margin-top: 10px;">Advertisements!</div>
    		
    	</div>


		<center><h5>Recommended</h5></center>
    	<div class="row">
    		<div class="col-md-10" style="min-height: 700px; margin-top: 20px; border: 1px solid #EBEDEF; border-radius: 7px;">
          
        
          
          <div id="products" class="row list-group">
        <div class="item col-sm-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item col-sm-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item col-sm-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item col-sm-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item col-sm-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item col-sm-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
          
        </div>
    		<div class="col-md-2 hidden-xs hidden-sm" style="height: 700px; background-color: #EBEDEF; margin-top: 20px;">Advertisements!</div>
    		
    	</div>
    </div>
<!--footer-->
<?php require_once('inc/footer.php'); ?>
<?php 
echo date_diff(date_create('1996/1/3'), date_create('today'))->y; ?>
</body>



</html>
