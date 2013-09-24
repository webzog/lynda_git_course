<html>
<head>
<title>Contact Information</title>
<meta name="keywords" content="Turlock, furniture, Woods, gallery, highway, railroad tracks, downtown Turlock, bedroom, dining room, living room, mattresses, clocks, pictures, rugs, office, home office, entertainment centers, accents, Take a Walk in The Woods, Where families furnish their futures.
 3 unique styles, hometown, grass roots, family owned, sofa, chair couch, sectional, Lane, Universal, La-Z-Boy Broyhill Tempurpedic Spring Air Sealy, Serta, Flexsteel, Winners Only, Golden Oak, Hooker, Stanley, Lexington, Pulaski, Howard Miller, Ashley, Steinworld, Rowe" />
<meta name="description" content="Woods Furniture Galleries feature furniture for every room in your home, plus quality name brand mattresses, and unique decorating accessories." />
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<script language="javascript" src="js/jquery.min.js"></script>
<script language="javascript" src="js/jquery.cycle.min.js"></script>
<script language="javascript" type="text/javascript">
$('#headerSlide').cycle('fade');
</script>
</head>
<body>
	<div id="container">
	<table id="logo" cellspacing="0" cellpadding="0" border="0" class="body">
		<tr>
			<td><img src="images/logo.jpg" height="125" width="766" alt="Woods Furniture" /></td>
		</tr>
	</table>
	<table id="nav" cellspacing="0" cellpadding="0" border="0" class="body">
		<tr>
			<td><a href="index.html"><img src="images/homepage.jpg" height="52" width="148" alt="Homepage" /></a></td>
			<td><a href="promotions.html"><img src="images/promos.jpg" height="52" width="162" alt="Current Promotions" /></a></td>
			<!--<td><a href="outlet-center.html"><img src="images/outlet-center.jpg" height="52" width="152" alt="Outlet Center" /></a></td>-->
      <td><a href="dry-creek-mini-barns.html"><img src="images/nav-mini-barns.jpg" height="52" width="152" alt="Mini Barns" /></a></td>
			<td><a href="manufacturers.html"><img src="images/manufacturers.jpg" height="52" width="145" alt="Manufacturers" /></a></td>
			<td><a href="contact.php"><img src="images/contact.jpg" height="52" width="159" alt="Contact Information" /></a></td>
		</tr>
	</table>
	<table id="photos" cellspacing="0" cellpadding="0" border="0" class="body">
	<tr>
			<td height="250" valign="top">
      	<?php include("includes/header-slide.html"); ?>
      </td>
		</tr>
	</table>
  <table cellspacing="0" cellpadding="0" border="0" class="body">
  	<tr>
    	<td align="center" id="headerSlideTag"><p>Woods Furniture Gallery, Taylor Ct., Turlock, Phone 209-656-2392</p></td>
    </tr>
  </table>
	<table id="content" cellspacing="0" cellpadding="0" border="0" class="body">
		<tr>
			<td class="box">
				<div class="text">
					<img src="images/customer_service.gif" height="24" width="159" alt="Customer Service" class="title" />
					<p>Woods Furniture strives for complete customer satisfaction, before and after the sale. Woods Furniture can answer any questions about your purchase with our expert office staff.</p>
					<p class="bold">To schedule a delivery, a service call, or questions about warranties, contact our office at 668-6085</p>
				<p><a href="mailto:customercare@woodsfurniture.com" style="font-weight:bold; font-size:13px;">Customer Care:</a> Please contact Woods for any service issue, price inquiry, or general questions you have about Woods and you will get a response within 24 hours. <a href="mailto:customercare@woodsfurniture.com" style="font-weight:bold; font-size:13px;">customercare@woodsfurniture.com</a> </p>
				</div>
			</td>
			<td class="box">
					<img src="images/contact.gif" height="24" width="324" alt="Contact Woods Furniture Galleries" style="margin-left: 10px;" class="title" />
					<table id="contact">
					<form action="./cgi-bin/formmail/FormMail.pl" method="post" id="form">
					<input type="hidden" name="recipient" value="webmaster@woodsfurniture.com">
					<input type="hidden" name="subject" value="Message from Woods Furniture Contact Form">
					<input type="hidden" name="redirect" value="http://www.woodsfurniture.com/contact.php?status=sent">
<?php
	if($_GET['status'] == 'sent'){
		echo "\t\t\t\t\t\t<tr>\n";
		echo "\t\t\t\t\t\t\t<td colspan=\"2\" class=\"red\" style=\"text-align: center;\">Your message has been sent</td>\n";
		echo "\t\t\t\t\t\t</tr>\n";
	}
?>
						<tr>
							<td class="label">First Name:</td>
							<td><input type="text" name="First Name" maxlength="30" class="input" /></td>
						</tr>
						<tr>
							<td class="label">Last Name:</td>
							<td><input type="text" name="Last Name" maxlength="40" class="input" /></td>
						</tr>
						<tr>
							<td class="label">Phone Number:</td>
							<td><input type="text" name="Phone Number" maxlength="14" class="input" /></td>
						</tr>
						<tr>
							<td class="label">E-mail Address:</td>
							<td><input type="text" name="E-mail" maxlength="50" class="input" /></td>
						</tr>	
						<tr>
							<td class="label">How did you hear about us?</td>
							<td>
								<select name="How Did You Hear About Us" class="input">
									<option value="Newspaper">Newspaper</option>
									<option value="Radio">Radio</option>
									<option value="Television">Television</option>
									<option value="Mail">Mail</option>
									<option value="Previous Customer">Previous Customer</option>
									<option value="Friend">Friend or Relative</option>
									<option value="Saw Store">Saw one of our stores</option>
									<option value="Internet">Internet</option>
									<option value="Other">Other</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">How may we contact you?</td>
							<td>
								<select name="Method of Contact" class="input">
									<option value="Phone">Phone</option>
									<option value="E-mail">E-mail</option>
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<textarea cols="2" rows="2" id="textarea" name="Message">Your Message</textarea>
							</td>
						</tr>
						<tr>	
							<td colspan="2">
								<input type="submit" value="Send" />
								<input type="reset" value="Clear" />
							</td>
						</tr>
					</form>
					</table>			
			</td>
		</tr>
	</table>
	<table id="content2" cellspacing="0" cellpadding="0" border="0" class="body" style="padding-bottom:10px;">
		<tr>
			<td colspan="2"><img src="images/locations.jpg" height="19" width="318" alt="Woods Furniture Gallery Locations" class="title" style="margin-left: 10px;"/></td>
		</tr>
		<tr>
			<td class="box">
					<p class="bold address">Woods Furniture Gallery</p>
					<p class="address">4918 Taylor Court</p>
					<p class="address">Turlock, CA 95382</p>
					<p class="address">(209) 656-2392, Fax (209) 656-2393</p>
					<p class="address"><a href="http://www.mapquest.com/">Get Directions</a></p>
			</td>
		</tr>
	</table>
	<table id="footer" cellspacing="0" cellpadding="0" border="0" class="body">
		<tr>
			<td class="third center"><p class="black" style="margin-top: 5px;">Best Prices Guaranteed</p></td>
			<td class="third center black"></td>
			<td class="third center black"><p class="black" style="margin-top: 5px;">60 years in Business</p></td>
		</tr>
		<tr>
			<td class="third center bg_red"><p style="margin-top: 5px;">Expert Delivery Service</p></td>
			<td class="third center bg_red"><p style="margin-top: 5px;">Free Design Service</p></td>
			<td class="third center bg_red"><p style="margin-top: 5px;">Furniture, Mattresses, and Accessories</p></td>
		</tr>
	</table>
	</div>
	<table id="copyright" cellspacing="0" cellpadding="0" class="body">
		<tr>
			<td class="box footer">
				<div class="text">
					<p class="normal red">&copy; Copyright 2007 Woods Furniture. All Rights Reserved.</p>
				</div>
			</td>
			<td class="box footer">
				<div class="text right">
					<p class="normal"><a href="http://www.westhost.com/" id="westhost">Design and Hosting by WestHost</a></p>
				</div>
			</td>
		</tr>
	</table>
</body>
</html>
