<script src="<?= base_url() ?>assets/vendor/chart/dist/chart.min.js"></script>
<div class="row justify-content-center ml-4 mt-4">
    <div class="row-md-8">
        <h3>Grafik Kehadiran Asisten</h3>
    </div>
</div>
<div class="row justify-content-center mt-4">
    <div class="card shadow" style="width: 55%;">
        <div class="row justify-content mt-3">
            <div class="row-ml-4">
                <a href="<?= base_url("Home/kehadiran") ?>" class="btn btn-primary btn-circle btn-lg">
                    <i class="fas fa-arrow-circle-left"></i>
                </a>
            </div>
            <div class="card-body">
                <canvas id="myChart"></canvas>
                <?php
                //Inisialisasi nilai variabel awal
                $nama_keterangan = "";
                $jumlah = null;
                foreach ($graph as $item) {
                    $jur = $item->keterangan;
                    $nama_keterangan .= "'$jur'" . ", ";
                    $jum = $item->jumlah_kehadiran;
                    $jumlah .= "$jum" . ", ";
                }
                ?>
                <div style="overflow-x:auto;">
                    <script>
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var chart = new Chart(ctx, {
                            // The type of chart we want to create
                            type: 'bar',
                            // The data for our dataset
                            data: {
                                labels: [<?php echo $nama_keterangan; ?>],
                                datasets: [{
                                    label: 'Data Kehadiran Asisten ',
                                    backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)', 'rgb(175, 238, 239)'],
                                    borderColor: ['rgb(255, 99, 132)'],
                                    data: [<?php echo $jumlah; ?>]
                                }]
                            },
                            // Configuration options go here
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                    </script>
                </div>
            </div>

        </div>
    </div>
</div>