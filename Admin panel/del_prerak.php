<?php
include 'conn.php'; 

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
		html,body{width:100%;height:100%;}
                .fix_nav{margin-top:10%;}
		.win_by_lakshmaji{padding:3em 0em;text-align: center;margin:1.5em 1em;text-shadow:5px 5px 10px black;font-size:18px;}
.wrapper{line-height:12;}






a:hover{text-decoration:none;}


 
        td.a{
    border-style:solid;
    border-width:3px;
    border-color:gainsboro;
    color: azure;
    font-size: 20px;
    padding:10px;
    }
           th.a{
    border-style:solid;
    border-width:3px;
    border-color:gainsboro;
    padding:10px;
    }      
        h3,h1{
            color: azure;
        }

    input[type=submit] {
    width: 100%;
    background-color: tomato;
    color: white;
    padding: 14px 10px;
    margin: 4px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

 input[type=hidden] {
    width: 100%;
    background-color: pink;
    color: white;
    padding: 14px 10px;
    margin: 4px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
  
        input[type=submit]:hover {
    background-color:maroon;
}
        body.bdy {
    width: 100%;
    height: 100%;
    overflow-y: scroll;
}
    </style>
    </head>
 <body class="bdy">
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

    <!--right-->
    <div id="body">
        <div id="left">
        </div></div>
    <?php
    //execute the SQL query and return records
    
    ?>
    <div style="width: 50%; float:left">
    <table id="tbl" width="450" border="0" cellpadding="1" cellspacing="1" class="box" align="left">
        <thead>
            <tr>
                <h1><strong> Article</strong></h1>
            </tr>
            <tr>
                <th width="100" class="a"><h3><strong>Name</strong></h3></th>
                <th width="100" class="a"><h3><strong>Delete</strong></h3></th>

            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM article_upload";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
               //echo $row['id'];
          
            ?>

         <tr>
             <form action="#" method="post">
        <td width="100" class="a"><?=$row['name']?></td>
        <td width="100" class="a"><input type="submit" name="del" value="DELETE"></td>
             <input type="hidden" value="<?=$row['id']?>" name="id">
                 </form>
        </tr>
         <?php } ?>
        </tbody>
    </table>
    </div>
    <div style="width: 50%; float:right">
    
     <table id="tbl" width="450" border="0" cellpadding="1" cellspacing="1" class="box" align="left">
        <thead>
            <tr>
                <h1 align="left"><strong> Image</strong></h1>
            </tr>
            <tr>
                <th width="100" class="a"><h3><strong>Name</strong></h3></th>
                <th width="100" class="a"><h3><strong>Delete</strong></h3></th>

            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM images_upload";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
               //echo $row['id'];
          
            ?>

         <tr>
             <form action="#" method="post">
        <td width="100" class="a"><?=$row['name']?></td>
        <td width="100" class="a"><input type="submit" name="delimg" value="DELETE"></td>
             <input type="hidden" value="<?=$row['id']?>" name="id" onclick="window.location.href=window.location.href">
                 </form>
        </tr>
         <?php } ?>
        </tbody>
    </table>
    </div> 
    </div>
     </div>
 </body>    
</html>

<?php

    
if(isset($_POST['del'])) {
//    echo $_POST['id'];
    $sql = "DELETE FROM article_upload WHERE id =".$_POST['id'];
//    echo $sql;
      
       if(!mysqli_query($conn,$sql )) {
     echo mysqli_error($conn);  
   } else {
      //redirect $_SERVER['REQUEST_URI'];
   }
}
     
     
if(isset($_POST['delimg'])) {
//    echo $_POST['id'];
    $sql = "DELETE FROM images_upload WHERE id =".$_POST['id'];
//    echo $sql;
      
       if(!mysqli_query($conn,$sql )) {
     echo mysqli_error($conn);  
   } else {
      //redirect $_SERVER['REQUEST_URI'];
   }
}
function RefreshWindow()
{
    window.location.upload(true);
}
?>