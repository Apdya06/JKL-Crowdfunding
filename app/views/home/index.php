<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-container">
                    <div class="image-container">
                        <img src="./img/donation.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="text-container justify-content-center">
                        <h1>Selamat datang JKL Crowdfunding</h1>
                        <p>Mari bergabung untuk membantu sesama</p>
                        <a href="./register" class="btn btn-light px-5 py-2 mt-5">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container flex-row justify-content-center p-5">
        <h2 class="mb-5">Donasi Personal</h2>
        <div class="container">
            <div class="row justify-content-center">
                <?php foreach ($data['projects'] as $project) : ?>
                    <?php if ($project['user_type'] === 'Personal') { ?>
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Judul Donasi</h5>
                                    <p class="card-text"><?= $project['title']; ?></p>
                                    <h5 class="card-title">Deskripsi</h5>
                                    <p class="card-text"><?= $project['descriptions']; ?></p>
                                    <h5 class="card-title">Target Donasi</h5>
                                    <p class="card-text"><?= $project['goal_amount']; ?></p>
                                    <br>
                                    <button type="button" class="btn btn-success" onclick="location.href='./funds/<?= 
                                    $project['title']?>'">Donasi</button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container flex-row justify-content-center p-5">
        <h2 class="mb-5">Donasi Bisnis</h2>
        <div class="container">
            <div class="row  justify-content-center">
                <?php foreach ($data['projects'] as $project) : ?>
                    <?php if ($project['user_type'] === 'Business') { ?>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Judul Donasi</h5>
                                    <p class="card-text"><?= $project['title']; ?></p>
                                    <h5 class="card-title">Deskripsi</h5>
                                    <p class="card-text"><?= $project['descriptions']; ?></p>
                                    <h5 class="card-title">Target Donasi</h5>
                                    <p class="card-text"><?= $project['goal_amount']; ?></p>
                                    <button type="button" class="btn btn-success" onclick="location.href='./funds/<?= 
                                    $project['title']?>'">Donasi</button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php endforeach; ?>
            </div>
        </div>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
