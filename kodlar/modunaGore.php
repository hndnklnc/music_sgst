<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mod Secimi</title>
<link href="baslık.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center" class="baslık">MODUNU SEÇ!!! </div>
<table width="400" border="0" align="right">
  <tr>
    <td width="112"><a href="secim.php" title="girisYap" class="linkStyle"><strong>Ana Sayfa</strong></a></td>
    <td width="97"><a href="cikisYap.php" title="CikisYap"  class="linkStyle"><strong>Çıkış Yap</strong></a></td>
    <td width="101"><strong><a href="hakkinda.php" title="hakkinda" class="linkStyle">Hakkında</a></strong></td>
  </tr>
</table>
<p>&nbsp;</p>
  <?php
     
    // oturumu baslatalim
    session_start();
    
    // giris bilgilerini alalim.
    $giris = $_SESSION["id"];
    $turlerArray=$_SESSION['turlerArray'];
    
    
      print '<h2>Hoşgeldin ' . $giris . '</hr>';    
?>


<p>&nbsp;      </p>
<table width="861" align="center">
  <tr>
    <th width="115" scope="row"><p>&nbsp;</p>
      <p align="center"><a href="romantik.php" class="linkStyle">Romantik</a></p>
<p>&nbsp;</p>
   </th>
    <td width="100"><div align="center"><a href="hareketli.php" class="linkStyle">Hareketli</a></div></td>
      <td width="122"> <div align="center">
        <p><a href="duygusal.php" class="linkStyle">Duygusal</a></p>
</div>
        </p>
              
    <td width="120">  <a href="eglenceli.php" class="linkStyle">Eğlenceli </a>
      </form><td width="125"><a href="melankolik.php" class="linkStyle">Melankolik</a>
        </td>
    <td width="123"><a href="nostaljik.php" class="linkStyle">Nostaljik</a></td>
    <td width="110"><a href="sakin.php" class="linkStyle">Sakin</a></td>
  </tr>
</table>
</body>
</html>