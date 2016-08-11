<link href="baslık.css" rel="stylesheet" type="text/css" />
<title>Giris Kontrol</title>
<div align="center" class="baslık"></div>
<div align="right">
  <table width="400" border="0" align="right">
    <tr>
      <td width="112"><a href="anaEkran.php" title="girisYap" class="linkStyle"><strong>Ana Sayfa</strong></a></td>
      <td width="97"><a href="girisEkrani.html" title="girisYap"  class="linkStyle"><strong>Giriş Yap</strong></a></td>
      <td width="80"><strong><a href="uyeOl.html" title="uyeOl" class="linkStyle">Üye Ol</a></strong></td>
      <td width="93"><strong><a href="hakkinda1.php" title="hakkinda" class="linkStyle">Hakkında</a></strong></td>
    </tr>
  </table>
</div>
<p>&nbsp;</p>
<?php
session_start();
ob_start();
include("baglanti.php");


$id=$_POST['ka'];
$sifre=$_POST['sifre'];


$id = stripslashes($id);
$sifre = stripslashes($sifre);
$id = mysql_real_escape_string($id);
$sifre = mysql_real_escape_string($sifre);

$sql="SELECT * FROM kullanici WHERE KullaniciAdi='$id' and Sifre='$sifre' ";
$result=mysql_query($sql);

$turler=mysql_fetch_array($result);
$turler=$turler[4];


$turlerArray=explode(",", $turler); 

$count=mysql_num_rows($result);


if($count==1)
{
	session_register("id");
	session_register("turlerArray");
	
	if($id=="admin" && $sifre=="admin")
	{header("location:adminMain.html");
	
	}
	else{
		
	header("location:secim.php");
	
	}
}
else{

	print "<script language='javascript'>

alert('Yalnış kullanıcı adı veya şifre.');

</script>
	<label><label><label></label></label></label><form id=form1 name=form1 method=post action=girisKontrol.php>
<p>&nbsp;  </p>
  <h2>&nbsp;</h2>
  <h2>&nbsp;</h2>
  <p class=baslık>LÜTFEN GİRİŞ YAPINIZ</p>
  <p>&nbsp;</p>
  <div align=center></div>
  <p>&nbsp;</p>
  <div align=center>
    <table width=358 border=1>
      <tr>
        <td width=176>Kullanıcı Adı</td>
        <td width=166><div align=center><span id=sprytextfield1>
          <label for=ka2></label>
          <input type=text name=ka id=ka2 />
        <span class=textfieldRequiredMsg>Boşlukları doldurunuz.</span></span></div></td>
      </tr>
      <tr>
        
        <td>Şifre</td>
        <td><div align='center'><span id='sprypassword1'>
          <label for='sifre'></label>
          <input type='password' name='sifre' id='sifre' />
        <span class='passwordRequiredMsg'>Boşlukları doldurunuz.</span></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align=center>
          <input type=submit name=button id=button value=Giriş onclick=secim.php />
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align=center></div></td>
      </tr>
    </table>
  </div>
  <div align=center></div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<script type=text/javascript>
var sprytextfield1 = new Spry.Widget.ValidationTextField(sprytextfield1);
var sprytextfield2 = new Spry.Widget.ValidationTextField(sprytextfield2);
</script>";}





ob_end_flush();
?>