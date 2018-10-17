<?php 
session_start();
// $files = glob('upload/*'); // get all file names
// foreach($files as $file){ // iterate files
//   if(is_file($file))
//     unlink($file); // delete file
// }
// $files = glob('upload/*'); // get all file names
// foreach($files as $file){ // iterate files
//   if(is_file($file))
//     $file = explode("/",$file)[1];
// }


 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Put Your Signature Below</title>
		<link href="./css/jquery.signaturepad.css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="./js/numeric-1.2.6.min.js"></script> 
		<script src="./js/bezier.js"></script>
		<script src="./js/jquery.signaturepad.js"></script> 
		
		<script type='text/javascript' src="https://github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js"></script>
		<script src="./js/json2.min.js"></script>
		
		
		<style type="text/css">
			body{
				font-family:monospace;
				text-align:center;
			}
			#btnSaveSign {
				color: #fff;
				background: #f99a0b;
				padding: 5px;
				border: none;
				border-radius: 5px;
				font-size: 20px;
				margin-top: 10px;
			}
			#signArea{
				width:304px;
				margin: 50px auto;
			}
			.sign-container {
				width: 60%;
				margin: auto;
			}
			.sign-preview {
				width: 150px;
				height: 50px;
				border: solid 1px #CFCFCF;
				margin: 10px 5px;
			}
			.tag-ingo {
				font-family: cursive;
				font-size: 12px;
				text-align: left;
				font-style: oblique;
			}
		</style>
	<script type="text/javascript"></script></head>
	<body>
	    
	    <center><img src="global_logo.png"/></center>

		<center><h2 style="color:#2E3771; border-color: #2E3771;width:25%">Put Your Signature</h2></center>
		
        <h3 style="color:red"><?php 
			
		if(isset($_SESSION['message'])){
			echo $_SESSION['message'];

			session_destroy();
		}else{?>
		 
		 <center><h3 style="color:#31708f;background-color: #d9edf7;
    border-color: #bce8f1;width:45%">Append your signature and proceed to completing the application form by clicking on SAVE SIGNATURE</h3></center>
		    
	<?php	}

		 ?></h3>
		
		 <div id="signArea" >
			<h2 class="tag-ingo">Please Put Your Signature Below</h2>
			
			<div class="sig sigWrapper" style="height:auto;">
				<div class="typed"></div>
				<canvas class="sign-pad" id="sign-pad" width="300" height="100"></canvas>
			</div>
		</div>
  
    <button id="btnSaveSign">Save Signature</button>
		
		<div class="sign-container">
		<?php
		/*$image_list = glob("./doc_signs/*.png");
		foreach($image_list as $image){
			//echo $image;
		?>
		<img src="<?php echo $image; ?>" class="sign-preview" />
		<?php
		
		} */
		?>
		</div>

		<p><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>">Click Here</a> if u have  written it wrong</p>
		
		
		<script>
			$(document).ready(function() {
				$('#signArea').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:90});
			});
			
			$("#btnSaveSign").click(function(e){
				html2canvas([document.getElementById('sign-pad')], {
					onrendered: function (canvas) {
						var canvas_img_data = canvas.toDataURL('image/png');
						var img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");
						//ajax call to save image inside folder
						$.ajax({
							url: 'save_sign.php',
							data: { img_data:img_data },
							type: 'post',
							dataType: 'json',
							success: function (response) {
							 

							  window.location.href = "form.php";

							}
						});
					}
				});
			});
		  </script> 
		

	</body>
</html>
