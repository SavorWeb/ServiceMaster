<?php include("inc/head.html"); ?>

	<div class="wrapper">
	
	<div class="pageimg">
		<img src="assets/img/techcustomer.jpg" alt="A Service Master!">
	</div>

	<div class="padded"> <!-- START CONTENT -->
		
		<section class="aside-layout">
			<article id="contact-info" class="editable">
				<h1>Contact us</h1>
				<p>
					1007 N. Boulder Ct. <br>
					Post Falls, ID 83814 <br>
				</p>
				<p>
					<b>North Idaho</b> (208) 667-6633 <br>
					<b>Washington</b> (509) 927-9416 <br>
					<b>Toll Free</b> (800) 737-8994 <br>
					<b>Fax number</b> (208) 262-9315
				</p>
			</article>
			<article id="the-form">
				<h1>Email us</h1>
		        <?php if(isset($emailSent) && $emailSent == true) { ?>
		            <p class="info">Your email was sent. Huzzah!</p>
		        <?php } else { ?>

		        <div id="contact-form">
		          <?php if(isset($hasError) || isset($captchaError) ) { ?>
	                    <p class="alert">Error submitting the form</p>
	                <?php } ?>
		        
		          <form id="contact-us" action="form.php" method="post">
		            <div class="formblock">
		              <label class="screen-reader-text">Name</label>
		              <input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="txt requiredField" placeholder="Name:" />
		              <?php if($nameError != '') { ?>
		                <br /><span class="error"><?php echo $nameError;?></span> 
		              <?php } ?>
		            </div>
		                        
		            <div class="formblock">
		              <label class="screen-reader-text">Email</label>
		              <input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="txt requiredField email" placeholder="Email:" />
		              <?php if($emailError != '') { ?>
		                <br /><span class="error"><?php echo $emailError;?></span>
		              <?php } ?>
		            </div>
		                        
		            <div class="formblock">
		              <label class="screen-reader-text">Message</label>
		               <textarea name="comments" id="commentsText" class="txtarea requiredField" placeholder="Message:"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
		              <?php if($commentError != '') { ?>
		                <br /><span class="error"><?php echo $commentError;?></span> 
		              <?php } ?>
		            </div>
		                        
		              <button name="submit" type="submit" class="subbutton">Send Email</button>
		              <input type="hidden" name="submitted" id="submitted" value="true" />
		          </form>     
		        </div>
		        
		      <?php } ?><!-- End #contact -->
			</article>
		</section>

		<aside>
			<h2>Helpful Links</h2>
			<ul>
				<li><a href="http://www.servicemasterclean.com/locator/franchiselocator2.aspx">Locate a ServiceMaster</a></li>
				<li><a href="http://www.servicemaster.com">ServiceMaster Corporate</a></li>
				<li><a href="http://www.iicrc.org">IICRC</a></li>
				<li><a href="http://www.spokanecleanair.org">Spokane Regional Clean Air Agency</a></li>
			</ul>
		</aside>


	</div> <!-- END MAIN CONTENT -->

	<?php include("inc/foot.html"); ?>