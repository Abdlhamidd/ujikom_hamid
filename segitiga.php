<?php
// menyiapkan data array untuk data segitiga
$data_segitiga = [];

// cek data di segitiga.txt  yang ada di dalam dereotori
if (file_exists('./data/segitiga.txt')) {
    // jika ada maka baca file tersebut
    $segitiga = file('./data/segitiga.txt');
    // melakukan konversi dari format data serialize menjadi array
    $data_segitiga = unserialize($segitiga[0]);
}

// FIA isset cek nilai dari form, issets cek apakah ada nilai dari form
// jika di temukan todo melalui metode post maka akan di proses
if (isset($_POST['alas'])) {
    // mengambil nilai dari form
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $date = date('Y-m-d');
    $time = date('H:i:s');
    $luas = $alas * $tinggi / 2;
    // menambahkan data ke dalam array
    $data_segitiga[] = [
        'alas' => $alas,
        'tinggi' => $tinggi,
        'luas' => $luas,
        'date' => $date,
        'time' => $time
    ];
    // menyimpan data array ke dalam file
    file_put_contents('./data/segitiga.txt', serialize($data_segitiga));
}
// menghapus data
if (isset($_GET['hapus'])) {
    // mengambil nilai dari form
    $id = $_GET['hapus'];
    // menghapus data
    unset($data_segitiga[$id]);
    // menyimpan data array ke dalam file
    file_put_contents('./data/segitiga.txt', serialize($data_segitiga));
}
    include 'template/header.php';
    ?>
    <!-- Content -->
    <div class="container mt-4">
        <!-- hitung segitiga -->
        <div class="card p-3 bg-light mb-3">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-dark text-light">
                                Hitung Luas Segitiga
                            </div>
                            <div class="card-body">
                                <form action="segitiga.php" method="post">
                                    <div class="form-group">
                                        <label for="alas">Alas</label>
                                        <input type="number" class="form-control" name="alas" id="alas" placeholder="Masukkan alas">
                                    </div>
                                    <div class="form-group">
                                        <label for="tinggi">Tinggi</label>
                                        <input type="number" class="form-control" name="tinggi" id="tinggi" placeholder="Masukkan tinggi">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Hitung</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-dark text-light">
                                Hasil Perhitungan
                            </div>
                            <div class="card-body">
                                <?php
                                    if(isset($_POST['alas']) && isset($_POST['tinggi'])){
                                        $alas = $_POST['alas'];
                                        $tinggi = $_POST['tinggi'];
                                        $luas = $alas * $tinggi / 2;
                                        echo "Luas Segitiga = $luas";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- daftar segitiga -->
        <div class="card p-3 bg-light mb-3">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-dark text-light">
                                Daftar Segitiga
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Alas</th>
                                            <th>Tinggi</th>
                                            <th>Luas</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            foreach($data_segitiga as $key => $value){
                                                echo "<tr>";
                                                echo "<td>$no</td>";
                                                echo "<td>$value[alas]</td>";
                                                echo "<td>$value[tinggi]</td>";
                                                echo "<td>$value[luas]</td>";
                                                echo "<td>$value[date]</td>";
                                                echo "<td>$value[time]</td>";
                                                echo "<td>
                                                    <a href='segitiga.php?hapus=$key' class='btn btn-danger'>Hapus</a>
                                                </td>";
                                                echo "</tr>";
                                                $no++;
                                            }
                                        ?>
                                    </tbody>
                                </table>
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
