<?php include 'adminheader.php' ?>
<section class=" slider_section position-relative" style="height: 500px">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
<center>
	<h1> view users</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
				<th>first name</th>
				<th>last name</th>
				<th>latituide</th>
				<th>longitude</th>
				<th>place</th>
				<th>phone</th>
				<th>email</th>
			</tr>
			<?php 
         $q="select * from users";
         $res=select($q);
         $sino=1;

         foreach ($res as $row) {
         	?>
         	<tr>
         		<td><?php echo $sino++; ?></td>
         		<td><?php echo $row['firstname'] ?></td>
         		<td><?php echo $row['lastname'] ?></td>
         		<td><?php echo $row['latituide'] ?></td>
         		<td><?php echo $row['longitude'] ?></td>
         		<td><?php echo $row['place'] ?></td>
         		<td><?php echo $row['phone'] ?></td>
         		<td><?php echo $row['email'] ?></td>
         	</tr>
       <?php  
   }



			 ?>
		</table>
	</form>
</center>
</div></div></div></div></div></div></div></section>
<?php include 'footer.php' ?>