<?php include 'adminheader.php' ;

if (isset($_POST['doctreg'])) {
	extract($_POST);

	$q="insert into login values(null,'$uname','$pwd','doctor')";
	$id=insert($q);
	echo$q1="insert into doctors values(null,'$id','$fname','$lname','$qua','$phone','$email')";
	insert($q1);
	alert('sucessfully');
	return redirect('admin_managedoctor.php');
}
if (isset($_GET['did'])) {
	extract($_GET);


	$q="delete from doctors where doctor_id='$did'";
	delete($q);
	alert('sucessfully');
	return redirect('admin_managedoctor.php');
}
if (isset($_GET['uid'])) {
	extract($_GET);
 $q="select * from doctors where doctor_id='$uid'";
 $res=select($q);

}
if (isset($_POST['update'])) {
	extract($_POST);
	$q="update doctors set first_name='$fname',last_name='$lname',qualification='$qua',phone='$phone',email='$email' where doctor_id='$uid'";
	update($q);
}
?>
<section class=" slider_section position-relative" style="height: 750px">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
<center>
	<h1>doctor registration</h1>
	<form method="post">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px">
			<tr>
				<th>first name</th>
				<td><input type="text" name="fname" required="" class="form-control" value="<?php echo $res[0]['first_name'] ?>"></td>
			</tr>
			<tr>
				<th>last name</th>
				<td><input type="text" name="lname" required="" class="form-control" value="<?php echo $res[0]['last_name'] ?>"></td>
			</tr>
			<tr>
				<th>quailification</th>
				<td><input type="text" name="qua" required=""  class="form-control" value="<?php echo $res[0]['qualification'] ?>"></td>
			</tr>
			
				<th>phone</th>
				<td><input type="text" name="phone"  required="" pattern="[0-9]{10}" class="form-control" value="<?php echo $res[0]['phone'] ?>"></td>
			</tr>
			<tr>
				<th>email</th>
				<td><input type="email" name="email"  required="" class="form-control" value="<?php echo $res[0]['email'] ?>"></td>
			</tr>
			
			<tr>
				<td align="center" colspan="2"><input type="submit" name="update" value="submit"></td>
			</tr>
		</table>
	<?php }else{ ?>
		<table class="table" style="width: 500px">
			<tr>
				<th>first name</th>
				<td><input type="text"  class="form-control" required="" name="fname"></td>
			</tr>
			<tr>
				<th>last name</th>
				<td><input type="text"  class="form-control" required="" name="lname"></td>
			</tr>
			<tr>
				<th>quailification</th>
				<td><input type="text"  class="form-control" required="" name="qua"></td>
			</tr>
			
				<th>phone</th>
				<td><input type="text"  class="form-control" required="" pattern="[0-9]{10}" name="phone"></td>
			</tr>
			<tr>
				<th>email</th>
				<td><input type="email"   class="form-control" required="" name="email"></td>
			</tr>
			<tr>
				<th>user name</th>
				<td><input type="text"  class="form-control" required="" name="uname"></td>
			</tr>
			<tr>
				<th>password</th>
				<td><input type="password"  class="form-control" required="" name="pwd"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="doctreg" value="submit" class="btn btn-success"></td>
			</tr>
		</table>
	<?php } ?>
	</form>
</center>
</div></div></div></div></div></div></div></section>
<center>
	<h1>view doctors</h1>
	<form>
		<table  class="table" style="width: 500px">
			<tr>
				<th>sino</th>
				<th>first name</th>
				<th>last name</th>
				<th>qualification</th>
				<th>phone</th>
				<th>email</th>
			</tr>
			<?php 

           $q="select * from doctors";
           $res=select($q);
           $sino=1;

           foreach ($res as $row) {?>
           <tr>
           	     <td><?php echo $sino++; ?></td>
				<td><?php echo $row['first_name'] ?></td>
				<td><?php echo $row['last_name'] ?></td>
				<td><?php echo $row['qualification'] ?></td>
				<td><?php echo $row['phone'] ?></td>
				<td><?php echo $row['email'] ?></td>
				<td><a class="btn btn-success" href="?uid=<?php echo $row['doctor_id'] ?>">update</a></td>
				<td><a class="btn btn-success" href="?did=<?php ECHO $row['doctor_id'] ?>">delete</a></td>
			</tr>
          <?php }


			 ?>
			
		</table>
	</form>
</center>
<?php include 'footer.php' ?>