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
<h1> Form Penyewaan</h1>
<br/>
<div id="bodyatas">

        <form method="post" action="simpan.php">
            <table align="center">
                <tr><td>KODE BOKING</td><td><input type="text" onkeyup="isi_otomatis()" name="kode_boking"></td></tr>
                <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
                <tr><td>NO.HP</td><td><input type="text" name="no_hp"></td></tr>
                <tr><td>NAMA TEAM</td><td><input type="text" name="nama_team"></td></tr>
                <tr><td>LAPANGAN</td><td>
                        <input type="radio" name="lapangan" value="001">001
                        <input type="radio" name="lapangan" value="002">002
                    </td></tr>
                <tr><td>TGL.SEWA</td><td><input type="text" name="tgl_sewa"></td></tr>
                <tr><td>JAM MASUK</td><td><input type="text" name="jam_masuk"></td></tr>
                <tr><td>JAM KELUAR</td><td><input type="text" name="jam_keluar"></td></tr>
                  <tr><td>BAYAR</td><td>
                        <select name="bayar">
                            <option value="150.000">1 jam</option>
                            <option value="300.000">2 jam</option>
                            <option value="450.000">3 jam</option>
                            <option value="600.000">4 jam</option>
                            <option value="750.000">5 jam</option>
                        </select>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
      </form>
</div>
</td>
</tr>
</div>
</div>
<div id="fooder">
<b><marquee>ig @zulfikaryunus1</marquee></b>
</div>
</body>
</html>
