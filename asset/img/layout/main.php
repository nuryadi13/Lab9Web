<div class="main mt-4">
    <table>
        <tr>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Stok</th>
            <th>Aksi</th>
</tr>
<?php if($result): ?> <?php while($row = mysqli_fetch_array($result)): ?>
    <tr>
        <td>
            <img src="gambar/ <?= $row['gambar'];?>" alt="<?= $row['nama'];?>">
</td>
<td> <?= $row['nama'];?> </td>
<td> <?= $row['kategori'];?></td>
<td> <?= $row['harga_beli'];?></td>
<td> <?= $row['harga_jual'];?></td>
<td> <a class="badge-pill badge-primary" href="ubah.php?id=<?php echo $row['id_barang']; ?>">Ubah<a>
    / <a class="badge badge-pill badge-danger" href="config/hapus.php?id=<?php echo $row['id_barang']; ?>">hapus</a>

</td>
<tr> <?php endwhile; else; ?> </tr>
    <td colspan="7">Belum ada  data</td>
</tr> <?php endif; ?>
</table>