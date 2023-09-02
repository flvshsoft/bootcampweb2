<div class="row">
    <h3 style="text-align: center;" class="pt-2">Table Siswa</h3>
    <a href="?r=siswa-tambah" class="btn btn-primary col-md-2">Tambah</a>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
        <?php
        $read = "SELECT * FROM siswa JOIN kelas ON siswa.id_kelas = kelas.id_kelas";
        $db = $conn->query($read);

        $x = 1;
        while ($row = mysqli_fetch_array($db)) {
        ?>

            <tr>
                <td><?php echo $x++ ?></td>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['kelas'] ?></td>
                <td><?php echo $row['alamat'] ?></td>
                <td><?php echo $row['jenis_kelamin'] ?></td>
                <td>
                    <a href="index.php?r=siswa-edit&id=<?php echo $row['id'] ?>" class="btn btn-success">Update</a>
                    <a href="siswa/proses/delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin untuk hapus?');">Delete</a>
                </td>
            </tr>

        <?php } ?>
    </table>
</div>