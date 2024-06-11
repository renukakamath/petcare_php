<?php include 'userheader.php';
extract($_GET);
	$uid=$_SESSION['user_id'];
if (isset($_POST['report'])) {
	extract($_POST);

	$q="insert into `reporteddiseases` values(null,'$uid','$pet','$details','pending','$date')";
	insert($q);
	alert('successfully');
	return redirect('user_reportdisease.php');

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
	<h1>report diseases</h1>
	<form method="post">
		<table class="table" style="width: 500px">
			<tr>
				<th>pets</th>
				<td>
					<select required="" class="form-control" name="pet">
						<option>select</option>
						<?php 

                    $q="select * from pets";
                    $res=select($q);
                    foreach ($res as $row) {
                    	?>
                    	<option value="<?php echo $row['pet_id'] ?>"><?php echo $row['breed'] ?></option>
                    <?Php
                }

						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<th>details of illness</th>
				<td><input type="text" required="" class="form-control" name="details"></td>
			</tr>
			
			<tr>
				<th>reported date</th>
				<td><input type="date" required=""  class="form-control" name="date"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="report" value="submit"></td>
			</tr>
		</table>
	</form>
</center>
</div></div></div></div></div></div></div></section>
<center>
	<h1>view report diseases</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
				<th>user name</th>
				<th>pets</th>
				<th>details of illness</th>
				<th>remedies by doctor</th>
				<th>reported date</th>
			</tr>
			<?php 
$q="SELECT * FROM reporteddiseases  INNER JOIN users USING(user_id) INNER JOIN pets USING (pet_id)";
$res=select($q);
$sino=1;
foreach ($res as $row) {
	?>
	<tr>
		<td><?php echo $sino++; ?></td>
		<td><?php echo $row['firstname'] ?></td>
		<td><?php echo $row['name'] ?></td>
		<td><?php echo $row['detailsofillness'] ?></td>
		<td><?php echo $row['remediesbydoctor'] ?></td>
		<td><?php echo $row['reported_date'] ?></td>
	</tr>
<?php
}




			 ?>
		</table>
	</form>
</center>
<?php include 'footer.php' ?>