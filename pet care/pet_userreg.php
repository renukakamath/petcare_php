<?php include 'publicheader.php' ;


if (isset($_POST['userreg'])) {
	extract($_POST);

	$q="insert into login values(null,'$uname','$pwd','user')";
	$id=insert($q);
	$q1="insert into users values(null,'$id','$fname','$lname','$lat','$lon','$place','$phone','$email')";
	insert($q1);
	alert('successfully');
	return redirect('pet_userreg.php');

	
}




?>
<section class=" slider_section position-relative" style="height: 1000px">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
<center>
	<h1>user registration</h1>
	<form method="post">
		<table class="table" style="width: 500px">
			<tr>
				<th>first name</th>
				<td><input type="text" required=""  class="form-control" name="fname"></td>
			</tr>
			<tr>
				<th>last name</th>
				<td><input type="text" required="" class="form-control" name="lname"></td>
			</tr>
			<tr>
				<th>latitude</th>
				<td><input type="text" required=""  class="form-control" name="lat"></td>
			</tr>
			<tr>
				<th>longitude</th>
				<td><input type="text" required=""  class="form-control" name="lon"></td>
			</tr>
			<tr>
				<th>place</th>
				<td><input type="text" required=""  class="form-control" name="place"></td>
			</tr>
			<tr>
				<th>phone</th>
				<td><input type="text"required="" pattern="[0-9]{10}"  class="form-control" name="phone"></td>
			</tr>
			<tr>
				<th>email</th>
				<td><input type="email" required=""  class="form-control" name="email"></td>
			</tr>
			<tr>
				<th>user name</th>
				<td><input type="text" required=""  class="form-control" name="uname"></td>
			</tr>
			<tr>
				<th>password</th>
				<td><input type="password" required="" class="form-control" name="pwd"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="userreg" value="submit" class="btn btn-success"></td>
			</tr>
		</table>
	</form>
</center>
</div></div></div></div></div></div></div></section>
<?php include 'footer.php' ?>