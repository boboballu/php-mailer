<title> bobo PHP mailer </title>
 <h1> Fastest PHP mailer by Tarun Govind(bobo)</h1> 
<form method="GET" action="bobomailer.php">
FROM     : <input name="from" size=20 type="text"/><br>
TO       : <input name="to" size=20 type="text"/><br>
SUBJECT  : <input name="subject" size=20 type="text"/><br>
MESSAGE  : <br><textarea cols="20" rows="20" name="msg"></textarea>
<?php
$to = $_GET['to'];
$from = $_GET['from'];
$subj = $_GET['subject'];
$msg = $_GET['msg'];
$header = "From: ".$from;
$mail = mail($to,$subj,$msg,$header);
if($mail) {
echo '<br>Email sent successfully<br>';
}
?>
<input type="submit" name="submit" value="enter"/>
</form>