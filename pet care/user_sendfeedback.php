<?php include 'userheader.php' ;
extract($_GET);
$uid=$_SESSION['user_id'];


if (isset($_POST['feedback'])) {
	extract($_POST);

	$q="insert into feedback values(null,'$uid','$des','pending',curdate())";
	insert($q);
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
	<h1>view feedback</h1>
	<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>description</th>
			<td><input type="text" required="" class="form-control" name="des"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit"  name="feedback" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
</form>
</center>
</div></div></div></div></div></div></div></section>
<center>
	<h1>view reply</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
				<th>user</th>
				<th>description</th>
				<th>date</th>
				<th>reply</th>
			</tr>
		<?php 
     $q="select * from feedback inner join users using (user_id)";
     $res=select($q);
     $sino=1;
     foreach ($res as $row) {
     	?>
     <tr>
     	<td><?php echo $sino++; ?></td>
     	<td><?php echo $row['firstname'] ?></td>
     	<td><?php echo $row['description'] ?></td>
     	<td><?php echo $row['feedback_date'] ?></td>
     	<td><?php echo $row['reply'] ?></td>
     </tr>
     <?php
 }


		 ?>
		</table>
	</form>
</center>

<?php include 'footer.php' ?>