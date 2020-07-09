<?php
session_start();

function make_links_clickable($text){
	return preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=]+)!i', '<a href="$1" target=”_blank”>$1</a>', $text);
}


if(isset($_SESSION['name'])){
    $text = $_POST['text'];
     
    $fp = fopen("log.html", 'a');
	if($text != ""){
		if(make_links_clickable($text) != $text){
			fwrite($fp, "<div class='msgln'>".date("H:i")."<b> | ".$_SESSION['name']."</b> : ".stripslashes(make_links_clickable($text))."<br></div>\n");
			fclose($fp);
		}
		else {
			fwrite($fp, "<div class='msgln'>".date("H:i")."<b> | ".$_SESSION['name']."</b> : ".stripslashes(htmlspecialchars(make_links_clickable($text)))."<br></div>\n");
			fclose($fp);
		}
	}
}
?>