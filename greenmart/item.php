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

	
		<br>
            <div class="col-sm-6">
            <img src="img/drink.jpg" alt="image" class="img-responsive">
        </div>

        <div class="col-sm-6" style="border-left:2px solid #34495E;">
            <h3>Item Name</h3>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus eius nemo repellendus animi dolorum facilis nostrum eum maiores corrupti reprehenderit, laudantium dolor nihil sapiente, illum quaerat dicta ab itaque distinctio.</p>
            <br>
            <br>
            <p>Unit Price : RS <span id="up">500</span></p>
            <br>
            <form action="" method="POST"> <!--pass data input hidden. bp remember it-->
                <input type="number" name="qty" id="qty" style="max-width: 100px;">
                <label>Available(400)</label>
                <br><br>
                <p>Total Price : RS <span id="tp">0</span></p>
                <a href="<?php echo "{$_SERVER['HTTP_REFERER'] }"; ?>" class="btn btn-danger">Back</a>
                 <button type="submit" class="btn btn-success">add cart</button>

            </form>
            <br><br>
           
        </div>      
        <br>


	</div>

        <!--footer-->
    <?php require_once('inc/footer.php'); ?>
    <script>
        $(document).ready(function(){
    $("#qty").on('change keyup paste', function(){
        // Getting the current value of textarea
        var total = $(this).val() * $('#up').text();
        
        // Setting the Div content
        $("#tp").text(total);
    });
});
    </script>
</body>
</html>