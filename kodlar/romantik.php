<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Romantik Sarkılar</title>
<link href="baslık.css" rel="stylesheet" type="text/css" />
</head>
<div align="center" class="baslık">SONUCLAR </div>
<table width="400" border="0" align="right">
  <tr>
    <td width="112"><a href="secim.php" title="girisYap" class="linkStyle"><strong>Ana Sayfa</strong></a></td>
    <td width="97"><a href="cikisYap.php" title="CikisYap"  class="linkStyle"><strong>Çıkış Yap</strong></a></td>
    <td width="101"><strong><a href="hakkinda.php" title="hakkinda" class="linkStyle">Hakkında</a></strong></td>
  </tr>
</table>
<p>&nbsp;</p>
 <?php
include("baglanti.php"); 
    // oturumu baslatalim
session_start();
    
    // giris bilgilerini alalim.

$turlerArray=$_SESSION['turlerArray'];
$k=0;
$size=sizeof($turlerArray);
for($i=0;$i<$size-1;$i++){
$result=mysql_query("select SarkiciAdi,SarkiAdi,SarkiLink from romantik where SarkiTuru='$turlerArray[$i]'") ;


$num_rows =mysql_num_rows($result);
$row = mysql_fetch_array($result);
$num_fields =mysql_num_fields($result);  

print "<tr align = center>";
if($num_rows==0 && $k==0){
	$k=1;
    print "<h1 align=center>".$turlerArray[$i]." türünde şarkı bulunamadi</h1>";
    $error = mysql_error();
}else if($k==0) {

print "<table align=center border=border><caption> <h1>$turlerArray[$i] </h1> </caption>";
$keys = array_keys($row);
for ($index = 0; $index < $num_fields; $index++) {
    print "<th >" . $keys[2 * $index + 1] . "</th>";
}

print "</tr>";

for ($row_num = 0; $row_num < $num_rows; $row_num++) {
    print "<tr align = 'center'>";

    $values = array_values($row);
    for ($index = 0; $index < $num_fields; $index++) {
		if($index==$num_fields-1){
			$value = htmlspecialchars($values[2 * $index + 1]);	
			$value_sarki=htmlspecialchars($values[2 *($index-1) + 1]);
			$value_sarkici=htmlspecialchars($values[2 *($index-2) + 1]);		
			print "<th>"."<form id=form2 name=form2  method=post action=sarkiCalRomantik.php><input type=submit name='dugme' type='button' value='Dinle'/> 
			<input name=sarkiYeri type=hidden value='$value'/>
			<input name=sarkiAdi type=hidden value='$value_sarki'/>
			<input name=sarkiciAdi type=hidden value='$value_sarkici'/> </form>". "</th> ";
			"<th>"."<form id=form2 name=form2  method=post action=sarkiCalRomantik.php><input type=submit name='dugme' type='button' value='Dinle'/> 
			<input name=sarkiYeri type=hidden value='$value'/>
			<input name=sarkiAdi type=hidden value='$value_sarki'/>
			<input name=sarkiciAdi type=hidden value='$value_sarkici'/> </form>". "</th> ";
		}else{
        $value = htmlspecialchars($values[2 * $index + 1]);
        print "<th>" . $value . "</th> ";
		
		}
    }

    print "</tr>";
	
    $row = mysql_fetch_array($result);
}
print "</table>";

}


}

$resultD_0=mysql_query("select SarkiciAdi,SarkiAdi,SarkiLink from romantik where SarkiOrt<3") ;
$num_rows =mysql_num_rows($resultD_0);

$row = mysql_fetch_array($resultD_0);
$num_fields =mysql_num_fields($resultD_0);  
print "<table align=center border=border><caption> <h3>Diğerleri </h3> </caption>";

print "<tr align = center>";

if($num_rows!=0){

$keys = array_keys($row);
for ($index = 0; $index < $num_fields; $index++) {
    print "<th>" . $keys[2 * $index + 1] . "</th>";
}

print "</tr>";

for ($row_num = 0; $row_num < 4; $row_num++) {
    print "<tr align = 'center'>";

    $values = array_values($row);
    for ($index = 0; $index < $num_fields; $index++) {
		if($index==$num_fields-1){
			$value = htmlspecialchars($values[2 * $index + 1]);	
			$value_sarki=htmlspecialchars($values[2 *($index-1) + 1]);
			$value_sarkici=htmlspecialchars($values[2 *($index-2) + 1]);		
			print "<th>"."<form id=form2 name=form2  method=post action=sarkiCalRomantik.php><input type=submit name='dugme' type='button' value='Dinle'/> 
			<input name=sarkiYeri type=hidden value='$value'/>
			<input name=sarkiAdi type=hidden value='$value_sarki'/>
			<input name=sarkiciAdi type=hidden value='$value_sarkici'/> </form>". "</th> ";
			"<th>"."<form id=form2 name=form2  method=post action=sarkiCalRomantik.php><input type=submit name='dugme' type='button' value='Dinle'/> 
			<input name=sarkiYeri type=hidden value='$value'/>
			<input name=sarkiAdi type=hidden value='$value_sarki'/>
			<input name=sarkiciAdi type=hidden value='$value_sarkici'/> </form>". "</th> ";
		}else{
        $value = htmlspecialchars($values[2 * $index + 1]);
        print "<th>" . $value . "</th> ";
		
		}
    }

    print "</tr>";

    $row = mysql_fetch_array($resultD_0);
}
print "</table>";}

 mysql_close($conn ) ;



?>
</html>