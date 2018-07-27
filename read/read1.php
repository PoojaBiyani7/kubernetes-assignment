<?php
if(file_exists("/var/www/html/fol/newfile1.txt"))
{
$myfile=fopen("/var/www/html/fol/newfile1.txt","r");
echo fread($myfile,filesize("/var/www/html/fol/newfile1.txt"));
fclose($myfile);}
else 
{echo " file doesn't exists";
}
?>
