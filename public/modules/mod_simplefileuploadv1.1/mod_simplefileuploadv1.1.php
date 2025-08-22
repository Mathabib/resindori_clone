<?php
/**
 * Simple File Uploader Module Entry Point
 * 
 * @package    Joomla
 * @subpackage Modules
 * @author Anders Wasén
 * @link http://wasen.net/
 * @license		GNU/GPL, see LICENSE.php
 * mod_simplefileupload is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$titlelength = $params->get( 'title_length', 20 );
$upload_location = $params->get( 'upload_location', './images' );
if ( substr( $upload_location , strlen($upload_location) - 1) != "/" ) {
  $upload_location .= "/";
}
$upload_maxsize = $params->get( 'upload_maxsize', '100000' );
$upload_bgcolor = $params->get( 'upload_bgcolor', '#e8edf1' );
if ( substr( $upload_bgcolor, 0, 1 ) != "#" ) {
	$upload_bgcolor = "#" . $upload_bgcolor;
}
$upload_filetypes = $params->get( 'upload_filetypes', '' );
$upload_fileexist = $params->get( 'upload_fileexist', '' );
$upload_email = $params->get( 'upload_email', '' );
$upload_emailmsg = $params->get( 'upload_emailmsg', '0' );
$upload_capthca = $params->get( 'upload_capthca', '0' );
$upload_multi = $params->get( 'upload_multi', '0' );
/*
$upload_users = $params->get( 'upload_users', '' );
*/
$moduleclass_sfx = $params->get('moduleclass_sfx')?$params->get('moduleclass_sfx'):'' ;
// Get user id and check if user is in list
$settingids = $params->get( 'settingids', '' );
$upload_users = "false";
$user =& JFactory::getUser();
$usr_id = $user->get('id');
		
	if(is_array($settingids)) {
	
		foreach($settingids as $value){
			
			if($value=="[ALL]") {
				$upload_users = "true";
				break;
			}
			
			if($value==$usr_id) {
				$upload_users = "true";
				break;
			}
			
            /*echo "settingids=".$value."<br />";*/
		}
	} else {
		if($settingids=="[ALL]") {
			$upload_users = "true";
		} else {
			if($settingids!="") {
				if($settingids==$usr_id) {
					$upload_users = "true";
				}
				/*echo "settingids=".$settingids."<br />";*/
			} else {
				//Allow all users
				$upload_users = "true";
			}
		}
	}
// include the helper file
require_once(dirname(__FILE__).DS.'helper.php');

$filename = "";
if(is_array($_FILES["uploadedfile"]["name"])) {
	foreach($_FILES["uploadedfile"]["name"] as $value){
		if(strlen($value) > 0) {
			//Check that we have a filename
			$filename = $value;
		}
	}
}
if (strlen($filename) > 0) {
	// get the items to display from the helper
	//echo "CAPTCHA:".$_SESSION["capString"];
	//echo "TEXT:".$_POST["txtsfucaptcha"];
	
	if ($_SESSION["capString"] == $_POST["txtsfucaptcha"]) {
		$chk_capthca = 0;
	} else {
		$chk_capthca = 1;
	}
	if ($upload_capthca == 0) $chk_capthca = 0;
	
	//echo "[".$chk_capthca."]";
	
	$results = ModSimpleFileUploaderHelper::getUploadForm($titlelength, $upload_location, $upload_maxsize, $upload_filetypes, $upload_fileexist, $upload_users, $chk_capthca, $upload_email, $upload_emailmsg, $moduleclass_sfx);
	
}


// include the template for display
require(JModuleHelper::getLayoutPath('mod_simplefileuploadv1.1'));

?>




