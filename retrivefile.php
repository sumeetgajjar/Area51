<?php
require('nav.php');
require('conn.php');
?>
 <!DOCTYPE html>
 <html >
 <head>
    <title>Home</title>
<style>
    .span3{
        padding: inherit;
    }
     </style>
 </head>
 <body>
    <!--right-->
    <div id="body">
        <div id="left">
        </div></div>
    <?php
    //execute the SQL query and return records
    $result = mysqli_query($conn,"SELECT * FROM article_upload ");
    ?>
     <?php
     $i=1;
      while ($row = mysqli_fetch_assoc($result)) { 
          $cont =  $row['content'];
     ?>
     <table>
         <tr> 
     <div class="span3" align="center">
			<div class="home-post">
				<div class="post-image">
					<img class="max-img" src="img/blog/img1.jpg" alt="" />
				</div>
				<div class="post-meta">
					<i class="icon-file icon-2x"></i>
					<span class="tags"><B>BLOG</B></span>
				</div>
                <!--popup the box-->
                <div id="id_<?php echo $i ?>" class="white_content"> <h3><?php echo $row['name']; ?><a href="javascript:void(0)" onclick="document.getElementById('id_<?php echo $i ?>').style.display='none';document.getElementById('fade').style.display='none'"><button class="bt">Close</button></a></h3><?php  echo  "$cont"; ?> 
                </div> 
                <!--fade the background-->
                <div id="fade" class="black_overlay"></div>
				<div class="entry-content">
                    <h5><strong><a href="#"><h3><?php echo $row['name']; ?></h3></a></strong></h5>
					<a href="javascript:void(0)" onclick="document.getElementById('id_<?php echo $i ?>').style.display='block';document.getElementById('fade').style.display='block'">Read more</a>
				</div>
			</div>
		</div>
             </tr>
         </table>
     
     <?php $i=$i+1 ?>
     <?php  } ?>
     <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
 </body>
 </html>
		