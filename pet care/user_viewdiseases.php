<?php include 'userheader.php' ?>
<section class=" slider_section position-relative" style="height: 750px">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
<center>
	<h1>view diseases</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
				<th> diseases name</th>
				<th>description</th>
				<th>symptoms</th>
				<th>medicines</th>
			</tr>
			<?php 
    $q="select * from diseases ";
    $res=select($q);
    $sino=1;
    foreach ($res as $row) {?>
    	<tr>
    		<td><?php echo $sino++; ?></td>
    		<td><?php echo $row['name'] ?></td>
    		<td><?php echo $row['description'] ?></td>
    		<td><?php echo $row['symptoms'] ?></td>
    		<td><?php echo $row['medicines'] ?></td>
    	</tr>
   <?php  }

			 ?>
		</table>
	</form>
</center>
</div></div></div></div></div></div></div></section>
<?php include 'footer.php' ?>