<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
class ModSimpleFileUploaderHelper
{
	public function getUploadForm($titlelength, $upload_location, $upload_maxsize, $upload_filetypes, $upload_fileexist, $upload_users, $upload_capthca, $upload_email, $upload_emailmsg, $moduleclass_sfx)
    {
	    $results = "";
		$fileCnt = 0;
		$fileErr = 0;
		$written = 0;
		$filename = "";
		
		if ($upload_capthca == 1) {
			$results = "Faulty CAPTCHA. Please retry.";
		} else {
			
			if(is_array($_FILES["uploadedfile"]["name"])) {
				foreach($_FILES["uploadedfile"]["name"] as $value){
					if(strlen($value) > 0) {
						//Check that we have a filename
						$filename = $value;
					}
					$fileCnt += 1;
				}
			}
			for ($cnt = 0; $cnt<$fileCnt; $cnt++) {
				if ((strlen($_FILES["uploadedfile"]["name"][$cnt]) > 0) && ($upload_users == "true")) {
					if (strpos($upload_filetypes, $_FILES["uploadedfile"]["type"][$cnt]) === false) {
						$filetypeok = false;
					} else {
						$filetypeok = true;
					}
					if ($upload_filetypes == "*") {
						$filetypeok = true;
					}
				  if (($filetypeok > 0) && ($_FILES["uploadedfile"]["size"][$cnt] < $upload_maxsize)) {
					if ($_FILES["uploadedfile"]["error"][$cnt] > 0) {
					  if (($_FILES["uploadedfile"]["size"][$cnt] == 0) && ($_FILES["uploadedfile"]["error"][$cnt] == 2)) {
						$results .= "(<span style='color:#dd2222'>".$_FILES["uploadedfile"]["name"][$cnt].")</span>".JText::sprintf('ERROR TOO BIG', "<br />[PHP Error: " . $_FILES["uploadedfile"]["error"][$cnt]) . "]<br />";
					  } else {
						$results .= "(<span style='color:#dd2222'>".$_FILES["uploadedfile"]["name"][$cnt].")</span>".JText::sprintf('ERROR LABEL', $_FILES["uploadedfile"]["error"][$cnt]) . "<br />";
					  }
					  $fileErr = 1;
					} else {
					  //$results .= "<strong>" . JText::_('FILE OK MSG') . "</strong><br /><br />";
					  $results .= "<span style='color:#55dd55'>".JText::sprintf('FILE UPLOAD LABEL', $_FILES["uploadedfile"]["name"][$cnt]) . "</span><br />";
					  $results .= JText::sprintf('FILE TYPE LABEL', $_FILES["uploadedfile"]["type"][$cnt]) . "<br />";
					  $results .= JText::sprintf('FILE SIZE LABEL', ($_FILES["uploadedfile"]["size"][$cnt] / 1024)) . " Kb<br />";
					  #$results .= "uploaded to: " . $_FILES["uploadedfile"]["tmp_name"][$cnt] . "<br />";
					  if (file_exists($upload_location . $_FILES["uploadedfile"]["name"][$cnt])) {
						if ( $upload_fileexist == "0" ) {
						  // FAIL
						  $results .= "<br /><strong>" . JText::sprintf('FILE EXISTS MSG', $_FILES["uploadedfile"]["name"][$cnt]) . "</strong><br /><br />" . JText::_('FILE EXISTS CORR');
						  $fileErr = 1;
						}
						if ( $upload_fileexist == "1" ) {
						  // REPLACE
						  unlink($upload_location . $_FILES["uploadedfile"]["name"][$cnt]);
						  $results .= JText::_('FILE EXISTS REPLACE') . "<br />";
						  $upload_fileexist = "no";
						}
						if ( $upload_fileexist == "2" ) {
						  // BACKUP
						  $new_filename = $_FILES["uploadedfile"]["name"][$cnt] . microtime();
						  rename($upload_location . $_FILES["uploadedfile"]["name"][$cnt], $upload_location . $new_filename);
						  $results .= JText::sprintf('FILE EXISTS BACKUP',  $new_filename) . "<br />";
						  $upload_fileexist = "no";
						}
					  } else {
						$upload_fileexist = "no";
					  }
					  if ( $upload_fileexist == "no" ) {
						move_uploaded_file($_FILES["uploadedfile"]["tmp_name"][$cnt], $upload_location . $_FILES["uploadedfile"]["name"][$cnt]);
						$results .= JText::sprintf('FILE SAVE AS', $upload_location . $_FILES["uploadedfile"]["name"][$cnt]) . "<br /><br />";
						//$results .= "<div style=\"width: 90%; text-align: right;\"><input type='button' value='" . JText::_('OK BUTTON') . "' onclick='document.getElementById(\"div_simplefileuploadmsg\").style.display=\"none\";'></div>";
					  }
					}
					
					// SEND E-MAIL
					if ((strlen($upload_email) > 0) && ($fileErr == 0)) {
						$to = $upload_email;
						$subject = "Simple File Upload - New File";
						$body = "Hi,\n\nThere is a new file uploaded through Simple File Upload on your site:\n\n";
						$body .= JText::sprintf('FILE SAVE AS', $upload_location . $_FILES["uploadedfile"]["name"][$cnt]);
						
						if (mail($to, $subject, $body)) {
							if ($upload_emailmsg == 1) 
								$results .= "<p>".JText::_('MSG SENT')."</p>";
						} else {
							if ($upload_emailmsg == 1) 
								$results .= "<p>".JText::_('MSG FAILED')."</p>";
						}
					}
					
				  } else {
					$results .= "(<span style='color:#dd2222'>".$_FILES["uploadedfile"]["name"][$cnt].")</span>".JText::sprintf('FILE IN ERROR', $_FILES["uploadedfile"]["type"][$cnt]) . "<br /><br />";
					if ($written == 0) {
						$results .= JText::_('ALLOWED TYPES') . ": " . $upload_filetypes . "<br />" . JText::_('FILE MAX SIZE') . " (kb): " . ($upload_maxsize / 1024) . "<br /><br />";
						//$results .= "<div style=\"width: 90%; text-align: right;\"><input type='button' value='" . JText::_('OK BUTTON') . "' onclick='document.getElementById(\"div_simplefileuploadmsg\").style.display=\"none\";'></div>";
						$written = 1;
					}
				  }
				} else {
					if ($upload_users == "false") {
						$results .= JText::_('NOT ALLOWED USER');
					}
				}
			} // end for
		}
		return $results;
	}
	
	public function getCaptcha() {
		ini_set ("session.Save_path", $_SERVER['DOCUMENT_ROOT'] . "/mySessions");
		session_start();
		session_name($_SERVER['REMOTE_HOST'] . "-captcha");
		$myCryptBase = "AB0CDE1FG2HIJ3KL4MNO5PQ6RST7UV8WX9YZ";
		$capString = "";
		$image = imagecreatetruecolor(150, 60);
		$white = imagecolorallocate ($image, 255, 255, 255);
		$rndm = imagecolorallocate ($image, rand(64,192),  rand(64,192),  rand(64,192));
		imagefill ($image, 0, 0, $white);
		$folder_captcha_class = JPATH_SITE.DS.'modules'.DS.'mod_simplefileuploadv1.1'.DS.'tmpl';
		$fontName = $folder_captcha_class."/arial.ttf";
		$myX = 15;
		$myY = 30;
		$angle = 0;
		for ($x = 0; $x <=1000; $x++) {
			$myX = rand(1,148);
			$myY = rand(1,58);
			imageline($image, $myX, $myY, $myX + rand(-5,5), $myY + rand(-5,5), $rndm);
		}
		for ($x = 0; $x <= 4; $x++) {
			$dark = imagecolorallocate ($image, rand(5,128),rand(5,128),rand(5,128));
			$capChar = substr($myCryptBase, rand(1,35), 1);
			$capString .= $capChar;
			$fs = rand (20, 26);
			$myX = 15 + ($x * 28+ rand(-5,5));
			$myY = rand($fs + 2,55);
			$angle = rand(-30, 30);
			ImageTTFText ($image,$fs, $angle, $myX, $myY, $dark, $fontName, $capChar);
		}
		$_SESSION["capString"] = $capString;
		ob_start();
		header ("Content-type: image/jpeg");
		imagejpeg($image,"",95);
		$result = ob_get_contents();
		ob_end_clean();
		echo base64_encode($result);
		imagedestroy($image);
	}
}

?>