<?php

header("Content-type: application/vnd-ms-excel");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">
    <thead class="table-primary">
        <tr>
            <th scope="row justify-content-center">No</th>
            <th scope="row justify-content-center">Nip</th>
            <th scope="row justify-content-center">Nama</th>
            <th scope="row justify-content-cer">Waktu</th>
            <th scope="row justify-content-center">Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php date_default_timezone_set('Asia/Jakarta'); ?>
        <?php $no = 1; ?>
        <?php foreach ($presensi as $item) : ?>
            <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $item['nip']; ?></td>
                <td><?= $item['nama']; ?></td>
                <td><?= date('Y-m-d H:i:s', $item['waktu']) ?></td>
                <td><?= $item['keterangan']; ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>