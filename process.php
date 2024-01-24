<?php

$ip = getenv("REMOTE_ADDR");
$Fecha= date('d-m-Y');
$Hora= date('H:i:s');

$correo="rahulexcellence7@gmail.com";

$subj="New Enquiry From Website- $ip";
$from= "From:Winx Global - $ip <futuretouch.chd@gmail.com>";

$user_agent = getenv("HTTP_USER_AGENT");

$usuarioname=$_POST['S_name'];
$usuariomobile=$_POST['S_phone'];
$usuarioemail=$_POST['S_email'];
$usuariofrom=$_POST['Location_form'];
$usuarioto=$_POST['Location_to'];
$usuariomessage=$_POST['message'];


$content = "
Date: $Fecha / Hour: $Hora

User-Agent: $user_agent

Login IP: $ip Details:

----------------------------------------------------------------------------------------
Full Name: $usuarioname
Mobile: $usuariomobile
Email: $usuarioemail
Resume: $usuariofrom
services: $usuarioto
Message : $usuariomessage
----------------------------------------------------------------------------------------";

mail($correo, $subj, $content, $from);

?>
<SCRIPT LANGUAGE="JavaScript">
location.href='thanks.html';
</SCRIPT>
