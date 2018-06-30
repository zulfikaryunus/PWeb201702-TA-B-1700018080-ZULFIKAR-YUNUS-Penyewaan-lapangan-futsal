<html>
<head>  
<title>Web</title>
<link rel="stylesheet" href="zil.css" />
</head>
<body>
<div id="header">
  <img src="lalala.jpg" ><br /><br /> 

</div>
<div id="body">
 <div id="menu">
  <nav>
   <ul id="nav">
    <li><a href="home.html">Home</a></li>
    <li><a href="#">About</a>
    <ul>
      <li><a href="me.html">About me</a></li>
      <li><a href="yes.html">About Futsal</a></li>
  </ul>
  </li>
    <li><a href="index.php">Sewa</a></li>
        <li><a href="tugas.php">Log Out</a></li>
     </ul>
 </nav>
</div>
<br/>
<br/>
<br/>
<br/>
<div id="bodyatas">
  <h2>MENU PENYEWAAN</h2>

<form action='form.php' method='POST'>
<table align="center">
 <tr>
 <td> <input type='submit' name='tambah' value='SEWA LAPANGAN'> </td> 
 </tr>
</table>
</form>
<table  border='1' Width='600' align="center" > 
    <tr><th>NO</th><th>KODE BOKING</th><th>NAMA</th><th>NO.HP</th><th>NAMA TEAM</th><th>LAPANGAN</th><th>TGL.SEWA</th><th>JAM MASUK</th><th>JAM KELUAR</th><th>bayar</th></tr>
    <?php
    include 'koneksi.php';
    $sewa = mysqli_query($koneksi, "SELECT * from sewa");
    $no=1;
    foreach ($sewa as $row){
       
        echo "<tr>
            <td>$no</td>
            <td>".$row['kode_boking']."</td>
            <td>".$row['nama']."</td>
            <td>".$row['no_hp']."</td>
            <td>".$row['nama_team']."</td>
            <td>".$row['lapangan']."</td>
            <td>".$row['tgl_sewa']."</td>
            <td>".$row['jam_masuk']."</td>
            <td>".$row['jam_keluar']."</td>
            <td>".$row['bayar']."</td>
            
              </tr>";
        $no++;
    }
    ?>
</table>
</div>
</div>
<div id="fooder">
<b><marquee>ig @zulfikaryunus1</marquee></b>
</div>
</body>
</html>

