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
	<h1>view feedback</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
				<th>description</th>
				
				<th>date</th>
				<th>reply</th>
			</tr>
			<?php 
     $q="select * from feedback";
     $res=select($q);
     $sino=1;
     foreach ($res as $row) {
     	?>
     	<tr>
     		<td><?php echo $sino++; ?></td>
     		<td><?php echo $row['description'] ?></td>
     		
     		<td><?php echo $row['feedback_date'] ?></td>

              <td><?php echo $row['reply'] ?></td>
              <?php 
         if ($row['reply']=="pending") {?>
         	<td><a class="btn btn-success" href="admin_reply.php?fid=<?php echo $row['feedback_id'] ?>">reply</a></td>
        <?php  }


               ?>
     	</tr>
     	
   <?php
     }

			 ?>
		</table>
	</form>
</center>
</div></div></div></div></div></div></div></section>
<?php include 'footer.php' ?>