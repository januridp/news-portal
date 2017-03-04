<?php session_start(); ?>
<?php if (!empty($_SESSION['usernameku']) && !empty($_SESSION['passwordku'])) { ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

  <script type="text/javascript" src="tinymcpuk/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
         // General options
         mode : "textareas",
         theme : "advanced",
});
</script>

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
      <td width="753" height="250" align="left" bgcolor="#FFFFFF"><div align="center">INPUT KATEGORI berita
        </div>
        <table width="755" border="0">
          <tr>
            <td width="27">&nbsp;</td>
            <td width="702">&nbsp;</td>
            <td width="10">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><p align="left">        
                <form enctype="multipart/form-data" method="post" action="update_berita.php?&id=<?php echo $_GET['id'] ?>">
                  <table width="701" border="0">
                    <?php
include'../koneksi.php';

$id = $_GET[id];
$edit		= "select * from berita where id_berita=$id";
  $hasil	= mysql_query ($edit);
  $c		= mysql_fetch_array ($hasil);

?>
<?php
include'../koneksi.php';
$sql_kategori="select * from kategori order by id_kategori";
$kueri_kategori=mysql_query($sql_kategori) or die(mysql_error());


?>
                    <tr>
                      <td width="92"><small><strong>Kategori</strong></small></td>
                      <td width="10">:</td>
                      <td width="585"><select name="kategori">
                          <?php
 while (list($kode,$nama_status)=mysql_fetch_array($kueri_kategori))
   {
?>
                          <option  value="<?php echo $kode ?>"><?php echo $nama_status ?></option>
                          <?php
  }
?>
                      </select></td>
                    </tr>
                    <tr>
                      <td><small><strong>Judul</strong></small></td>
                      <td>:</td>
                      <td><input type="text" name="judul_berita" value="<?php echo $c['judul_berita']; ?>"></td>
                    </tr>
                    <tr>
                      <td><small><strong>isi artikel </strong></small></td>
                      <td>:</td>
                      <td><textarea name="isi_berita" cols="70" rows="30" id="isi_berita"></textarea></td>
                    </tr>
                   
                    <tr>
                      <td><small><strong>Gambar</strong></small></td>
                      <td>:</td>
                      <td><input type="file" name="fupload" id="nama_file" value="<?php echo $c['gambar']; ?>"></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><input type="submit" name="Submit" value="Submit"></td>
                    </tr>
                  </table>
                </form>
                <p></p>
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