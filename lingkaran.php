<?php
    include 'template/header.php';
    ?>
    <!-- Content -->
    <div class="container mt-4">
        <!-- hitung lingkaran -->
        <div class="card p-3 bg-light mb-3">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-dark text-light">
                                Hitung Luas Lingkaran
                            </div>
                            <div class="card-body">
                                <form action="lingkaran.php" method="post">
                                    <div class="form-group">
                                        <label for="jari">Jari-jari</label>
                                        <input type="number" class="form-control" name="jari" id="jari" placeholder="Masukkan jari-jari">
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
                                    if(isset($_POST['jari'])){
                                        $jari = $_POST['jari'];
                                        $luas = 3.14 * $jari * $jari;
                                        echo "Luas Lingkaran = $luas";
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
