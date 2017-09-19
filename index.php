<?php
require('nav.php');
?>
<!DOCTYPE html>
<html lang="en">

  <head>
      <style>
 @import url(https://fonts.googleapis.com/css?family=Istok+Web);
  @keyframes slidy {
  0% { left: 0%; }
  20% { left: 0%; }
  25% { left: -100%; }
  45% { left: -100%; }
  50% { left: -200%; }
  70% { left: -200%; }
  75% { left: -300%; }
  95% { left: -300%; }
  100% { left: -400%; }
  }
  * {
    box-sizing: border-box;
  }
  body, figure { 
    margin: 0; background: #101010;
    font-family: Istok Web, sans-serif;
    font-weight: 100;
  }
  div#captioned-gallery { 
    width: 100%; overflow: hidden; 
  }
  figure.slider { 
    position: relative; width: 500%;
    font-size: 0; animation: 20s slidy infinite; 
  }
  figure.slider figure { 
    width: 20%; height: auto;
    display: inline-block;  position: inherit; 
  }
  figure.slider img { width: 100%; height: 93%; }
  figure.slider figure figcaption { 
    position: absolute; bottom: 0;
    background: rgba(0,0,0,0.4);
    color: #fff; width: 100%;
    font-size: 2rem; padding: .6rem; 
  }
          .container{
              padding: inherit;
          }
          
          
      </style>
    </head>
      <body>


<div id="captioned-gallery">
	<figure class="slider">
		<figure>
			<img src="1.jpg" alt>
			<figcaption>Hobbiton, New Zealand</figcaption>
		</figure>
		<figure>
			<img src="2.jpg" alt>
			<figcaption>Wanaka, New Zealand</figcaption>
		</figure>
		<figure>
			<img src="3.jpg" alt>
			<figcaption>Utah, United States</figcaption>
		</figure>
		<figure>
			<img src="4.jpg" alt>
			<figcaption>Bryce Canyon, Utah, United States</figcaption>
		</figure>
		<figure>
			<img src="1.jpg" alt>
			<figcaption>Hobbiton, New Zealand</figcaption>
		</figure>
	</figure>
</div>
       

<!-- end section: team -->
        <?php
require('conn.php');
?>
<!-- section: blog -->
<section id="blog" class="section green">
<div class="container">
    <h4>Our Blog </h4>
                 <?php
    //execute the SQL query and return records
    $result = mysqli_query($conn,"SELECT * FROM article_upload order by id desc");
    ?>
    
    <table>
    
 <tr>
<td>
     <?php
     $i=1;
      while ($row = mysqli_fetch_assoc($result)) { 
          if( $i<4){
          $cont =  $row['content'];
     ?>
     <div class="span3">
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
                    <h5><strong><h3><?php echo $row['name']; ?></h3></strong></h5>
					<a href="javascript:void(0)" onclick="document.getElementById('id_<?php echo $i ?>').style.display='block';document.getElementById('fade').style.display='block'">Read more</a>
				</div>
                 
			</div>
		</div>        
     <?php $i=$i+1 ?>
     <?php  } } ?>
    </td> </tr>
        </table>
	
        
       <!-- <a href="article.html"><button class="w3-button w3-xlarge w3-circle w3-teal" style="float:right;">+</button></a>-->
	
	
	<div class="blankdivider30"></div>
	<div class="aligncenter">
		<a href="retrivefile.php" class="btn btn-large btn-theme">More blog post</a>
	</div>
</div>
</section>
<!-- end spacer section -->
          <section id="about" class="section">
<div class="container">
	<h4>Who We Are</h4>
	<div class="row">
		<div class="span5 offset1">
			<div>
				<h2>We live with <strong>creativity</strong></h2>
				<p>
					With an in-depth knowledge & experience of decades in Oil sector operations, PEIL has evolved from a small service provider to become one of the biggest house covering need based Services of Safety Audit / Energy Audit, Consultancy, QRA, ERDMP, Hazop study, Training, TPI Services, Valuation having served more than 5000 industries spread all over the country.
                    Zenith Professional Training (ZPT) has carved an enviable reputation as a leading provider of corporate training in marketing, management, Leadership, Accounting, Public relations and Security Management.
                    DROPS is an industry-wide initiative focused on preventing dropped objects, with the ultimate goal of delivering a second nature dropped objects prevention strategy across our industry.

				</p>
			</div>
		</div>
		<div class="span6">
			<div class="aligncenter">
				<img src="img\icons\oilgasicon.png" alt="" />
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span2 offset1 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="img\team\image1.jpg" alt="" />
				<h3>Rachel Dsouza</h3>
					Art director
			</div>
		</div>
		<div class="span2 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="img\team\image2.jpg" alt="" />
				<h3>Mike Doe</h3>
					Web developer
			</div>
		</div>
		<div class="span2 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="img\team\image3.jpg" alt="" />
				<h3>Neil Doe</h3>
					Web designer
			</div>
		</div>
		<div class="span2 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="img\team\image4.jpg" alt="" />
				<h3>Mark Joe</h3>
					UI designer
			</div>
		</div>
		<div class="span2 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="img\team\image5.jpg" alt="" />
				<h3>Stephen B</h3>
					Digital imaging
			</div>
		</div>
	</div>
</div>
<!-- /.container -->
</section>
<!-- section: contact -->
<section id="contact" class="section green">
<div class="container">
	<h4>Get in Touch</h4>
	<p>
        
	       Office : 20-22 Wenlock Road, London, England N1 7GU, U.K.<br>
          
           E-mail : admin@unitedgulfsafety.com
    
    </p>
	<div class="blankdivider30">
	</div>
	<div class="row">
		<div class="span12">
			<div class="cform" id="contact-form">
				<div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
				<form action="" method="post" role="form" class="contactForm">
					<div class="row">
						<div class="span6">
							<div class="field your-name form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
							</div>
							<div class="field your-email form-group">
								<input type="text" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
							</div>
                            <div class="field subject form-group">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
							</div>

                        </div>
						<div class="span6">
							
                            <div class="field message form-group">
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div><br><br>
							</div>
							<input type="submit" value="Send message" class="btn">
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- ./span12 -->
	</div>
</div>
</section>
<footer>
<div class="container">
	<div class="row">
		<div class="span6 offset3">
                <a href="#"><i class="icon-circled icon-bgdark icon-facebook icon-2x"></i></a>
			<p class="copyright">
				<center>&copy; UnitedGulfSafety All rights reserved.</center>
			</p>
		</div>
	</div>
</div>
<!-- ./container -->
</footer>
<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>



  </body>

</html>
