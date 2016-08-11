<link href="baslık.css" rel="stylesheet" type="text/css" />
<title>Arama Yapar</title>
<div align="center" class="baslık">İSTEDİĞİNİZ MÜZİĞE ANINDA ULAŞIN </div>
<table width="400" border="0" align="right">
  <tr>
    <td width="112"><a href="secim.php" title="girisYap" class="linkStyle"><strong>Ana Sayfa</strong></a></td>
    <td width="97"><a href="cikisYap.php" title="CikisYap"  class="linkStyle"><strong>Çıkış Yap</strong></a></td>
    <td width="101"><strong><a href="hakkinda.php" title="hakkinda" class="linkStyle">Hakkında</a></strong></td>
  </tr>
</table>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="arama.php">
  <div align="center">
    <table width="264">
      <tr>
        <td width="211"><label for=arama></label>
          <input type="text" name="arama" id="arama" /></td>
        <td width="41"><input type="submit" name="arama2" id="arama2" value="Ara" /></td>
      </tr>
    </table>
  </div>
  
  <p align="center" class="normal">&nbsp;</p>
	
</form>";
<?php

include("baglanti.php");


$arama=$_POST['arama'];
if($arama!=""){
$arama="%".$arama."%";
$result=mysql_query("select SarkiciAdi,SarkiAdi,SarkiLink from populermuzik where SarkiciAdi like '$arama' or SarkiAdi like '$arama'") ;

$num_rows = mysql_num_rows($result);
$row = mysql_fetch_array($result);
$num_fields = mysql_num_fields($result);  

print "<tr align = center>";

if($num_rows==0){
    print "<h2 align=center>Sarki bulunamadi</h2>";
	print "<p align=center>Şarkı adını veya Şarkıcı adını giriniz.</p>";
	
    $error = mysql_error();
}else {

print "<table align=center border=border><caption> <h1>Arama Sonuçları </h1> </caption>";
$keys = array_keys($row);
for ($index = 0; $index < $num_fields; $index++) {
    print "<th>" . $keys[2 * $index + 1] . "</th>";
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
			print "<th>"."<form id=form2 name=form2  method=post action=sarkiCal.php><input type=submit name='dugme' type='button' value='Dinle'/> 
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
}else{
	 print "<h2 align=center>Sarki bulunamadi</h2>";
	print "<p align=center>Şarkı adını veya Şarkıcı adını giriniz.</p>";}

 mysql_close($conn ) ;



?>
