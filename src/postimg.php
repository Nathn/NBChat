<?php
session_start();


if(isset($_SESSION['name'])){
    $url = $_POST['url'];
    $fp = fopen("log.html", 'a');
	
	if($url != ""){
		fwrite($fp, "<div class='msgln'>".date("H:i")."<b> | ".$_SESSION['name']."</b> : <a href=".stripslashes($url)."><img style='max-height:128px; max-width:128px; height:auto; width:auto;' src='".stripslashes($url)."'/></a><br></div>\n");
		fclose($fp);
		header( "Location: chat.php" );
	}
}
?>