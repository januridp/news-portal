<?php
include "../koneksi.php";

$kategori		= $_POST['kategori'];

if (empty ($kategori))
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='input_kategori.php'; </script>\n"; exit ;
}

$query = mysql_query ('insert into kategori (nama_kategori)values("'.$kategori.'")');

if($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='kategori.php'; </script>\n";
}else{
echo "<script>alert('data gagal disimpan');
document.location.href='input_kategori.php'; </script>\n";
}
?>