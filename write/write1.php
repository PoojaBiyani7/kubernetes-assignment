Welcome You entered msg:<br/>
<?php
$myfile = fopen("/var/www/html/fol/newfile1.txt","a+");
$txt= $_GET["abc"];
fwrite($myfile,$txt);
echo "";
fclose($myfile);
echo $txt;
?>



