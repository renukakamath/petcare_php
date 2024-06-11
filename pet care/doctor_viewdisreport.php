<?php include 'doctorheader.php' ?>
 <section class=" slider_section position-relative" style="height: 520px">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
<center>
	<h1>view diseases report</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
				<th>user</th>
				<th>pet</th>
				<th>type</th>
				<th>breed</th>
				<th>details  of illness</th>
				
				<th>date</th>
        <th>remediess</th>

			</tr>
			<?php 
     $q="select * from reporteddiseases inner join users using(user_id) inner join pets using(pet_id)";
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
           <td><?php echo $row['detailsofillness'] ?></td>
          
           <td><?php echo $row['reported_date'] ?></td>
            
           <?php 

          if ($row['remediesbydoctor']=="pending") {
          	?>
          	<td><a class="btn btn-success" href="doctor_remedies.php?rid=<?php echo $row['reported_id'] ?>">reported diseases</a></td>
          	
          <?php
      }else{
      	?>

          <td><?php echo $row['remediesbydoctor'] ?></td>
          <?php 
      }  ?>
           

     	</tr>
     <?php
 }


			 ?>
		</table>
	</form>
</center>
</div></div></div></div></div></div></div></section>
<?php include 'footer.php' ?>