<?php include 'userheader.php';
extract($_GET);

if (isset($_POST['product'])) {
	extract($_POST);

	$q="INSERT INTO `order`  VALUES(NULL,'$pid','$quantity','$aid',CURDATE(),'pending')";
	insert($q);
	alert('successfully');
	return redirect('user_vieworder.php');
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
	<h1>buy product</h1>
	<form method="post">
		<table  class="table" style="width: 500px">
			<tr>
				<th>quantity</th>
				<td><input type="text" required="" class="form-control"   name="quantity"></td>
			</tr>
			<tr>
				<th>total</th>
				<td><input type="text" required="" class="form-control" value="<?php echo $aid;?>" name="total"></td>
			</tr>
			
			<tr>
				<td align="center" colspan="2"><input type="submit" name="product" value="submit" class="btn btn-success"></td>
			</tr>
		</table>
	</form>
</center>
</div></div></div></div></div></div></div></section>
<?php include 'footer.php' ?>