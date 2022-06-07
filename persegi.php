<?php
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
                                        <input type="number" class="form-control" name="sisi" id="sisi" placeholder="Masukkan sisi">
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
    </div>
<?php
    include 'template/footer.php';
    ?>
