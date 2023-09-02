
        <div class="row">
            <h3 style="text-align: center;" class="pt-2">Create Siswa</h3>
            <form action="siswa/proses/create.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kelas</label>
                    <input type="text" class="form-control" name="kelas" required>
                </div>
                <div class="mb-3">
                    <select name="jenis_kelamin" class="form-control">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Prempuan">Prempuan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    