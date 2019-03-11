<h2>List Mahasiswa</h2>
<table border="1">
    <tr><th>NIM</th><th>NAMA</th><th>PROGDI</th><th>
    <?php
    include 'tugas.php';
    $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
    
    foreach ($mahasiswa as $row){
        echo "<tr>
            
            <td>".$row['nim']."</td>
            <td>".$row['nama']."</td>
            <td>".$row['prodi']."</td>
              </tr>";
        
    }
    ?>
</table>