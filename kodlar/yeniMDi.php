<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Farklı Müzik Dinlemek İstiyorum</title>
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
<?php

include("baglanti.php");


print "<p>&nbsp;</p>";
print "<p>&nbsp;</p>";


$result=mysql_query("select SarkiciAdi,SarkiAdi,SarkiLink from farklimuzik order by dinlenmeSayisi desc") ;

$num_rows = mysql_num_rows($result);
$row = mysql_fetch_array($result);
$num_fields = mysql_num_fields($result);  

print "<tr align = center>";

if($num_rows==0){
    print "<h2 align=center>sarki bulunamadi</h2>";
    $error = mysql_error();
}else {
print "<table align=center border=border><caption> <h1>Arama Sonuçları </h1> </caption>";

$keys = array_keys($row);
for ($index = 0; $index < $num_fields; $index++) {
    print "<th>" . $keys[2 * $index + 1] . "</th>";
	 "<th>" . $keys[2 * $index + 1] . "</th>";}

print "</tr>";

for ($row_num = 0; $row_num <$num_rows ; $row_num++) {
    print "<tr align = 'center'>";
	
    $values = array_values($row);
    for ($index = 0; $index < $num_fields; $index++) {
		if($index==$num_fields-1){
			$value = htmlspecialchars($values[2 * $index + 1]);	
			$value_sarki=htmlspecialchars($values[2 *($index-1) + 1]);
			$value_sarkici=htmlspecialchars($values[2 *($index-2) + 1]);		
			print "<th>"."<form id=form2 name=form2  method=post action=sarkiCalFarkli.php><input type=submit name='dugme' type='button' value='Dinle'/> 
			<input name=sarkiYeri type=hidden value='$value'/>
			<input name=sarkiAdi type=hidden value='$value_sarki'/>
			<input name=sarkiciAdi type=hidden value='$value_sarkici'/> </form>". "</th> ";
			"<th>"."<form id=form2 name=form2  method=post action=sarkiCalFarkli.php><input type=submit name='dugme' type='button' value='Dinle'/> 
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

$result1=mysql_query("select SarkiciAdi,SarkiAdi,SarkiLink from farklimuzik where SarkiOrt<3") ;

$num_rows1 = mysql_num_rows($result1);
$row1 = mysql_fetch_array($result1);
$num_fields1 = mysql_num_fields($result1);  




print "<table align=center border=border><caption> <h1> </h1> </caption>";

print "<tr align = center>";

if($num_rows1!=0){
$keys = array_keys($row1);
print "</tr>";

for ($row_num1 = 0; $row_num1 <3 ; $row_num1++) {
    print "<tr align = 'center'>";
	
    $values = array_values($row1);
    for ($index = 0; $index < $num_fields1; $index++) {
		if($index==$num_fields1-1){
			$value = htmlspecialchars($values[2 * $index + 1]);	
			$value_sarki=htmlspecialchars($values[2 *($index-1) + 1]);
			$value_sarkici=htmlspecialchars($values[2 *($index-2) + 1]);		
			print "<th>"."<form id=form2 name=form2  method=post action=sarkiCalFarkli.php><input type=submit name='dugme' type='button' value='Dinle'/> 
			<input name=sarkiYeri type=hidden value='$value'/>
			<input name=sarkiAdi type=hidden value='$value_sarki'/>
			<input name=sarkiciAdi type=hidden value='$value_sarkici'/> </form>". "</th> ";
			"<th>"."<form id=form2 name=form2  method=post action=sarkiCalFarkli.php><input type=submit name='dugme' type='button' value='Dinle'/> 
			<input name=sarkiYeri type=hidden value='$value'/>
			<input name=sarkiAdi type=hidden value='$value_sarki'/>
			<input name=sarkiciAdi type=hidden value='$value_sarkici'/> </form>". "</th> ";
		}else{
        $value = htmlspecialchars($values[2 * $index + 1]);
        print "<th>" . $value . "</th> ";
		
		}
    }

    print "</tr>";
	
    $row1 = mysql_fetch_array($result1);
}
print "</table>";

}





 mysql_close($conn ) ;



?>
</body>
</html>