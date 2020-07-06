<?php
session_start();



if(isset($_SESSION['name'])){
    $code = $_POST['code'];
     
    $fp = fopen("log.html", 'a');
	if($code != ""){
		fwrite($fp, "<div class='msgln'>".date("H:i")."<b> | ".$_SESSION['name']."</b> : <pre>".stripslashes(htmlspecialchars($code))."</pre><br></div>\n");
		fclose($fp);
		window.location.replace("chat.php");
	}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
body {
    font: 13px arial;
    color: white;
    text-align: center;
    padding: 35px;
	background-color: #2c2f33;
}
 
form,p,span {
    margin: 0;
    padding: 0;
}
 
input {
    font: 12px arial;
}
 
a {
    color: #b9a3e3  
    text-decoration: none;
}
 
a:hover {
    text-decoration: underline;
}
 
#wrapper,#loginform {
    margin: 0 auto;
    padding-bottom: 25px;
    background: #40444B;
    width: 70%;
	height: 16cm;
    border: 2px solid #ffffff;
	border-radius: 15px;
}
 
#loginform {
    padding-top: 18px;
}
 
#loginform p {
    margin: 5px;
}
 
#chatbox {
    text-align: left;
    margin: 0 auto;
    margin-bottom: 20px;
    padding: 10px;
    background: #2c2f33;
    height: 70%;
    width: 85%;
    border: 2px solid #ffffff;
	border-radius: 15px;
    overflow: auto;
}

 
#usermsg {
    width: 395px;
    border: 1px solid #ACD8F0;
}
 
#submit {
    width: 60px;
}
 
.error {
    color: #ff0000;
}
 
#menu {
    padding: 12.5px 25px 25px 25px;
}
 
.welcome {
    float: left;
}
 
.logout {
    float: right;
}
 
.msgln {
    margin: 0 0 2px 0;
}

button {
  background: #2c2f33;
  border: 2px solid white;
  -moz-border-radius: 20px;
  -webkit-border-radius: 20px;
  -khtml-border-radius: 20px;
  border-radius: 20px;
  color: #ffffff;
  font: 13px Verdana;
  letter-spacing: 1px;
  display: block;
  letter-spacing: 1px;
  margin: auto;
  padding: 7px 25px;
  text-shadow: 0 1px 1px #000000;
  
}

a:visited {
  color: #fff
}

a:link {
  color: #fff
}
</style>
<title>Nat.best - Live Chat</title>
<link rel="shortcut icon" type="image/png" href="/favicon.png"/>
</head>
<div id="loginform">
   <form action="postcode.php" method="post" style="">
       <p style="font: 15px arial"><b>Collez le code à envoyer :</b></p><br>
       <textarea type="text" name="code" id="code" maxlength="2000" spellcheck="false" style="border-radius: 10px; margin-bottom: 15px; background: #2c2f33; font: 13px monospace; color: white; height:80%; width:65%; overflow:auto"></textarea>
       <button type="submit" name="sentcode" id="sentcode" value="Envoyer" style="margin-bottom: 5px">Envoyer</button>
   </form>
   <button name="retour" type="submit" id="retour" value="retour" style="margin-bottom: 15px; display:inline-block"/><a href="chat.php">Retour</a></button>
   </div>

</html>