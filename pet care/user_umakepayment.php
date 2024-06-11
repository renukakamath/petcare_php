<?php include 'userheader.php';
extract($_GET);
if (isset($_POST['payment'])) {
	extract($_POST);

	$q="insert into payment values(null,'$oid','$tid',curdate(),'order')";
	insert($q);
}






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
	<h1>make payment</h1>
	<form method="post">
		<table class="table" style="width: 500px">
			<tr>
				<th>card number</th>
				<td><input type="text" required=""  class="form-control" name="card"></td>
			</tr>
			<tr>
				<th>cv</th>
				<th><input type="text" required=""  class="form-control" name="cv"></th>
			</tr>
			<tr>
				<th>amount</th>
				<th><input type="text" required="" class="form-control" value="<?php echo $tid;?>" name="amo"></th>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="payment" value="submit" class="btn btn-success"></td>
			</tr>
		</table>
	</form>
</center>
</div></div></div></div></div></div></div></section>
<?php include 'footer.php' ?>