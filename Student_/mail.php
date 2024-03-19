<?php
$to="malagesujit838@gmail.com";
$subject="test";
$msg="hello 1st test.";
$from="From: malagesujit838@gmail.com";
if(mail($to,$subject,$msg,$from))
{
    echo "email sent.";
}
else{
    echo "not sent.";
}
?>