
<table>

<tr>
<td>Adınız: </td>
<td><?php echo $_POST['ad'] ?></td>
</tr>

<tr>
<td>Soyadınız: </td>
<td><?php echo $_POST['soyad'] ?></td>
</tr>

<tr>
<td>E-mailiniz: </td>
<td><?php echo $_POST['mail'] ?></td>
</tr>

<tr>
<td>Yaşınız: </td>
<td><?php echo $_POST['yas'] ?></td>
</tr>

<tr>
<td>Şehriniz: </td>
<td><?php echo $_POST['sehir'] ?></td>
</tr>

<tr>
<td>Cinsiyetiniz: </td>
<td><?php echo $_POST['cinsiyet'] ?></td>
</tr>

<tr>
<td>Diller: </td>
<td>
<?php 
    $diller=$_POST['diller'];
    
    foreach($diller as $key => $value)
    {echo $value.",";}

 ?>
 </td>
</tr>

<tr>
<td>Mesajınız: </td>
<td><?php echo $_POST['mesaj'] ?></td>
</tr>
</table>

