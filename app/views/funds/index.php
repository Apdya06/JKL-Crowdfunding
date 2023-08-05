<!DOCTYPE html>
<html>
<head>
    <title>Halaman Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Form Donasi</h4>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group mb-3">
                                <label for="project">Proyek Donasi:</label>
                                <?php
                                    $url = $_GET['url'];
                                    $urlProjectTitle = str_replace('%20', ' ', substr($url, strrpos($url, '/') + 1));
                                ?>
                                <input type="text" class="form-control" value="<?= $urlProjectTitle; ?>" readonly>
                                <input type="hidden" name="title" value="<?= $urlProjectTitle; ?>">
                            </div>

                            <div class="form-group mb-3">
                                <label for="amount">Jumlah Donasi:</label>
                                <input type="number" id="amount" name="amount" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-success">Donasi Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
