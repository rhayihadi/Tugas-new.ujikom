<h2>Tambah Data Siswa</h2>
<form action="proses-tambah-siswa.php" method="POST">
    <label>Nama Lengkap</label>
    <input type="text" name="nama" required>

    <label>NIS (Akan jadi Username)</label>
    <input type="text" name="nis" required>

    <label>Kelas</label>
    <select name="kelas" id="">
        <option value="12 RPL 1">12 RPL 1</option>
        <option value="12 RPL 2">12 RPL 2</option>
        <option value="12 TKR 1">12 TKR 1</option>
        <option value="12 TKR 2">12 TKR 2</option>
    </select>

    <label>Password</label>
    <input type="password" name="password" required>

    <button type="submit" name="simpan">Simpan Data Siswa</button>
</form>
