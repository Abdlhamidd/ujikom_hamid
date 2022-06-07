<?php
// mendapatkan data segitiga.txt
$data_segitiga = unserialize(file_get_contents('./data/segitiga.txt'));
// mendapatkan data lingkaran.txt
$data_lingkaran = unserialize(file_get_contents('./data/lingkaran.txt'));
// mendapatkan data persegi.txt
$data_persegi = unserialize(file_get_contents('./data/persegi.txt'));

// menjumlahkan semua data bangun datar
$jumlah_bangun_datar = count($data_segitiga) + count($data_lingkaran) + count($data_persegi);

// menampilkan persentase segitiga
$persentase_segitiga = count($data_segitiga) / $jumlah_bangun_datar * 100;

// menampilkan persentase lingkaran
$persentase_lingkaran = count($data_lingkaran) / $jumlah_bangun_datar * 100;

// menampilkan persentase persegi
$persentase_persegi = count($data_persegi) / $jumlah_bangun_datar * 100;


    include 'template/header.php';
    ?>
    <!-- Content -->
    <div class="container mt-4">
        <div class="card p-3 bg-light mb-3">
            <div class="card-body">
                <div class="row mb-3">

                    <!-- Segitiga -->
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-header bg-dark text-light">
                                Total Perhitungan
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <h1><?= $jumlah_bangun_datar ?><span> Kali</span></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Segitiga -->
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-header bg-dark text-light">
                                Persentase Segitiga
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <h1><?= round($persentase_segitiga) ?><span> %</span></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Segitiga -->
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-header bg-dark text-light">
                                Persentase Lingkaran
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <h1><?= round($persentase_lingkaran) ?><span> %</span></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Segitiga -->
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-header bg-dark text-light">
                                Persentase Persegi
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <h1><?= round($persentase_persegi) ?><span> %</span></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include 'template/footer.php';
    ?>
