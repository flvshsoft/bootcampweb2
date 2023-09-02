
        <div class="row">
            <h3 style="text-align: center;" class="pt-2">Edit Siswa</h3>
            <form action="siswa/proses/update.php" method="POST">
                <?php
                $get = "SELECT * FROM siswa WHERE id = '" . $_GET['id'] . "'";
                $db = mysqli_query($conn, $get);

                while ($row = mysqli_fetch_array($db)) {
                    $id = $row['id'];
                    $nama = $row['nama'];
                    $alamat = $row['alamat'];
                    $kelas = $row['id_kelas'];
                    $jenis_kelamin = $row['jenis_kelamin'];
                }
                ?>
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?php echo $alamat ?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kelas</label>
                    <input type="text" class="form-control" name="kelas" value="<?php echo $kelas ?>" required>
                </div>
                <div class="mb-3">
                    <select name="jenis_kelamin" class="form-control">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
   