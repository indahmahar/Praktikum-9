<?php 
   

    include ('C:\xampp\htdocs\reportexcel\koneksi.php'); // memanggil koneksi database

    $sql= "SELECT * FROM pesertadidik;"; // menampilkan tabel pesertadidik beserta isinya 
    $query= mysqli_query($koneksi, $sql) or die("Proses cetak gagal"); // proses pengecekan koneksi
    echo "<table width='75%' cellspacing='0' cellpadding='2' border='1'>    
    <tr>
        <th>NAMA</th>
        <th>JENIS KELAMIN</th>
        <th>NISN</th>
        <th>NIK</th>
        <th>TEMPAT LAHIR</th>
        <th>TANGGAL LAHIR</th>
        <th>NO REGISTRASI</th>
        <th>AGAMA</th>
        <th>KEWARGANEGARAAN</th>
        <th>KEBUTUHAN KHUSUS</th>
        <th>ALAMAT JALAN</th>
        <th>RT</th>
        <th>RW</th>
        <th>NAMA DUSUN</th>
        <th>NAMA KELURAHAAN</th>
        <th>NAMA KECAMATAAN</th>
        <th>KODE POS</th>
        <th>LINTANG</th>
        <th>BUJUR</th>
        <th>TEMPAT TINGGAL</th>
        <th>M TRANS</th>
        <th>NO KKS </th>
        <th>ANAK KE-BRP</th>
        <th>PENERIMA</th>
        <th>NO KPS</th>
    </tr>"; // pembuat form table peserta didik

    $no=1; // varibel nomer bersisikan nilai = 1
    while ($hasil = mysqli_fetch_assoc($query)) { // varibel hasil
            echo "<tr>"; // membuat tabel row
            echo "<td>".$hasil['nama']."</td>"; // menampilkan isi tabel nama 
            echo "<td>".$hasil['jeniskelamin']."</td>"; // menampilkan isi tabel jeniskelamin
            echo "<td>".$hasil['nisn']."</td>";  // menampilkan isi tabel nisn
            echo "<td>".$hasil['nik']."</td>"; // menampilkan isi tabel nik
            echo "<td>".$hasil['tempatlahir']."</td>"; // menampilkan isi tabel tempatlahir
            echo "<td>".$hasil['tanggallahir']."</td>"; // menampilkan isi tabel tanggallahir
            echo "<td>".$hasil['noregis']."</td>"; // menampilkan isi tabel noregis
            echo "<td>".$hasil['agama']."</td>"; // menampilkan isi tabel agama
            echo "<td>".$hasil['kwn']."</td>"; // menampilkan isi tabel kwn
            echo "<td>".$hasil['khusus']."</td>"; // menampilkan isi tabel khusus
            echo "<td>".$hasil['alamatjalan']."</td>"; // menampilkan isi tabel alamatjalan
            echo "<td>".$hasil['rt']."</td>"; // menampilkan isi tabel rt
            echo "<td>".$hasil['rw']."</td>"; // menampilkan isi tabel rw
            echo "<td>".$hasil['namadusun']."</td>"; // menampilkan isi tabel namadusun
            echo "<td>".$hasil['namakelurahan']."</td>"; // menampilkan isi tabel namakelurahan
            echo "<td>".$hasil['namakecamatan']."</td>"; // menampilkan isi tabel namakecamatan
            echo "<td>".$hasil['kodepos']."</td>"; // menampilkan isi tabel kodepos
            echo "<td>".$hasil['lintang']."</td>"; // menampilkan isi tabel lintang
            echo "<td>".$hasil['bujur']."</td>"; // menampilkan isi tabel bujur
            echo "<td>".$hasil['ttinggal']."</td>"; // menampilkan isi tabel ttinggal
            echo "<td>".$hasil['mtrans']."</td>"; // menampilkan isi tabel mtrans
            echo "<td>".$hasil['nokks']."</td>"; // menampilkan isi tabel nokks
            echo "<td>".$hasil['anak']."</td>"; // menampilkan isi tabel anak
            echo "<td>".$hasil['penerima']."</td>"; // menampilkan isi tabel penerima
            echo "<td>".$hasil['nokps']."</td>"; // menampilkan isi tabel nokps
            echo "</tr>";
            
            $no++; // menampilkan no
            
    }       
        echo "</table>";
 ?>
 <br> 
 <a href="export.php"><button>Export to Excel</button></a><br /> <!--Membuat button export file excel-->