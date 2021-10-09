<style type="text/css" media="print">
    @page {
        size: auto;
        /* auto is the initial value */
        margin: 2;
        /* this affects the margin in the printer settings */
    }
</style>

<body onload="window.print()">
    <br>
    <style>
        table {
            border-collapse: collapse;
        }

        h7 {
            text-align: left;
            margin-left: 15%;
        }
    </style>
    <br>
    <h7>Nama :<?= $users['name'] ?></h7> <br>
    <h7>Bidang :<?= $users['bidang'] ?></h7>
    <br>
    <?php date_default_timezone_set('Asia/Jakarta'); ?>
    <h4 class="h3 mb-4 text-gray-800" align="center">Form dan Kinerja Tanggal : <?= date("d-m-Y"); ?></h4>


    <table border="1" align="center">
        <thead>
            <tr>
                <th scope="col">Hari/Tanggal</th>
                <th scope="col">Kinerja Harian</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody align="center">
            <?php foreach ($laporan as $l) : ?>
                <tr>
                    <td><?= $l['tanggal'] ?></td>
                    <td><?= $l['content'] ?></td>
                    <td><?= $l['keterangan'] ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</center>