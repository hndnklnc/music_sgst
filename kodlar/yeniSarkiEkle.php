<link href="baslık.css" rel="stylesheet" type="text/css" />
<?php

include("baglanti.php");


$sad=$_POST['sa'];
$sad1=$_POST['sarkıcıAd'];


mysql_query("insert into yeniMuzik(sarkiAd,sarkiciAd) values('$sad','$sad1')" ) ;
    mysql_close($conn ) ;
print "<script language='javascript'>

alert('Şarkı admine başarıyla gönderildi. Admin tarafından eklenecektir.');

</script>";


    session_start();
    $giris = $_SESSION["id"];
    $turlerArray=$_SESSION['turlerArray'];
    
    
      print '<h2>Hoşgeldin ' . $giris . '</hr>';    

     
print "<div align='center' class='baslık'>İSTEDİĞİNİ SEÇ!!! </div>
<table width='400' border='0' align='right'>
  <tr>
    <td width='112'><a href='secim.php' title='girisYap' class='linkStyle'><strong>Ana Sayfa</strong></a></td>
    <td width='97'><a href='cikisYap.php' title='CikisYap'  class='linkStyle'><strong>Çıkış Yap</strong></a></td>
    <td width='101'><strong><a href='hakkinda.php' title='hakkinda' class='linkStyle'>Hakkında</a></strong></td>
  </tr>
</table>

<p class='baslık'>&nbsp;</p>

<form id='form1' name='form1' method='post' action='' >
  
  <p align='center' class='baslık'></p>
 
 
  <p align='center'><a href='aramaYap.php' class='linkStyle' >Arama Yap</a></p>
  
   <p align='center'><a href='modunaGore.php'  class='linkStyle'>Moduna göre müzik seç</a></p>
  
  <p align='center'><a href='yeniMdi.php' class='linkStyle'>Farklı müzikler</a></p>
 
  <p align='center'><a href='yeniSarkiEkle.html' class='linkStyle'>Yeni Müzik Eklemek İstiyorum</a></p>
  <p align='center'><a href='eniyienkotu.html'  class='linkStyle'>En İyiler En Kötüler</a></p>
  
</form>";






?>