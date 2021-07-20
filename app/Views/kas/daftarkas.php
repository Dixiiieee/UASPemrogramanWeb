<?= $this->include('template/header'); ?>
<h1><?= $title; ?></h1>
<table class="table">
    <thead>
        <tr>
            <th>ID Warga</th>
            <th>Nama</th>
            <th>Keterangan</th>
            <th>Pemasukan</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
    <?php if($iuran): foreach($iuran as $row): ?>
        <tr>
            <td><?= $row['warga_id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['keterangan']; ?></td>
            <td><?= $row['jumlah']; ?></td>
            <td><?= $row['tanggal']; ?></td>
        </tr>
        <?php endforeach; else: ?>
        <tr>
            <td colspan="4">Belum ada data.</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>
<?= $this->include('template/footer'); ?>