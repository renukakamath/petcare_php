<?php include 'publicheader.php';
if (isset($_POST['login'])) {
	extract($_POST);


$q="select * from login where username='$uname' and password='$pwd'";
$res=select($q);

	if (sizeof($res)>0) {
	   $_SESSION['login_id']=$res[0]['login_id'];
	     $lid=$_SESSION['login_id'];

	     echo $lid;

		if ($res[0]['type']=="admin") {

			return redirect('admin_home.php');
		}elseif($res[0]['type']=="doctor") {
			return redirect('doctor_home.php');
		}elseif($res[0]['type']=="shop")
		{
			echo $q1="select * from shops where login_id='$lid'";
			$r=select($q1);
			if (sizeof($r)>0) {
				$_SESSION['shop_id']=$r[0]['shop_id'];
				$sid=$_SESSION['shop_id'];
				echo $sid;
			}
		    return redirect('shop_home.php');
		}elseif($res[0]['type']=="user") {
			
			echo$f="select * from users where login_id='$lid'";
			$m=select($f);
			if (sizeof($m)>0) 
			{
				$_SESSION['user_id']=$m[0]['user_id'];
				$uid=$_SESSION['user_id'];
				echo $uid;
			}
             return redirect('user_home.php');
			}
			
		}
	}





 ?>
<section class=" slider_section position-relative" style="height: 500px">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                  
<center>
	<h1>login</h1>
	<form method="post">
		<table class="table" style="width: 500px">
			<tr>
				<th>user name</th>
				<td><input type="text" required=""  class="form-control" name="uname"></td>
			</tr>
			<tr>
				<th>password</th>
				<td><input type="password" required=""  class="form-control" name="pwd"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="login" value="submit" class="btn btn-success"></td>
			</tr>
		</table>
	</form>
</center>
                   
                    
                  </div>
                </div>
            </div></div></div></div></div></section>



<?php include 'footer.php' ?>