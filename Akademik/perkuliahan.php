<?php include "koneksi.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Perkuliahan</title>
<style type="text/css">
<!--
.style3 {font-family: Geneva, Arial, Helvetica, sans-serif; font-style: italic; font-weight: bold; font-size: 36px; }
.style12 {font-family: Geneva, Arial, Helvetica, sans-serif; font-weight: bold; font-style: italic; }
-->
</style>
</head>

<body>
<table width="1520" height="524" border="0" align="center">
  <tr>
    <td height="188" colspan="3"><img src="img/Header.jpg" width="375" height="182" /><img src="img/Header.jpg" width="376" height="182" /><img src="img/Header.jpg" width="384" height="182" /><img src="img/Header.jpg" width="376" height="182" /></td>
  </tr>
  <tr>
    <td width="543"><div align="center">
      <p class="style3">PERKULIAHAN.</p>
    </div></td>
    <td width="909" height="38">&nbsp;</td>
    <td width="54"><div align="center"><a href="index.php"></a><a href="index.php"><img src="icon/Back.png" width="40" height="40" border="0" /></a></div></td>
  </tr>
  <tr> <td width="543"><table width="495" height="175" border="0" align="center">
    <tr>
      <td width="243"><span class="style12">NIM</span></td>
      <td width="242"><label>
        <input name="txtnim" type="text" id="txtnim" value="" />
      </label></td>
    </tr>
    <tr>
      <td><span class="style12">Kode Mata Kuliah </span></td>
      <td><input name="txtkodemk" type="text" id="txtkodemk" /></td>
    </tr>
    <tr>
      <td><span class="style12">NIP</span></td>
      <td><input name="txtnip" type="text" id="txtnip" /></td>
    </tr>
    <tr>
      <td><span class="style12">Nilai</span></td>
      <td><input name="txtnilai" type="text" id="txtnilai" /></td>
    </tr>
    <tr>
      <td height="30">&nbsp;</td>
      <td><img src="icon/Tambah.png" name="btnsimpan" width="40" height="40" id="btnsimpan" /> <img src="icon/Reset.png" name="btnreset" width="40" height="40" id="btnreset" /></td>
    </tr>
  </table></td>
    <td height="160" colspan="3"><table width="728" border="0" align="center">
      <tr>
        <td width="125" height="27" bgcolor="#CCCCCC"><div align="center"><em><strong>NIM</strong></em></div></td>
        <td width="179" bgcolor="#CCCCCC"><div align="center"><em><strong>Kode Mata Kuliah </strong></em></div></td>
        <td width="139" bgcolor="#CCCCCC"><div align="center"><em><strong>NIP</strong></em></div></td>
        <td width="83" bgcolor="#CCCCCC"><div align="center"><em><strong>Nilai</strong></em></div></td>
        <td colspan="2" bgcolor="#CCCCCC">&nbsp;</td>
      </tr>
      <?php 
		$tampil = mysqli_query($koneksi, "SELECT * from perkuliahan order by nim asc");
		while($data = mysqli_fetch_array($tampil)) :
		?>
      <tr>
        <td><div align="center"><em>
            <?=$data['nim'];?>
        </em></div></td>
        <td><div align="center"><em>
            <?=$data['kodemk'];?>
        </em></div></td>
        <td><div align="center"><em>
            <?=$data['nip'];?>
        </em></div></td>
        <td><div align="center"><em>
            <?=$data['nilai'];?>
        </em></div></td>
        <td width="54" bgcolor="#FFFFFF"><div align="center"><img src="icon/Edit.png" width="30" height="30" /></div></td>
        <td width="54" bgcolor="#FFFFFF"><div align="center"><img src="icon/Hapus.png" width="30" height="30" /></div></td>
      </tr>
      <?php endwhile; ?>
    </table></td>
  </tr>
  
</table>
</body>

</html>
