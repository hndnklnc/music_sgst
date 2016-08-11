<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="baslık.css" rel="stylesheet" type="text/css" />
</head>

<body >
<div align="center" class="baslık">İSTEDİĞİNİ SEÇ!!! </div>
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

$sec=$_POST['radio'];

if($sec=="iyi"){


$result=mysql_query("select SarkiciAdi,SarkiAdi,SarkiLink from populermuzik order by SarkiPuan desc") ;

}
else if ($sec=="kotu"){
	$result=mysql_query("select SarkiciAdi,SarkiAdi,SarkiLink from populermuzik order by SarkiPuan  asc") ;

	}
	
$num_rows = mysql_num_rows($result);
$row = mysql_fetch_array($result);
$num_fields = mysql_num_fields($result);  





print "<table align=center border=border><caption> <h1>Arama Sonuçları </h1> </caption>";

print "<tr align = center>";

if($num_rows==0){
    print "sarki bulunamadi";
    $error = mysql_error();
}else {


$keys = array_keys($row);
for ($index = 0; $index < $num_fields; $index++) {
    print "<th>" . $keys[2 * $index + 1] . "</th>";
	 "<th>" . $keys[2 * $index + 1] . "</th>";}

print "</tr>";

for ($row_num = 0; $row_num < 15; $row_num++) {
    print "<tr align = 'center'>";
	
    $values = array_values($row);
    for ($index = 0; $index < $num_fields; $index++) {
		if($index==$num_fields-1){
			$value = htmlspecialchars($values[2 * $index + 1]);	
			$value_sarki=htmlspecialchars($values[2 *($index-1) + 1]);
			$value_sarkici=htmlspecialchars($values[2 *($index-2) + 1]);		
			print "<th>"."<form id=form2 name=form2  method=post action=sarkiCal.php><input type=submit name='dugme' type='button' value='Dinle'/> 
			<input name=sarkiYeri type=hidden value='$value'/>
			<input name=sarkiAdi type=hidden value='$value_sarki'/>
			<input name=sarkiciAdi type=hidden value='$value_sarkici'/> </form>". "</th> ";
			"<th>"."<form id=form2 name=form2  method=post action=sarkiCal.php><input type=submit name='dugme' type='button' value='Dinle'/> 
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


 mysql_close($conn ) ;



?>
</body>
</html>