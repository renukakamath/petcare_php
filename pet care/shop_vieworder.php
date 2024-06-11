<?php include 'shopheader.php';
extract($_GET);
if (isset($_GET['oid'])) {
	extract($_GET);


	$q="UPDATE `order` SET `status`='accept' WHERE order_id='$oid'";
	update($q);
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

	<h1>view orders</h1>
	<form>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>product</th>
			<th>quantity</th>
			<th>total</th>
			<th>date</th>
			<th>status</th>
		</tr>
		<?php 

         $q="SELECT * FROM `order` INNER JOIN products USING(product_id)";
         $res=select($q);
          $sino=1;
         foreach ($res as $row) {
         	?>
            <tr>
            	<td><?php echo $sino++; ?></td>
            	<td><?php echo $row['product'] ?></td>
            	<td><?php echo $row['quantity'] ?></td>
            	<td><?php echo $row['total'] ?></td>
            	<td><?php echo $row['date'] ?></td>
              <?php 

                   if ($row['status']=="pending") {
                   	?>
                   	<td><a class="btn btn-success" href="?oid=<?php echo $row['order_id'] ?>">accept</a></td>
                   <?php
               }else{

            	 ?>
            	<td><?php echo $row['status'] ?></td>
            <?php } ?>
            </tr>
         
         <?php
     }


		 ?>
	</table>
</form>
</center>
</div></div></div></div></div></div></div></section>
<?php include 'footer.php' ?>