<?php include 'doctorheader.php';
extract($_GET);
if (isset($_POST['remedies'])) {
	extract($_POST);

	$q="update `reporteddiseases` set `remediesbydoctor`='$rem' where reported_id='$rid'";
	update($q);

	alert('successfully');
	return redirect('doctor_viewdisreport.php');

}



 ?>
  <section class=" slider_section position-relative" style="height: 520px">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
<center>
	<h1>sent remedies</h1>
	<form method="post">
		<table class="table" style="width: 500px">
			<tr>
				<th>remedies</th>
				<td><input type="text" required=""  class="form-control" name="rem"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="remedies" value="submit" class="btn btn-success"></td>
			</tr>
		</table>
	</form>
</center>
</div></div></div></div></div></div></div></section>
<?php include 'footer.php' ?>