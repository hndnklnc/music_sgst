<link href="baslık.css" rel="stylesheet" type="text/css" />
<?php
include("baglanti.php");
$i=1;
$sarkid=$_POST['sarki'];
$sarkicid=$_POST['sarkici'];
for($j=1; $j<6;$j++)
{
	if(isset($_POST['state'])){
		$button=1;
		break;}
	else $button=0;
}


if($button==1){

$selected=$_POST['state'];
$resultD=mysql_query("select DinlenmeSayisi from populermuzik where SarkiAdi='$sarkid' and SarkiciAdi='$sarkicid'");
$resultD=mysql_fetch_row($resultD);

$resultD[0]=$resultD[0]+1;

$resultP=mysql_query("select SarkiPuan from populermuzik where SarkiAdi='$sarkid' and SarkiciAdi='$sarkicid'");
$resultP=mysql_fetch_row($resultP);
$resultP[0]=$resultP[0]+$selected;
$ort=$resultP[0]/$resultD[0];

mysql_query("update populermuzik set DinlenmeSayisi='$resultD[0]', SarkiOrt='$ort', SarkiPuan='$resultP[0]' where SarkiAdi='$sarkid' 
and SarkiciAdi='$sarkicid'" ) ;
mysql_query("update duygusal set DinlenmeSayisi='$resultD[0]', SarkiOrt='$ort', SarkiPuan='$resultP[0]' where SarkiAdi='$sarkid' 
and SarkiciAdi='$sarkicid'" ) ;
header("location:ModunaGore.php");
$i=0;
}else{
print "<script language='javascript'>

alert('Lütfen puanlardan birini seçiniz.');

</script>";
print "</th>"."</table>";
print "<div align='center' class='baslık'>İSTEDİĞİNİ SEÇ!!! </div>
<table width='400' border='0' align='right'>
  <tr>
    <td width='112'><a href='secim.php' title='girisYap' class='linkStyle'><strong>Ana Sayfa</strong></a></td>
    <td width='97'><a href='cikisYap.php' title='CikisYap'  class='linkStyle'><strong>Çıkış Yap</strong></a></td>
    <td width='101'><strong><a href='hakkinda.php' title='hakkinda' class='linkStyle'>Hakkında</a></strong></td>
  </tr>
</table>";
print "<form id='form3' name='form3' method='post' action=puanlaDuygusal.php>
	<input name=sarki type=hidden value=$sarkid />
	<input name=sarkici type=hidden value=$sarkicid />
  <div align=center>
    <p>&nbsp;</p>
    <table width=218 height=221>
    <tr>      </tr>
    <tr>      </tr>
    <tr>      </tr>
    <tr>      </tr>
    </table>
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
</form>";
}
    mysql_close($conn ) ;

?>
<title>Puanla</title>
