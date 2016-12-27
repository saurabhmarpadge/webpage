<html>
<body>
<?php
$to = "abhishekkondewar75@gmail.com";
$subject = "Contact Info";
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message1 = $_REQUEST['message'];
$headers = "From:$email";
if (($name=="")||($email=="")||($message1==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
 } else {
	
	$message = " Name- $name \r\n Email- $email \r\n Message- $message1 \r\n";
	
	$sent = mail($to,$subject,$message,$headers);
	if($sent){
	print('<a href="http://abhishekgaming.esy.es/">Thank you for your response! Click here to return to the home page</a>');
	} else {
	print "We encountered an error sending your mail";
	}
}
?>
</body>
</html>