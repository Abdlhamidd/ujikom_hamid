<?php
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
    </div>
<?php
    include 'template/footer.php';
    ?>
