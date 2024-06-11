<?php include 'adminheader.php';
extract($_GET);

if (isset($_POST['reply'])) {
	extract($_POST);

	echo$q="update feedback set reply='$rep' where feedback_id='$fid'";
       update($q);

      alert('successfully');
      return redirect('admin_viewfeedback.php');
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
	<h1>sent reply</h1>
	<form method="post">
		<table class="table" style="width: 500px">
			<tr>
				<th>reply</th>
				<td><input type="text" required=""  class="form-control" name="rep"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="reply" value="submit" class="btn btn-success"></td>
			</tr>
		</table>
	</form>
</center>
</div></div></div></div></div></div></div></section>
<?php include 'footer.php' ?>