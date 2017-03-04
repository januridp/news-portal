<?php
include "../koneksi.php";



extract($_POST);
if (empty ($kategori))
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='kategori.php'; </script>\n"; exit ;
}
$q=mysql_query("UPDATE kategori SET 
									
                                    
                                    nama_kategori 				= '$_POST[kategori]'
                                   	WHERE id_kategori		= '$_GET[id]'");
									
									
 
if($q){	
 
echo"<script>alert('data berhasil di update...');
document.location.href='kategori.php'; </script>\n";

} else {
echo"<script>alert('gagal di update');
document.location.href='kategori.php'; </script>\n";
}
?>

