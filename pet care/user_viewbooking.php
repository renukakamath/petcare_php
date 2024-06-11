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
	<h1>view booking</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
				<th>user</th>
				<th>doctor</th>
				<th>reason of booking</th>
			
				<th>fee amount</th>
			
				<th>booking date</th>
				<th>date</th>
				<th>booking status</th>
				<th>payment status</th>
			</tr>
			<?php 

       $q="select * from booking inner join users using (user_id) inner join doctors using(doctor_id) where booking_id='$bid'";
       $res=select($q);
       $sino=1;

      foreach ($res as $row) {
      	?>
               <tr>
               	<td><?php echo $sino++; ?></td>
               	<td><?php echo $row['firstname'] ?></td>
               	<td><?php echo $row['first_name'] ?></td>
               	<td><?php echo $row['reason_for_booking'] ?></td>
               
               	<td><?php echo $row['fee_amount'] ?></td>
             
               	<td><?php echo $row['booking_date'] ?></td>
               	<td><?php echo $row['available_date'] ?></td>
               	 	<td><?php echo $row['booking_status'] ?></td>
               	 	  <td><?php echo $row['payment_status'] ?></td>
               	 	  <td><a class="btn btn-success" href="user_makepayment.php?bid=<?php echo $row['booking_id'] ?>&aid=<?php echo $row['fee_amount'] ?>">make payment</a></td>
               	 	  </tr>
     <?php
      }
		 ?>
		</table>
	</form>
</center>
</div></div></div></div></div></div></div></section>
<?php include 'footer.php' ?>