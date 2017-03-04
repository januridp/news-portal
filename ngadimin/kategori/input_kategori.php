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
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
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
          <td bgcolor="#000048"><a href="kategori.php"><span class="style1">- Kategori</span></a></td>
        </tr>
        <tr>
          <td bgcolor="#00006A"><a href="../berita/berita.php"><span class="style1">- berita</span></a></td>
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
          <td><p align="left"><form method="post" action="proses_kategori.php">
        <table border="0" cellpadding="0">
          <tr bgcolor="#999999">
            <td><small><strong>KATEGORI</strong></small></td>
          </tr>
          <tr bgcolor="#CCCCCC">
            <td><input name="kategori" type="text" id="kategori"></td>
          </tr>
          <tr bgcolor="#CCCCCC">
            <td align="right"><input type="submit" value="submit" name="simpan"></td>
          </tr>
        </table>
		</form></p>
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
design by Achmad Pidjarianto </span></td>
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