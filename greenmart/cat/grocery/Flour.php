<?php require_once('../../inc/sql_con.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/main.css">
    <link rel="shortcut icon" href="../../img/Artdesigner-Urban-Stories-Cart.ico" />
    <script src="../../bootstrap/js/jquery-3.1.1.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../bootstrap/js/main.js"></script>
    
    <title>greenmart</title>

</head>

<body>
    <?php require_once('../../inc/top_nav.php'); ?>
    <div class="container">
        <?php require_once('../../inc/logo_bar.php'); ?>
         <!--start mobile categoty list -->
           <?php require_once('../../inc/mobile_cat.php'); ?> 
            <!--end mobile categoty list -->
        <!--desktop menu-->
        <?php require_once('../../inc/desktop_cat.php'); ?> 
        <!--desktop menu end-->
    

        <div class="col-md-3 hidden-xs hidden-sm scrollbar" id="style-2" style="height: 500px; border-left: 10px solid #C0392B; overflow-y: scroll;">
            <ul class="nav" style="border-right: 10px solid #C0392B;">
            <?php 
                $sql="SELECT sc_name FROM sub_cat WHERE c_id=4";
                $res=mysqli_query($con, $sql);
                while ($row=mysqli_fetch_assoc($res)) {
                    echo '<li style="border-top: 1px solid #C0392B; border-bottom: 1px solid #C0392B;"><a href="'.$row['sc_name'].'.php">
                    '.$row['sc_name'].'</a></li>';
                }
             ?>
              
            </ul>
        </div>
        <div class="col-md-9" style="min-height: 500px;">
            
            <center><h3>Bakery</h3></center>
            <hr>
            <select name="b" id="" class="btn btn-default" style="width: 275px;">
                <option value="q">select</option>
                <option value="q1">hjjhbh</option>
            </select>
            <hr>

            <!--products-->
            
                        

    <div id="products" class="row">
    <?php 
        $sql = "SELECT COUNT(*) FROM products WHERE cat=4 AND sub_cat=9";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_row($query);
// Here we have the total row count
$rows = $row[0];
// This is the number of results we want displayed per page
$page_rows = 12;
// This tells us the page number of our last page
$last = ceil($rows/$page_rows);
// This makes sure $last cannot be less than 1
if($last < 1){
  $last = 1;
}
// Establish the $pagenum variable
$pagenum = 1;
// Get pagenum from URL vars if it is present, else it is = 1
if(isset($_GET['pn'])){
  $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
}
// This makes sure the page number isn't below 1, or more than our $last page
if ($pagenum < 1) { 
    $pagenum = 1; 
} else if ($pagenum > $last) { 
    $pagenum = $last; 
}
// This sets the range of rows to query for the chosen $pagenum
$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
// This is your query again, it is for grabbing just one page worth of rows by applying $limit
//$sql = "SELECT id, firstname, lastname, datemade FROM testimonials WHERE approved='1' ORDER BY id DESC $limit";
//
$sql="SELECT * FROM products WHERE cat=4 AND sub_cat=9 $limit";


$query = mysqli_query($con,$sql);
// This shows the user what page they are on, and the total number of pages
$textline1 = "Testimonials (<b>$rows</b>)";
$textline2 = "Page <b>$pagenum</b> of <b>$last</b>";
// Establish the $paginationCtrls variable
$paginationCtrls = '';
// If there is more than 1 page worth of results
if($last != 1){
  /* First we check if we are on page one. If we are then we don't need a link to 
     the previous page or the first page so we do nothing. If we aren't then we
     generate links to the first page, and to the previous page. */
  if ($pagenum > 1) {
        $previous = $pagenum - 1;
    $paginationCtrls .= '<li><a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">Previous</a></li>  ';
    // Render clickable number links that should appear on the left of the target page number
    for($i = $pagenum-4; $i < $pagenum; $i++){
      if($i > 0){
            $paginationCtrls .= '<li><a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a></li> ';
      }
      }
    }
  // Render the target page number, but without it being a link
    $paginationCtrls .= ' <li class="disabled"><a href="#">'.$pagenum.'</a></li> '; 
  // Render clickable number links that should appear on the right of the target page number
  for($i = $pagenum+1; $i <= $last; $i++){
    $paginationCtrls .= '<li><a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a></li>  ';
    if($i >= $pagenum+4){
      break;
    }
  }
  // This does the same as above, only checking if we are on the last page, and then generating the "Next"
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' <li><a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">Next</a></li> ';
    }
}

if(!$query)
    {
      die("error");
    }
    while($product=mysqli_fetch_assoc($query)){


     ?>

        <div class="item col-sm-4">
            <div class="thumbnail">
                
                <?php echo '<img class="group list-group-image" style="min-height: 200px; max-height: 200px; overflow:hidden;" src="data:image/jpeg;base64,'.base64_encode( $product['img'] ).'"/>'; ?>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <?php echo "{$product['p_name']}"; ?></h4>
                    <p class="group inner list-group-item-text" style="min-height: 100px; max-height: 100px; overflow-y: scroll;">
                        <?php echo "{$product['p_dis']}"; ?></p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                RS <?php echo "{$product['p_price']}"; ?></p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>

        </div>
<br clear="all">

    
        <div align="right">
            <ul class="pagination">
                <?php echo $paginationCtrls; ?>
            </ul>
        </div>    
        <hr style="color: #CCD1D1; padding-top: 0; margin-top: 0;"> 
    
   
    


                

            <!--products end-->
        </div>
    </div>
    <!--container end-->
    


   
<!--footer-->
    <?php require_once('../../inc/footer.php'); ?>
</body>


</html>
