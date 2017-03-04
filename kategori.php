<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>..::Beranda Dunia::..</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />

<style type="text/css">
.kotak { 
height:150px; 
width : 80px;
padding:10px;
background-color:#ffffff;
width:250px; 
margin-top:10px; }

.sub-barang{
text-align:center;
padding:5px;
width:110px;
float:left;
border:1px dashed #333333;
	-moz-border-radius:4px;
	-khtml-border-radius: 4px;
	-webkit-border-radius: 4px;
	margin:5px 5px 10px 5px;
}
.jdl-brg{
font-size:14px;
height:100px;
margin-bottom:70px;
font-family:"Comic Sans MS";
}

#paging{
width:920px;
margin-top:400px;
height:42px;
border:1px dashed #666666;
	-moz-border-radius:4px;
	-khtml-border-radius: 4px;
	-webkit-border-radius: 4px;
}
#kotak-paging{
text-align:center;
margin:5px;
padding:5px;
width:50px;
float:left;
border:1px dashed #666666;
	-moz-border-radius:4px;
	-khtml-border-radius: 4px;
	-webkit-border-radius: 4px;
}


</style>


</head>
<body id="top">
<div class="wrapper col0">
  <div id="topline">
    <ul>
      <li><a href="#">Beranda</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us </a></li>
      <li class="last"><a href="#">Galery</a></li>
    </ul>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="header">
    <div class="fl_left">
      <h1><a href="#"><strong>B</strong>eranda<strong>Dunia</strong></a></h1>
      <!-- <p>Free CSS Website Template</p> -->
    </div>
    <div class="fl_right"><a href="#"><img src="images/demo/468x60.gif" alt="" /></a></div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">Politik</a></li>
        <li><a href="#">Ekonomi</a></li>
        <li><a href="#">DropDown</a>
            <ul>
              <li><a href="#">Link 1</a></li>
              <li><a href="#">Link 2</a></li>
              <li><a href="#">Link 3</a></li>
            </ul>
        </li>
        <li class="last"><a href="#">Olahraga</a></li>
      </ul>
    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
        <legend>Site Search</legend>
        <input name="text" type="text"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" value="Search Our Website&hellip;" />
        <input type="submit" name="go" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="#">Home</a></li>
      <li>&#187;</li>
      <li><a href="#">Grand Parent</a></li>
      <li>&#187;</li>
      <li><a href="#">Parent</a></li>
      <li>&#187;</li>
      <li class="current"><a href="#">Child</a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
  <?php  
    include "koneksi.php";  
   
$batas=6;
$paging=$_GET['paging'];
if(empty($paging))
	{
	$posisi=0;
	$paging=1;
	}

else{
	$posisi=($paging-1) * $batas;
	}
$query=mysql_query("select * from kategori,berita 
where berita.kategori=2=kategori.id_kategori   limit $posisi,$batas");
while($r=mysql_fetch_array($query))
{
    echo"<h1><strong>$r[judul_berita]</strong></h1><br>
      
        <p>".substr($r[isi_berita],0,500).".....<a href='readmore.php?id=$r[id_berita]'>Read More</a> </p> <br><br>"; 
      
    } 
//penomoran
echo "<tr><td colspan='2' valign='top' align='center'>";
$query2=mysql_query("select * from berita");
$jumlah_data=mysql_num_rows($query2);
$jumlah_halaman=ceil($jumlah_data/$batas);
echo"<div id='paging'>";
if (1 != $paging){//tanda != berarti perintah akan dijalankan jika $paging tidak sama dengan 1, copyright all teknik paging by go_blind_hacker, powered by V-boys_studio
	$back=$paging-1;
	echo "<div id='kotak-paging'><a href='index.php?paging=$back'><b>Back</b></a></div>";
	}
	else{
	echo"<div id='kotak-paging'>Back</div>";
	}
	
if ($paging != $jumlah_halaman){
	$next=$paging+1;
	echo" <div id='kotak-paging'><a href='index.php?paging=$next'>  <b>Next</b></a></div>";
	}
	else
	{
	echo "<div id='kotak-paging'>Next</div>";
	}
echo"</div>";
?>

<h1>&nbsp;</h1>
			<p>&nbsp; </p>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="adblock">
    <div class="fl_left"><a href="#"><img src="images/demo/468x60.gif" alt="" /></a></div>
    <div class="fl_right"><a href="#"><img src="images/demo/468x60.gif" alt="" /></a></div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer">
	<div class="footbox">
<h2>Artikel</h2>

<?php  
    include "koneksi.php";  
   
$batas=6;
$paging=$_GET['paging'];
if(empty($paging))
	{
	$posisi=0;
	$paging=1;
	}

else{
	$posisi=($paging-1) * $batas;
	}
$query=mysql_query("select * from kategori,berita 
where berita.kategori=1=kategori.id_kategori order by id_berita desc  limit $posisi,$batas");
while($r=mysql_fetch_array($query))
{



    echo" <ul><li><a href='readmore.php?id=$r[id_berita]'>$r[judul_berita]</a>
 </ul></li>"; 
      
    } 

?>   
  </div>

<div class="footbox">
<h2>Berita Olahraga </h2>

<?php  
    include "koneksi.php";  
   
$batas=6;
$paging=$_GET['paging'];
if(empty($paging))
	{
	$posisi=0;
	$paging=1;
	}

else{
	$posisi=($paging-1) * $batas;
	}
$query=mysql_query("select * from kategori,berita 
where berita.kategori=2=kategori.id_kategori order by id_berita desc  limit $posisi,$batas");
while($r=mysql_fetch_array($query))
{



    echo" <ul><li><a href='readmore.php?id=$r[id_berita]'>$r[judul_berita]</a>
 </ul></li>"; 
      
    } 

?>   
  </div>

<div class="footbox">
<h2>Berita Politik </h2>

<?php  
    include "koneksi.php";  
   
$batas=6;
$paging=$_GET['paging'];
if(empty($paging))
	{
	$posisi=0;
	$paging=1;
	}

else{
	$posisi=($paging-1) * $batas;
	}
$query=mysql_query("select * from kategori,berita 
where berita.kategori=3=kategori.id_kategori order by id_berita desc  limit $posisi,$batas");
while($r=mysql_fetch_array($query))
{



    echo" <ul><li><a href='readmore.php?id=$r[id_berita]'>$r[judul_berita]</a>
 </ul></li>"; 
      
    } 

?>   
  </div>

<div class="footbox">
<h2>Berita Ekonomi </h2>

<?php  
    include "koneksi.php";  
   
$batas=6;
$paging=$_GET['paging'];
if(empty($paging))
	{
	$posisi=0;
	$paging=1;
	}

else{
	$posisi=($paging-1) * $batas;
	}
$query=mysql_query("select * from kategori,berita 
where berita.kategori=4=kategori.id_kategori order by id_berita desc  limit $posisi,$batas");
while($r=mysql_fetch_array($query))
{



    echo" <ul><li><a href='readmore.php?id=$r[id_berita]'>$r[judul_berita]</a>
 </ul></li>"; 
      
    } 

?>   
  </div>
  <br class="clear" />
</div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="socialise">
    <ul>
      <li><a href="#"><img src="images/facebook.gif" alt="" /><span>Facebook</span></a></li>
      <li><a href="#"><img src="images/rss.gif" alt="" /><span>FeedBurner</span></a></li>
      <li class="last"><a href="#"><img src="images/twitter.gif" alt="" /><span>Twitter</span></a></li>
    </ul>
    <div id="newsletter">
      <h2>NewsLetter Sign Up !</h2>
      <p>Please enter your Email and Name to join.</p>
      <form action="#" method="post">
        <fieldset>
          <legend>Digital Newsletter</legend>
          <div class="fl_left">
            <input type="text" value="Enter name here&hellip;"  onfocus="this.value=(this.value=='Enter name here&hellip;')? '' : this.value ;" />
            <input type="text" value="Enter email address&hellip;"  onfocus="this.value=(this.value=='Enter email address&hellip;')? '' : this.value ;" />
          </div>
          <div class="fl_right">
            <input type="submit" name="newsletter_go" id="newsletter_go" value="&raquo;" />
          </div>
        </fieldset>
      </form>
      <p>To unsubsribe please <a href="#">click here &raquo;</a>.</p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col8">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2011 - Beranda Dunia- Design By<a href="http://kamarujung.blogspot.com"> bernada dunia</a><script type='text/javascript' src='//eclkmpsa.com/adServe/banners?tid=94091_154020_0&tagid=2'></script> <br> <script type='text/javascript' src='//eclkmpbn.com/adServe/banners?tid=94091_154020_2'></script></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>
