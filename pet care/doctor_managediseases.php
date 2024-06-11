<?php include 'doctorheader.php';
if (isset($_POST['diseases'])) {
	extract($_POST);

	$q="insert into diseases values(null,'$name','$des','$sym','$medi')";
	insert($q);

	alert('successfully');
	return redirect('doctor_managediseases.php');
}
if (isset($_GET['did'])) {
	extract($_GET);

	$q="delete from diseases where disease_id='$did'";
	delete($q);

	alert('successfully');
	return redirect('doctor_managediseases.php');

}
if (isset($_GET['uid'])) {
	extract($_GET);

	$q="select * from diseases where disease_id='$uid'";
	$res=select($q);
}

if (isset($_POST['update'])) {
	extract($_POST);

	$q="update diseases set name='$name',description='$des',symptoms='$sym',medicines='$medi' where disease_id='$uid'";
	update($q);

	alert('successfully');
	return redirect('doctor_managediseases.php');
}




 ?>
  <section class=" slider_section position-relative" style="height: 520px">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
<center>
	<h1>mamage diseases</h1>
	<form method="post">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px">
			<tr>
				<th>name</th>
				<td><input type="text" name="name" required="" class="form-control" value="<?php echo $res[0]['name'] ?>"></td>
			</tr>
			<tr>
				<th>description</th>
				<td><input type="text" name="des" required="" class="form-control" value="<?php echo $res[0]['description'] ?>"></td>
			</tr>
			<tr>
				<th>symptoms</th>
				<td><input type="text" name="sym" required=""  class="form-control" value="<?php echo $res[0]['symptoms'] ?>"></td>
			</tr>
			<tr>
				<th>medicines</th>
				<td><input type="text" name="medi" required="" class="form-control" value="<?php echo $res[0]['medicines'] ?>"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="update" value="submit" class="btn btn-success"></td>
			</tr>
		</table>
	<?php }else{ ?>
		<table class="table" style="width: 500px">
			<tr>
				<th>name</th>
				<td><input type="text"  required="" class="form-control" name="name"></td>
			</tr>
			<tr>
				<th>description</th>
				<td><input type="text" required="" class="form-control" name="des"></td>
			</tr>
			<tr>
				<th>symptoms</th>
				<td><input type="text" required="" class="form-control" name="sym"></td>
			</tr>
			<tr>
				<th>medicines</th>
				<td><input type="text" required="" class="form-control" name="medi"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="diseases" value="submit" class="btn btn-success"></td>
			</tr>
		</table>
	<?php } ?>
	</form>
</center>
</div></div></div></div></div></div></div></section>
<center>
	<h1>view diseases</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
				<th>name</th>
				<th>description</th>
				<th>symptoms</th>
				<th>medicines</th>
			</tr>
			<?php 
  $q="select * from diseases";
  $res=select($q);
  $sino=1;

  foreach ($res as $row) {
  	?>
  	<tr>
  		<td><?php echo $sino++; ?></td>
  		<td><?php echo $row['name'] ?></td>
  		<td><?php echo $row['description'] ?></td>
  		<td><?php echo $row['symptoms'] ?></td>
  		<td><?php echo $row['medicines'] ?></td>
  		<td><a class="btn btn-success" href="?did=<?php echo $row['disease_id'] ?>">delete</a></td>
  		<td><a class="btn btn-success" href="?uid=<?php echo $row['disease_id'] ?>">update</a></td>
  	</tr>
 <?php 
}

			 ?>
		</table>
	</form>
</center>
<?php include 'footer.php' ?>