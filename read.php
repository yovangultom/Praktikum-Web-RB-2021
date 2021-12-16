<table border="1">
    <tr>
        <th>Nomor</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
        <th>Angkatan</th>
        <th>Opsi Tindakan</th>
    </tr>
    <?php
        include "connect.php";
        $hasil=mysqli_query($connect, "select * from mahasiswa order by nim asc");
        $no=0;
        while($data=mysqli_fetch_array($hasil)):
            $no++;
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['prodi']; ?></td>
        <td><?php echo $data['angkatan']; ?></td>
        <td>
            <button id="btn_edit" value="<?php echo $data['nim']; ?>">Edit</button>
            <button id="btn_delete" id="deleteButton" value="<?php echo $data['nim']; ?>">Delete</button>
        </td>
    </tr>
    <?php endwhile; ?>
</table>