<?php

ob_start();

include('login/session.php');
include('session.php');
?>
<html>
<head>
    
    <title>ADMIN</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/main.css">
    <!--<link rel="stylesheet" href="../assets/css/upload.css">-->
	<script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/upload.js"></script>
	<link rel="stylesheet" href="assets/css/v.css">
    <style>
      <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
</head>
<body>
        <nav class="navbar navbar-default navbar-fixed-top" style="background:#eeefc6">
  	<div class="container-fluid">
    	<div class="navbar-header">
      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>                        
      		</button>
	      	<a class="navbar-brand" href="index.php">
          		<span class="glyphicon glyphicon-leaf" style="font-size:2.5em"></span>
      		</a>
		<a class="navbar-brand" href="#">
          		<span><i style="font-size:8px;letter-spacing:5px">@My App</i><br> i ADMINSTRATOR</span>
      		</a>
 	</div>
    	<div class="collapse navbar-collapse" id="myNavbar">
	      	<ul class="nav navbar-nav navbar-right">
        		<li ><p style="margin-top:10%;">ADMINSTARTOR<br><i style="font-size:8px;letter-spacing:5px">lakshmaji inno's</i></p></li>
        		<li><a href="login/logout.php"><span class="glyphicon glyphicon-off" style="font-size:2.5em"></span></a></li>
      		</ul>
    	</div>
  	</div>
</nav>
    <div class="fix_nav">
</div>
<div class="container">
<div class="row ">

</div>
</div>
	<div class="row affix-row">
		<div class="col-sm-9 col-md-10 affix-content">
			<div class="container">
				<div class="page-header">
					<?php
						$num_rec_per_page=5;
						include('connection.php');
						$connection = new createConnection(); 			//created a new object
						$connection_ref = $connection->connectToDatabase();
						// $connection->selectDatabase();				//selecting db
						$selected_table_name=$_SESSION["tblname"];
					?><br>
					<button class="btn btn-success disabled text-uppercase"><span class="glyphicon glyphicon-folder-open"></span> <?php echo $selected_table_name;?></button>
				</div>
				<p>
					<?php
						if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
						$start_from = ($page-1) * $num_rec_per_page; 
						$sql = "SELECT * FROM ".$selected_table_name." LIMIT $start_from, $num_rec_per_page"; 
						$rs_result = mysqli_query ($connection_ref, $sql); //run the query
						if($rs_result === FALSE) 
						{ 
    							die(mysqli_error()); // TODO: better error handling
						}
						$num_fields=mysqli_num_fields($rs_result);
						if(isset($_GET['id'])) 
						{
   							@mysqli_query($connection_ref, "DELETE FROM ".$selected_table_name." WHERE id = '".$_GET['id']."'");
   							header("location:index.php");
   							exit();
						}
					?> 
					<div class="progress pull-right">
						<div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
							<a href="cancel.php" style="color:#fff;">CANCEL</a>
						</div>
					</div>
					<div class="panel panel-info">
						<div class="panel-body">
							<div class="progress">
  								<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
    									<span class="sr-only">STATUS</span>
  								</div>
							</div>
							<div class="btn-group" role="group" aria-label="...">
								<button class="btn btn-default disabled">STATUS</button>
								<button class="btn btn-primary disabled">EDIT</button>
							</div>



							<!--<div class="btn-group" role="group" style="float:right;" aria-label="...">
								<a href="../create" class="btn btn-primary">ADD</a>
							</div>-->







<div class="table-responsive">

							<table class="table table-striped colo-md-9">
							<thead>
								<tr>
									<?php
										$width=100/$num_fields;
										// for($y=0;$y<$num_fields;$y++)
										// {
											 $finfo = mysqli_fetch_fields($rs_result);
											 foreach($finfo as $v){
											 	$image_url = $v=="imageUrl"? true:false;
												echo "<th style='width:".$width."%'>".$v->name."</th>";
											 }
											 
											// echo "<th style='width:".$width."%'>".mysql_field_name($rs_result, $y)."</th>";
										// }
										echo "<th style='width:10%;'>action</th></tr></thead><tbody>";

while($row=mysqli_fetch_array($rs_result)) { 
//echo "<b color='red'>".$row[0]."</b>";
?> 
            <tr>
			<?php
			for($l=0;$l<$num_fields;$l++)
			{
			?>
            		<td >
					<a data-toggle="modal" data-target="#myModal<?php echo $row[0];?>">
						<?php if($image_url)
											{
											echo "<img src='".$row[$l]."' width='100px' height='100px'/>";												
											}
											else
											{
												echo $row[$l];
											}

?>
					</a>
				</td>
<?php
if($l== $num_fields-1){
echo "<td><a class='btn btn-danger' href='index.php?id=".$row[0]."'>delete</a></td>";
}


?>				
				<!-- Modal -->
  				<div class="modal fade" id="myModal<?php echo $row[0];?>" role="dialog">
    					<div class="modal-dialog modal-sm">
      					<div class="modal-content">
        						<div class="modal-body">
		<?php //echo $row[$l]." ".$row[0];?>
	      <p>
		<form name='myForm'>
		<input type="hidden" id="imp_ref_len" value="<?php echo $num_fields;?>">
		<?php

			for($w=0;$w<$num_fields;$w++)
			{
if($w==0)
{
continue;
}
				echo "<span class='glyphicon glyphicon-book'></span>";
				echo "<textarea class='form-control nonepty'  id=".$w."  onchange='ajaxFunction(".$row[0].",this.value,".$w.");' >".$row[$l+$w]."</textarea>";	
echo "		<div id='ajaxDiv'></div>";
		
			}

		?>
		</form>
	</p>
        </div>
        <div class="modal-footer">

          <a type="button" class="btn btn-danger" href="index.php">Update</a>
        </div>
      </div>
    </div>
  </div>
			<?php
			}
			?>
            </tr>
<?php 
}; 
?> 



</tbody>
							</table>
</div>


























							<?php 
								$sql = "SELECT * FROM ".$selected_table_name; 
								$rs_result = mysqli_query($connection_ref,$sql); //run the query
								$total_records = mysqli_num_rows($rs_result);  //count number of records
								$total_pages = ceil($total_records / $num_rec_per_page); 
							?>
							<button class="btn btn-warning disabled" type="button" style="background:#ec971f;"><?php echo $selected_table_name; ?> has <span class="badge"><?php echo $total_records; ?></span> entries</button>
							<ul class="pagination pagination-sm pull-right">
								<?php
									echo "<li><a href='index.php?page=1'>".'|'."<span class='glyphicon glyphicon-chevron-left'></span></a></li> "; // Goto 1st page
									for ($i=1; $i<=$total_pages; $i++)
									{ 
            								echo "<li><a href='index.php?page=".$i."'>".$i."</a></li> "; 
									} 
									echo "<li><a href='index.php?page=$total_pages'><span class='glyphicon glyphicon-chevron-right'></span>".'|'."</a> </li>"; // Goto last page
								?>
							</ul>
						</div>
					</div>
				</p>
			</div>
		</div>
	</div>

	<script src="../assets/js/bootstrap.js"></script>
<script>
$(document).ready(function() {
    $("#MyModal").modal();
  });
</script>
</body>
</html>
