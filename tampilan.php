<table border='1'>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
    </tr>

    <?php
        include "koneksi.php";
        $hasil=mysqli_query($kon,"select * from mahasiswa order by nim asc");
        $no=0;
        while($data = mysqli_fetch_array($hasil)):
            $no++;
    ?>

    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data['NIM']; ?></td>
        <td><?php echo $data['Nama']; ?></td>
        <td><?php echo $data['Prodi']; ?></td>
        <td><?php echo $data['Angkatan']; ?></td>
    </tr>
        <?php endwhile;?>
</table>