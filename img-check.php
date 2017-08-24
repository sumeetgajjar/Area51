<?php
require('nav.php');
$host="localhost";
 $username="root";    			// specify the sever details for mysql
 $password="";
 $database="iadmin";
$conn= mysqli_connect($host,$username,$password, $database);
?>
<html>
<head>
    <!-- fancybox CSS library -->
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<!-- JS library -->
<script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
<!-- fancybox JS library -->
<script src="js/jquery.fancybox.js"></script>
    
    <script type="text/javascript">
    $("[data-fancybox]").fancybox({ });
</script>
    <style type="text/css">

.gallery img {
    width: 25%;
    height: 10%;
    height: auto;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
}

        table{
             background-color: #16A085;
        }
tr{
    padding-right: 50px;
   
}
 section.section {
	padding: 170px 0 170px;
}
th{
    padding-right: 50px;
}
</style>

    </head>
    
    <body>
        <br><br>
        <table align="center">
            
            <tr >
        <th><h3><a href="#all">&nbsp;&nbsp;&nbsp;&nbsp; ALL   </a></h3></th>
            <th><h3><a href="#ds"> DROP SURVEY   </a></h3></th>
            <th><h3><a href="#ri"> RIG INSPECTION   </a></h3></th>
            <th><h3><a href="#es">  ELECTRICAL SAFETY AUDITS   </a></h3></th>
             <th><h3> <a href="#ea">  ENERGY AUDITS   </a></h3></th>
                </tr>
            </table>
        <!-- all-->
        <section id="all" class="section">
    <div class="container">
        <div class="row">
		<div class="container">
    <div class=" col-sm-12">
        <?php
        //Include database configuration file
        
        //get images from database
        $query = $conn->query("SELECT * FROM images_upload");
        
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageThumbURL = 'upload/'.$row["name"];
                $imageURL = 'upload/'.$row["name"];
        ?>
            <a href="<?php echo $imageURL; ?>" data-fancybox="group"  >
                <img src="<?php echo $imageThumbURL; ?>" height="200px" width="200px" alt="" />
            </a>
        <?php }
        } ?>
    </div>
</div>
        </div>
            </div>
            </section>
        <!--drop survey-->
             <section id="ds" class="section">
    <div class="container">
      <div class="col-sm-12">
		<div class="span10 offset1">
    <div class="gallery">
        <?php
        //Include database configuration file
        
        //get images from database
        $query = $conn->query("SELECT * FROM images_upload where Services ='ds'");
        
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageThumbURL = 'upload/'.$row["name"];
                $imageURL = 'upload/'.$row["name"];
        ?>
            <a href="<?php echo $imageURL; ?>" data-fancybox="group"  >
                <img src="<?php echo $imageThumbURL; ?>" height="200px" width="200px" alt="" />
            </a>
        <?php }
        } ?>
    </div>
          </div></div></div>         
            </section>
        
        <!--rig inspection-->
            <section id="ri" class="section">
    <div class="container">
        <div class="col-sm-12">
		<div class="span10 offset1">
    <div class="gallery">
        <?php
        //Include database configuration file
        
        //get images from database
        $query = $conn->query("SELECT * FROM images_upload where Services ='rs'");
        
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageThumbURL = 'upload/'.$row["name"];
                $imageURL = 'upload/'.$row["name"];
        ?>
            <a href="<?php echo $imageURL; ?>" data-fancybox="group"  >
                <img src="<?php echo $imageThumbURL; ?>" height="200px" width="200px" alt="" />
            </a>
        <?php }
        } ?>
    </div>
</div>
        </div>
            </div>
            </section>
        <!--electical safety audit-->
            <section id="es" class="section">
    <div class="container">
        <div class="col-sm-12">
		<div class="span10 offset1">
    <div class="gallery">
        <?php
        //Include database configuration file
        
        //get images from database
        $query = $conn->query("SELECT * FROM images_upload where Services ='es'");
        
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageThumbURL = 'upload/'.$row["name"];
                $imageURL = 'upload/'.$row["name"];
        ?>
            <a href="<?php echo $imageURL; ?>" data-fancybox="group"  >
                <img src="<?php echo $imageThumbURL; ?>"  height="200px" width="200px" alt="" />
            </a>
        <?php }
        } ?>
    </div>
</div>
        </div>
            </div>
            </section>
        <!--energy audit-->
            <section id="ea" class="section">
    <div class="container">
        <div class="col-sm-12">
		<div class="span10 offset1">
    <div class="gallery">
        <?php
        //Include database configuration file
        
        //get images from database
        $query = $conn->query("SELECT * FROM images_upload where Services ='ed'");
        
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageThumbURL = 'upload/'.$row["name"];
                $imageURL = 'upload/'.$row["name"];
        ?>
            <a href="<?php echo $imageURL; ?>" data-fancybox="group"  >
                <img src="<?php echo $imageThumbURL; ?>"  height="200px" width="200px" alt="" />
            </a>
        <?php }
        } ?>
    </div>
</div>
        </div>
            </div>
            </section>
        <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
    </body>
</html>