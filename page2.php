<html>
 <head><title>page</title>
 	<link rel="stylesheet" type="text/css" href="style.csS">
 </head>
 <body>
 <?php 
 session_start(); 
  if(isset($_SESSION['id'])) {
  	header("Location: home.php");
  }
 ?>
<div class="container">
	<div class="header"><strong>Cookies / Session in Action<br>php chapter 5</strong>
	 <a href="logout.php">LogOut</a>
	</div>
	<div class="content">
		<div class="contentleft">
		<h3>U.S. VISA APPLICATION</h3>GovAssist is not affiliated with any United States government agency or department. Costs for consulting services do NOT include any government application, medical examination, filing, or biometric fees. This website does not provide legal advice and we are not a law firm. None of our customer service representatives are lawyers and they also do not provide legal advice.
		<br/>
		<h3>U.S. VISA APPLICATION</h3>GovAssist is not affiliated with any United States government agency or department. Costs for consulting services do NOT include any government application, medical examination, filing, or biometric fees. This website does not provide legal advice and we are not a law firm. None of our customer service representatives are lawyers and they also do not provide legal advice.GovAssist is not affiliated with any United States government agency or department. Costs for consulting services do NOT include any government application, medical examination, filing, or biometric fees. This website does not provide legal advice and we are not a law firm. None of our customer service representatives are lawyers and they also do not provide legal advice.GovAssist is not affiliated with any United States government agency or also do not provide legal advice.GovAssist is not affiliated with any United States government agency or department. Costs for consulting services do NOT include any government application, medical examination, filing, or biometric fees. This website does not provide legal advice and we are not a law firm. None of our customer service representatives are lawyers and they also do not provide legal advice.GovAssist is not department. Costs for consulting services do NOT include any government application, medical examination, filing, or biometric fees. This website does not provide legal advice and we are not a law firm. None of our customer service representatives are lawyers and they also do not provide legal advice.
	</div>
		<div class="contentright">
			<?php 
			 echo "Welcome, " . $_SESSION['name'] . "!";
			?>
			<br><h3>Your Data is safe with us. Dont Worry.</h3>
			<img src="1.jpg" alt="image" class="img" />
			<caption>Photo of the surreal background.</caption><br><br>
			<p>Costs for consulting services do NOT include any government application, medical examination, filing, or biometric fees. This website does not provide legal advice and we are not a law firm. None of our customer service representatives are lawyers and they also do not provide legal advice.</p>
		</div>
	</div>
	<div class="footer"><h3>Disclaimer:</h3> GovAssist is not affiliated with any United States government agency or department. Costs for consulting services do NOT include any government application, medical examination, filing, or biometric fees. This website does not provide legal advice and we are not a law firm. None of our customer service representatives are lawyers and they also do not provide legal advice. We are a private, internet-based travel and immigration consultancy provider dedicated to helping individuals travel to the United States. You may apply by yourself directly at travel.state.gov or at uscis.gov.</div>
</div>
 </body>
</html>