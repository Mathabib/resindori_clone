<?php defined('_JEXEC') or die('Restricted access'); // no direct access ?>
<?php
$document =& JFactory::getDocument();
$document->addStyleSheet( JURI::root() . "modules/mod_simplefileuploadv1.1/mod_simplefileupload.css" );

if ($upload_users == "true") {
?>

<table border="0">
<tr>
<td>
<form enctype="multipart/form-data" action="" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $upload_maxsize;?>" />

<!-- use different getImageSrc function for IE
	 - which can't parse base64-encoded images
	 -->
<script type="text/javascript">
	function getImageSrc(base64Src)
	{ return base64Src; }
</script>
<!--[if gte IE 5]>
	<script type="text/javascript">
		function getImageSrc(base64Src)
		{ return "<?php echo JURI::root() ?>modules/mod_simplefileuploadv1.1/tmpl/sfuieimgfix.php";}
	</script>
<![endif]-->


<script language="javascript" type="text/javascript">


function showProgress() {
	document.getElementById("div_simplefileuploadprocess").style.display="block";
	document.getElementById("div_simplefileuploadoverlay").style.top = getScrollY() + "px";
	document.getElementById("div_simplefileuploadoverlay").style.visibility="visible";

	return true;
}

function hidePopUp() {

	document.getElementById("div_simplefileuploadmsg").style.display="none";
	document.getElementById("div_simplefileuploadoverlay2").style.visibility="hidden";	

}
function getScrollY() {
  var scrOfY = 0;
  if( typeof( window.pageYOffset ) == 'number' ) {
    //Netscape compliant
    scrOfY = window.pageYOffset;
  } else if( document.body && document.body.scrollTop ) {
    //DOM compliant
    scrOfY = document.body.scrollTop;
  } else if( document.documentElement && document.documentElement.scrollTop ) {
    //IE6 standards compliant mode
    scrOfY = document.documentElement.scrollTop;
  }
  
  return scrOfY;
}

function addFile() {

var tab = document.getElementById('sfuContentTbl');
var rowcnt=tab.rows.length;
rowcnt=rowcnt-3;
var root=tab.getElementsByTagName('tr')[1].parentNode;//the TBODY
var clone=tab.getElementsByTagName('tr')[1].cloneNode(true);//the clone of the first row
//root.appendChild(clone);//appends the clone
	tab=document.getElementById('sfuContentTbl').insertRow(2);
	var y=tab.insertCell(0);
	var cont=clone.innerHTML;
	cont=cont.replace(/fakefileinput/g,"fakefileinput"+rowcnt);

	y.innerHTML=cont;


}

function reloadCaptcha(el) {
//NOT NEEDED YET!!!
	var date = new Date();
	var tmp = "?v=" + date.getTime();

	
	var cap = document.getElementById(el);
	cap.setAttribute("src", "<?php echo JURI::root() ?>modules/mod_simplefileuploadv1.1/tmpl/sfuieimgfix.php" + tmp);
}

function sfuAjax() {

	var xhr = getXhr();
	
	xhr.onreadystatechange = function() {
	 
		if(xhr.readyState == 4 && xhr.status == 200) {

			try //see if loaded
			{
//alert(xhr.responseText);
			} catch(e) {
				try // try again
				{
//alert(xhr.responseText);
				} catch(e) {
					alert(e.message)
				}
			}
		}
	}
	
    xhr.open("GET","<?php echo JURI::root() ?>modules/mod_simplefileuploadv1.1/tmpl/sfuajax.php?action=captcha", true);
	xhr.send(null);

}

function getXhr() {
	var xhr = null;
	
	if (window.XMLHttpRequest) {
		xhr = new XMLHttpRequest();
	} else if (window.createRequest) {
		xhr = window.createRequest();
	} else if (window.ActiveXObject) {
		try {
			xhr = new ActiveXObject('Msxml2.XMLHTTP');
		} catch (e) {
			try {
				xhr = new ActiveXObject('Microsoft.XMLHTTP');
			} catch (e) {}
		}
	}
	
	return xhr;

}

</script>

<!--div id="div_simplefileuploadoverlay" style="position:absolute;left:0;top:0;visibility: hidden; width:100%; height:100%; background-color:#ffffff; filter:alpha(opacity=60); -moz-opacity: 0.6; opacity: 0.6;"-->
<div id="div_simplefileuploadoverlay" style="margin: 0 auto; top: 0px; bottom: 0px; left: 0px;width: 100%;height: 100%;background: #ffffff;opacity: 0.79;-ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=79);filter: alpha(opacity=79);-moz-opacity: 0.79;z-index: 19; visibility: hidden; position: absolute;">
</div>

<div id="div_simplefileuploadprocess" style="position: absolute; display: none; background: <?php echo $upload_bgcolor ?>; text-align: center; border: 1px outset white; z-index: 20; left: 50%; top: 50%; margin-top: -110px; margin-left: -110px; width: 220px;">
	<table border=0 style="width: 100%;">
		<tr>
			<td>
				Uploading...
			</td>
		</tr>
		<tr>
			<td>
				<img src="<?php echo JURI::root();?>modules/mod_simplefileuploadv1.1/images/bigrotation2.gif" />
			</td>
		</tr>
		<tr>
			<td>
				Please wait!
			</td>
		</tr>
	</table>
</div>

<div>
	<table id="sfuContentTbl" border="0">
		<tr>
			<td><?php echo JText::_('FILE LABEL'); ?> <?php if ($upload_multi == 1) { ?><span style="cursor: hand; cursor: pointer;" onclick="javascript:addFile()"><b>[&nbsp;+&nbsp;]</b></span> <?php } ?></td>
		</tr>
		<tr>
			<td>
				<div style="height: 20px;overflow: hidden;">
					<input type="file" name="uploadedfile[]" size="12" class="file" onchange="javascript:document.getElementById('fakefileinput').value=this.value;" />
					<div class="fakefile">
						<input id="fakefileinput" style="position:relative; left: -5px; width: 90px; margin-right: 8px;" /><img src="<?php echo JURI::root();?>modules/mod_simplefileuploadv1.1/images/button_select.gif" />
					</div>
				</div>
			</td>
		</tr>
	

	<?php if ($upload_capthca == 1) { ?>
		<tr>
			<td>
				<span id="sfucaptcha"><img id="sfuCaptchaImg" width="120" height="40" src="data:image/jpeg;base64,<?php echo ModSimpleFileUploaderHelper::getCaptcha();?>" /></span><a href="#" onclick="javascript: reloadCaptcha('sfuCaptchaImg');"><img height="22px" src="<?php echo JURI::root();?>modules/mod_simplefileuploadv1.1/images/button_refresh.jpg" border="0" alt="Refresh Captcha" /></a>
			</td>
		</tr>
		<tr>
			<td>
				<nobr>
				<?php echo JText::_('CAPTCHA LABEL'); ?>:
				<input type="text" name="txtsfucaptcha" id="contact_captcha" value="" maxlength="10" style="position:relative; left: 0px; width: 80px; margin-right: 5px;" />
				</nobr>
			</td>
		</tr>
	<?php
	}
	?>
		<tr>
			<td>
			<input type="submit" style="" onclick="javascript:showProgress();" value="<?php echo JText::_('UPLOAD BUTTON TEXT'); ?>" />
			</td>
		</tr>
	</table>

</div>

</form>

</td>
</tr>

<?php
if ($_FILES["uploadedfile"]["name"] > 0) {

?>

<tr>
<td valign="top">

<div id="div_simplefileuploadoverlay2" style="margin: 0 auto; top: 0px; left: 0px;width: 100%;height: 100%;background: #ffffff;opacity: 0.79;-ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=79);filter: alpha(opacity=79);-moz-opacity: 0.79;z-index: 19;visibility: visible; position: absolute;">
</div>


	<table id="div_simplefileuploadmsg" style="position: absolute; left: 50%; top: 50%; margin-top: -110px; margin-left: -110px; z-index: 20; width: 220px; height:252px;" cellspacing=0 rowspacing=0>
	<!--table id="div_simplefileuploadmsg" style="position:relative; top:-30px; left: 25px; z-index: 10; width: 100%; height:252px;" cellspacing=0 rowspacing=0-->
		<tr>
			<td valign="top" style="height: 25px; background: <?php echo $upload_bgcolor ?>; border-top: #a0a0a0 1px solid; border-left: #a0a0a0 1px solid; font-weight: bold; font-size: 12pt; color: #898998;">
				<?php echo JText::_('FILE UPLOAD NAME'); ?>
			</td>
			<td valign="top" style="height: 25px; background: <?php echo $upload_bgcolor ?>;border-top: #a0a0a0 1px solid; border-right: #d0d0d0 1px solid; text-align: right; font-size: 9pt; color: #898998;">
				<span style="cursor: pointer; cursor: hand;" onclick="javascript:hidePopUp();"><?php echo JText::_('CLOSE POPUP TEXT'); ?> (x)</span>
			</td>
			<td style="height: 25px; width: 12px;">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" valign="top" style="background: <?php echo $upload_bgcolor ?>;border-left: #a0a0a0 1px solid; border-right: #d0d0d0 1px solid; border-bottom: #d0d0d0 1px solid; font-size: 9pt; color: #898998;">
				<hr>

				<?php echo $results; ?>
				
			</td>
			<td style="width: 12px;" valign="bottom"><img src="<?php echo JURI::root();?>modules/mod_simplefileuploadv1.1/images/infobox_bg.gif" /></td>
		</tr>
	</table>

	
</td>
</tr>

<?php

}

?>

</table>

<!--  DIV to push down mod due to relative positions -->
<div style="height: 30px;"></div>

<?php

} else {

	echo "<div style=\"font-size: 10pt; color: #898998; width: 90%;\">" . JText::_('NOT ALLOWED USER') . "</div>";

}

?>