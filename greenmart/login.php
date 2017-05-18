<?php require_once('inc/sql_con.php'); ?>
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
    <script src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/main.js"></script>
    <title>greenmart</title>
   <script>
    $(function(){
        $('#warn').hide();

});
</script>
<?php 

            if (isset($_POST['log'])) {
                $pw_sh=sha1($_POST['pw']);
                $sql="SELECT * FROM (SELECT id,username,password,type FROM delivery UNION SELECT id,username,password,type FROM ad_sub_ad UNION SELECT id,username,password,type FROM user)AS U WHERE U.username ='{$_POST['us']}' 
                AND U.password='{$pw_sh}'";
                $res=mysqli_query($con, $sql);
                if ($res) {
                    if (mysqli_num_rows($res)==1) {
                        $row=mysqli_fetch_assoc($res);
                        $type=$row['type'];
                        switch ($type) {
                            case '1':
                                echo "<script>alert('ADMIN');</script>";
                                break;
                            case '2':
                                echo "<script>alert('SUB ADMIN');</script>";
                                break;
                            case '3':
                                echo "<script>alert('DILIVERY');</script>";
                                break;
                            case '4':
                                $_SESSION["uid"] = "{$row['id']}";
                                header('LOCATION:index.php');
                                break;        
                            
                            default:
                                echo "<script>$(function(){
                        $('#warn').addClass('alert-warning');
                        $('#warn').show();
                        $('#warning').text('Invalid Username/Password!');
                        $('html, body').animate({
                            'scrollTop' : $('#warning').position().top
                        });
                        });</script>";
                                break;
                        }
                    }
                    else
                    {
                        echo "<script>$(function(){
                        $('#warn').addClass('alert-warning');
                        $('#warn').show();
                        $('#warning').text('Invalid Username/Password!');
                        $('html, body').animate({
                            'scrollTop' : $('#warning').position().top
                        });
                        });</script>";
                    }
                }
                else
                {
                    echo "<script>$(function(){
                        $('#warn').addClass('alert-warning');
                        $('#warn').show();
                        $('#warning').text('Invalid Username/Password!');
                        $('html, body').animate({
                            'scrollTop' : $('#warning').position().top
                        });
                        });</script>";
                }

            }


 ?>
</head>

<body>
    <?php require_once('inc/top_nav.php'); ?>
    <!--end navbar top -->

    <div class="container">
    <div class="row">
    <div class="col-md-7 col-lg-8 hidden-xs hidden-sm" style="margin-top: 20px;">
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum inventore molestias soluta, est nam accusamus harum velit esse officia veritatis, similique laboriosam dolore dolorem quisquam aut amet reprehenderit exercitationem aliquid.</div>
            <div>Quia id veritatis, facere nemo atque ad at, error! Tenetur voluptas suscipit commodi earum numquam aspernatur expedita, cupiditate odit eaque maxime! Consequatur sed, animi ducimus officia voluptas temporibus, dolor quos.</div>
            <div>Vero eius praesentium numquam odio aperiam necessitatibus. Reiciendis inventore perferendis pariatur, recusandae, id soluta voluptatibus eligendi aut eum qui magnam quos nemo tempora debitis doloribus culpa a, repellat architecto dolore.</div>
            <div>Molestias, aut porro fugit praesentium magni culpa, ullam nostrum voluptatibus sequi eum blanditiis accusamus impedit doloremque labore maiores dolorum dolorem sapiente consectetur inventore error sunt sint, quidem. Ullam commodi, consequatur.</div>
            <div>Ullam inventore dolorem nostrum, eaque, blanditiis, recusandae cum accusantium modi doloremque fugiat tempore voluptate quae quod suscipit officiis distinctio, nobis cumque dolores? Maxime quis minima, voluptas dolore officia totam deserunt!</div>    
    </div>

        <div class="col-md-5 col-lg-4" style="min-height: 300px; margin-top: 20px; border: 3px solid #28B463;">
            <div class="navbar navbar-default navbar-static-top" style="min-height: 100px; background-color: #28B463;">
                <div class="col-xs-8"><li class="nav navbar-brand" style="font-size: 20pt; color: white;">Login</li></div>
                <div class="col-xs-4"><li class="nav navbar-brand" style="font-size: 20pt; color: white;"><span class="glyphicon glyphicon-lock"></span></li></div><p style="color: white;">&nbsp;&nbsp; Smarter Shopping
Better Living!</p>
            </div>
            <form action="" method="post" style="margin-top: 30px;">
                <div class="form-group">
                    <label>User Name</label>
                <input type="text" class="form-control" name="us" placeholder="username...." required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                <input type="password" class="form-control" name="pw" placeholder="password...." required>
                </div>
                
                <button type="submit" class="btn btn-success" id="log" name="log">Login <span class="glyphicon glyphicon-log-in"></span></button>
            </form>
            <br>
            <div class="alert alert-warning" id="warn">
                <strong>Warning!</strong> <span id="warning">error</span>
            </div>
            <br>
            <center><a href="register.php">Register <span class="glyphicon glyphicon-pencil"></span></a></center>
            <br>
        </div>
    </div>
    	
    </div>
<!--footer-->
<?php require_once('inc/footer.php'); ?>
</body>
</html>


<?php  ?>












                        