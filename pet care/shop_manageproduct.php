<?php include 'shopheader.php';
extract($_GET);
$sid=$_SESSION['shop_id'];


if (isset($_POST['product'])) {
	extract($_POST);

	$q="insert into products values(null,'$sid','$prod','$quantity','$amount')";
	insert($q);
}
if (isset($_GET['did'])) {
	extract($_GET);

    $q="delete from products where product_id='$did'";
    delete($q);

    alert('deleted successfully');
    return redirect('shop_manageproduct.php');


}
if (isset($_GET['uid'])) {
extract($_GET);

$q="select * from products where product_id='$uid'";
$res=select($q);
}

if (isset($_POST['update'])) {
	extract($_POST);


	$q="update products set product='$prod', quantity='$quantity',amount='$amount' where  product_id='$uid'";
	update($q);
	alert('update successfully');
	return redirect('shop_manageproduct.php');
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
<h1>	product</h1>

<form method="post">	
  <?php if (isset($_GET['uid'])) { ?>
<table class="table" style="width: 500px">	
    <tr>	
       <th>product</th>
       <td>	<input type="text" name="prod" required=""  class="form-control" value="<?php echo $res[0]['product'] ?>"></td>
   </tr>
   <tr>	
   	<th>quantity</th>
   	<td><input type="text" name="quantity" required=""  class="form-control" value="<?php echo $res[0]['quantity'] ?>"></td>
   </tr>
   <tr>
   	<th>amount</th>
   	<td><input type="text" name="amount" required="" class="form-control" value="<?php echo $res[0]['amount'] ?>"></td>
   </tr>
   <tr>
   <td align="center" colspan="2">	<input type="submit" name="update" value="submit"></td>	
   </tr>

</table>
<?php }else{?>
<table class="table" style="width: 500px">	
    <tr>	
       <th>product</th>
       <td>	<input type="text" required="" class="form-control" name="prod"></td>
   </tr>
   <tr>	
   	<th>quantity</th>
   	<td><input type="text" required="" class="form-control" name="quantity"></td>
   </tr>
   <tr>
   	<th>amount</th>
   	<td><input type="text" required="" class="form-control" name="amount"></td>
   </tr>
   <tr>
   <td align="center" colspan="2">	<input type="submit" name="product" value="submit" class="btn btn-success"></td>	
   </tr>

</table>
<?php } ?>
</form>
</center></div></div></div></div></div></div></div></section>
<center>
<h1>manage shop product</h1>
<form>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>shop name</th>
			<th>product</th>
			<th>quantity</th>
			<th>amount</th>
		</tr>
			<?php 

     $q="select * from products inner join shops using (shop_id) ";
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
     		<td><a class="btn btn-success" href="?did=<?php echo $row['product_id'] ?>">delete</a></td>
     		<td><a class="btn btn-success" href="?uid=<?php echo $row['product_id'] ?>">update</a></td>
     	</tr>
     <?php
 }


			 ?>
		</tr>
	</table>
</form>

</center>
<?php 	include 'footer.php' ?>