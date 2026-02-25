<?php



define("MAIL_DELIVERY", "smtp");




define("SMTP_SERVER","rely.wcg.net.au");

error_log("sdfsdfsdfsdf",1,'pb.bresser@gmail.com');
exit();

#define("MAIL_DELIVERY", "smtp");




#define("SMTP_SERVER","rely.wcg.net.au");

#echo SMTP_SERVER;
	  $subject = "This is a Vocus Wholesale  TEST for ncl2.apn.com.au ";
echo	  $message = "\nThis is a notification TEST , do not  reply  ";
		emailsomeone($subject, $message, 'pb.bresser@gmail.com','lust@bresser.net.au');




 $subject = "NBN has been Provisioned for MT0000179128-wba.nbnonline.com.au";

$message ="
The following service has been Provisioned
ID: 13352255
ProviderServiceId: MT0000179128
Name: JILLIAN GROTH
Suburb: YAMBA
Service Number: 0000571271825

";
 

function emailsomeone($subject, $message, $domain, $type)
{

$message .="\n
Regards,
Wholesale Service Delivery
Vocus Communications\n";

     $from_addr = "lust@bresser.net.au";



        include_once "mailclass/htmlMimeMail5.php";
        $mail = new htmlMimeMail5($message);
        $mail->setText(stripcslashes($message));
        $mail->setFrom($from_addr);
        $mail->setSubject(stripcslashes($subject));
        $mail->setReturnPath($from_addr);
        $mail->setHeader("X-WDSL-Auto", "True");
        $send_to = array($domain);
        $mail->send($send_to, MAIL_DELIVERY);
        print_r($mail);
        return 1;
    return 0;
}




?>

