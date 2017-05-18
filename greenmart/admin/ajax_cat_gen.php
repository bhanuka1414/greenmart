<?php require_once('../inc/sql_con.php'); ?>
<?php 

		$re='<select name="sub_cat" id="c2" class="form-control" required>';
		$sql="SELECT * FROM sub_cat WHERE c_id={$_GET['iid']}";
		$res=mysqli_query($con, $sql);
		while ($row=mysqli_fetch_assoc($res)) {
			//$name=$row["sc_name"];

			$re .='
			<option value="'.$row["sc_id"].'">'.$row["sc_name"].'</option>';
                            
                        
		}
		$re .='</select>';
		echo "{$re}";
 ?>