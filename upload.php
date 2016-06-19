
<html>
<head>
<link rel="stylesheet" href="http://nego.altervista.org/generale.css">
<title>< NegoArt > Archivio</title>
</head>

<body style="background-color: #466B98;"  leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0">
<br><br><br>

<table class="skin_tbl" align="center" cellpadding="0" cellspacing="0"><tr><td class="mleft"></td><td><table class="mainbg" style="text-align:center; width:100%" cellpadding="0" cellspacing="0">
<tr>
<td class="back">
<center>



<?php

/* Modifica la crtella dove verranno inviati i file, ricorda la / finale*/
$dove = "IMG/";
/* Nome generico della Cartella */
$where = "Immagini";



echo "<br><br>";
	
if ($uploadfile0_size) {
echo "File 0 inviato in $where: <a href=\"http://nego.altervista.org/$dove$date_$uploadfile0_name\" target=\"top\">$uploadfile0_name</a> <font style=\"color: #666; font-size:8px;\">($uploadfile0_size)</font>.<br>";
if (copy($uploadfile0,"$dove$uploadfile0_name"))
{
echo "Invio del file $uploadfile0_name riuscito<br><br>";
unlink($uploadfile0);
} else {
echo "Invio del file $uploadfile0_name fallito<br><br>";
}
}

if ($uploadfile1_size) {
echo "File 1 inviato in $where: <a href=\"http://nego.altervista.org/$dove$date_$uploadfile1_name\" target=\"top\">$uploadfile1_name</a> <font style=\"color: #666; font-size:8px;\">($uploadfile1_size)</font>.<br>";
if (copy($uploadfile1,"$dove$uploadfile1_name"))
{
echo "Invio del file $uploadfile1_name riuscito<br><br>";
unlink($uploadfile1);
} else {
echo "Invio del file $uploadfile1_name fallito<br><br>";
}
}

if ($uploadfile2_size) {
echo "File 2 inviato in $where: <a href=\"http://nego.altervista.org/$dove$date_$uploadfile2_name\" target=\"top\">$uploadfile2_name</a> <font style=\"color: #666; font-size:8px;\">($uploadfile2_size)</font>.<br>";
if (copy($uploadfile2,"$dove$uploadfile2_name"))
{
echo "Invio del file $uploadfile2_name riuscito<br><br>";
unlink($uploadfile2);
} else {
echo "Invio del file $uploadfile2_name fallito<br><br>";
}
}

if ($uploadfile3_size) {
echo "File 3 inviato in $where: <a href=\"http://nego.altervista.org/$dove$date_$uploadfile3_name\" target=\"top\">$uploadfile3_name</a> <font style=\"color: #666; font-size:8px;\">($uploadfile3_size)</font>.<br>";
if (copy($uploadfile3,"$dove$uploadfile3_name"))
{
echo "Invio del file $uploadfile3_name riuscito<br><br>";
unlink($uploadfile3);
} else {
echo "Invio del file $uploadfile3_name fallito<br><br>";
}
}

if ($uploadfile4_size) {
echo "File 4 inviato in $where: <a href=\"http://nego.altervista.org/$dove$date_$uploadfile4_name\" target=\"top\">$uploadfile4_name</a> <font style=\"color: #666; font-size:8px;\">($uploadfile4_size)</font>.<br>";
if (copy($uploadfile4,"$dove$uploadfile4_name"))
{
echo "Invio del file $uploadfile4_name riuscito<br><br>";
unlink($uploadfile4);
} else {
echo "Invio del file $uploadfile4_name fallito<br><br>";
}
}



?><br>
<a href="arch.php" target="_top">Torna Indietro</a>

</td>
</tr>

</table></td><td class="mright"></td></tr><tr><td class="mleft_bottom"></td><td><table class="msub" width="100%" cellpadding="0" cellspacing="0"><tr><td class="msub_left"></td><td class="msub_center"></td><td class="msub_right"></td></tr></table></td><td class="mright_bottom"></td></tr></table>

</td></tr></table>
</center>
<br><br>
</body>
</html>
