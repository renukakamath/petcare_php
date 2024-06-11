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
	<h1>view product</h1>
<form>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>shop</th>
			<th>product</th>
			<th>quantity</th>
			<th>amount</th>
		</tr>
		<?php 

       $q="select * from products inner join shops using(shop_id)";
       $res=select($q);
       $sino=1;
       foreach ($res as $row) {
       	?>
       	<tr>
       		<td><?php echo $sino++; ?></td>
       		<td><?php echo $row['shopname'] ?></td>
       		<td><?php echo $row['product'] ?></td>
       		<td><?php echo $row['quantity'] ?></td>
       		<td><?php echo $row['amount'] ?></td>
                  <td><a class="btn btn-success" href="user_buyproduct.php?pid=<?php echo $row['product_id'] ?>&aid=<?php echo $row['amount'] ?>">buy product</a></td>
                  <td><a class="btn btn-success" href="user_vieworder.php?oid=<?php echo $row['product_id'] ?>">view order</a></td>
       	</tr>
       <?php
   }

		 ?>
	</table>
</form>	
</center>
</div></div></div></div></div></div></div></section>
<?php include 'footer.php' ?>