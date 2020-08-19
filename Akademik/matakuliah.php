<?php include "koneksi.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mata Kuliah</title>
<style type="text/css">
<!--
.style3 {font-family: Geneva, Arial, Helvetica, sans-serif; font-style: italic; font-weight: bold; font-size: 36px; }
.style7 {font-family: Geneva, Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body>
<table width="1520" height="485" border="0" align="center">
  <tr>
    <td height="188" colspan="7"><img src="img/Header.jpg" width="375" height="182" /><img src="img/Header.jpg" width="376" height="182" /><img src="img/Header.jpg" width="384" height="182" /><img src="img/Header.jpg" width="376" height="182" /></td>
  </tr>
  
  <tr>
    <td width="572"><div align="center">
      <p class="style3">MATA KULIAH.</p>
    </div></td>
    <td width="882" height="38">&nbsp;</td>
    <td width="52"><div align="center"><a href="index.php"><img src="icon/Back.png" width="40" height="40" border="0" /></a></div></td>
  </tr><td width="572"><table width="495" height="130" border="0" align="center">
    <tr>
      <td width="243" height="28"><span class="style12 style7"><em><strong>Kode Mata Kuliah </strong></em></span></td>
      <td width="242"><input name="txtkodemk" type="text" id="txtkodemk" /></td>
    </tr>
    <tr>
      <td height="25"><span class="style12 style7"><em><strong>Nama Mata Kuliah </strong></em></span></td>
      <td><input name="txtnamamk" type="text" id="txtnamamk" /></td>
    </tr>
    <tr>
      <td height="28"><span class="style12 style7"><em><strong>Nilai</strong></em></span></td>
      <td><input name="txtnilai" type="text" id="txtnilai" /></td>
    </tr>
    <tr>
      <td height="30">&nbsp;</td>
      <td><img src="icon/Tambah.png" name="btnsimpan" width="40" height="40" id="btnsimpan" /> <img src="icon/Reset.png" name="btnreset" width="40" height="40" id="btnreset" /></td>
    </tr>
  </table></td>
    <td height="160" colspan="7"><table width="642" border="0" align="center">
      <tr>
        <td width="156" height="27" bgcolor="#CCCCCC"><div align="center"><em><strong>Kode Mata Kuliah </strong></em></div></td>
        <td width="242" bgcolor="#CCCCCC"><div align="center"><em><strong>Nama Mata Kuliah </strong></em></div></td>
        <td width="83" bgcolor="#CCCCCC"><div align="center"><em><strong>SKS</strong></em></div></td>
        <td colspan="2" bgcolor="#CCCCCC">&nbsp;</td>
      </tr>
      <?php 
		$tampil = mysqli_query($koneksi, "SELECT * from matakuliah order by kodemk asc");
		while($data = mysqli_fetch_array($tampil)) :
		?>
      <tr>
        <td><div align="center"><em>
            <?=$data['kodemk'];?>
        </em></div></td>
        <td><div align="center"><em>
            <?=$data['namamk'];?>
        </em></div></td>
        <td><div align="center"><em>
            <?=$data['sks'];?>
        </em></div></td>
        <td width="54" bgcolor="#FFFFFF"><div align="center"><img src="icon/Edit.png" width="30" height="30" /></div></td>
        <td width="54" bgcolor="#FFFFFF"><div align="center"><img src="icon/Hapus.png" width="30" height="30" /></div></td>
      </tr>
      <?php endwhile; ?>
    </table>
    
  
</table>
</body>

</html>
