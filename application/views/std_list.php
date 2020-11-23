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
            <h3 class="box-title m-b-0">Student Marks</h3><br>
           <!--  <p class="text-muted">this is the sample data here for crm</p> -->
            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Student ID</th>
                                            <th>Student Name</th>
                                            <th>Subject</th>
                                            <th>Total Marks</th>
                                            <th>Marks Obtained</th>
                                        </tr>
                                    </thead>
                                    <?php
                                      $i=1;
                                      foreach($data as $row)
                                      {
                                      echo "<tr>";
                                      echo "<td>".$i."</td>";
                                      echo "<td>".$row->std_id."</td>";
                                      echo "<td>".$row->std_name."</td>";
                                      echo "<td>".$row->std_sub."</td>";
                                      echo "<td>".$row->tot_marks."</td>";
                                      echo "<td>".$row->marks_obt."</td>";
                                      echo "</tr>";
                                      $i++;
                                      }
                                    ?>
                                </table>
			</div>
		</div>

	 </div>
                    
</div>
</body>
<?php include_once "js.php";?>
</html>