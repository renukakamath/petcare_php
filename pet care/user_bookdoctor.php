<?php include 'userheader.php';
extract($_GET);
$uid=$_SESSION['user_id'];

if (isset($_POST['booking'])) {
	extract($_POST);

	$q="insert into booking values(null,'$uid','$doctor','$res','pending','$amo','pending',curdate(),'$date')";
	insert($q);
	alert('successfully');
	return redirect('user_bookdoctor.php');
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
	<h1>booking doctor</h1>
	<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>doctor</th>
			<td>
				<select required="" class="form-control" name="doctor">
					<option>select</option>
					<?php 

                   $q="select * from doctors";
                   $res=select($q);
                   foreach ($res as $row) {
                   	?>

                   	<option value="<?php echo $row['doctor_id'] ?>"><?php echo $row['first_name'] ?></option>
                   <?php
               }


					 ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>reason for booking</th>
			<td><input type="text" required=""  class="form-control" name="res"></td>
		</tr>
		<tr>
			<th>amount</th>
			<td><input type="number" required="" class="form-control" name="amo"></td>
		</tr>
		<tr>
			<th>available date</th>
			<td><input type="date" required="" class="form-control" name="date"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="booking" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
</form>
</center>
</div></div></div></div>></div></div></div></section>
<?php include 'footer.php' ?>