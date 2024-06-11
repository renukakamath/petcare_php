<?php include 'userheader.php';
extract($_GET);
$uid=$_SESSION['user_id'];

if (isset($_POST['pets'])) {
	extract($_POST);


$dir = "image/";
	$file = basename($_FILES['imgg']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("image_").".".$file_type;
	if(move_uploaded_file($_FILES['imgg']['tmp_name'], $target))
	{
	$q="insert into pets values(null,'$uid','$name','$type','$breed','$age','$details','$target')";
      insert($q);

	alert('insertsucessfully');
	return redirect('user_managepet.php');
	}
		else
		{
			echo "file uploading error occured";
		}
}
if (isset($_GET['did'])) {
	extract($_GET);

	$q="delete from pets where pet_id='$did'";
	delete($q);
alert('successfully');
	return redirect('user_managepet.php');

}
if (isset($_GET['uid'])) {
	extract($_GET);

	$q="select * from pets where pet_id='$uid'";
	$res=select($q);


}
if (isset($_POST['update'])) {
	extract($_POST);

	echo$q="update pets set name='$name',type='$type',breed='$breed',age='$age',other_details='$details',image='$imgg' where pet_id='$uid'";
	update($q);
	alert('successfully');
	return redirect('user_managepet.php');

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
	<h1> manage pets</h1>
	
	<form method="post" enctype="multipart/form-data">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px">
			<tr>
				<th>pet name</th>
				<td><input type="text" required="" name="name"  class="form-control" value="<?php echo $res[0]['name'] ?>"></td>
			</tr>
			<tr>
				<th> pet type</th>
				<td><input type="text" required="" name="type"  class="form-control" value="<?php echo $res[0]['type'] ?>"></td>
			</tr>
			<tr>
				<th>breed</th>
				<td><input type="text" required="" name="breed"  class="form-control" value="<?php echo $res[0]['breed'] ?>"></td>
			</tr>
			<tr>
				<th>age</th>
				<td><input type="number" required="" name="age"  class="form-control" value="<?php echo $res[0] ['age']?>"></td>
			</tr>
			<tr>
				<th>other details</th>
				<td><input type="text" required="" name="details"  class="form-control" value="<?php echo $res[0]['other_details'] ?>"></td>
			</tr>
			<tr>
				<th>image</th>
				<td><input type="file" required="" name="imgg"  class="form-control" value="<?php echo $res[0]['image'] ?>"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="update" value="submit"></td>
			</tr>

		</table>
	<?php }else{?>
		<table class="table" style="width: 500px">
			<tr>
				<th>pet name</th>
				<td><input type="text" required="" class="form-control" name="name"></td>
			</tr>
			<tr>
				<th> pet type</th>
				<td><input type="text" required="" class="form-control" name="type"></td>
			</tr>
			<tr>
				<th>breed</th>
				<td><input type="text" required="" class="form-control" name="breed"></td>
			</tr>
			<tr>
				<th>age</th>
				<td><input type="number" required="" class="form-control" name="age"></td>
			</tr>
			<tr>
				<th>other details</th>
				<td><input type="text" required="" class="form-control" name="details"></td>
			</tr>
			<tr>
				<th>image</th>
				<td><input type="file" required="" class="form-control" name="imgg"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="pets" value="submit" class="btn btn-success"></td>
			</tr>

		</table>
<?php } ?>
	</form>
</center>
</div></div></div></div></div></div></div></section>
<center>
<h1>view pets</h1>
<form>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>user name</th>
			<th>pet name</th>
			<th>pet type</th>
			<th>breed</th>
             <th>age</th>
             <th>other details</th>
             <th>image</th>
		</tr>
		<?php 
     $q="SELECT * FROM pets INNER JOIN users USING(user_id)";
     $res=select($q);
     $sino=1;
     foreach ($res as $row) {
     	?>
     	<tr>
     		<td><?php echo $sino++; ?></td>
             <td><?php echo $row['firstname'] ?></td>
     		<td><?php echo $row['name'] ?></td>
     		<td><?php echo $row['type'] ?></td>
     		<td><?php echo $row['breed'] ?></td>
     		<td><?php echo $row['age'] ?></td>
     		<td><?php echo $row['other_details'] ?></td>
     		<td><img src="<?php echo $row['image'] ?>" width="100" height="100"></td>
     		<td><a class="btn btn-success" href="?did=<?php echo $row['pet_id'] ?>">delete</a></td>
     		<td><a class="btn btn-success" href="?uid=<?php echo $row['pet_id'] ?>">update</a></td>
     	</tr>
     <?php
 }

		 ?>
	</table>
</form>
</center>
<?php include 'footer.php' ?>