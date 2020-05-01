<?php session_start(); 
	include "include/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="certificate/certificate-style.css">
</head>
<body>
<div class="container img-formate">
	<div class="col-md-12 formate">
		<img src="certificate/certificate.svg" class="img-responsive">
	</div>
	<div class="row">
		<div class="certificate-border">
			<div class="row top-spacing">
				<div class="col-md-3 col-sm-3"></div>
				<div class="col-md-6 col-sm-6 text-center ">
					<div class="row">
						<div class="gift col-md-10 col-sm-10"><p>GIFT</p></div>
						<div class="col-md-2 col-sm-2"></div>
					</div>
					<div class="certificate"><p>Certificate</p></div>
					<div class="row">
						<div class="col-md-3 col-sm-3"></div>
						<hr class="hr-top col-md-3 col-sm-3">
						<div class="course col-md-4 col-sm-4"><p>COURSE TRAINING</p></div>
						<div class="col-md-2 col-sm-2"></div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3"></div>
			</div> <!-- top content -->
			<div class="row center-spacing">
				<div class="row">
					<div class="col-md-4 col-sm-4"></div>
					<div class="proude  col-md-4 col-sm-4 text-center"><p>PROUDLY PRESENTED TO</p></div>
					<div class="col-md-4 col-sm-4"></div>
				</div>
				<div class="row">
					<div class="col-md-5 col-sm-5"></div>
					<div class="col-md-2 col-sm-2 text-center img">
						<?php  
						include("certificate/phpqrcode/qrlib.php");
					    if (isset($_SESSION['u_id'])):
					        $user_first = $_SESSION['u_first'];
					        $user_last = $_SESSION['u_last'];
					        $user_email = $_SESSION['u_email'];
					        $user_number = $_SESSION['u_number'];

					    // how to build raw content - QRCode with detailed Business Card (VCard) 
					    $tempDir = 'certificate/phpqrcode/temp/'; 

					    // here our data 
					    $name         = "$user_first $user_last"; 
					    $sortName     = "$user_last;$user_first"; 
					    $phone        = "$user_number"; 
					    $phonePrivate = ""; 
					    $phoneCell    = ""; 
					    $orgName      = "CodeCrush"; 
					    $email        = "$user_email"; 
					    $website      = "www.codecrush.com";

					    // if not used - leave blank! 
					    $addressLabel     = ''; 
					    $addressPobox     = ''; 
					    $addressExt       = ''; 
					    $addressStreet    = ''; 
					    $addressTown      = ''; 
					    $addressRegion    = ''; 
					    $addressPostCode  = ''; 
					    $addressCountry   = ''; 

					    // we building raw data 
					    $codeContents  = 'BEGIN:VCARD'."\n"; 
					    $codeContents .= 'VERSION:2.1'."\n"; 
					    $codeContents .= 'N:'.$sortName."\n"; 
					    $codeContents .= 'FN:'.$name."\n"; 
					    $codeContents .= 'ORG:'.$orgName."\n"; 

					    $codeContents .= 'TEL;WORK;VOICE:'.$phone."\n"; 
					    $codeContents .= 'TEL;HOME;VOICE:'.$phonePrivate."\n"; 
					    $codeContents .= 'TEL;TYPE=cell:'.$phoneCell."\n"; 
					    $codeContents .= 'URl;WORK:https://'.$website."\n"; 

					    $codeContents .= 'ADR;TYPE=work;'. 
					        'LABEL="'.$addressLabel.'":' 
					        .$addressPobox.';' 
					        .$addressExt.';' 
					        .$addressStreet.';' 
					        .$addressTown.';' 
					        .$addressPostCode.';' 
					        .$addressCountry 
					    ."\n"; 

					    $codeContents .= 'EMAIL:'.$email."\n"; 

					    $codeContents .= 'END:VCARD'; 

					    // generating 
					    QRcode::png($codeContents, $tempDir.'026.png', QR_ECLEVEL_L, 3); 
					    else:
					        header("location:index.php?login?invalid");
					endif;
					    
					?>
						<img src="certificate/phpqrcode/temp/026.png" height="150px" width="150px" alt="barcode">
					</div>
					<div class="col-md-5 col-sm-5"></div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-3"></div>
					<div class="name text-center col-md-6"><p><?php echo $_SESSION['u_first']; ?> <?php echo $_SESSION['u_last']; ?></p></div>
					<div class="col-md-3 col-sm-3"></div>
				</div>
				<div class="row">
					<div class="col-md-2 col-sm-2"></div>
					<div class="detail text-center col-md-8 col-sm-8">
						<p>
							<?php 
							$uid = $_SESSION['u_uid'];
							$sql_quiz_log = "select * from quiz_log where q_uid = '$uid'"; 
							$result_quiz = mysqli_query($conn,$sql_quiz_log);
							while ( $row_quiz_log  = mysqli_fetch_array($result_quiz)) {
								$correct = $row_quiz_log['q_correct'];
								if ($correct >= 9) {
									$result = "distiction";
									$complete = "complete";
								}
								elseif ($correct >= 5 && $correct <9) {
									$result = "first";
									$complete = "complete";
								}
								else{
									$result = "fail";
									$complete = "not complete";
								}
								$first = $_SESSION['u_first'];
								$last = $_SESSION['u_last'];
								$time = $row_quiz_log['q_time'];
								$lang = $_SESSION['u_lang'];
								// echo $time;
								echo "This is to certifiy that $first $last successfully $complete with $result of $lang language course in Code Crush website on $time.";
							}
							 ?>
							<!-- This is to certifiy that Suchit Sheth successfully complete with distiction of c language course in Code Crush on quiz_log table timesstamp value. -->
						</p>
					</div>
					<div class="col-md-2 col-sm-2"></div>
				</div>
			</div> <!-- center content -->
			<div class="row bottom-margin">
				<div class="col-md-2 col-sm-2"></div>
				<div class="col-md-3 col-sm-3">
					<h3 class="date row text-center"><?php echo date("d-m-Y"); ?></h3>
					<hr class="hr text-center">
					<div class="date row text-center"><p>DATE</p></div>
				</div>
				<div class="col-md-1 col-sm-1"></div>
				<div class="col-md-1 col-sm-1"></div>
				<div class="col-md-3 col-sm-3">
					<div class="signature row text-center"><img src="assets/img/sign.png" height="43" style="transform: rotate(-5deg);"></div>
					<hr class="hr">
					<div class="signature row text-center"><p>SIGNATURE</p></div>
				</div>
				<div class="col-md-2 col-sm-2"></div>
			</div>
		</div>
	</div>
</div>
</body>
</html>