<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/header.php"; include_once($path); ?>
	<div style="margin: 80px 10%; font-size:14pt">
		<p>Thank you, <?php echo $_GET["name"]; ?>.</p>		
		<?php 
			if ($_GET["attbool"] == "false")
			{
				echo '<p>We regret that you cannot attend and thank you for your prompt reply.</p>';
			}				
			else{		
				echo '<p>We are thrilled to have you join us!</p>';
				echo '<p>We have you listed with <b>';
				echo $_GET["email"];
				echo '</b> as your email address and <b>';
				echo $_GET["phone"];
				echo '</b> as your telephone number.<p>';
				echo '<p>You have chosen the <b>';
				echo $_GET["dinner"];
				echo '</b> option for dinner';		
				if ($_GET["plusbool"] == "true"){
					echo ' and the <b>';
					echo $_GET["gdinner"];
					echo '</b> option for your guest, <b>';				
					echo $_GET["plus1name"];
					echo '.</b></p>';				
				}
				else{echo ' and will be attending without a guest.</p>';}			

				echo '<p>We thank you for your prompt reply. We sincerely look forward to seeing you at the Bruner-Prime wedding!</p>';}
		?>
	
	</div>
	<?php
		error_reporting(E_ALL);
		$data = $_GET["name"] . PHP_EOL;		
		$data .= $_GET["attbool"] . PHP_EOL;
		$data .= $_GET["email"] . PHP_EOL;
		if ($_GET["attbool"] == "true")
		{			
			$data .= $_GET["phone"] . PHP_EOL;
			$data .= $_GET["dinner"]. PHP_EOL;
			$data .= $_GET["plus1name"]. PHP_EOL;
			$data .= $_GET["gdinner"]. PHP_EOL;
			$data .= $_GET["allergy"] . PHP_EOL;
		}
		$path = $_SERVER['DOCUMENT_ROOT']; 
		$path .= '/RSVPs/'. $_GET["name"] . "_" . date('m-d-Y_hia') .'.txt';
		$f = fopen($path, "w+") or die("fopen failed");
		fwrite($f, $data);
		fclose($f);
	?>

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/footer.php"; include_once($path); ?>
