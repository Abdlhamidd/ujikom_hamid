<?php
// menyiapkan data untuk data persegi
$data_persegi = [];

// cek data di persegi.txt  yang ada di dalam direotori
if (file_exists('./data/persegi.txt')) {
    // jika ada maka baca file tersebut
    $persegi = file('./data/persegi.txt');
    // melakukan konversi dari format data serialize menjadi array
    $data_persegi = unserialize($persegi[0]);
}

// FIA isset cek nilai dari form, issets cek apakah ada nilai dari form
// jika di temukan todo melalui metode post maka akan di proses
if (isset($_POST['sisi'])) {
    // mengambil nilai dari form
    $sisi = $_POST['sisi'];
    $luas = $sisi * $sisi;
    // menambahkan data ke dalam array
    $data_persegi[] = [
        'sisi' => $sisi,
        'luas' => $luas
    ];
    // menyimpan data array ke dalam file
    file_put_contents('./data/persegi.txt', serialize($data_persegi));
}
// menghapus data
if (isset($_GET['hapus'])) {
    // mengambil nilai dari form
    $id = $_GET['hapus'];
    // menghapus data
    unset($data_persegi[$id]);
    // menyimpan data array ke dalam file
    file_put_contents('./data/persegi.txt', serialize($data_persegi));
}

    include 'template/header.php';
    ?>
    <!-- Content -->
    <div class="container mt-4">
        <!-- hitung persegi -->
        <div class="card p-3 bg-light mb-3">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-dark text-light">
                                Hitung Luas Persegi
                            </div>
                            <div class="card-body">
                                <form action="persegi.php" method="post">
                                    <div class="form-group">
                                        <label for="sisi">Sisi</label>
                                        <input type="number" class="form-control" name="sisi" id="sisi" placeholder="Masukkan sisi" required>
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
                                    if(isset($_POST['sisi'])){
                                        $sisi = $_POST['sisi'];
                                        $luas = $sisi * $sisi;
                                        echo "Luas Persegi = $luas";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- list persegi -->
        <div class="card p-3 bg-light mb-3">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-dark text-light">
                                List Persegi
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Sisi</th>
                                            <th>Luas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            // mengambil data dari array
                                            foreach ($data_persegi as $key => $value) {
                                                echo "<tr>";
                                                echo "<td>".($key+1)."</td>";
                                                echo "<td>".$value['sisi']."</td>";
                                                echo "<td>".$value['luas']."</td>";
                                                echo "<td>";
                                                echo "<a href='?hapus=$key' class='btn btn-danger'>Hapus</a>";
                                                echo "</td>";
                                                echo "</tr>";
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
