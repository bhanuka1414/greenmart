<?php 
                $string = "fg4gfgf1fgf2";
                $int = intval(preg_replace('/[^0-9]+/', '', $string), 10);
                //echo "{$int}";

                if (isset($_POST['b1'])) {
                	if ($_FILES['pic']['size']<200000) {
                		$tmpName = $_FILES['pic']['size']; // controlling img size;
                	echo "{$tmpName}";
                	}
                	else
                	{
                		echo "fuck img";
                	}
                	
                }

         ?>


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
         	<title>Document</title>
         </head>
         <body>
         	

         	<div class="well">
  <div id="datetimepicker4" class="input-append">
    <input data-format="yyyy-MM-dd" type="date"></input>
    <span class="add-on">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      </i>
    </span>
  </div>
</div>
<script type="text/javascript">
  $(function() {
    $('#datetimepicker4').datetimepicker({
      pickTime: false
    });
  });
</script>
<input data-format="yyyy-MM-dd" type="date"></input>




<h5>https://test.instamojo.com/accounts/logout/</h5>
         </body>
         </html>