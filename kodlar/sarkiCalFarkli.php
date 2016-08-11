<link href="baslık.css" rel="stylesheet" type="text/css" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sarkı Cal</title>
</head>

<body>


<?php

include("baglanti.php");

if($i==0){
$sarkiLink=$_POST['sarkiYeri'];
$sarkiAd=$_POST['sarkiAdi'];
$sarkiciAd=$_POST['sarkiciAdi'];
print "<div align='center' class='baslık'>İSTEDİĞİNİ SEÇ!!! </div>
<table width='400' border='0' align='right'>
  <tr>
    <td width='112'><a href='secim.php' title='girisYap' class='linkStyle'><strong>Ana Sayfa</strong></a></td>
    <td width='97'><a href='cikisYap.php' title='CikisYap'  class='linkStyle'><strong>Çıkış Yap</strong></a></td>
    <td width='101'><strong><a href='hakkinda.php' title='hakkinda' class='linkStyle'>Hakkında</a></strong></td>
  </tr>
</table>";
print "<p>&nbsp;</p>";
print "<p>&nbsp;</p>";
print "<table align=center border=border>";
print "<th>";

print "<embed  name='mediaplayer1' pluginspage='http://www.microsoft.com/Windows/MediaPlayer' 
src='$sarkiLink' width='235' height='52' type='application/x-mplayer2' controller='true'
loop='0' transparentstart='1' autostart='true'></embed>"; 
print "</th>"."</table>";
print "<form id='form3' name='form3' method='post' action=puanlaFarkli.php>
	<input name=sarki type=hidden value='$sarkiAd' />
	<input name=sarkici type=hidden value='$sarkiciAd' />
  <div align=center>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table width=337>
      <tr>
        <td><label>
          <input type=radio name=state value=1 id=state_0 />
          Hayatımda dinlediğim en kötü şarkılardan biri</label></td>
      </tr>
      <tr>
        <td><label>
          <input type=radio name=state value=2 id=state_1 />
          Benim için çok anlam ifade etmeyen bir şarkı</label></td>
      </tr>
      <tr>
        <td><label>
          <input type=radio name=state value=3 id=state_2 />
          Tekrar dinlesemde olur dinlemesemde olur</label></td>
      </tr>
      <tr>
        <td><label>
          <input type=radio name=state value=4 id=state_3 />
          İdare eder</label></td>
      </tr>
      <tr>
        <td><label>
          <input type=radio name=state value=5 id=state_4 />
          Biraz olsun beni ifade etti</label></td>
      </tr>
      <tr>
        <td><label>
          <input type=radio name=state value=6 id=state_5 />
          Bu şarkı beni anlatıyor</label></td>
      </tr>
    </table>
    <p>
      <input type=submit name='Puan ver' id=puan value='Puan ver' />
    </p>
  </div>
</form>";}




?>


</body>
</html>