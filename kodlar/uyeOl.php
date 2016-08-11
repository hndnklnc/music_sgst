<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Uye ekle</title>
<link href="baslık.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php

include("baglanti.php");


$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$sifre=$_POST['sifre'];
$kullaniciAdi=$_POST['ka'];
if(isset($_POST['state'])){
$degerler=$_POST['state'];
$turler="";
$kontrol=mysql_query("select kullaniciAdi from kullanici where kullaniciAdi='$kullaniciAdi' ") ;
$sayi=mysql_num_rows($kontrol);
if($sayi==0){
foreach($degerler as $statename)
{
	
 $turler=$turler.$statename.",";
}



mysql_query("insert into kullanici(Ad,Soyad,KullaniciAdi,Sifre,SevdigiTurler) values('$ad','$soyad','$kullaniciAdi','$sifre','$turler')" ) ;
    mysql_close($conn ) ;
print ("<body>
<div align='center' class='baslık'>Moduna Göre Müzik </div>
<table width='346' border='0' align='right'>
  <tr>
    <td width='89'><strong><a href='anaEkran.php' title='girisYap' class='linkStyle'>Ana Sayfa</a></strong></td>
    <td width='80'><strong><a href='girisEkrani.html' title='girisYap'  class='linkStyle'>Giriş Yap</a></strong></td>
    <td width='68'><strong><a href='uyeOl.html' title='uyeOl' class='linkStyle'>Üye Ol</a></strong></td>
    <td width='91'><strong><a href='anaEkran.html' title='hakkinda' class='linkStyle'>Hakkında</a></strong></td>
  </tr>
</table>
<p>&nbsp;</p>
<form id='form1' name='form1' method='post' action=''>
  <div align='center'></div>
  <p align='center' class='normal'>&nbsp;</p>
  <p align='center' class='normal'>&nbsp;</p>
</form>
<p>&nbsp;</p>
<p align='right'></p>
<p>&nbsp;</p>
</body>");
}else{
	print ("<body>
	<script language='javascript'>

alert('Başka bir kullanıcı adı seçiniz.');

</script>
<div align='center' class='baslık'>
  <p>Üye Olmak İçin Boşlıkları Doldurunuz</p>
</div>
<form id='form1' name='form1' method='post' action='uyeOl.php'>
  <div align='center'>
    <p>&nbsp;</p>
    <table width='366' height='221'>
      <tr>
        <th width='146' scope='row'>Ad</th>
        <td width='208'><label for='ad'></label>
        <input type='text' name='ad' id='ad' /></td>
      </tr>
      <tr>
        <th scope='row'>Soyad</th>
        <td><label for='soyad'></label>
        <input type='text' name='soyad' id='soyad' /></td>
      </tr>
      <tr>
        <th scope='row'>Kullanıcı Adı</th>
        <td><label for='kullaniciAdi'></label>
        <input type='text' name='ka' id='kullaniciAdi' /></td>
      </tr>
      <tr>
        <th scope='row'>Şifre</th>
        <td><span id='sprypassword1'>
          <label for='sifre'></label>
          <input type='password' name='sifre' id='sifre' />
        <span class='passwordRequiredMsg'>Boslukları doldurunuz.</span></span></td>
      </tr>
      <tr>
        <th scope='row'>Sevdiğiniz Türler</th>
        <td><table width='200'>
          <tr>
            <td><label>
              <input type='checkbox' name='state[]' value='pop' id='tuumlrler_0' />
              Pop</label></td>
            </tr>
          <tr>
            <td><label>
              <input type='checkbox' name='state[]' value='rock' id='tuumlrler_1' />
              Rock</label></td>
            </tr>
          <tr>
            <td><label>
              <input type='checkbox' name='state[]' value='arabesk' id='tuumlrler_2' />
              Arabesk</label></td>
            </tr>
          <tr>
            <td><label>
              <input type='checkbox' name='state[]' value='klasik' id='tuumlrler_3' />
              Klasik</label></td>
            </tr>
          <tr>
            <td><label>
              <input type='checkbox' name='state[]' value='jazz' id='tuumlrler_4' />
              Jazz</label></td>
            </tr>
          <tr>
            <td><label>
              <input type='checkbox' name='state[]' value='hiphop' id='tuumlrler_5' />
              Hip hop</label></td>
            </tr>
          <tr>
            <td><label>
              <input type='checkbox' name='state[]' value='turku' id='tuumlrler_6' />
              Türkü</label></td>
            </tr>
        </table></td>
      </tr>
    </table>
    <p>
      <input type='submit' name='uyeOl' id='uyeOl' value='Üye Ol'  />
    </p>
  </div>
</form>
<p>&nbsp;</p>
</body>
</html>");

}
}else{
print "<script language='javascript'>
alert('Sevdiğiniz türleri seçiniz.');
</script>";
print "<table width='400' border='0' align='right'>
  <tr>
    <td width='112'><a href='anaEkran.php' title='anaEkran' class='linkStyle'><strong>Ana Sayfa</strong></a></td>
    <td width='97'><a href='girisEkrani.html' title='CikisYap'  class='linkStyle'><strong>Giriş Yap</strong></a></td>
    <td width='72'><strong><a href='uyeOl.html' title='uyeOl' class='linkStyle'>Üye Ol</a></strong></td>
    <td width='101'><strong><a href='hakkinda1.php' title='hakkinda' class='linkStyle'>Hakkında</a></strong></td>
  </tr>
</table>
<p>&nbsp;</p>
<div align='center' class='baslık'>
  <p>Üye Olmak İçin Boşlıkları Doldurunuz</p>
</div>
<form id='form1' name='form1' method='post' action='uyeOl.php'>
  <div align='center'>
    <p>&nbsp;</p>
    <table width='366' height='221'>
      <tr>
        <th width='146' scope='row'>Ad</th>
        <td width='208'><label for='ad'><span id='sprytextfield1'>
          <input type='text' name='ad' id='text1' />
        <span class='textfieldRequiredMsg'>Boslukları doldurunuz.</span></span></label></td>
      </tr>
      <tr>
        <th scope='row'>Soyad</th>
        <td><label for='soyad'><span id='sprytextfield2'>
          <input type='text' name='soyad' id='text2' />
        <span class='textfieldRequiredMsg'>Boslukları doldurunuz.</span></span></label></td>
      </tr>
      <tr>
        <th scope='row'>Kullanıcı Adı</th>
        <td><label for='kullaniciAdi'><span id='sprytextfield3'>
          <input type='text' name='ka' id='text3' />
        <span class='textfieldRequiredMsg'>Boslukları doldurunuz.</span></span></label></td>
      </tr>
      <tr>
        <th scope='row'>Şifre</th>
        <td><label for='sifre'><span id='sprytextfield4'>
          <input type='text' name='sifre' id='text4' />
        <span class='textfieldRequiredMsg'>Boslukları doldurunuz.</span></span></label></td>
      </tr>
      <tr>
        <th scope='row'>Sevdiğiniz Türler</th>
        <td><table width='200'>
          <tr>
            <td><label>
              <input type='checkbox' name='state[]' value='pop' id='tuumlrler_0' />
              Pop</label></td>
            </tr>
          <tr>
            <td><label>
              <input type='checkbox' name='state[]' value='rock' id='tuumlrler_1' />
              Rock</label></td>
            </tr>
          <tr>
            <td><label>
              <input type='checkbox' name='state[]' value='arabesk' id='tuumlrler_2' />
              Arabesk</label></td>
            </tr>
          <tr>
            <td><label>
              <input type='checkbox' name='state[]' value='klasik' id='tuumlrler_3' />
              Klasik</label></td>
            </tr>
          <tr>
            <td><label>
              <input type='checkbox' name='state[]' value='jazz' id='tuumlrler_4' />
              Jazz</label></td>
            </tr>
          <tr>
            <td><label>
              <input type='checkbox' name='state[]' value='hiphop' id='tuumlrler_5' />
              Hip hop</label></td>
            </tr>
          <tr>
            <td><label>
              <input type='checkbox' name='state[]' value='turku' id='tuumlrler_6' />
              Türkü</label></td>
            </tr>
        </table></td>
      </tr>
    </table>
    <p>
      <input type='submit' name='uyeOl' id='uyeOl' value='Üye Ol'  />
    </p>
  </div>
</form>
<p>&nbsp;</p>
<script type='text/javascript'>
var sprytextfield1 = new Spry.Widget.ValidationTextField('sprytextfield1');
var sprytextfield2 = new Spry.Widget.ValidationTextField('sprytextfield2');
var sprytextfield3 = new Spry.Widget.ValidationTextField('sprytextfield3');
var sprytextfield4 = new Spry.Widget.ValidationTextField('sprytextfield4');
</script>";

}
?>
</body>
</html>