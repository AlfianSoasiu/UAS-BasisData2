<?php include "koneksi.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dosen</title>
<style type="text/css">
<!--
.style3 {font-family: Geneva, Arial, Helvetica, sans-serif; font-style: italic; font-weight: bold; font-size: 36px; }
.style4 {font-family: Geneva, Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body>
<table width="1520" height="466" border="0" align="center">
  <tr>
    <td height="188" colspan="8"><img src="img/Header.jpg" width="375" height="182" /><img src="img/Header.jpg" width="376" height="182" /><img src="img/Header.jpg" width="384" height="182" /><img src="img/Header.jpg" width="376" height="182" /></td>
  </tr>
  <tr>
    <td width="561" height="38"><div align="center">
      <p class="style3">DOSEN.</p>
    </div></td>
    <td width="864">&nbsp;</td>
    <td width="81"><div align="center"><a href="index.php"><img src="icon/Back.png" width="40" height="40" border="0" /></a></div></td>
  </tr>
   <td width="561"><table width="495" height="86" border="0" align="center">
     <tr>
       <td width="243" height="24"><span class="style12 style4"><em><strong>NIP</strong></em></span></td>
       <td width="242"><label>
         <input name="txtnip" type="text" id="txtnip" value="" />
       </label></td>
     </tr>
     <tr>
       <td height="24"><span class="style12 style4"><em><strong>Kode Mata Kuliah </strong></em></span></td>
       <td><input name="txtkodemk" type="text" id="txtkodemk" /></td>
     </tr>
     <tr>
       <td height="30">&nbsp;</td>
       <td><a href="simpandosen.php"><img src="icon/Tambah.png" name="btnsimpan" width="40" height="40" border="0" id="btnsimpan" /></a><img src="icon/Reset.png" name="btnreset" width="40" height="40" id="btnreset" /></td>
     </tr>
   </table></td>
     <td height="160" colspan="8"><table width="498" border="0" align="center">
       <tr>
         <td width="125" height="27" bgcolor="#CCCCCC"><div align="center"><em><strong>NIP</strong></em></div></td>
         <td width="179" bgcolor="#CCCCCC"><div align="center"><em><strong>Nama Dosen </strong></em></div></td>
         <td colspan="2" bgcolor="#CCCCCC">&nbsp;</td>
       </tr>
       <?php 
		$tampil = mysqli_query($koneksi, "SELECT * from dosen order by nip asc");
		while($data = mysqli_fetch_array($tampil)) :
		?>
       <tr>
         <td><em>
           <?=$data['nip'];?>
         </em></td>
         <td><em>
           <?=$data['namadsn'];?>
         </em></td>
         <td width="54" bgcolor="#FFFFFF"><div align="center"><img src="icon/Edit.png" width="30" height="30" /></div></td>
         <td width="54" bgcolor="#FFFFFF"><div align="center"><img src="icon/Hapus.png" width="30" height="30" /></div></td>
       </tr>
       <?php endwhile; ?>
     </table>
</table>
</body>

</html>
