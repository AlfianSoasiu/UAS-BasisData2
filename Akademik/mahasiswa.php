<?php include "koneksi.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mahasiswa</title>
<style type="text/css">
<!--
.style3 {font-family: Geneva, Arial, Helvetica, sans-serif; font-style: italic; font-weight: bold; font-size: 36px; }
.style9 {font-family: Geneva, Arial, Helvetica, sans-serif}
.style13 {font-family: Geneva, Arial, Helvetica, sans-serif; font-weight: bold; font-style: italic; }
-->
</style>
</head>

<body>
<table width="1520" height="530" border="0" align="center">
  <tr>
    <td height="188" colspan="8"><img src="img/Header.jpg" width="375" height="182" /><img src="img/Header.jpg" width="376" height="182" /><img src="img/Header.jpg" width="384" height="182" /><img src="img/Header.jpg" width="376" height="182" /></td>
  </tr>
  <tr>
    <td width="502"><div align="center">
      <p class="style3">MAHASISWA.</p>
    </div></td>
    <td width="963" height="38">&nbsp;</td>
    <td width="41"><div align="center"><a href="index.php"><img src="icon/Back.png" width="40" height="40" border="0" /></a></div></td>
  </tr><tr>
    <td width="502"><table width="495" height="175" border="0" align="center">
      <tr>
        <td width="243"><span class="style9"><em><strong><strong>NIM</strong></strong></em></span></td>
        <td width="242"><label>
          <input name="txtnim" type="text" id="txtnim" value="" />
        </label></td>
      </tr>
      <tr>
        <td><span class="style13">Nama Mahasiswa </span></td>
        <td><input name="txtnamamhs" type="text" id="txtnamamhs" /></td>
      </tr>
      <tr>
        <td><span class="style13">Tempat Tanggal Lahir </span></td>
        <td><input name="txtttl" type="text" id="txtttl" /></td>
      </tr>
      <tr>
        <td><span class="style13">Alamat</span></td>
        <td><input name="txtalamat" type="text" id="txtalamat" /></td>
      </tr>
      <tr>
        <td><span class="style13">Jenis Kelamin </span></td>
        <td><input type="text" name="textfield42" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><img src="icon/Tambah.png" name="btnsimpan" width="40" height="40" id="btnsimpan" /> <img src="icon/Reset.png" name="btnreset" width="40" height="40" id="btnreset" /></td>
      </tr>
    </table></td>
    <td width="963"><table width="921" border="0" align="center">
      <tr>
        <td width="122" height="27" bgcolor="#CCCCCC"><div align="center"><em><strong>NIM</strong></em></div></td>
        <td width="196" bgcolor="#CCCCCC"><div align="center"><em><strong>Nama Mahasiswa </strong></em></div></td>
        <td width="197" bgcolor="#CCCCCC"><div align="center"><em><strong>TTL</strong></em></div></td>
        <td width="140" bgcolor="#CCCCCC"><div align="center"><em><strong>Alamat</strong></em></div></td>
        <td width="128" bgcolor="#CCCCCC"><div align="center"><em><strong>Jenis Kelamin </strong></em></div></td>
        <td colspan="2" bgcolor="#CCCCCC">&nbsp;</td>
      </tr>
      <?php 
		$tampil = mysqli_query($koneksi, "SELECT * from mahasiswa order by nim asc");
		while($data = mysqli_fetch_array($tampil)) :
		?>
      <tr>
        <td><div align="center"><em>
            <?=$data['nim'];?>
        </em></div></td>
        <td><div align="center"><em>
            <?=$data['namamhs'];?>
        </em></div></td>
        <td><div align="center"><em>
            <?=$data['ttl'];?>
        </em></div></td>
        <td><div align="center"><em>
            <?=$data['alamat'];?>
        </em></div></td>
        <td><div align="center"><em>
            <?=$data['jk'];?>
        </em></div></td>
        <td width="54" bgcolor="#FFFFFF"><div align="center"><img src="icon/Edit.png" width="30" height="30" /></div></td>
        <td width="54" bgcolor="#FFFFFF"><div align="center"><img src="icon/Hapus.png" width="30" height="30" /></div></td>
      </tr>
      <?php endwhile; ?>
    </table></td>
    <td height="210" colspan="7">
    

</table>
</body>

</html>
