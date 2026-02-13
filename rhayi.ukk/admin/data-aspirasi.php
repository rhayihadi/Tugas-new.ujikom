<h2>data aspirasi</h2>

<table border="1" cellpadding= "10" cellspacing = "0">
    <tr>
        <th>No</th>
        <th>Id kategori</th>
        <th>Nama kategori</th>
        <th>Lokasi</th>
        <th>Keterangan</th>
        <th>Status</th>
        <th>Detail</th>
    </tr>

    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "ujikom_12rpl2_rhayi");
    $no = 1;

    $query = mysqli_query($koneksi, "SELECT tb_aspirasi.*, tb_kategori.ket_kategori 
                                     FROM tb_aspirasi
                                     LEFT JOIN tb_kategori
                                     ON tb_aspirasi.id_kategori = tb_kategori.ket_kategori");
    while ($data = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
        <td><?=  $no++ ?></td>
        <td><?=  $data['id_kategori'] ?></td>
        <td><?=  $data['ket_kategori'] ?></td>
        <td><?=  $data['lokasi'] ?></td>
        <td><?=  $data['ket'] ?></td>
        <td><?=  $data['status'] ?></td>
        <td>
            <a href="detail_pengaduan.php?id=<?= $data['id_pelaporan'] ?>">
                <button>Detail</button>
            </a>
        </td>
    <tr>
<?php } ?>
</table>