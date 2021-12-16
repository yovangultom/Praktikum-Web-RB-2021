<?php
 include "connect.php";
 $id=$_GET['id'];
 $sql="select * from mahasiswa WHERE nim='$id'";
 $hasil=mysqli_query($connect,$sql);
 $data=mysqli_fetch_array($hasil);
?>
    <form id="form_mahasiswa_edit" method="post">
        <label>NIM </label><br>
        <input type="number" name="nim" value="<?php echo $data['nim'];?>"><br>
        <label>Nama</label><br>
        <input type="text" name="nama" value="<?php echo $data['nama'];?>"><br>
        <br>
        <label>Prodi</label>
        <select name="prodi">
            <option value="ARL" <?php if($data['prodi']=="Lansekap" ) echo "selected";?>>    Arsitektur Lansekap </option>
            <option value="FI" <?php if($data['prodi']=="Fisika" ) echo "selected";   ?>>    Fisika    </option>
            <option value="TG" <?php if($data['prodi']=="Geofisika" ) echo "selected";   ?>> Teknik Geofisika    </option>
            <option value="IF" <?php if($data['prodi']=="informatika" ) echo "selected"; ?>> Teknik informatika  </option>
        </select><br>
        <label> Angkatan </label>
        <select name="angkatan">
            <option value="21" <?php if($data['angkatan']==2021 ) echo "selected"; ?>>2021</option>
            <option value="20" <?php if($data['angkatan']==2020 ) echo "selected"; ?>>2020</option>
            <option value="19" <?php if($data['angkatan']==2019 ) echo "selected"; ?>>2019</option>
            <option value="18" <?php if($data['angkatan']==2018 ) echo "selected"; ?>>2018</option>
            <option value="17" <?php if($data['angkatan']==2017 ) echo "selected"; ?>>2017</option>
            <option value="17" <?php if($data['angkatan']==2016 ) echo "selected"; ?>>2016</option>
            <option value="17" <?php if($data['angkatan']==2015 ) echo "selected"; ?>>2015</option>
        </select>   
        <br>
        <input type="submit" value="Ubah" id="saveFile">
    </form>