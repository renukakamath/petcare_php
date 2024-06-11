<?php include 'shopheader.php' ?>
<section class=" slider_section position-relative" style="height: 1000px">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
<center>
	<h1>view payment</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
				<th>booking</th>
				<th>amount</th>
				<th>date</th>
				<th>type</th>
			</tr>
			<?php 
$q="select * from payment inner join booking using (booking_id)";
$res=select($q);
$sino=1;
foreach ($res as $row) {
	?>
	<tr>
		<td><?php echo $sino++; ?></td>
		<td><?php echo $row['reason_for_booking'] ?></td>
		<td><?php echo $row['amount'] ?></td>
		<td><?php echo $row['date'] ?></td>
		<td><?php echo $row['type'] ?></td>
	</tr>
<?php
}


			 ?>
		</table>
	</form>
</center>
</div></div></div></div></div></div></div></section>
<?php include 'footer.php' ?>