<?php include 'userheader.php';
extract($_GET);
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
	<h1>view doctor</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>first name</th>
				<th>last name</th>
				<th>qualification</th>
				<th>phone</th>
				<th>email</th>
			</tr>
			<?php 
        $q='select * from doctors';
        $res=select($q);

        foreach ($res as $row) {
        	?>
        	<tr>
        		<td><?php echo $row['first_name'] ?></td>
        		<td><?php echo $row['last_name'] ?></td>
        		<td><?php echo $row['qualification'] ?></td>
        		<td><?php echo $row['phone'] ?></td>
        		<td><?php echo $row['email'] ?></td>
        		<td><a class="btn btn-success" href="user_bookdoctor.php?did=<?php echo $row['doctor_id'] ?>">booking doctor</a></td>
        		<td><a class="btn btn-success" href="user_viewbooking.php?bid=<?php echo $row['doctor_id'] ?>">doctor available</a></td>
        	</tr>
        <?php
    }

			 ?>
		</table>
	</form>
</center>
</div></div></div></div></div></div></div></section>
<?php include 'footer.php' ?>