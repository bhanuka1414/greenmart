<?php require_once('../inc/sql_con.php'); ?>
<?php 
    if (isset($_POST['b1'])) {
        if (isset($_FILES['img']) && $_FILES['img']['size'] > 0) {

if ($_FILES['img']['size']<200000){
// Temporary file name stored on the server

$tmpName = $_FILES['img']['tmp_name'];


// Read the file

$fp = fopen($tmpName, 'r');

$data = fread($fp, filesize($tmpName));

$data = addslashes($data);

fclose($fp);
        $sql="INSERT INTO products (p_name,p_price,p_dis,cat,sub_cat,img,qty) VALUES ('{$_POST['p_name']}',{$_POST['price']},
        '{$_POST['dis']}',{$_POST['cat1']},{$_POST['sub_cat']},'{$data}',{$_POST['qty']})";
        $res=mysqli_query($con, $sql);
            if ($res) {
                echo "<script>alert('successful added!')</script>";
            }
            else
            {
                echo "<script>alert('unsuccessful')</script>";
            }
        }
        else
        {
            echo "<script>alert('Must insert image(size between 1 to 200kb)!')</script>";
        }
    }
}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/main.css">
    <link rel="shortcut icon" href="../img/Artdesigner-Urban-Stories-Cart.ico" />
    <script src="../bootstrap/js/jquery-3.1.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/main.js"></script>
    <title>Admin</title>
    <script>
        $(function(){
            $('#c1').on('change', function () {//live sub cat selectbox id=cal2
                var v=this.value;
            
                xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET","ajax_cat_gen.php?iid="+v+"&opt=up",false);
                xmlhttp.send(null);
                $('#cat2').html(xmlhttp.responseText);
            });
        });
    </script>
    <style>
        body{

        }
    </style>
</head>
<body>
<?php require_once('../inc/admin_tmp.php'); ?>


	<div class="col-md-6 col-md-offset-3 " style="background-color: #E5E7E9; margin-top: 70px; border-radius: 6px;">
    <center><h2>ADD NEW ITEMS</h2></center>  
		<form action="" method="POST" enctype="multipart/form-data" style="margin-top: 30px; margin-bottom: 30px;">

                
                <div class="form-group">
                    <label>Name</label>
                <input type="text" name="p_name" class="form-control" placeholder="Name...." required>
                </div>
                <div class="form-group">
                    <label>Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price...." required>
                </div>
                <div class="form-group">
                    <label>Category</label>
                <select name="cat1" id="c1" class="form-control" required>
                    <?php 
                        $sql="SELECT * FROM cat";
                        $res=mysqli_query($con, $sql);
                        while ($row=mysqli_fetch_assoc($res)) {
                     ?>
                     <option value="<?php echo "{$row['id']}"; ?>"><?php echo "{$row['cat_name']}"; ?></option>
                     <?php } ?>
                </select>
                </div>
                <div class="form-group">
                    <label>SubCategory</label>
                    <span id="cat2">
                        
                    </span>
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                <input type="number" name="qty" class="form-control" placeholder="Quantity...." required>
                </div>
                <div class="form-group">
                    <label>Picture</label>
                <input type="file" name="img" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Discription</label>
                <textarea name="dis" id="" rows="4" class="form-control" placeholder="Discription..." required></textarea>
                </div>
                
                <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span></a>
                <button type="reset" class="btn btn-default">Reset <i class="fa fa-refresh" aria-hidden="true"></i>
                </button>
                <button type="submit" class="btn btn-success" name="b1">Save <span class="glyphicon glyphicon-ok-circle"></span>
                </button>

    </form>
	</div>


</body>
</html>
