<link href="baslık.css" rel="stylesheet" type="text/css" />
<?php

include("baglanti.php");


$ad=$_POST['sa'];


$sarkiciAdi=$_POST['sarkiciAd'];

$link=$_POST['link'];

if(isset($_POST['state']) &&(isset($_POST['RadioGroup1']))){
$sarkiTuru=$_POST['RadioGroup1'];	
$durumlar=$_POST['state'];
foreach($durumlar as $statename){
	
mysql_query("insert into $statename(SarkiTuru,SarkiciAdi,SarkiAdi,SarkiPuan,SarkiLink,SarkiOrt,DinlenmeSayisi) values('$sarkiTuru','$sarkiciAdi','$ad',0,'$link',0,0)" ) ;
}
print "<script language='javascript'>
alert('Sarki basariyla kaydedildi.');
</script>";
}else {
print "<script language='javascript'>
alert('Lütfen tüm bilgileri doldurunuz!!');
</script>
<table width='400' border='0' align='right'>
  <tr>
    <td width='112'><a href='secim.php' title='girisYap' class='linkStyle'><strong>Ana Sayfa</strong></a></td>
    <td width='97'><a href='cikisYap.php' title='CikisYap'  class='linkStyle'><strong>Çıkış Yap</strong></a></td>
    <td width='101'><strong><a href='hakkinda.php' title='hakkinda' class='linkStyle'>Hakkında</a></strong></td>
  </tr>
</table>
<form id='form1' name='form1' method='post' action='sarkiEkle.php'>
  <h2>&nbsp;</h2>
  <h2 class='baslık'>ADMİN SİSTEMİ</h2>
  <div align='center'>
    <table width='338' border='1'>
    <tr>      </tr>
    </table>
  </div>
  <div align='center'>
    <table width='501' border='1'>
      <tr>
        <td width='147'>Şarkı Adı</td>
        <td width='338'><span id='sprytextfield1'>
          <label for='sa2'></label>
          <input type='text' name='sa' id='sa2' />
        <span class='textfieldRequiredMsg'>Bosluklari doldurunuz..</span></span></td>
      </tr>
      <tr>
        <td>Şarkı Türü</td>
        <td><span id='sprytextfield2'>
          <label for='st'></label>
        </span>
          <p>
            <label>
              <input type='radio' name='RadioGroup1' value='pop' id='RadioGroup1_0' />
              Pop</label>
            <br />
            <label>
              <input type='radio' name='RadioGroup1' value='rock' id='RadioGroup1_1' />
              Rock</label>
            <br />
            <label>
              <input type='radio' name='RadioGroup1' value='arabesk' id='RadioGroup1_2' />
              Arabesk</label>
            <br />
            <label>
              <input type='radio' name='RadioGroup1' value='klasik' id='RadioGroup1_3' />
              Klasik</label>
            <br />
            <label>
              <input type='radio' name='RadioGroup1' value='jazz' id='RadioGroup1_4' />
              Jazz</label>
            <br />
            <label>
              <input type='radio' name='RadioGroup1' value='hip hop' id='RadioGroup1_5' />
              Hip Hop</label>
            <br />
            <label>
              <input type='radio' name='RadioGroup1' value='türkü' id='RadioGroup1_6' />
              Türkü</label>
            <br />
          </p>
          <span>          <span class='textfieldRequiredMsg'>Bosluklari doldurunuz..</span></span></td>
      </tr>
      <tr>
        <td>Şarkıcı Adı</td>
        <td><span id='sprytextfield3'>
          <label for='sarkici'></label>
       
        <label for='sarkiciAd2'></label>
        <input type='text' name='sarkiciAd' id='sarkiciAd2' />
        <span class='textfieldRequiredMsg'>Bosluklari doldurunuz..</span></span></td>
      </tr>
      <tr>
        <td><p>
          <label for='link'>Link</label>
        </p>
       </td>
        <td><span id='sprytextfield4'>
          <label for='sarkiciAd'></label>
          <span class='textfieldRequiredMsg'>Bosluklari doldurunuz..</span>
          <input type='text' name='link' id='link' />
        </span>
        </td>
      </tr>
      <tr>
        <td><p>
          <input type='checkbox' name='state[]' id='farkli' value='farklimuzik' />
          Farklı
          <input type='checkbox' name='state[]' id='populer' value='populermuzik' />
            <label for='populer'>Populer
              <br />
              <input type='checkbox'  name='state[]' id='checkbox'  value='duygusal'/>
              Duygusal<br />
              <input type='checkbox'  name='state[]' id='checkbox2' value='romantik' />
              Romantik<br />
              <input type='checkbox'  name='state[]' id='checkbox4'  value='melankolik'/>
              Melankolik<br />
              <input type='checkbox'  name='state[]' id='checkbox5' value='eglenceli' />
              Eğlenceli<br />
              <input type='checkbox'  name='state[]' id='checkbox6' value='hareketli' />
              Hareketli
              <br />
              <input type='checkbox'  name='state[]' id='checkbox7'  value='nostaljik'/>
              Nostaljik<br />
              <input type='checkbox'  name='state[]' id='checkbox8'  value='sakin'/>
              Sakin<br />
              <input type='checkbox'  name='state[]' id='checkbox9'  value='mutlu'/>
              Mutlu<br />
              <br />
              <br />
            </label>
        </p></td>
        <td><input type='submit' name='button' id='button' value='Kaydet' /></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
 
</form>
<script type='text/javascript'>
var sprytextfield1 = new Spry.Widget.ValidationTextField('sprytextfield1');
var sprytextfield2 = new Spry.Widget.ValidationTextField('sprytextfield2');
var sprytextfield3 = new Spry.Widget.ValidationTextField('sprytextfield3');
var sprytextfield4 = new Spry.Widget.ValidationTextField('sprytextfield4');
</script>";	

}

 
	
 mysql_close($conn ) ;
header('refresh:0; url=adminMain.html');


?>