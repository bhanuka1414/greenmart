<?php require_once('inc/sql_con.php'); ?>
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
	<title>Item</title>
</head>
<body>
	<?php require_once('inc/top_nav.php'); ?>
    <div class="container">
        <?php require_once('inc/logo_bar.php'); ?>
         <!--start mobile categoty list -->
           <?php require_once('inc/mobile_cat.php'); ?> 
            <!--end mobile categoty list -->
        <!--desktop menu-->
        <?php require_once('inc/desktop_cat.php'); ?> 
        <!--desktop menu end-->

	
		<div class="table-responsive">
	<table class="table table-striped" style="text-align: center;">
    <thead>
      <tr>
        <th class="text-center">ITEM</th>
        <th class="text-center">QTY</th>
        <th class="text-center">PRICE</th>
        <th class="text-center">ACTION</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="max-width: 150px;">
        <span><img src="img/drink.jpg" alt="" class="img-responsive hidden-xs" style="max-width: 100px; float: left;"></span>
        <span class="hidden-xs" style="max-width: 100%; display: block; overflow-y: scroll; max-height: 100px;">Lorem ipsum dolor sit amet, consectetur adratione. Ut dolorum ab cum hic blanditiis!</span>
        <p class="hidden-lg hidden-md hidden-sm">p name</p>
        </td>
        <td>2</td>
        <td>2 x 150 <span class="glyphicon glyphicon-triangle-right"></span> RS 300.</td>
        <td><a href="#" class="btn btn-danger">Remove</a></td>
      </tr>
      <tr>
        <td style="max-width: 150px;">
        <span><img src="img/drink.jpg" alt="" class="img-responsive hidden-xs" style="max-width: 100px; float: left;"></span>
        <span class="hidden-xs" style="max-width: 100%; display: block; overflow-y: scroll; max-height: 100px;">Lorem ipsum dolor sit amet, consectetur adratione. Ut dolorum ab cum hic blanditiis!</span>
        <p class="hidden-lg hidden-md hidden-sm">p name</p>
        </td>
        <td>2</td>
        <td>2 x 150 <span class="glyphicon glyphicon-triangle-right"></span> RS 300.</td>
        <td><a href="#" class="btn btn-danger">Remove</a></td>
      </tr>
      <tr>
        <td style="max-width: 150px;">
        <span><img src="img/drink.jpg" alt="" class="img-responsive hidden-xs" style="max-width: 100px; float: left;"></span>
        <span class="hidden-xs" style="max-width: 100%; display: block; overflow-y: scroll; max-height: 100px;">Lorem ipsum dolor sit amet, consectetur adratione. Ut dolorum ab cum hic blanditiis!</span>
        <p class="hidden-lg hidden-md hidden-sm">p name</p>
        </td>
        <td>2</td>
        <td>2 x 150 <span class="glyphicon glyphicon-triangle-right"></span> RS 300.</td>
        <td><a href="#" class="btn btn-danger">Remove</a></td>
      </tr>
    </tbody>
  </table>
		</div>
        <div class="col-md-offset-9 col-md-3 col-sm-offset-8 col-sm-4 table-responsive">
            <table class="table table-hover">
                <tr>
                    <td>Price</td>
                    <td>RS 500</td>
                </tr>
                <tr>
                    <td>Dilivery <a href="#" title="Dilivery details"><i class="fa fa-info-circle" aria-hidden="true"></i></a></td>
                    <td>RS 150</td>
                </tr>
                <tr>
                    <td>Dilivery</td>
                    <td>RS 150</td>
                </tr>
            </table>
        </div>

		<div class="col-md-offset-9 col-md-3 col-sm-offset-8 col-sm-4">
        <a href="#" class="btn btn-success">Continue shopping</a>
        <a href="#" class="btn btn-success pull-right">order</a>
        </div>




	</div>

        <!--footer-->
    <?php require_once('inc/footer.php'); ?>
</body>
</html>