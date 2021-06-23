<?php 

$email = "rammohan503@gmail.com";
$subject =  "Email Test";
$message = "this is a mail testing email function on server Hello 1234";


$sendMail = mail($email, $subject, $message);
if($sendMail)
{
echo "Email Sent Successfully 123";
}
else

{
echo "Mail Failed";
}
?>
