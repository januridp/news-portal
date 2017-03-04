<?php
include "../koneksi.php";
include"../config/fungsi_gambar.php";




extract($_POST);
?>

<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name']; 
$tgl         =date('Y-m-d');
  
    // Apabila ada gambar yang diupload
   if (empty($lokasi_file)){
   
    $q=mysql_query("UPDATE berita SET 
									
                                    kategori	 		= '$_POST[kategori]',
                                    judul_berita			= '$_POST[judul_berita]',
                                    isi_berita	 		= '$_POST[isi_berita]',
                                    tgl_input			= '$tgl'
                                    WHERE id_berita		= '$_GET[id]'");
 } 
  else{
    UploadFile($nama_file);
   
    $q=mysql_query("UPDATE berita SET 
									 kategori	 		= '$_POST[kategori]',
                                    judul_berita			= '$_POST[judul_berita]',
                                    isi_berita	 		= '$_POST[isi_berita]',
                                    tgl_input			= '$tgl',
                                    gambar		 		= '$nama_file'
                                    WHERE id_berita		= '$_GET[id]'");
		} 
if($q){	
 
echo"<script>alert('data berhasil di update...');
document.location.href='berita.php'; </script>\n";

} else {
echo"<script>alert('gagal di update');
document.location.href='berita.php'; </script>\n";
}
?>

