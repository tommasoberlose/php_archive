<?
/* Qui serve modificare la cartella di invio dei file, ricorda la / finale */
$dove = "IMG/";
$where = "Immagini";

?>

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

<form name="upload" method="post" action="upload.php" enctype="multipart/form-data">
<? 
for ($i = 0; $i < 5; $i++) {
echo"File $i: <input style=\"border: 0; color: #444; height:20px; font-weight:bold; font-size:10px; font-family: Verdana; width:auto;\" type=\"file\" name=\"uploadfile$i\"><br><br>";
} 
?>
<input type="submit" name="go" value="Carica">   <INPUT TYPE="RESET" VALUE="Cancella"></form><br>

<? 
function elencafiles($dirname){
    $arrayfiles=Array();
    if(file_exists($dirname)){
        $handle = opendir($dirname);
        while (false !== ($file = readdir($handle))) { 
            if(is_file($dirname.$file)){
                array_push($arrayfiles,$file);
            }
        }
        $handle = closedir($handle);
    }
    sort($arrayfiles);
    return $arrayfiles;
}
?>
<table width="100%" class="board_none" style="font-size:10px; vertical-align:top; height:200px;"><tr>
<?
echo "<td><div class=\"title5\" style=\"height:200px; overflow:auto; padding:5px; text-align:left; width:100%;\">
<div style=\"height:190px; overflow:auto; padding:5px; text-align:left;\"><b>Archivio: $where.</b><br><br>";
$arrayfile=array();
$arrayfile=elencafiles($dove);
$n = count($arrayfile);
for($i=0;$i<$n;$i++) { echo "<a href=\"arch_canc.php?file=$dove$arrayfile[$i]\" target=\"_top\" style=\"color: #600;\" onClick=\"return confirm('Sei sicuro di voler cancellare il file?');\">x</a> <a href=\"IMG/$arrayfile[$i]\" target=\"top\">$arrayfile[$i] </a><br>"; }
echo "</div></div></td>";

echo "</tr></table>";
?>

</td>
</tr>

</table></td><td class="mright"></td></tr><tr><td class="mleft_bottom"></td><td><table class="msub" width="100%" cellpadding="0" cellspacing="0"><tr><td class="msub_left"></td><td class="msub_center"></td><td class="msub_right"></td></tr></table></td><td class="mright_bottom"></td></tr></table>

</td></tr></table>
</center>
<br><br>
</body>
</html>
