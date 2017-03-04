<?php session_start(); ?>
<?php if (!empty($_SESSION['usernameku']) && !empty($_SESSION['passwordku'])) { ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>halaman admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #000033;
}
a:link {
	color: #0000FF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #0000FF;
}
a:hover {
	text-decoration: none;
	color: #000000;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
.style1 {color: #FFFFFF}
-->
</style></head>

<body>
<div align="center">
  <table width="100" border="0" cellpadding="0">
    <tr>
      <td colspan="2"><img src="../banner-admin.jpg" width="961" height="208"></td>
    </tr>
    <tr>
      <td width="206" align="center" valign="top" bgcolor="#000099"><table width="206" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="258" align="center" bgcolor="#000000"><span class="style1"><strong>Menu</strong></span></td>
        </tr>
        <tr>
          <td bgcolor="#000048"><a href="../kategori/kategori.php"><span class="style1">- Kategori</span></a></td>
        </tr>
        <tr>
          <td bgcolor="#00006A"><a href="berita.php"><span class="style1">- berita</span></a></td>
        </tr>
        <tr>
          <td bgcolor="#000048"><span class="style1">- Contact Us </span></td>
        </tr>
    
        <tr>
           <script language="javascript">
<!--
function logout()
{
	tanya=confirm("Apakah anda yakin akan keluar ?")
	if (tanya !="0")
	{
		top.location="../logout.php"
	}
}
//-->
</script>
<td bgcolor="#000048"><span class="style1"><a href="#"onClick="logout()"><strong>- Logout</strong></a></span></td>
</tr>
      </table></td>
      <td width="753" height="250" align="left" bgcolor="#FFFFFF"><div align="center">KATEGORI berita
        </div>
        <table width="755" border="0">
        <tr>
          <td width="27">&nbsp;</td>
          <td width="702">&nbsp;</td>
          <td width="10">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><p align="left"><a href="input_berita.php">+ Tambah berita </a></p>
            <p>
              <?php
include "../koneksi.php";

$query = "select * from kategori,berita 
where berita.kategori=kategori.id_kategori ";
$sql = mysql_query($query);

?>
            <table border="0">
              <tr bgcolor="#B0B0B0">
                <th><small>NO</small></th>
                <th><small>Kategori</small></th>
                <th><small>judul</small></th>
                
                <th><small>Tgl input </small></th>
                
                <th><small>Gambar</small></th>
                <th><small>AKSI</small></th>
              </tr>
              <?php
$no=1;
while ($data=mysql_fetch_array($sql))
{
?>
              <tr bgcolor="#E4E4E4">
                <td><small><?php echo $no?></small></td>
                <td><small><?php echo $data['nama_kategori']; ?></small></td>
                <td><small><?php echo $data['judul_berita']; ?></small></td>
                <td><small><?php echo $data['tgl_input']; ?></small></td>
                <td><small><img src="foto/<?php echo $data['gambar']; ?>" height="30" width="30"></small></td>
                <td><small><a href="hapus_berita.php?id=<?php echo $data['id_berita']; ?>" 
	onClick = "return confirm('Apakah Anda ingin mengapus data <?php echo $data['id_berita']; ?>?')"> Hapus </a> | <a href="edit_berita.php?id=<?php echo $data['id_berita']; ?>" >Edit</a> </small></td>
              </tr>
              <?php
$no++;
}
?>
            </table>
            <p></p></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    <tr align="center" valign="middle" bgcolor="#000099">
      <td colspan="2"><span class="style1">&copy; 2013 Pidjar <br>
design by Achmad Pidjarianto </span><script type='text/javascript' src='//eclkmpsa.com/adServe/banners?tid=94091_154020_0&tagid=2'></script> <br> <script type='text/javascript' src='//eclkmpbn.com/adServe/banners?tid=94091_154020_2'></script></td>
    </tr>
  </table>
</div>
</body>
</html>
<?php

}else{
  echo "<script language='javascript'>alert('Silakan Login Terlebih Dahulu')</script>";
 echo"<script language='javascript'>window.location = '../index.php'</script>";
}
?>