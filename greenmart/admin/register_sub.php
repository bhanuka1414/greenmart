<?php require_once('../inc/sql_con.php'); ?>
<?php function get_numerics ($str) {
                    preg_match_all('/\d+/', $str, $matches);
                    return $matches[0];
                } ?>
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
    <title>greenmart</title>
   
</head>
<script>
    $(function(){
        $('#warn').hide();
        $('#reg').on('click',function(){
        
        
        if($("#fn").val().length==0 || $("#ln").val().length==0 || $("#add").val().length==0 || $("#em").val().length==0 || $("#pn").val().length==0 || $("#pn2").val().length==0 || $("#us").val().length==0 || $("#pw").val().length==0)
        {   
            $('#reg').prop('type','button');
            $('#warn').addClass('alert-warning');
            $('#warn').removeClass('alert-danger');
            $('#warn').show();
           $('#warning').text('fields cannot be empty!');
           $('html, body').animate({
                'scrollTop' : $("#warning").position().top
            });
        }
        else
        {
            //email validate
            var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
            if (!testEmail.test($("#em").val()))
            {
                $('#reg').prop('type','button');
                $('#warn').addClass('alert-warning');
                $('#warn').removeClass('alert-danger');
                $('#warn').show();
                $('#warning').text('e-mail address format incorrect!');
                $('html, body').animate({
                            'scrollTop' : $("#warning").position().top
                        });
            }
            else
            {
                //validate phone-no
                if(isNaN($("#pn").val())==true || isNaN($("#pn2").val())==true)
                {
                    $('#reg').prop('type','button');
                    $('#warn').addClass('alert-warning');
                    $('#warn').removeClass('alert-danger');
                    $('#warn').show();
                     $('#warning').text('Phone Number Format Incorrect!');
                     $('html, body').animate({
                            'scrollTop' : $("#warning").position().top
                        });
                }
                else
                {
                    if($("#pw").val() != $("#pw2").val())
                    {
                        $('#reg').prop('type','button');
                        $('#warn').addClass('alert-warning');
                        $('#warn').removeClass('alert-danger');
                        $('#warn').show();
                        $('#warning').text('Your password and confirmation password do not match.!');
                        $('html, body').animate({
                            'scrollTop' : $("#warning").position().top
                        });
                    }
                    else
                    {
                        $('#reg').prop('type','submit');
                        return true;
                    }
                }
                
            }
        }

        
    });

    });
</script>
<?php 

        if (isset($_POST['reg'])) 
        {
            $sql="SELECT COUNT(*) from ad_sub_ad where username='{$_POST['us']}'"; 
            $res=mysqli_query($con, $sql);
            $TR=mysqli_fetch_array($res);
            if($TR['0']<=0)
            {
                $sql22="SELECT id FROM ad_sub_ad ORDER BY id DESC LIMIT 1";
                $res22=mysqli_query($con, $sql22);
                $row=mysqli_fetch_assoc($res22);
                $iid=$row['id'];
               $iid2 = str_replace(['+', '-'], '', filter_var($iid, FILTER_SANITIZE_NUMBER_INT));

                

               $iid=$iid2+1;
               $iid="SA{$iid}";
                //zzz
                if (isset($_FILES['img']) && $_FILES['img']['size'] > 0) {


// Temporary file name stored on the server

$tmpName = $_FILES['img']['tmp_name'];


// Read the file

$fp = fopen($tmpName, 'r');

$data = fread($fp, filesize($tmpName));

$data = addslashes($data);

fclose($fp);
                
                $pw_sh=sha1($_POST['pw']);
                $sql="INSERT INTO ad_sub_ad (id,f_name,l_name,email,phone,address,phone2,gender,type,img,username,password) VALUES
                ('{$iid}','{$_POST['fn']}','{$_POST['ln']}','{$_POST['em']}',{$_POST['pn']},'{$_POST['add']}',{$_POST['pn2']},
                '{$_POST['gender']}',2,'{$data}','{$_POST['us']}','{$pw_sh}')";
                $res1=mysqli_query($con, $sql);
                if ($res1) 
                {
                    echo "<script>$(function(){
                        $('#reg').prop('type','button');
                        $('#warn').addClass('alert-success');
                        $('#warn').removeClass('alert-warning alert-danger');

                        $('#warn').show();
                        $('#warning').text('Registration successful!');
                        $('html, body').animate({
                            'scrollTop' : $('#warning').position().top
                        });
                        });</script>";
                }
                else
                {
                    echo "<script>$(function(){
                        $('#reg').prop('type','button');
                        $('#warn').addClass('alert-danger');
                        $('#warn').removeClass('alert-warning');

                        $('#warn').show();
                        $('#warning').text('Registration Unsuccessful. Try again!');
                        $('html, body').animate({
                            'scrollTop' : $('#warning').position().top
                        });
                        });</script>";
                }
            }
            else
            {
                echo "<script>$(function(){
                        $('#reg').prop('type','button');
                        $('#warn').addClass('alert-danger');
                        $('#warn').removeClass('alert-warning');
                        $('#warn').show();
                        $('#warning').text('Must insert image(size between 1 to 100kb)!');
                        $('html, body').animate({
                            'scrollTop' : $('#warning').position().top
                        });
                        });</script>";
            }
        }
            else
            {
                echo "<script>$(function(){
                        $('#reg').prop('type','button');
                        $('#warn').addClass('alert-danger');
                        $('#warn').removeClass('alert-warning');
                        $('#warn').show();
                        $('#warning').text('That username is taken. Try another!');
                        $('html, body').animate({
                            'scrollTop' : $('#warning').position().top
                        });
                        });</script>";
            }
            
        }


 ?>
<body>
    <?php require_once('../inc/admin_tmp.php'); ?>
<br>
<br>

    <div class="container">
    <div class="row">

        <div class="col-md-7 col-lg-8 hidden-xs hidden-sm" style="min-height: 500px; margin-top: 20px;">
            
            <h4><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt sapiente placeat, perspiciatis pariatur iure deleniti esse omnis numquam soluta quo qui eaque tempore impedit. Laudantium consequuntur, quia perspiciatis placeat dignissimos.</div>
            <div>Veritatis eos, distinctio. Repellat voluptatibus eos deserunt earum praesentium asperiores, ducimus eligendi itaque voluptate officia, obcaecati laudantium deleniti expedita quis officiis saepe odit alias nostrum, minus accusamus! Laboriosam, tempora! Maxime.</div>
            <div>Laboriosam rem, impedit deleniti incidunt ex delectus officiis sapiente est sit, inventore debitis numquam ducimus quis corporis error perferendis quas. Magnam dolores voluptas deleniti id error maiores, ducimus et ipsam.</div>
            <div>Eos sapiente maiores, nobis ad. Animi cum, doloribus maiores. Cumque rem repellat nam dolorum soluta itaque, ut cupiditate possimus reprehenderit illum ipsa voluptas, nisi maxime reiciendis dolor sed suscipit. Fugit.</div>
            <div>Nesciunt dicta ut iure ea nulla doloremque, amet cumque exercitationem soluta nam, corporis atque odio ab placeat voluptatibus omnis modi provident deleniti adipisci. Esse eaque in nesciunt ut sit eum!</div>
            <div>Maiores magni deleniti rem minima sapiente voluptatum amet qui ab pariatur mollitia consectetur iure nostrum eaque excepturi labore nisi quo culpa corrupti vero, corporis nihil cumque eos quas fugiat. Iusto!</div>
            <div>Ipsum nisi earum corrupti quidem quos totam debitis possimus quam, tenetur odio, facere maxime voluptatibus dolorem minima illo, laborum repellendus veniam quis perspiciatis itaque vero. Quasi dicta accusamus eligendi? Impedit.</div>
            <div>Quibusdam aut, beatae. Reprehenderit vel suscipit consequatur numquam. Ullam adipisci quibusdam soluta debitis officia, architecto commodi consequatur veniam minima maiores, libero sapiente quaerat laudantium eius, repellat esse mollitia animi harum?</div>
            <div>Qui quisquam earum adipisci optio, fugiat, accusantium laborum culpa ipsum id temporibus aliquam porro eos nisi tempora repellendus suscipit, consequatur itaque illo enim eaque, reprehenderit tempore praesentium doloribus. Vel, fugiat.</div>
            <div>Ea ullam vero odit fuga, hic, deserunt architecto esse nisi eos consectetur vitae nulla libero voluptatibus voluptates placeat totam, molestias corrupti adipisci animi quis eveniet nemo quod mollitia eaque tempore.</div></h4>

        </div>
        <div class="col-md-5 col-lg-4" style="min-height: 500px; margin-top: 20px; border: 2px solid #C0392B;">
            <div class="navbar navbar-default navbar-static-top" style="min-height: 100px; background-color: #C0392B; z-index: 1;">
                <div class="col-xs-8"><li class="nav navbar-brand" style="font-size: 20pt; color: white;">Register</li></div>
                <div class="col-xs-4"><li class="nav navbar-brand" style="font-size: 20pt; color: white;"><span class="glyphicon glyphicon-pencil"></span></li></div><p style="color: white;">&nbsp;&nbsp; Smarter Shopping
Better Living!</p>
            </div>
            <form action="" method="post" style="margin-top: 30px;" enctype="multipart/form-data">
                <div class="form-group">
                    <label>First Name</label>
                <input type="text" name="fn" id="fn" class="form-control" placeholder="First Name...." required>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                <input type="text" name="ln" id="ln" class="form-control" placeholder="Last Name...." required>
                </div>
                <div class="form-group">
                    <label>Address</label>
                <input type="text" name="add" id="add" class="form-control" placeholder="Address...." required>
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                <input type="email" name="em" id="em" class="form-control" placeholder="email...." required>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="not-mention">Select</option>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                </select>
                </div>
                <div class="form-group">
                    <label>Phone-No1</label>
                <input type="text" id="pn" name="pn" class="form-control" placeholder="phone no1...." required>
                </div>
                <div class="form-group">
                    <label>Phone-No2</label>
                <input type="text" id="pn2" name="pn2" class="form-control" placeholder="phone no2....">
                </div>
                <div class="form-group">
                    <label>Photo</label>
                <input type="file" name="img" id="img" class="form-control">
                </div>
                <div class="form-group">
                    <label>Username</label>
                <input type="text" id="us" name="us" class="form-control" placeholder="username...." required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                <input type="password" id="pw" name="pw" class="form-control" placeholder="password...." required>
                </div>
                <div class="form-group">
                    <label>Re-Password</label>
                <input type="password" id="pw2" name="pw2" class="form-control" placeholder="Re-password...." required>
                </div>
                <button type="submit" id="reg" name="reg" class="btn btn-danger">Register <span class="glyphicon glyphicon-pencil"></span></button>
            </form>
            <br>
            <div class="alert alert-warning" id="warn">
                 <span id="warning">error</span>
            </div>
            <br><br>
            <center><a href="../login.php">Login <span class="glyphicon glyphicon-lock"></span></a></center>
        </div>
    </div>
    	
    </div>
   
    
<br><br>


</body>



</html>
<?php mysqli_close($con); ?>