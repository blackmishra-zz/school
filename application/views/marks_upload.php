<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>plugins/images/favicon.png">
    <title>Student List</title>
    <!-- Bootstrap Core CSS -->
    <?php include_once "header.php";?>

</head>
<body>
	<?php include_once "left_nav.php";?>
	<div id="page-wrapper">
<br>
  <div class="container-fluid">
	<div class="row">
     <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Upload Student Marks</h3><br>
           <!--  <p class="text-muted">this is the sample data here for crm</p> -->
            <form enctype="multipart/form-data" method="post" role="form">
<div class="form-group">
<label for="exampleInputFile">Download Template to upload file</label>
<a href="<?php echo base_url()."uploads/Marks_template.csv";?>">Download</a>
<input type="file" name="file" id="file" size="150">
<p class="help-block">Only CSV File Import.</p>
</div>
<button type="submit" class="btn btn-default" name="submit" value="submit">Upload</button>
</form>
		</div>

	 </div>
                    
</div></div>
</body>
<?php include_once "js.php";?>
</html>